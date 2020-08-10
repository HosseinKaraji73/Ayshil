<?php

namespace App\Http\Controllers\Client;

use App\Discount;
use App\Http\Controllers\Client\Zarinpal\ZarinPal;
use App\Http\Sms\Sms;
use App\Http\Sms\Sms2;
use App\Payment;
use App\User;
use App\Http\Controllers\Controller;
use Shirazsoft\Gateway\Saderat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use phplusir\smsir\Smsir;



class PaymentController extends Controller
{
    public function payment($user_id, $finalPrice, $date_create, $invoice_id, $discount_id, $discount_user_id, $discount_type, $cart, $cart_cost)
    {

        try {

            $bank = app('saderat')->make($finalPrice*10);  // ۱۰۰
            $bank->setCallbackUrl(url('/callback/from/bank')); //You can also change the callback

            // در این مرحله شماره سند تولید شده را قبل از ارجاع کاربر به بانک
            // در بانک اطلاعات ذخیره میکنیم
            $payment = New Payment();
            $payment->user_id = $user_id;
            $payment->price = $finalPrice;
            $payment->cart_cost = $cart_cost;
            $payment->invoice_id = $invoice_id;
            $payment->authority = 0;
            $payment->date_create = $date_create;
            $payment->payed = 0;
            $payment->reference = null;
            $payment->payment_method = 'Saderat';
            $payment->gateway_type = 'Saderat';
            $payment->type = 0;
            $payment->grouping = 'gol';
            Session::put('invoice_idd', $invoice_id);

            $invoiceNumber = $bank->getInvoiceNumber();
            if ($payment->save()) {
                //increase buy_count of foods
                foreach($cart as $order){
                    $food_id = $order['food_id'];
                    $count = $order['order_count'];
                    \DB::table('foods')->where('id',$food_id)->increment('buy_count',$count);
                }
                return $bank->go();
            }

        } catch (Exception $e) {

            echo $e->getMessage();
        }
    }


    public function callbackPaymentSaderat()
    {


        try {
            $data = app('saderat')->verify();
            // تراکنش با موفقیت سمت بانک تایید گردید
            //در این مرحله عملیات خرید کاربر را تکمیل میکنیم


//            echo "شماره سند : " . $data->invoice_number . "<br>";
//            echo "شماره مرجع بانک : " . $data->bank_receipt . "<br>";
//            $bank_invoice_id = $data->invoice_number;
            $invoice_idd = Session::get('invoice_idd');
            $bank_invoice_id = Session::put('bank_invoice_id', $data->invoice_number);
            $bank_receipt = Session::put('bank_receipt', $data->bank_receipt);


            if (isset($data->invoice_number) && isset($data->bank_receipt)) {
                $payment = \DB::table('payments')
                    ->where('invoice_id', $invoice_idd)
                    ->update([
                        'payed' => 1,
                        'bank_invoice_id' => $data->invoice_number,
                        'bank_receipt' => $data->bank_receipt
                    ]);
				Session::forget('discountValue');

				$mobile1 = \DB::table('orders')
                    ->join('users', 'orders.user_id', '=', 'users.id')
                    ->where('orders.user_id', auth()->user()->id)
                    ->pluck('users.mobile')
                    ->first();
                Smsir::ultraFastSend(['site_name' => 'بدو گل'], 5855, "$mobile1");

//                $mobile = $mobile1;
//                $message1 = 'سفارش شما ثبت شد. بدو گل...';
//                Sms::sendSms([$mobile], $message1);



                $result = Session::get('result');
                foreach ($result as $item) {
                    $item->info = \DB::table('foods')
                        ->join('users', 'foods.user_id', 'users.id')
                        ->where('foods.id', $item->id)
                        ->select('foods.price as foodPrice', 'users.name as chef_name', 'foods.user_id as chef_id')
                        ->first();
                }
                foreach ($result as $value) {
                    $chef_id = $value->info->chef_id;
                    $value->chef_name = $value->info->chef_name;
                    $value->foodPrice = $value->info->foodPrice;
                    unset($value->info);
                }
                $orders = $this->array_group_by($result, 'chef_name');


                if (isset($orders)) {
                    foreach ($orders as $order) {
                        $x= $order[0]->chef_id;
                        $mobile2 = \DB::table('users')
                            ->where('id', $x)
                            ->pluck('mobile')
                            ->first();
                        $name = \DB::table('users')
                            ->where('id', $x)
                            ->pluck('name')
                            ->first();
                        Smsir::ultraFastSend(['site_name' => 'بدو گل'], 5853, "$mobile2");
                        Smsir::ultraFastSend(['site_name' => 'بدو گل','name' => "$name"], 5854, '09180110810');

//                        $mobile3 = [$mobile2];
//                        $message2 = 'یک سفارش ثبت شده است.لطفا به پنل خود مراجعه نمایید.بدو گل.';
//                        $message3 = 'فروشگاه ' ."$name". ' یک سفارش ثبت شد.بدو گل';
//                        Sms::sendSms($mobile3, $message2);
//                        Sms::sendSms(['09180110810'], $message3);
                    }
                }



                return redirect('/success')->with(compact('bank_error'));
            } else {
                $payment = \DB::table('payments')
                    ->where('invoice_id', $invoice_idd)
                    ->update([
                        'bank_invoice_id' => $bank_invoice_id,
                        'bank_receipt' => 'پرداخت نشده'
                    ]);
                return redirect('/fault')->with(compact('bank_error'));
            }

        } catch (\Larabookir\Saderat\Exceptions\RepetitiveException $e) {
            // تراکنش قبلا سمت بانک تاییده شده است و
            // کاربر احتمالا صفحه را مجددا رفرش کرده است
            // لذا تنها فاکتور خرید قبل را مجدد به کاربر نمایش میدهیم

//            echo $e->getMessage() . "<br>";z

            $bank_error = $e->getMessage();
            $bank_error = Session::put('bank_error', $e->getMessage());

            return redirect('/success')->with(compact('bank_error'));

//            echo "شماره سند : " . $e->invoice_number . "<br>";
//            echo "شماره مرجع بانک : " . $e->bank_receipt . "<br>";

        } catch (\Larabookir\Saderat\Exceptions\BankException $e) {
            // نمایش خطای بانک
            $bank_error = $e->getMessage();
            $bank_error = Session::put('bank_error', $e->getMessage());

            return redirect('/success')->with(compact('bank_error'));

        }
        return redirect('/fault')->with(compact('bank_error'));

    }


    public function clear_used_discount($discount_id, $discount_user_id, $discount_type, $user_id, $buy_count)
    {
        if ($discount_type == 'periodic') {
            \DB::table('discount_user')->insert(['user_id' => $user_id, 'discount_id' => $discount_id, 'used' => 1,
                'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()]);
        } elseif ($discount_type == 'birth') {
            \DB::table('discount_user')
                ->where(['discount_id' => $discount_id, 'id' => $discount_user_id, 'user_id' => $user_id])
                ->update(['used' => 1]);
        } elseif ($discount_type == 'reagent') {
            \DB::table('discount_reagent_user')
                ->where(['id' => $discount_user_id, 'user_id' => $user_id, 'discount_id' => $discount_id])
                ->update(['used' => 1]);
        } elseif ($discount_type == 'maxcount') {
            $buy_count -= 1;
            \DB::table('discount_user')
                ->where(['id' => $discount_user_id, 'discount_id' => $discount_id, 'user_id' => $user_id])
                ->update(['offset' => $buy_count]);
        } elseif ($discount_type == 'competition') {
            \DB::table('discount_user')
                ->where(['id' => $discount_user_id, 'discount_id' => $discount_id, 'user_id' => $user_id])
                ->update(['used' => 1]);

        } else {
            $messageer = "error";
        }
    }


    public function apply_new_discounts($user_id, $buy_count, $reagent_mobile){

        $maxcount = \DB::table('discounts')->select('id', 'buy_count')->where('type', 'maxcount')->first();
        if ($maxcount) {
            if ($buy_count >= $maxcount->buy_count) {
                $oldMaxDiscount = \DB::table('discount_user')->where('user_id', $user_id)->where('discount_id', $maxcount->id)->get();
                if (!$oldMaxDiscount) {
                    \DB::table('discount_user')->insert(['user_id' => $user_id, 'discount_id' => $maxcount->id, 'used' => 0, 'offset' => 0]);
                }
            }
        }

        $reagent = \DB::table('discounts')->select('id', 'buy_count')->where('type', 'reagent')->first();
        if ($reagent) {
            if ($buy_count >= $reagent->buy_count) {
                if (!is_null($reagent)) {
                    $user = \DB::table('users')->select('id')->where('mobile', $reagent_mobile)->first();
                    if ($user) {
                        $id = $user->id;
                        //just for once for each reagent user
                        $result = \DB::table('discount_reagent_user')->where('user_id', $id)->where('reagent_id', $user_id)->first();
                        if (empty($result)) {
                            \DB::table('discount_reagent_user')->insert(['user_id' => $id, 'discount_id' => $reagent->id, 'reagent_id' => $user_id, 'used' => 0, 'created_at' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()]);
                        }
                    }

                }
            }
        }

    }
}

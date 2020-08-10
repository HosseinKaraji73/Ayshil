<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Payment;
use Illuminate\Http\Request;
use App\Discount;
use App\DiscountUser;
use App\Order;
use App\Product;
use App\Setting;
use Auth;
use Morilog\Jalali\Jalalian;
use Illuminate\Support\Str;
use Session;

class OrderController extends Controller
{

    public function index()
    {
        $mightAlsoLike=Product::all();
        return view('FrontEnd.Pages.cart',compact('mightAlsoLike'));
    }



    public function addAfter(Request $request)
    {

        if(!Auth::check()){
            return redirect('/login')->with('error-login','لطفا وارد حساب کاربری خود شوید');
        }


        //        $discountcode  = $request['discountcode'];
        //        $discountValid = Discount::whereCode($discountcode)->first();

        if($request->ajax()){
            //			return $this->validate($request , [
            //				'discountcode' => 'required|max:12',
            //			] , [
            //				'discountcode.required' => 'کد تخفیف را وارد کنید.' ,
            //				'discountcode.max'      => 'تعداد کاراکتر بیش از حد مجاز' ,
            //			]);
            if(sizeof($discountValid) > 0){
                if($discountValid->type == 'person'){
                    if($discountValid->used == 0){
                        $discount_user              = New DiscountUser;
                        $discount_user->user_id     = Auth::user()->id;
                        $discount_user->discount_id = $discountValid->id;
                        $discount_user->used        = 1;
                        $discount_user->offset      = 'person';
                        $discount_user->grouping    = 'gol';
                        $discount_user->save();
                        //						$updates = Discount::whereCode($discountcode)->update([ 'used' => 1 ]);
                        Session::put('discountValue' , $discountValid->price);
                        $returnHTML  = '<div class="btn btn-success text-center" style="width:100%">تخفیف شما اعمال شد</div>';
                        $returnHTML2 = Session::get('discountValue');
                        return response([ 'returnHTML' => $returnHTML , 'returnHTML2' => json_decode($returnHTML2) ]);
                    }
                    else{
                        $returnHTML = '<div class="btn btn-danger text-center" style="width:100%">این کد قبلا استفاده شده است</div>';
                        return response(compact('returnHTML'));
                    }
                }
                elseif($discountValid->type == 'people'){
                    $discount_user = DiscountUser::where('discount_id' , '=' , $discountValid->id)
                        ->where('user_id' , '=' , Auth::user()->id)
                        ->get();
                    if(sizeof($discount_user) <= 0){
                        $discount_user              = New DiscountUser;
                        $discount_user->user_id     = Auth::user()->id;
                        $discount_user->discount_id = $discountValid->id;
                        $discount_user->used        = 1;
                        $discount_user->offset      = 'people';
                        $discount_user->grouping    = 'gol';
                        $discount_user->save();
                        Session::put('discountValue' , $discountValid->price);
                        $returnHTML = '<div class="btn btn-success text-center" style="width:100%">تخفیف شما اعمال شد</div>';
                        return response(compact('returnHTML'));
                    }
                    else{
                        $returnHTML = '<div class="btn btn-danger text-center" style="width:100%">این کد قبلا استفاده شده است</div>';
                        return response(compact('returnHTML'));
                    }
                }
            }
            else{
                $returnHTML  = '<div class="btn btn-danger text-center" style="width:100%">کد وارد شده صحیح نمیباشد</div>';
                $returnHTML2 = Session::get('discountValue');
                return response([ 'returnHTML' => $returnHTML , 'returnHTML2' => json_decode($returnHTML2) ]);

            }

        }
        else{



            $user      = auth()->user();
            //            $discounts = $this->computeDiscountUser($user);


            $result = json_decode($request->resultArray);
            foreach($result as $item){
                $item->info = Product::where('id' , $item->id)
                    ->first();
            }
            foreach($result as $value){
                $value->title = $value->info->title;
                $value->title_en = $value->info->title_en;
                $value->Price = $value->info->Price;
                unset($value->info);
            }
            //            $order = $this->array_group_by($result,'title');
            $orders = $result;

        }
        return view('FrontEnd.Pages.invoice' , compact('user','orders'));
    }



    public function addBefore(Request $request)
    {

        //        $discountcode = $request->discountcode;
        $orderAddress = $request->UserAddress;
        //        $date_create  = str_replace('-' , '/' , jDate::forge('now' , 'Asia/Tehran')->format('date'));
        $date_create  = str_replace('-' , '/' , Jalalian::forge('today')->format('%y/%m/%d'));
        $user         = auth()->user();
        $invoice_id         = Str::random(9).time();
        $orders       = Session::get('orders');

        if(isset($request->discount)){

            $discount         = $this->convertNumbersToEnglish($request->discount);
            $discountParts    = explode('-' , $discount);
            $discount_id      = $discountParts[0];
            $discount_user_id = $discountParts[1];
            $discount_type    = $discountParts[2];
        }

        if(empty($orders)){
            return back()->with('alert_error' , "هیچ محصولی وجود ندارد.");
        }
        $cartorder = [];
        foreach($orders as $order){
            //            foreach($order as $item){
            $cartorder [] = $order;
            //            }
        }

        $orders_products_id = [];
        foreach($cartorder as $order){
            $orders_products_id[] = $order->id;
        }
        $orders_products_id = array_unique($orders_products_id);
        $products= Product::select('products.*')->whereIn('id' , $orders_products_id)->get();
        if(!$products){
            return back()->with('alert_error' , "هیچ محصولی وجود ندارد.");
        }
        $valid_products_user_id = [];
        foreach($products as $product){
            $valid_products_user_id[] = $product->user_id;

        }


        //price of all products
        $cart_cost = 0;
        $cart      = [];
        foreach($cartorder as $order){
            if(isset($order->id)){
                if(isset($order->count)){
                    if($order->count <= 0){
                        return back()->with('alert_error' , 'اطلاعات محصول صحیح نیست.');
                    }
                    foreach($products as $product){
                        if($order->id == $product->id){
                            $count         = $order->count;
                            $id            = $product->id;
                            $cart_cost     += ($product->price * $count);
                            $product_count [] = [ 'count' => $count , 'id' => $id ];

                        }
                    }
                }
            }
        }
        foreach($products as $product){
            foreach($product_count as $f_c){
                if($product->id == $f_c["id"]){

                    $cart[] = [
                        'user_id'      => $user->id ,
                        'product_id' => $product->id ,
                        'product_price' => $product->price ,
                        'order_count'  => $f_c['count'] ,
                        'invoice_id'   => $invoice_id ,
                        'status'       => 'order' ,
                        'cancel' => 0 ,
                        'address' => $orderAddress ,
                        'pay_location' => 1 ,
                        'date_create'   => Jalalian::forge('today')->format('%y/%m/%d'),
                    ];
                }
            }
        }
        $status     = Order::insert($cart);
        $finalPrice = $this->calculatePriceWithTaxDiscount($cart_cost);



        $payment = New Payment;
//        $payment->user_id = Auth::user()->id;
        $payment->price = 22;
//        $payment->price = $finalPrice;
//        $payment->cart_cost = $cart_cost;
//        $payment->invoice_id = $invoice_id;
//        $payment->authority = 0;
//        $payment->date_create = $date_create;
//        $payment->payed = 0;
//        $payment->reference = null;
//        $payment->gateway_type = 'Saderat';
//        Session::put('invoice_idd', $invoice_id);








        //check payment way
        //        if($cb1 == 'on'){
//                return app('App\Http\Controllers\FrontEnd\PaymentController')->payment($user_id, $finalPrice, $date_create, $invoice_id, $discount_id, $discount_user_id, $discount_type, $cart, $cart_cost);
        //        }
        //        return back();



    }


    public function calculatePriceWithTaxDiscount($cart_cost){
        //		$forward_city_cost = \DB::table('cities')->select('forward_cost')->where('id' , $city_id)->first();
        //		$tax_percent       = \DB::table('settings')->select('tax_percentage')->first();
        //		$cart_cost         = $cart_cost + ($cart_cost * $tax_percent->tax_percentage / 100);
        //		$finalForwardCost  = $countChefs * $forward_city_cost->forward_cost;
        //        		$finalPrice        = $cart_cost - (int)$discountPrice;

        if(Session::get('discountValue')){
            $finalPrice = ($cart_cost - ((Session::get('discountValue') / 100) * $cart_cost));
        }
        else{
            $finalPrice = $cart_cost;
        }
        return $finalPrice;

    }

    private function array_group_by(array $array , $key){
        if(!is_string($key) && !is_int($key) && !is_float($key) && !is_callable($key)){
            trigger_error('array_group_by(): The key should be a string, an integer, or a callback' , E_USER_ERROR);
            return null;
        }
        $func = (!is_string($key) && is_callable($key) ? $key : null);
        $_key = $key;
        // Load the new array, splitting by the target key
        $grouped = [];
        foreach($array as $value){
            $key = null;
            if(is_callable($func)){
                $key = call_user_func($func , $value);
            }
            elseif(is_object($value) && isset($value->{$_key})){
                $key = $value->{$_key};
            }
            //            elseif(isset($value[$_key])){
            //                $key = $value[$_key];
            //            }
            if($key === null){
                continue;
            }
            $grouped[$key][] = $value;
        }
        // Recursively build a nested grouping if more parameters are supplied
        // Each grouped array value is grouped according to the next sequential key
        if(func_num_args() > 2){
            $args = func_get_args();
            foreach($grouped as $key => $value){
                $params        = array_merge([ $value ] , array_slice($args , 2 , func_num_args()));
                $grouped[$key] = call_user_func_array('array_group_by' , $params);
            }
        }
        return $grouped;
    }



}

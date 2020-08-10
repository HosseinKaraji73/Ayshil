<?php

namespace App\Http\Controllers\BackEnd\User;
use App\Comment;
use App\Order;
use App\OrdersRate;
use App\Payment;
use App\Product;
use App\User;
use App\UserRate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

/**
 * Class: OrderController
 * A Class That Manage Orders In User Panel
 */
class OrderController extends Controller
{

    public function index()
    {

        $payments = Payment::where('payments.user_id' ,Auth::user()->id)
            ->join('orders','orders.invoice_id' , 'payments.invoice_id')
            ->select('payments.*')
            ->distinct()
//            ->orderBy('orders.created_at','desc')
            ->get();

        foreach( $payments as $payment ) {
            $payment->orders = Order::where('orders.user_id' ,Auth::user()->id)
                ->where('orders.invoice_id' ,$payment->invoice_id)
                ->join('products' ,'orders.product_id','products.id')
//                ->join('users' ,'orders.user_id','users.id')
                ->select('orders.*','products.name as product_name',)
                ->get();
        }

        return view('BackEnd.Pages.User.Order.index', compact('payments'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Function: show
     * Parameters:
     *  $id
     *
     * Returns:
     *  Return View
     */
    public function show($id)
    {
        $payment = Payment::where('user_id' ,Auth::user()->id)->where('id' ,$id)->first();
        $payment->orders = Order::where('orders.user_id' ,Auth::user()->id)
            ->join('products' ,'orders.product_id','products.id')
            ->join('users' ,'orders.product_id','users.id')
            ->where('orders.invoice_id' ,$payment->invoice_id)
            ->select('orders.*','users.address as user_address',
                'products.name as products_name',
                'products.id as products_id',
                'products.rate as products_rate',
                'products.photo1 as products_photo',
                'products.price as products_price',
                'users.address as address'
                )
            ->get();
        if($payment->discount_id != 0){
            $payment->discountInfo = Product::join('discounts' ,'discounts.id','payments.discount_id')->select('discounts.*')->first();
        }
        foreach($payment->orders as $item){
//            $item->userRate = UserRate::where('products_id' ,$item->products_id)->where('user_id' ,Auth::user()->id)->value('rate');
            $item->rated = $item->userRate ? 1 : 0;
            $item->comment = Comment::where('user_id' ,auth()->user()->id)->where('product_id' ,$item->product_id)->first();
        }

        return view('BackEnd.Pages.User.Order.show' ,compact('payment'));
    }



        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Function: showRateForm
     * Parameters:
     *  Payment $payment
     *
     * Returns:
     *  Return View
     */
    public function productRate(Request $request)
    {
        if($request->ajax()){
            return redirect()->back();
            $rate = $request->rate;
            $product_id = $request->id;
            $user_id = auth()->user()->id;
//            $status = $request->statusCancel;
            $inputs = ['product_id' => $product_id ,'user_id' => $user_id ,'rate' => $rate];
            if($rate < 0 || $rate > 5){
                return response()->json([ 'status' => false , 'html' => 'مقدار وارد شده معتبر نمی باشد.']);
            }
            $count = UserRate::where('product_id',$product_id)->where('user_id',$user_id)->count();
//            if($status == 0){
                if($count > 0){
                    return response()->json([ 'html' => 'شما به این محصول یک بار امتیاز داده اید.', 'status' => false ]);
                }elseif(UserRate::create($inputs)){
                    $product_rate = Product::find($product_id)->value('rate');
                    $newRate = ($product_rate + $rate) / 2 ;
                    Product::where('id', $product_id)
                        ->update(['rate' => $newRate]);
                    return response()->json([ 'html' => 'امتیاز با موفقیت ثبت شد.' ,'status' => true]);
                }
//            }else{
//                return response()->json([ 'html' => 'شما این محصول را لغو کرده اید و نمی توانید به محصول لغو شده امتیاز دهید.', 'status' => false ]);
//            }
        }
//        return redirect()->back();
    }

    public function showRateForm(Payment $payment)
    {
        $rateUser = OrdersRate::where('user_id' ,auth()->user()->id)
            ->where('payment_id' , $payment->id )
            ->first();
        return view('BackEnd.Pages.User.Order.Rate.index' ,compact('payment','rateUser'));

    }

    /**
     * Function: rateOrderUser
     * Parameters:
     *  Request $request
     *  Payment $payment
     *
     * Returns:
     *  Return Redirect
     */
    public function rateOrderUser(Request $request ,Payment $payment)
    {
        $input = $request->all();
        $user = Auth::user();
        $rate = DB::table('orders_rates')->where('user_id',$user->id)->where('payment_id' , $payment->id )->first();
        if(!empty($rate)){
            return redirect()->back()->with('alert-danger' ,'شما قبلا در نظرسنجی مربوط به این سفارش شرکت کرده اید.');
        }
        if( !isset( $input['q1']) || !isset($input['q2']) || !isset($input['q3']) ){
            return redirect()->back()->with('alert-danger' ,'لطفا به هر سه سوال پاسخ دهید.');
        }
        if( $input['q1'] > 100 || $input['q2'] >100 || $input['q3']> 100 || $input['q1'] < 0 || $input['q2'] < 0 || $input['q3'] < 0){
            return redirect()->back()->with('alert-danger' ,'مقدار وارد شده معتبر نمی باشد.');
        }
        DB::table('orders_rates')->insert([
            'payment_id' => $payment->id ,'user_id' =>$user->id ,'q1'=> $input['q1'] ,'q2'=> $input['q2'] ,'q3'=> $input['q3'] ,'created_at' =>  \Carbon\Carbon::now(),'updated_at' =>  \Carbon\Carbon::now(),
        ]);

        return redirect()->back()->with('alert-success' ,'به خاطر شرکت در این نظرسنجی از شما سپاسگذاریم.');
    }

    /**
     * Function: cancel
     * Parameters:
     *  Payment $payment
     *
     * Returns:
     *  Return Redirect
     */
    public function cancel(Payment $payment)
    {
        $setting = Setting::all()->first();
        $hour = $setting->time_for_cancel;
        $percent = $setting->percent_for_cancel;

        $today = Carbon::now()->subHours($hour);
        $order = Order::where('invoice_id',$payment->invoice_id)->orderBy('created_at','asc')->first();
        $order_time = $order->created_at->format('Y-m-d H:i:s');

        if( $order_time > $today){
            if($order->cancel == 1){
                return redirect()->back()->with('alert-danger' ,'شما مجاز به لغو کردن این سفارش نمی باشید.');
            }
            $orders = Order::where('invoice_id',$payment->invoice_id)->get();
            foreach($orders as $order){
                $order->cancel = 1 ;
                $order->save();
                $food = Food::find($order->food_id);
                $food->buy_count -= $order->order_count;
                $food->save();
            }
            $price = $payment->price;
            $refundPrice = $price - ( $price * ( $percent / 100 ) ) ;
            $user = User::find(Auth::user()->id);
            $oldCredit = $user->credit;
            $user->credit += $refundPrice;
            if($user->save()){
                return redirect()->back()->with('message' ,'<div>'.'مبلغ '. $refundPrice . ' به اعتبار کیف پول شما افزوده شد.' .'</div><div>' . 'اعتبار قبلی شما : ' .$oldCredit . '  <div></div>' . '  اعتبار جدید شما : ' . $user->credit . '  </div>' );
            }
        }else {
            return redirect()->back()->with('alert-danger', 'فقط تا ' .$hour .' ساعت بعد از سفارش مجاز به لغو سفارش هستید.');
        }
        return back();
    }

}

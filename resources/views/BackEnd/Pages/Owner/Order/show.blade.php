@extends('auth.layouts.BackEnd.owner')
@section('head-content')
    <span class="fa fa-eye">&nbsp;</span>  مشاهده جزییات سفارش
    @foreach($payment->orders as $key => $value)
        @if ($loop->first)
            {{$value->user->name . ' ' . $value->user->family}}
        @endif
    @endforeach
@endsection

@section('head')
    <link href="{{asset('css/admin/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/admin/wizard.css')}}" rel="stylesheet" type="text/css">
@endsection

@section('content')

    <div class="col-sm-8 col-sm-push-2">

        @if(Session::has('alert-success'))
            <div class="alert alert-success">
                {{session('alert-success')}}
            </div>
        @endif
        @if(Session::has('alert-danger'))
            <div class="alert alert-danger">
                {{session('alert-danger')}}
            </div>
        @endif

    </div>

    <div class="col-sm-12">
        <div class="BackEnd">
            @if(Session::has('alert_error'))
                <div class="topAlert alert alert-danger">
                    {{session('alert_error')}}
                </div>
            @endif
            <div class="BackEnd BackEnd-default">
                <div class="BackEnd-heading">
                    <h5 class="BackEnd-title">
                    </h5>
                </div>
                <div class="BackEnd-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <td>شماره سفارش</td>
                                <th>عکس سفارش</th>
                                {{--<td>روش پرداخت</td>--}}
                                {{--<td>وضعیت لغو</td>--}}
                                <td>تاریخ سفارش</td>
                                <td>آدرس</td>
                                @if($payment->description != null)
                                    <td>توضیحات</td>
                                @endif
                                {{--@if($payment->type == 0)--}}
                                {{--<td>نوع بسته بندی</td>--}}
                                {{--@endif--}}
                                {{--<td>تاریخ تحویل</td>--}}
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{$payment->invoice_id}}</td>
                                {{--<td>--}}
                                {{--@if($payment->payed == 1)--}}
                                {{--@if($payment->payment_method == 'wallet')--}}
                                {{--کیف پول--}}
                                {{--@else--}}
                                {{--آنلاین--}}
                                {{--@endif--}}
                                {{--@else--}}
                                {{--<span class="text-red">پرداخت نشده</span>--}}
                                {{--@endif--}}
                                {{--</td>--}}
                                {{--<td>--}}
                                {{--@if($payment->type == 0)--}}
                                {{--@foreach($payment->orders as $order)--}}
                                {{--@if($loop->first)--}}
                                {{--@if($order->cancel == 1)--}}
                                {{--<span class="text-red">لغو شده</span><br>--}}
                                {{--@else--}}
                                {{--<span>-</span>--}}
                                {{--@endif--}}
                                {{--@endif--}}
                                {{--@endforeach--}}
                                {{--@endif--}}
                                {{--@foreach($payment->orders as $order)--}}
                                {{--@if($loop->first)--}}
                                {{--<input type="hidden" id="statusCancel" value="{{$order->cancel}}">--}}
                                {{--@endif--}}
                                {{--@endforeach--}}
                                {{--</td>--}}
                                <td>
                                        @foreach($payment->orders as $order)
{{--                                        @if(isset($order->food->photo1))--}}

                                        <img src="https://www.bodcake.ir/{{$order->food->photo1}}" style="width:100px">
                                        {{--<img src="{{asset("$order->photo1")}}" style="width:100px">--}}
                                    {{--@else--}}
                                        {{--<img src="{{asset('images/Chef/gallery/null.jpg')}}" style="width:100px">--}}
                                    {{--@endif--}}
                                    @endforeach

                                </td>
                                <td><span class="persian-digit">{{$payment->date_create}}</span></td>
                                <td>{{str_limit($order->address != null ? $order->address : $user->address , '500' ,'...')}}</td>
                                @if($payment->description != null)
                                    <td>{{str_limit($payment->description , '50' ,'...')}}</td>
                                @endif
                                {{--<td>--}}
                                {{--@if($payment->type == 0)--}}
                                {{--@foreach($payment->orders as $order)--}}
                                {{--@if($loop->first)--}}
                                {{--{{$order->packing->name}}--}}
                                {{--@endif--}}
                                {{--@endforeach--}}
                                {{--@endif--}}
                                {{--</td>--}}
                                {{--<td>--}}
                                {{--<span class="persian-digit">--}}
                                {{--@if($payment->type == 0)--}}
                                {{--@foreach($payment->orders as $order)--}}
                                {{--@if($loop->first)--}}
                                {{--{{$order->delivery_date . ' - ساعت ' . $order->delivery_time}}--}}
                                {{--@endif--}}
                                {{--@endforeach--}}
                                {{--@endif--}}
                                {{--</span>--}}
                                {{--</td>--}}
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered table-striped">
                            <thead>
                            <tr class="bg-info text-info ">
                                <th colspan="7" class="text-right"> جزئیات سفارش</th>
                            </tr>
                            <tr>
                                <td class="text-center">نام محصول</td>
                                <td class="text-center">نام فروشگاه</td>
                                <td class="text-center">نام مشتری</td>
                                <td class="text-center">تعداد</td>
                                <td class="text-center">وضعیت</td>
                                <td class="text-center">قیمت واحد({{__('settings.tuman')}})</td>
                                <td class="text-center">قیمت کل ({{__('settings.tuman')}})</td>
                            </tr>
                            </thead>
                            <tbody>
                            <div id="rate-msg" class="text-success"></div>

                            @if($payment->type == 0)
                                @foreach($payment->orders as $order)
                                    <tr>
                                        <td class="text-center">{{$order->food->name}}</td>
                                        <td class="text-center">{{'فروشگاه ' .$order->chef->name}}</td>
                                        <td class="text-center">{{$order->user->family}}({{$order->user->mobile}})</td>
                                        <td class="text-center"><span
                                                    class="persian-digit">{{$order->order_count}}</span></td>
                                        <td class="text-center">
                                            @if($order->status == 'order')
                                                سفارش
                                            @elseif($order->status == 'cooking')
                                                در حال آماده سازی
                                            @elseif($order->status == 'cooked')
                                                آماده ارسال
                                            @else
                                                ارسال شده
                                            @endif
                                            @if ($payment->gateway_type == 'PayLocation')
                                                <a class="btn btn-danger btn-xs"
                                                   href="#">پرداخت در محل</a>
                                            @else
                                                <a class="btn btn-success btn-xs"
                                                   href="#">پـرداخــت شــده</a>
                                            @endif
                                        </td>
                                        <td class="text-center"><span
                                                    class="persian-digit">{{$order->food_price}}</span></td>
                                        <td class="text-center">
                                            @if($order->food_price && $order->order_count)
                                                <span class="persian-digit">{{ $order->food_price * $order->order_count }} </span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                            <tfoot>
                            <tr class="bg-info text-info ">
                                <td colspan="7" class="text-left">جمع کل :
                                    @php $sum=0; @endphp
                                    @if($payment->type == 0)
                                        @foreach($payment->orders as $order)
                                            @if($order->food_price && $order->order_count)
                                                @php $sum += $order->food_price * $order->order_count @endphp
                                            @endif
                                        @endforeach
                                    @endif
                                    <span class="persian-digit">{{$sum}}</span> {{__('settings.tuman')}}
                                </td>
                            </tr>
                            @if(isset($payment))
                                <tr class="bg-info text-info ">
                                    <td colspan="7" class="text-left">مقدار تخفیف کد تخفیف استفاده شده :
                                        <span class="persian-digit"> {{$payment->tax_percent}}</span> در صد  |

                                        <span class="persian-digit"> {{$payment->discountPrice}}</span> {{__('settings.tuman')}}
                                    </td>
                                </tr>
                            @endif
                            {{--<tr class="bg-info text-info ">--}}
                            {{--<td colspan="7" class="text-left">هزینه ارسال : <span class="persian-digit">{{$forward_cost}}</span> {{__('settings.tuman')}}</td>--}}
                            {{--</tr>--}}
                            {{--<tr class="bg-info text-info">--}}
                            {{--<td colspan="7" class="text-left">مالیات :--}}
                            {{--<span class="persian-digit">{{$payment->tax_percent}}</span>--}}
                            {{--{{__('settings.tuman')}}--}}
                            {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr class="bg-info text-info ">--}}
                            {{--<td colspan="7" class="text-left"> تخفیف :--}}
                            {{--<span class="persian-digit">{{$payment->discountPrice}}</span>  {{__('settings.tuman')}}--}}
                            {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr class="bg-info text-info ">--}}
                            {{--<td colspan="7" class="text-left">خالص پرداختی :--}}
                            {{--<span class="persian-digit">{{$payment->price}}</span>--}}
                            {{--</td>--}}
                            {{--</tr>--}}
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
@endsection

@section('script')
    <script src="{{asset('js/admin/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/admin/dataTables.bootstrap.min.js')}}"></script>

    {{--for data table--}}
    <script>
        $(document).ready(function () {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
        //convert latin numbers to persian
        persian = {0: '۰', 1: '۱', 2: '۲', 3: '۳', 4: '۴', 5: '۵', 6: '۶', 7: '۷', 8: '۸', 9: '۹'};
        $(".persian-digit").each(function () {
            for (var i = 0; i <= 9; i++) {
                var re = new RegExp(i, "g");
                $(this).html($(this).html().replace(re, persian[i]));
                $(this).val($(this).val().replace(re, persian[i]));
            }
        });
    </script>
@endsection

@extends('auth.layouts.BackEnd.owner')
@section('title', 'پنل مدیریتی')

@section('head')
    <link href="{{asset('css/admin/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('head-content')
    <span class="fa fa-table">&nbsp;</span>لیست سفارشات
@endsection
@section('content')
    <div class="col-sm-12">
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
        <div class="BackEnd BackEnd-default">
            <div class="BackEnd-body">
                <div class="dataTable_wrapper">
                    <div style="overflow-x: auto;">
                        <table class="text-center table table-striped table-bordered table-hover centerTable thAlign"
                               id="dataTables-example">
                            <thead>
                            <tr>

                                {{--{{$payments}}--}}
                                {{--{{$mobile}}--}}
                                {{--{{$num}}--}}
                                <th>--</th>
                                <th>مشتری</th>
                                {{--<th>نام محصول/ تعداد / نام فروشگاه</th>--}}
                                <th>تاریخ</th>
                                <th>شماره سفارش</th>
                                <th>وضعیت سفارش</th>
                                <th> + -</th>
                            </tr>
                            </thead>
                            @if(isset($payments))
                                <tbody>
                                <?php $i = 1 ?>
                                @foreach($payments as $payment)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>
                                            @if($payment->type == 0)
                                                @foreach($payment->orders as $order)
                                                    @if ($loop->first)
                                                        {{$order->user->family}}
                                                        ({{$order->user->mobile}})
                                                    @endif
                                                @endforeach
                                            @endif
                                        </td>
                                        {{--<td>--}}
                                        {{--@if($payment->type == 0)--}}
                                        {{--@foreach($payment->orders as $order)--}}
                                        {{--{{$order->food->name}} / {{$order->order_count}} / {{$order->chef->name . ' ' . $order->chef->family}} <br>--}}
                                        {{--@endforeach--}}
                                        {{--@endif--}}
                                        {{--</td>--}}
                                        <td>
                                            @if($payment->type == 0)
                                                @foreach($payment->orders as $order)
                                                    @if ($loop->first)
                                                        <span class="persian-digit">{{$order->date_create}}</span>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </td>
                                        <td>{{$payment->invoice_id}}  </td>
                                        <td>

                                            @if ($payment->gateway_type == 'PayLocation')
                                                <a class="btn btn-danger btn-xs"
                                                   href="#">  {{$order->food_price}}  پرداخت در محل  </a>
                                            @else
                                                <a class="btn btn-success btn-xs"
                                                   href="#"> {{$order->food_price}} پـرداخــت شــده </a>
                                            @endif
                                        </td>


                                        {{--<td>--}}
                                        {{--@if($payment->type == 0)--}}
                                        {{--@foreach($payment->orders as $order)--}}
                                        {{--@if($order->status == 'order')--}}
                                        {{--<span>سفارش</span><br>--}}
                                        {{--@elseif($order->status == 'cooking')--}}
                                        {{--<span>در حال طبخ</span><br>--}}
                                        {{--@elseif($order->status == 'cooked')--}}
                                        {{--<span>پخته شده</span><br>--}}
                                        {{--@else--}}
                                        {{--<span>ارسال شده</span><br>--}}
                                        {{--@endif--}}
                                        {{--@endforeach--}}
                                        {{--@else--}}
                                        {{--<span>شارژ کیف پول</span>--}}
                                        {{--@endif--}}
                                        {{--</td>--}}
                                        <td>
                                            <a class="btn btn-info btn-xs"
                                               href="{{route('orders.show' ,$payment->id)}}"> مشاهده </a>
                                            @if($payment->type == 0)
                                                @php $j=0;@endphp
                                                @foreach($payment->orders as $order)
                                                    @if ($loop->first)
                                                        @if($order->status == 'order')
                                                            <a class="btn btn-default btn-xs"
                                                               href="{{action('BackEnd\Chef\OrderController@assignOrderToChef' ,$payment->id )}}">سفارش
                                                                در حال آماده سازی</a>
                                                        @endif
                                                    @endif
                                                    @if($order->status == 'cooked')
                                                        @php $j++; @endphp
                                                    @endif
                                                @endforeach
                                                @if(sizeof($payment->orders) == $j)
                                                    <a class="btn btn-success btn-xs"
                                                       href="{{action('BackEnd\Chef\OrderController@changeStatusToSend' ,$payment->id )}}">ارسال
                                                        سفارش برای مشتری</a>
                                                @endif
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            @endif

                            {{--@if(isset($payments2))--}}
                                {{--<tbody>--}}
{{--<!--                                --><?php //$i = 1 ?>--}}
                                {{--@foreach($payments2 as $payment)--}}
                                    {{--<tr>--}}
                                        {{--<td>{{$i++}}</td>--}}
                                        {{--<td>--}}
                                            {{--@if($payment->type == 0)--}}
                                                {{--@foreach($payment->orders as $order)--}}
                                                    {{--@if ($loop->first)--}}
                                                        {{--{{$order->user->family}}--}}
                                                        {{--({{$order->user->mobile}})--}}
                                                    {{--@endif--}}
                                                {{--@endforeach--}}
                                            {{--@endif--}}
                                        {{--</td>--}}
                                        {{--<td>--}}
                                            {{--@if($payment->type == 0)--}}
                                                {{--@foreach($payment->orders as $order)--}}
                                                    {{--@if ($loop->first)--}}
                                                        {{--<span class="persian-digit">{{$order->date_create}}</span>--}}
                                                    {{--@endif--}}
                                                {{--@endforeach--}}
                                            {{--@endif--}}
                                        {{--</td>--}}
                                        {{--<td>{{$payment->invoice_id}}</td>--}}
                                        {{--<td>--}}
                                            {{--@if ($payment->gateway_type == 'PayLocation')--}}
                                            {{--<a class="btn btn-danger btn-xs"--}}
                                               {{--href="#">  {{$order->food_price}} پرداخت در محل  </a>--}}
                                            {{--@endif--}}

                                        {{--</td>--}}
                                        {{--<td>--}}
                                            {{--<a class="btn btn-info btn-xs"--}}
                                               {{--href="{{route('orders.show' ,$payment->id)}}"> مشاهده </a>--}}
                                            {{--@if($payment->type == 0)--}}
                                                {{--@php $j=0;@endphp--}}
                                                {{--@foreach($payment->orders as $order)--}}
                                                    {{--@if ($loop->first)--}}
                                                        {{--@if($order->status == 'order')--}}
                                                            {{--<a class="btn btn-default btn-xs"--}}
                                                               {{--href="{{action('BackEnd\Chef\OrderController@assignOrderToChef' ,$payment->id )}}">سفارش--}}
                                                                {{--در حال آماده سازی</a>--}}
                                                        {{--@endif--}}
                                                    {{--@endif--}}
                                                    {{--@if($order->status == 'cooked')--}}
                                                        {{--@php $j++; @endphp--}}
                                                    {{--@endif--}}
                                                {{--@endforeach--}}
                                                {{--@if(sizeof($payment->orders) == $j)--}}
                                                    {{--<a class="btn btn-success btn-xs"--}}
                                                       {{--href="{{action('BackEnd\Chef\OrderController@changeStatusToSend' ,$payment->id )}}">ارسال--}}
                                                        {{--سفارش برای مشتری</a>--}}
                                                {{--@endif--}}
                                            {{--@endif--}}
                                        {{--</td>--}}
                                    {{--</tr>--}}
                                {{--@endforeach--}}
                                {{--</tbody>--}}
                            {{--@endif--}}






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

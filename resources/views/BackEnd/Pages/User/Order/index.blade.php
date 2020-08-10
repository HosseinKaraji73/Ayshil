@extends('BackEnd.Layouts.user')
@section('title', 'پنل مدیریتی')
@section('stylewrapper')
    style="margin-top: -20px;"
@endsection
@section('head')
    <link href="{{asset('BackEnd/css/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('BackEnd/css/rate-plugin/style.css')}}" rel="stylesheet" type="text/css">
    {{--<style>--}}
    {{--span.stars, span.stars span {--}}
    {{--display: block;--}}
    {{--background: url("../../css/img/stars.png") 0 -16px repeat-x;--}}
    {{--width: 80px;--}}
    {{--height: 16px;--}}
    {{--float: left;--}}
    {{--}--}}

    {{--span.stars span {--}}
    {{--background-position: 0 0;--}}
    {{--}--}}
    {{--</style>--}}
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
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <div style="overflow-x: auto;">
                        <table class="text-center table table-striped table-bpaymentsed table-hover centerTable thAlign"
                               id="dataTables-example">
                            <thead>
                            <tr>
                                <th>--</th>
                                <th>شماره سفارش</th>
                                <th>قیمت ({{__('settings.tuman')}})</th>
                                <th>تاریخ سفارش</th>
                                <th>وضعیت</th>
                                <th> + - </th>
                            </tr>
                            </thead>
                            @if(isset($payments))

                                <tbody>
                                <?php $i = 1 ?>
                                @foreach($payments as $payment)

                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>
                                            {{$payment->invoice_id}}
                                        </td>

                                        <td>
                                            <span class="persian-digit">{{$payment->price}}</span>
                                        </td>

{{--                                        <td>--}}
{{--                                            @if($payments->type == 0)--}}
{{--                                                @foreach($payments->payments as $payments)--}}
{{--                                                    @if($loop->first)--}}
{{--                                                        @if($payments->status == 'payments')--}}
{{--                                                            <span>سفارش</span>--}}
{{--                                                        @elseif($payments->status == 'cooking')--}}
{{--                                                            <span>در حال آماده سازی</span>--}}
{{--                                                        @elseif($payments->status == 'cooked')--}}
{{--                                                            <span>آماده ارسال</span>--}}
{{--                                                        @else--}}
{{--                                                            <span>ارسال شده</span>--}}
{{--                                                        @endif--}}
{{--                                                    @endif--}}
{{--                                                @endforeach--}}
{{--                                            @else--}}
{{--                                                <span>شارژ کیف پول</span>--}}
{{--                                            @endif--}}
{{--                                            <br>--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            @if($payments->payed == 1)--}}
{{--                                                @if($payments->type == 1)--}}
{{--                                                    <span class="btn btn-success btn-xs">پــرداخــت شــد</span>--}}
{{--                                                @else--}}
{{--                                                    @foreach($payments->payments as $payments)--}}
{{--                                                        @if($loop->first)--}}
{{--                                                            @if($payments->cancel == 1)--}}
{{--                                                                <span class="text-red">لغو شده</span>--}}
{{--                                                            @else--}}
{{--                                                                <span class="btn btn-success btn-xs">پــرداخــت شــد</span>--}}
{{--                                                            @endif--}}
{{--                                                        @endif--}}
{{--                                                    @endforeach--}}
{{--                                                @endif--}}

{{--                                                                                                    <span class="btn btn-success btn-xs">پــرداخــت شــد</span>--}}
{{----}}
{{--                                            @else--}}
{{--                                                <span class="text-red">پرداخت ناموفق </span>--}}
{{--                                            @endif--}}
{{--                                        </td>--}}
                                        <td>
                                            <span class="persian-digit">{{$payment->date_create}}</span>
                                        </td>
                                        <td>
                                            @if ($payment->payed == 1)
                                                <a class="btn btn-success btn-xs"
                                                   href="#">پـرداخــت شــده</a>
                                            @else
                                                <a class="btn btn-danger btn-xs"
                                                   href="#">پـرداخــت نشــده</a>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <a class="btn btn-info btn-xs" href="{{action('BackEnd\User\OrderController@show' , $payment->id )}}">مشاهده و نظرات</a>
                                                </div>

{{--                                                <div class="col-sm-6">--}}
{{--                                                    <a class="btn btn-info btn-xs" href="{{action('BackEnd\User\OrderController@show' , $payments->id )}}">مشاهد محصول</a>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-sm-6">--}}
{{--                                                    @foreach($payments->payments as $payments)--}}
{{--                                                        @if($loop->first)--}}
{{--                                                            @if($payments->type == 0 && $payments->cancel == 0)--}}
{{--                                                                <a class="btn btn-warning btn-xs" href="{{action('BackEnd\User\OrderController@showRateForm' , $payment->id )}}">امتیاز دادن</a>--}}
{{--                                                            @else--}}
{{--                                                                <a class="btn btn-default btn-xs" onclick="return false" style="cursor: not-allowed" href="{{action('BackEnd\User\OrderController@showRateForm' , $payments->id )}}">امتیاز دادن</a>--}}
{{--                                                            @endif--}}
{{--                                                        @endif--}}
{{--                                                    @endforeach--}}
{{--                                                </div>--}}
                                                <div class="col-sm-3">
                                                    {{--@foreach($payments->payments as $payments)--}}
                                                    {{--@if($loop->first)--}}
                                                    {{--@if($payments->payed == 1 && $payments->cancel == 1)--}}
                                                    {{--<a class="btn btn-default btn-xs" onclick="return false" style="cursor: not-allowed" href="{{action('BackEnd\User\OrderController@cancel' , $payments->id )}}">لغو سفارش</a>--}}
                                                    {{--@else--}}
                                                    {{--<a onclick="return confirm(' با لغو سفارش {{$setting->percent_for_cancel}} درصد از مبلغ سفارش از صورت حساب شما کسر می شود.')" class="btn btn-danger btn-xs" href="{{action('BackEnd\User\OrderController@cancel' , $payments->id )}}">لغو سفارش</a>--}}
                                                    {{--@endif--}}
                                                    {{--@endif--}}
                                                    {{--@endforeach--}}
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            @endif

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

@endsection
@section('script')
    <script src="{{asset('BackEnd/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('BackEnd/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('BackEnd/js/rate-plugin/index.js')}}"></script>

    {{--for data table--}}
    <script>
        $(document).ready(function () {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
    <script>
        $.fn.stars = function () {
            return $(this).each(function () {
                // Get the value
                var val = parseFloat($(this).html());
                // Make sure that the value is in 0 - 5 range, multiply to get width
                var size = Math.max(0, (Math.min(5, val))) * 16;
                // Create stars holder
                var $span = $('<span />').width(size);
                // Replace the numerical value with stars
                $(this).html($span);
            });
        };
        $(function () {
            $('span.stars').stars();
        });
    </script>
@endsection

@extends('BackEnd.Layouts.user')
@section('title', 'پنل کاربری')
@section('stylewrapper')
    style="margin-top: -20px;"
@endsection
@section('style')
    <style>
        .rate-group {
            display: inline-block;
            margin: 0;
            padding: 0;
            border: none;
        }

        .input-rate {
            display: none;
        }

        .label-rate {
            float: right;
            font-size: 0;
            color: #d9d9d9;
        }

        .label-rate:before {
            content: "\e006";
            font-family: 'Glyphicons Halflings';
            font-size: 20px;
        }

        .label-rate:hover, .label-rate:hover ~ .label-rate {
            color: #fcd000;
            transition: 0.2s;
        }

        .input-rate:checked ~ .label-rate {
            color: #ccac00;
        }

        .input-rate:checked ~ .label-rate:hover, .input-rate:checked ~ .label-rate:hover ~ .label-rate {
            color: #fcd000;
            transition: 0.2s;
        }
    </style>
@endsection
@section('head-content')
    <span class="fa fa-history">&nbsp;</span>  مشاهده جزییات سفارش(لطفا در نظر سنجی شرکت کنید)
@endsection

@section('head')
    <link href="{{asset('BackEnd/css/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('BackEnd/css/wizard.css')}}" rel="stylesheet" type="text/css">
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
        <div id="rate-msg"></div>
    </div>

    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">جزئیات سفارش</a></li>
        @if ($payment->payed == 1)
            <li><a data-toggle="tab" href="#rateComment">امتیازات و نظرات</a></li>
        @endif
    </ul>
    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <h3>جزئیات سفارش</h3>
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
                                        {{--<td>عکس سفارش</td>--}}
                                        {{--<td>روش پرداخت</td>--}}
                                        {{--<td>وضعیت لغو</td>--}}
                                        <td>تاریخ سفارش</td>
                                        <td>آدرس</td>
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
                                        {{--@foreach($payment->orders as $order)--}}
                                        {{--@if(isset($order->food_photo))--}}
                                        {{--<img src="{{asset("images/Chef/gallery/$order->food_photo")}}"--}}
                                        {{--style="width:100px">--}}
                                        {{--@else--}}
                                        {{--<img src="{{asset('images/Chef/gallery/null.jpg')}}"--}}
                                        {{--style="width:100px">--}}
                                        {{--@endif--}}
                                        {{--@endforeach--}}
                                        {{--</td>--}}
                                        {{--<td>--}}
                                        {{--@if($payment->payed == 1)--}}
                                        {{--@if($payment->payment_method == 'wallet')--}}
                                        {{--پرداخت با کیف پول--}}
                                        {{--@else--}}
                                        {{--پرداخت آنلاین--}}
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
                                        <td><span class="persian-digit">{{$payment->date_create}}</span></td>
                                        <td>
                                            @foreach($payment->orders as $order)
                                                @if (!isset($order->address))
                                                    {{$order->user_address}}
                                                @else
                                                    {{$order->address}}
                                                @endif
                                            @endforeach

                                        </td>
                                        {{--<td>--}}
                                        {{--@if($payment->type == 0)--}}
                                        {{--@foreach($payment->orders as $order)--}}
                                        {{--@if($loop->first)--}}
                                        {{--{{$order->packing_name}}--}}
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
                                        <td class="text-center">تعداد</td>
                                        <td class="text-center">قیمت واحد({{__('settings.tuman')}})</td>
                                        <td class="text-center">قیمت کل ({{__('settings.tuman')}})</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <div id="rate-msg" class="text-success"></div>

                                    {{--                                    @if($payment->type == 0)--}}
                                    @foreach($payment->orders as $order)
                                        <tr>
                                            <td class="text-center">{{$order->products_name}}</td>
                                            <td class="text-center"><span
                                                    class="persian-digit">{{$order->order_count }}</span></td>
                                            <td class="text-center"><span
                                                    class="persian-digit">{{$order->products_price}}</span></td>
                                            <td class="text-center">
                                                @if($order->products_price && $order->order_count)
                                                    <span class="persian-digit">{{ $order->products_price * $order->order_count }} </span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    {{--                                    @endif--}}
                                    </tbody>
                                    <tfoot>
                                    <tr class="bg-info text-info ">
                                        <td colspan="7" class="text-left">جمع کل :
                                            @php $sum=0; @endphp
                                            @foreach($payment->orders as $order)
                                                @if($order->products_price && $order->order_count)
                                                    @php $sum += $order->products_price * $order->order_count @endphp
                                                @endif
                                            @endforeach
                                            <span class="persian-digit">{{$sum}}</span> {{__('settings.tuman')}}
                                        </td>
                                    </tr>
                                    @if(isset($payment->discount_id))
                                        <tr class="bg-info text-info ">
                                            <td colspan="7" class="text-left">مقدار تخفیف کد تخفیف استفاده شده :
                                                <span class="persian-digit"> {{$payment->tax_percent}}</span> در صد |

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
                                    {{--@if($payment->discountInfo)--}}
                                    {{--( {{$payment->discountInfo->name}} )--}}
                                    {{--@endif--}}
                                    {{--<span class="persian-digit">{{$payment->discountPrice}}</span>  {{__('settings.tuman')}}--}}
                                    {{--</td>--}}
                                    {{--</tr>--}}
                                    <tr>
                                        <td>
                                            @if ($payment->payed == 1)
                                                <a class="btn btn-success btn-xs"
                                                   href="#">پـرداخــت شــده</a>
                                            @else
                                                <a class="btn btn-danger btn-xs"
                                                   href="#">پـرداخــت نشــده</a>
                                            @endif
                                        </td>
                                    </tr>

                                    @if ($payment->payed == 1)
                                        <tr class="bg-info text-info ">
                                            <td colspan="7" class="text-left">خالص پرداختی شما :
                                                <span class="persian-digit">{{$payment->price}} {{__('settings.tuman')}}</span>
                                            </td>
                                        </tr>
                                    @else
                                        <tr class="bg-info text-info ">
                                            <td colspan="7" class="text-left">خالص پرداختی شما :
                                                <span class="persian-digit">0 {{__('settings.tuman')}}</span>
                                            </td>
                                        </tr>
                                    @endif

                                    </tfoot>
                                </table>
                                {{--                                <div class="text-center" style="margin: auto">--}}
                                {{--                                    @if($payment->type == 0)--}}
                                {{--                                        @foreach($payment->orders as $order)--}}
                                {{--                                            @if($loop->first)--}}
                                {{--                                                <div id="wizard-progress">--}}
                                {{--                                                    <ol class="step-indicator">--}}
                                {{--                                                        @if($order->status == 'order')--}}
                                {{--                                                            <li class="active">--}}
                                {{--                                                        @else--}}
                                {{--                                                            <li class="complete">--}}
                                {{--                                                                @endif--}}
                                {{--                                                                <div class="step"><i class="fa fa-pencil-square-o"></i>--}}
                                {{--                                                                </div>--}}
                                {{--                                                                <div class="caption hidden-xs hidden-sm">سفارش</div>--}}
                                {{--                                                            </li>--}}
                                {{--                                                            @if($order->status == 'cooking')--}}
                                {{--                                                                <li class="active">--}}
                                {{--                                                            @else--}}
                                {{--                                                                <li class="complete">--}}
                                {{--                                                                    @endif--}}
                                {{--                                                                    <div class="step"><i--}}
                                {{--                                                                                class="fa fa-hourglass-start"></i></div>--}}
                                {{--                                                                    <div class="caption hidden-xs hidden-sm">در حال--}}
                                {{--                                                                        آماده سازی--}}
                                {{--                                                                    </div>--}}
                                {{--                                                                </li>--}}
                                {{--                                                                @if($order->status == 'cooked')--}}
                                {{--                                                                    <li class="active">--}}
                                {{--                                                                @else--}}
                                {{--                                                                    <li class="complete">--}}
                                {{--                                                                        @endif--}}
                                {{--                                                                        <div class="step"><i--}}
                                {{--                                                                                    class="fa fa-share-square"></i>--}}
                                {{--                                                                        </div>--}}
                                {{--                                                                        <div class="caption hidden-xs hidden-sm">آماده--}}
                                {{--                                                                            ارسال--}}
                                {{--                                                                        </div>--}}
                                {{--                                                                    </li>--}}
                                {{--                                                                    @if($order->status == 'send')--}}
                                {{--                                                                        <li class="active">--}}
                                {{--                                                                    @else--}}
                                {{--                                                                        <li class="complete">--}}
                                {{--                                                                            @endif--}}
                                {{--                                                                            <div class="step"><i class="fa fa-send"></i>--}}
                                {{--                                                                            </div>--}}
                                {{--                                                                            <div class="caption hidden-xs hidden-sm">--}}
                                {{--                                                                                ارسال شده--}}
                                {{--                                                                            </div>--}}
                                {{--                                                                        </li>--}}
                                {{--                                                    </ol>--}}
                                {{--                                                </div>--}}
                                {{--                                            @endif--}}
                                {{--                                        @endforeach--}}
                                {{--                                    @endif--}}
                                {{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="rateComment" class="tab-pane fade">
            @if ($payment->payed == 1)
                <h3>امتیازات و نظرات</h3>

                @foreach($payment->orders as $order)
                    <div class="col-sm-12" style="padding-bottom: 25px;">
                        <h4>{{$order->products_name}}</h4>
                        <form action="{{action('FrontEnd\CommentController@store' ,$order->product_id)}}" method="post">
                            {{csrf_field()}}

                            <textarea name="content" id="content"
                                      placeholder="نظر خود را در مورد این محصول با کاربران در میان بگذارید.."
                                      class="form-control{{ $errors->has('content') ? ' has-error' : '' }}" rows="3"
                                      required>{{$order->comment ? $order->comment->content : ''}}</textarea>
                            @if ($errors->has('content'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('content') }}</strong>
                                </span>
                            @endif
                            <div class="col-sm-2">
                                <input type="submit" value="ثبت نظر" {{ $order->comment ? 'disabled' : ''}} class="btn"
                                       id="saveComment">
                            </div>
                        </form>
                        <div class="col-sm-6">
                            <form method="post" action="#" class="food_id">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $order->product_id }}">
                                <div class="rate-group">

                                    <input id="rate1-star{{$order->product_id}}" class="input-rate" type="radio" name="rate"
                                           value="5" {{ $order->userRate == 5 ? 'checked' : '' }}/>
                                    <label for="rate1-star{{$order->product_id}}" class="label-rate" title="5">5</label>

                                    <input id="rate2-star{{$order->product_id}}" class="input-rate" type="radio" name="rate"
                                           value="4" {{ $order->userRate == 4 ? 'checked' : '' }}/>
                                    <label for="rate2-star{{$order->product_id}}" class="label-rate" title="4">4</label>

                                    <input id="rate3-star{{$order->product_id}}" class="input-rate" type="radio" name="rate"
                                           value="3" {{ $order->userRate == 3 ? 'checked' : '' }}/>
                                    <label for="rate3-star{{$order->product_id}}" class="label-rate" title="3">3</label>

                                    <input id="rate4-star{{$order->product_id}}" class="input-rate" type="radio" name="rate"
                                           value="2" {{ $order->userRate == 2 ? 'checked' : '' }}/>
                                    <label for="rate4-star{{$order->product_id}}" class="label-rate" title="2">2</label>

                                    <input id="rate5-star{{$order->product_id}}" class="input-rate" type="radio" name="rate"
                                           value="1" {{ $order->userRate == 1 ? 'checked' : '' }}/>
                                    <label for="rate5-star{{$order->product_id}}" class="label-rate" title="1">1</label>
                                </div>
                                <span class="result-star hidden"></span>
                                <div class="col-sm-4">
                                    <input type="submit" class="btn xs-btn"
                                           value="ثبت امتیاز" {{ $order->rated == '0' ? '' : 'disabled'}}>
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

    </div>
    <div class="clearfix"></div>

@endsection

@section('script')
    <script src="{{asset('BackEnd/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('BackEnd/js/dataTables.bootstrap.min.js')}}"></script>
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
    <script>
        $('.food_id').submit(function (e) {
            e.preventDefault();
            var id = $(this).find("input[name=product_id]").val();
            var rate = $(this).find('input[name=rate]:checked').val();
            // var statusCancel = $("#statusCancel").val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
{{--                headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},--}}
                url: '/panel/user/product/rate/save',
                type: 'post',
                dataType: 'JSON',
                data: {
                    'id': id,
                    'rate': rate,
                    // 'statusCancel': statusCancel
                },
                success: function (data) {
                    if (data.status == true) {
                        $("#rate-msg").addClass('alert alert-success').html(data.html);
                        setTimeout(function () {
                            $("#rate-msg").removeClass('alert alert-success').html(' ');
                        }, 5000);
                    } else {
                        $("#rate-msg").addClass('alert alert-danger').html(data.html);
                        setTimeout(function () {
                            $("#rate-msg").removeClass('alert alert-danger').html(' ');
                        }, 5000);
                    }
                }
            });
        });
    </script>
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

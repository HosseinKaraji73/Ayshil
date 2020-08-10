@extends('auth.layouts.BackEnd.owner')
@section('head-content')
    <span class="fa fa-eye">&nbsp;</span>  مشاهده جزییات محصول
@endsection

@section('head')
    <link href="{{asset('css/admin/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/admin/rate-plugin/style.css')}}" rel="stylesheet" type="text/css">
    <style>
        span.stars, span.stars span {
            display: block;
            background: url("/../../css/img/stars.png") 0 -16px repeat-x;
            width: 80px;
            height: 16px;
            float: left;
        }

        span.stars span {
            background-position: 0 0;
        }
    </style>
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
        <div class="BackEnd BackEnd-default">
            <div class="BackEnd-body">
                <div class="dataTable_wrapper">
                    <div style="overflow-x: auto;">
                        <table class="table table-striped table-bordered table-hover centerTable tdAlign"
                               id="dataTables-example">
                            <tr>
                                <th class="text-center"> تصاویر</th>
                                <td>
                                    @if($food->photo1)
                                        <img src="{{asset("$food->photo1")}}" style="width: 100px">
                                    @endif
                                    @if($food->photo2)
                                        <img src="{{asset("$food->photo2")}}" style="width: 100px">
                                    @endif
                                    @if($food->photo3)
                                        <img src="{{asset("$food->photo3")}}" style="width: 100px">
                                    @endif
                                    @if($food->photo4)
                                        <img src="{{asset("$food->photo4")}}" style="width: 100px">
                                    @endif
                                    @if($food->photo5)
                                        <img src="{{asset("$food->photo5")}}" style="width: 100px">
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center">نام محصول</th>
                                <td>
                                    {{$food->name}}
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center">نام فروشگاه</th>
                                <td>{{$food->user->name . ' ' . $food->user->family}}</td>
                            </tr>
                            <tr>
                                <th class="text-center">منو</th>
                                <td>{{$food->menu->name}}</td>
                            </tr>
                            <tr>
                                <th class="text-center">نوع محصول</th>
                                <td>
                                    @if($item->type == 'normal')
                                        <span>فروش عادی</span>
                                    @elseif($item->type == 'gym')
                                        <a type="" class="btn btn-warning">فروش حراجی</a>
                                    @elseif($item->type == 'land')
                                        <a type="" class="btn btn-warning">فروش در بدولند</a>
                                    @else
                                        <a type="" class="btn btn-primary">فروش ویژه</a>
                                    @endif
                                </td>
                            </tr>
                            {{--<tr>--}}
                                {{--<th class="text-center">وعده(ها)</th>--}}
                                {{--<td>--}}
                                    {{--@foreach($food->meals as $meal)--}}
                                        {{--{{$meal->name}} ---}}
                                    {{--@endforeach--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            <tr>
                                <th class="text-center"> قیمت({{__('settings.tuman')}})</th>
                                <td>{{$food->price}} {{__('settings.tuman')}}</td>
                            </tr>
                            <tr>
                                <th class="text-center"> تعداد سفارشات</th>
                                <td>{{$food->buy_count}}</td>
                            </tr>
                            {{--<tr>--}}
                                {{--<th class="text-center"> حداقل تعداد سفارش</th>--}}
                                {{--<td>{{$food->min}}</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<th class="text-center"> حداکثر تعداد سفارش</th>--}}
                                {{--<td>{{$food->max}}</td>--}}
                            {{--</tr>--}}
                            <tr>
                                <th class="text-center">امتیاز</th>
                                <td class="text-center">
                                    <span class="stars" style="margin: 0 auto !important;">{{$food->rate}}</span>
                                    <span>({{$food->rate}} از 5 )</span>
                                </td>
                            </tr>
                            {{--<tr>--}}
                                {{--<th class="text-center">موجود</th>--}}
                                {{--<td>--}}
                                    {{--@if($food->available == 1)--}}
                                        {{--<span class="fa fa-check text-green"></span>--}}
                                    {{--@else--}}
                                        {{--<span class="fa fa-remove text-red"></span>--}}
                                    {{--@endif--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<th class="text-center">جدید</th>--}}
                                {{--<td>--}}
                                    {{--@if($food->new==1)--}}
                                        {{--<span class="fa fa-check text-green"></span>--}}
                                    {{--@else--}}
                                        {{--<span class="fa fa-remove text-red"></span>--}}
                                    {{--@endif--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<th class="text-center"> برچسب ها</th>--}}
                                {{--<td>--}}
                                    {{--@foreach($food->tags as $tag)--}}
                                        {{--{{$tag->name}} ---}}
                                    {{--@endforeach--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<th class="text-center">مواد اولیه</th>--}}
                                {{--<td>--}}
                                    {{--@foreach($food->materials as $material)--}}
                                        {{--{{$material->name}}--}}
                                        {{--: {{$food->materials()->where('food_id', $food->id)->where('material_id', $material->id)->first()->pivot->amount}}--}}
                                        {{--<br>--}}
                                    {{--@endforeach--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                            <tr>
                                <th class="text-center"> توضیحات محصول</th>
                                <td> {!! $food->description !!} </td>
                            </tr>
                            {{--<tr>--}}
                                {{--<th class="text-center">دستور پخت</th>--}}
                                {{--<td> {!! $food->recipes !!} </td>--}}
                            {{--</tr>--}}
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
    <script src="{{asset('js/admin/rate-plugin/index.js')}}"></script>


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
    {{--for data table--}}
    <script>
        $(document).ready(function () {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
@endsection

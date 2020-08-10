@extends('BackEnd.Layouts.admin')
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
                        <table class="text-center table table-striped table-bordered table-hover centerTable thAlign"
                               id="dataTables-example">
                            <thead>
                            <tr>
                                <th>--</th>
                                <th>تصویر</th>
                                {{--                                <th>در منو</th>--}}
                                {{--                                <th>نام صاحب فروشگاه</th>--}}
                                {{--<th>منو </th>--}}
                                <th>اسم محصول</th>
                                {{--                                <th>تایید ادمین</th>--}}
                                {{--                                <th>نوع فروش</th>--}}
                                {{--<th>امتیاز</th>--}}
                                <th>قیمت</th>
                                <th>موجود</th>
                                <th> + -</th>
                            </tr>
                            </thead>
                            @if(isset($order))
                                <tbody>
                                <?php $i = 1 ?>
                                @foreach($order as $item)
                                    <tr>
                                        <td>
                                            {{$i++}}
                                        </td>
                                        <td>
                                            <img src="{{asset("img/admin/order/$item->photo1")}}" style="height:50px;"/>
                                        </td>
                                        {{--                                        <td>{{$item->menu_id->name}}</td>--}}
                                        {{--                                        <td>{{$item->user['family']}}</td>--}}
                                        {{--<td>{{$item->menu['name']}}</td>--}}
                                        <td>{{$item->title}}</td>
                                        {{--                                        <td>--}}
                                        {{--                                            @if($item->type == 'normal')--}}
                                        {{--                                                <span>_____</span>--}}
                                        {{--                                            @elseif($item->confirm == 0)--}}
                                        {{--                                                <a href="{{action('BackEnd\Admin\FoodController@changeConfirm',$item->id)}}"--}}
                                        {{--                                                   type="" class="btn btn-danger">UnPublished</a>--}}
                                        {{--                                            @elseif(($item->confirm == 1))--}}
                                        {{--                                                <a href="{{action('BackEnd\Admin\FoodController@changeConfirm',$item->id)}}"--}}
                                        {{--                                                   type="" class="btn btn-success">Published</a>--}}
                                        {{--                                            @endif--}}
                                        {{--                                        </td>--}}
                                        {{--<td>--}}
                                        {{--<span class="stars pull-left">{{$item->rate}}</span>--}}
                                        {{--</td>--}}
                                        {{--                                        <td>--}}
                                        {{--                                            @if($item->type == 'normal')--}}
                                        {{--                                                <span>فروش عادی</span>--}}
                                        {{--                                            @elseif($item->type == 'gym')--}}
                                        {{--                                                <a type="" class="btn btn-warning">فروش حراجی</a>--}}
                                        {{--                                            @elseif($item->type == 'land')--}}
                                        {{--                                                <a type="" class="btn btn-warning">فروش در بدولند</a>--}}
                                        {{--                                            @else--}}
                                        {{--                                                <a type="" class="btn btn-primary">فروش ویژه</a>--}}
                                        {{--                                            @endif--}}
                                        {{--                                        </td>--}}


                                        <td>
                                            <span class="fa fa-check text-green">{{$item->price}}</span>
                                        </td>

                                        <td>
                                            @if($item->payment == 1)
                                                <span class="fa fa-check text-green">پرداخت شده</span>
                                            @elseif($item->category == 0)
                                                <span class="fa fa-check text-green">پرداخت نشده</span>
                                            @endif
                                        </td>


                                        <td>
                                            <a class="btn btn-info btn-xs"
                                               href="{{action('BackEnd\Admin\OrderController@show' ,$item->id)}}"> مشاهده </a>
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

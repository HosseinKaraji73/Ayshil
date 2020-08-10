@extends('auth.layouts.BackEnd.owner')
@section('title', 'پنل مدیریتی')

@section('head')
    <link href="{{asset('css/admin/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/admin/rate-plugin/style.css')}}" rel="stylesheet" type="text/css">
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
    <span class="fa fa-table">&nbsp;</span>لیست محصولات
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
                                <th>--</th>
                                <th>تصویر</th>
                                <th>نام فروشگاه</th>
                                <th>نام صاحب فروشگاه</th>
                                <th>منو فروشگاه</th>
                                <th>اسم محصول</th>
                                <th>نوع فروش</th>
                                {{--<th>امتیاز</th>--}}
                                <th>موجود</th>
                                <th> + -</th>
                            </tr>
                            </thead>
                            @if(isset($foods))
                                <tbody>
                                <?php $i = 1 ?>
                                    @foreach($foods as $item)
                                        <tr>
                                            <td>
                                                {{$i++}}
                                            </td>
                                            <td>
                                                <img src="{{asset("$item->photo1")}}" style="height:50px;"/>
                                            </td>
                                            <td>{{$item->user->name}}</td>
                                            <td>{{$item->user->family}}</td>
                                            <td>{{$item->menu->name}}</td>
                                            <td>{{$item->name}}</td>
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
                                            {{--<td>--}}
                                                {{--<span class="stars pull-left">{{$item->rate}}</span>--}}
                                            {{--</td>--}}
                                            <td>
                                                @if($item->available == 1)
                                                    <span class="fa fa-check text-green"></span>
                                                @else
                                                    <span class="fa fa-remove text-red"></span>
                                                @endif
                                            </td>
                                            <td>
                                                <a class="btn btn-info btn-xs" href="{{action('BackEnd\Chef\FoodController@show' ,$item->id)}}"> مشاهده </a>
                                                <a class="btn btn-warning btn-xs" href="{{action('BackEnd\Chef\FoodController@edit' ,$item->id)}}"> ویرایش </a>
                                                @if($item->available == 1)
                                                    <a class="btn btn-danger btn-xs"
                                                       href="{{action('BackEnd\Chef\FoodController@toggleAvailable' ,$item->id)}}">
                                                        ناموجود </a>
                                                @else
                                                    <a class="btn btn-success btn-xs"
                                                       href="{{action('BackEnd\Chef\FoodController@toggleAvailable' ,$item->id)}}">
                                                        موجود </a>
                                                @endif

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
    <script src="{{asset('js/admin/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/admin/dataTables.bootstrap.min.js')}}"></script>
{{--    <script src="{{asset('js/admin/rate-plugin/index.js')}}"></script>--}}

    {{--for data table--}}
    <script>
        $(document).ready(function () {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
    {{--<script>
        $.fn.stars = function() {
            return $(this).each(function() {
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
        $(function() {
            $('span.stars').stars();
        });
    </script>--}}
@endsection

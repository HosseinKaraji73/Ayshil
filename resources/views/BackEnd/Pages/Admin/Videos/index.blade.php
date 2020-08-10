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
    <span class="fa fa-table">&nbsp;</span>لیست ویدیوها
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
                                <th style="width: 10%">لینک ویدئو</th>
                                <th>نام ویديو</th>
                                <th>منتخب</th>
                                <th>عکس</th>
                                <th> + - </th>
                            </tr>
                            </thead>
                            @if(isset($videos))
                                <tbody>
                                <?php $i = 1 ?>
                                @foreach($videos as $item)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$item->link}}</td>
                                        <td>{{$item->title}}</td>
                                        @if ($item->fav == 1)
                                            <td>منتخب</td>
                                        @else
                                            <td>غیر منتخب</td>
                                        @endif
                                        <td><img style="width: 40px;height: auto" src="{{asset("images/FrontEnd/video/$item->picture")}}" alt=""></td>
                                        <td>
                                            <div class="row">



                                                {!! Form::open(['method'=>'DELETE', 'action'=>['BackEnd\Admin\VideoController@destroy', $item->id]]) !!}
                                                <div class="col-sm-5">
                                                    {!! Form::submit('حذف', ['class'=>'btn btn-warning btn-xs', 'onclick' => "return confirm('آیا می خواهید این فروشگاه را حذف کنید؟')"]) !!}
                                                    {{--<a class="btn btn-warning btn-xs" href="{{route('Panel\Admin\ShopController@destroy' ,$item->id)}}"> حذف </a>--}}
                                                </div>
                                                {!! Form::close() !!}
                                                {{--<div class="col-sm-5">--}}
                                                {{--@if($item->active == 0)--}}
                                                {{--<a class="btn btn-default btn-xs" href="{{action('Panel\Admin\ShopController@de_active' ,$item->id)}}">  فعال کردن </a>--}}
                                                {{--@else--}}
                                                {{--<a class="btn btn-default btn-xs" href="{{action('Panel\Admin\ShopController@de_active' ,$item->id)}}">  غیر فعال کردن </a>--}}
                                                {{--@endif--}}
                                                {{--</div>--}}
                                                {{--<div class="col-sm-6">--}}
                                                {{--<a class="btn btn-info btn-xs" href="{{route('competition.info',$item->id)}}"> مشاهده شرکت کنندگان </a>--}}
                                                {{--</div>--}}
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

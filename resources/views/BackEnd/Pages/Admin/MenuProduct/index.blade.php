@extends('BackEnd.Layouts.admin')
@section('title', 'پنل مدیریتی')
@section('stylewrapper')
    style="margin-top: -20px;"
@endsection
@section('head')
    <link href="{{asset('BackEnd/css/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('head-content')
    <span class="fa fa-table">&nbsp;</span>لیست رنگ های محصولات
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
                                {{--<th>تصویر</th>--}}
                                <th>عنوان</th>
                                <!-- <th>نام منو</th> -->
{{--                                <th>موقعیت</th>--}}
                                <th> + - </th>
                            </tr>
                            </thead>
                            @if(isset($MenuProduct))
                                <tbody>
                                <?php $i = 1 ?>
                                @foreach($MenuProduct as $item)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        {{--<td>--}}
                                            {{--<img src={{asset("$item->photo")}} style="height:50px;"/>--}}
                                        {{--</td>--}}
                                        <td>{{$item->name}}</td>
                                        <!-- <td>{{$item->name_en}}</td> -->
{{--                                        <td>--}}
{{--                                            @if($item->position == 0)--}}
{{--                                                ---}}
{{--                                            @else--}}
{{--                                                {{$item->position}}--}}
{{--                                            @endif--}}
{{--                                        </td>--}}
                                        <td>
                                            <a class="btn btn-warning btn-xs" href="{{route('menu-product.edit' ,$item->id)}}">ویرایش و حذف</a>
                                        </td>

{{--                                        <td>--}}
{{--                                        @if($item->confirm == 0)--}}
{{--                                            <a class="btn btn-danger btn-xs"--}}
{{--                                               href="{{action('BackEnd\Admin\MenuProductController@toggleAvailable' ,$item->id)}}">--}}
{{--                                                UnPublished </a>--}}
{{--                                        @else--}}
{{--                                            <a class="btn btn-success btn-xs"--}}
{{--                                               href="{{action('BackEnd\Admin\MenuProductController@toggleAvailable' ,$item->id)}}">--}}
{{--                                                Published</a>--}}
{{--                                        @endif--}}
{{--                                        </td>--}}
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

    {{--for data table--}}
    <script>
        $(document).ready(function () {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
@endsection

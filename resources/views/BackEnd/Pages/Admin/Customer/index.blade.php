@extends('BackEnd.Layouts.admin')
@section('title', 'پنل مدیریتی')
@section('stylewrapper')
    style="margin-top: -20px;"
@endsection
@section('head')
    <link href="{{asset('BackEnd/css/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('head-content')
    <span class="fa fa-table">&nbsp;</span>لیست همه مشتریان
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
                        <table class="text-center table table-striped table-bordered table-hover centerTable thAlign" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>ردیف</th>
                                <th>تصویر</th>
                                <th>نام</th>
                                <th>شماره همراه</th>
{{--                                <th> + - </th>--}}
                            </tr>
                            </thead>
                            @if(isset($costomer))
                                <tbody>
                                <?php $i = 1 ?>
                                @foreach($costomer as $item)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>
                                            <img src={{asset("img/admin/profile/$item->avatar")}} style="height:50px;"/>
                                        </td>
                                        <td>{{$item->name}} {{$item->family}}</td>
                                        <td>{{$item->mobile}}</td>
{{--                                        <td>--}}
{{--                                            @if($item->position == 0)--}}
{{--                                                ---}}
{{--                                            @else--}}
{{--                                                {{$item->position}}--}}
{{--                                            @endif--}}
{{--                                        </td>--}}
{{--                                        <td>--}}
{{--                                            <a class="btn btn-warning btn-xs" href="{{route('menu.edit' ,$item->id)}}">ویرایش و حذف</a>--}}
{{--                                            {!! Form::open(['method'=>'DELETE', 'action'=>['BackEnd\Admin\CustomersController@destroy', $item->id]]) !!}--}}
{{--                                            <div class="form-group col-sm-6">--}}
{{--                                                {!! Form::submit('حذف', ['class'=>'btn btn-danger btn-xs', 'onclick' => "return confirm('آیا می خواهید این محصول را حذف کنید؟')"]) !!}--}}
{{--                                            </div>--}}
{{--                                            {!! Form::close() !!}--}}

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
    <script src="{{asset('BackEnd/js/rate-plugin/index.js')}}"></script>

    {{--for data table--}}
    <script>
        $(document).ready(function () {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
@endsection

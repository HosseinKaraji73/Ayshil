@extends('BackEnd.Layouts.admin')
@section('head-content')
    <span class="fa fa-pencil">&nbsp;</span>ویرایش رنگ
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

    <div class="col-sm-8 col-sm-push-2">

        {!! Form::model($state,['method'=>'PATCH','action'=>['BackEnd\Admin\StateController@update',$state->id],'files'=>true ,'id' =>'myForm'])!!}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                {!! Form::label('name', ' عنوان شهر :') !!}
                {!! Form::text('name', null,['id'=>'name' ,'class'=>'form-control']) !!}
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
              <div class="form-group{{ $errors->has('normal_post') ? ' has-error' : '' }}">
                {!! Form::label('normal_post', 'هزینه اضافه دریافتی پست معمولی :') !!}
                {!! Form::text('normal_post', null,['id'=>'normal_post' ,'class'=>'form-control']) !!}
                @if ($errors->has('normal_post'))
                    <span class="help-block">
                        <strong>{{ $errors->first('normal_post') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('express_post') ? ' has-error' : '' }}">
                {!! Form::label('express_post', 'هزینه اضافه دریافتی پست پیشتا :') !!}
                {!! Form::text('express_post', null,['id'=>'express_post' ,'class'=>'form-control']) !!}
                @if ($errors->has('express_post'))
                    <span class="help-block">
                        <strong>{{ $errors->first('express_post') }}</strong>
                    </span>
                @endif
            </div>

        <div class="row">
            <div class="form-group col-sm-6">
                {!! Form::submit('ویرایش', ['class'=>'form-control btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>

            {!! Form::open(['method'=>'DELETE', 'action'=>['BackEnd\Admin\StateController@destroy', $state->id]]) !!}
            <div class="form-group col-sm-6">
                {!! Form::submit('حذف', ['class'=>'form-control btn btn-danger', 'onclick' => "return confirm('آیا می خواهید این مورد را حذف کنید؟')"]) !!}
            </div>
            {!! Form::close() !!}

        </div>
    </div>

    <div class="clearfix"></div>

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#myForm').submit(function (e) {
                if ($('#photo')[0].files[0].size > 1024000) {
                    //Prevent default and display error
                    alert("حجم تصویر انتخابی شما باید حداکثر 1 مگابایت باشد.");
                    e.preventDefault();
                }
                if ($('#icon')[0].files[0].size > 1024000) {
                    //Prevent default and display error
                    alert("حجم آیکون انتخابی شما باید حداکثر 1 مگابایت باشد.");
                    e.preventDefault();
                }
            });
        });
    </script>
@endsection

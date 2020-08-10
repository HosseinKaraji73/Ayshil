@extends('BackEnd.Layouts.admin')
@section('head-content')
    <span class="fa fa-plus-circle">&nbsp;</span>  ایجاد شهر
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

        {!! Form::open(['method'=>'POST', 'action'=>'BackEnd\Admin\StateController@store' ,'files' => true , 'enctype'=> 'multipart/form-data' ,'id' => 'myForm']) !!}
        @csrf



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


{{--            <div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">--}}
{{--                {!! Form::label('position', 'موقعیت در صفحه اصلی :') !!}--}}
{{--                {!! Form::select('position',['0'=>'در صفحه اصلی قرار نگیرد' ,'1'=>'1' ,'2'=>'2' ,'3'=>'3' ,'4'=>'4' ,'5'=>'5' ,'7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12','13'=>'13','14'=>'14','15'=>'15','16'=>'16' ] , null, ['class'=>'form-control']) !!}--}}
{{--                @if ($errors->has('position'))--}}
{{--                    <span class="help-block">--}}
{{--                    <strong>{{ $errors->first('position') }}</strong>--}}
{{--                </span>--}}
{{--                @endif--}}
{{--            </div>--}}


        <div class="form-group">
            {!! Form::submit('ثبت', ['class'=>'form-control btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
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

@extends('BackEnd.Layouts.admin')
@section('head-content')
    <span class="fa fa-plus-circle">&nbsp;</span>همکاران ما
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

        {!! Form::open(['method'=>'POST', 'action'=>'BackEnd\Admin\CustomersController@store' ,'files' => true , 'enctype'=> 'multipart/form-data' ,'id' => 'myForm']) !!}
       @csrf
            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                {!! Form::label('title', ' عنوان همکار :') !!}
                {!! Form::text('title', null,['id'=>'title' ,'class'=>'form-control']) !!}
                @if ($errors->has('title'))
                    <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
            </div>
        <div class="form-group{{ $errors->has('title_en') ? ' has-error' : '' }}">
            {!! Form::label('title_en', ' عنوان همکار انگلیسی:') !!}
            {!! Form::text('title_en', null,['id'=>'title_en' ,'class'=>'form-control']) !!}
            @if ($errors->has('title_en'))
                <span class="help-block">
                        <strong>{{ $errors->first('title_en') }}</strong>
                    </span>
            @endif
        </div>
        <br>
        <br>
        <br>
        <div class="col-sm-4 form-group{{ $errors->has('photo') ? ' has-error' : '' }}">
            {!! Form::label('photo', ' لوگوی همکار :') !!}
            {!! Form::file('photo', null, ['class'=>'form-control']) !!}
            @if ($errors->has('photo'))
                <span class="help-block">
                        <strong>{{ $errors->first('photo') }}</strong>
                    </span>
            @endif
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
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

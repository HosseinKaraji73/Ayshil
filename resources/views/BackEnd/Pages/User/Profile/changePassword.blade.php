@extends('BackEnd.Layouts.user')
@section('head-content')
    <span class="fa fa-key">&nbsp;</span>  تغییر رمز عبور
@endsection
@section('style')

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
        {!! Form::model( $user, ['method'=>'PATCH', 'action'=>['BackEnd\User\UserController@changePassword' , $user->id]]) !!}

        <div class="form-group{{ $errors->has('oldPassword') ? ' has-error' : '' }}">
            {!! Form::label('oldPassword', 'رمز عبور فعلی : ') !!}
            {!! Form::password('oldPassword', ['class'=>'form-control']) !!}
            @if ($errors->has('oldPassword'))
                <span class="help-block">
                <strong>{{ $errors->first('oldPassword') }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('newPassword') ? ' has-error' : '' }}">
            {!! Form::label('newPassword', 'رمز عبور جدید : ') !!}
            {!! Form::password('newPassword', ['class'=>'form-control']) !!}
            @if ($errors->has('newPassword'))
                <span class="help-block">
                <strong>{{ $errors->first('newPassword') }}</strong>
            </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('newPassword_confirmation') ? ' has-error' : '' }}">
            {!! Form::label('newPassword_confirmation', 'تکرار رمز جدید : ') !!}
            {!! Form::password('newPassword_confirmation', ['class'=>'form-control']) !!}
            @if ($errors->has('newPassword_confirmation'))
                <span class="help-block">
                <strong>{{ $errors->first('newPassword_confirmation') }}</strong>
            </span>
            @endif
        </div>
        {!! Form::submit('ثبت تغییرات', ['class'=>'btn btn-primary form-control']) !!}
        {!! Form::close() !!}

    </div>
    <div class="clearfix"></div>

@endsection

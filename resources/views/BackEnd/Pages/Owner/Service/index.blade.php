@extends('auth.layouts.BackEnd.owner')
@section('head-content')
    <span class="fa fa-plus-circle">&nbsp;</span>تعطیلی فروشگاه
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
    <div class="col-sm-5 col-sm-push-2">

        {!! Form::open(['method'=>'POST', 'action'=>'BackEnd\Chef\ServiceController@index' ,'files' => true , 'enctype'=> 'multipart/form-data' ,'id' => 'myForm']) !!}
        {{ csrf_field() }}



        <div class="form-group{{ $errors->has('service') ? ' has-error' : '' }}">
            {!! Form::label('service', 'انتخاب کنید :') !!}
            {!! Form::select('service',['-1'=>'','0'=>'فروشگاه تعطیل است' ,'1'=>'فروشگاه تعطیل نیست'] , null, ['class'=>'form-control']) !!}
            @if ($errors->has('service'))
                <span class="help-block">
                    <strong>{{ $errors->first('service') }}</strong>
                </span>
            @endif
        </div>


        <div class="form-group">
            {!! Form::submit('ثبت', ['class'=>'form-control btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}
    </div>
    <div class="clearfix"></div>

@endsection


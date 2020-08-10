@extends('BackEnd.Layouts.admin')
@section('head-content')
    <span class="fa fa-user">&nbsp;</span> ویرایش پروفایل کاربری
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

        <img src="{{asset('img/admin/profile/'.Auth::user()->avatar)}}" class="img-responsive" style="width: 150px">


        {!! Form::model(auth()->user(),['method'=>'PATCH','action'=>['BackEnd\Admin\UserController@update',auth()->user()->id],'files'=>true ,'id' => 'myForm'])!!}

        <input type="hidden" value="{{auth()->user()->id}}">


        <div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
            <label for="avatar" class="pull-right">تصویر :</label>
            <input type="file" class="form-control" name="avatar" id="avatar" value="{{old('avatar')}}">
            @if ($errors->has('avatar'))
                <span class="help-block">
                    <strong>{{ $errors->first('avatar') }}</strong>
                </span>
            @endif
        </div>

        <div class="row">
            <div class="col-sm-6 form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                {!! Form::label('name','نام :',['class'=>'pull-right']) !!}
                {!! Form::text('name',null,['class'=>'form-control'])!!}
                @if ($errors->has('name'))
                    <span class="help-block pull-right">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col-sm-6 form-group{{ $errors->has('family') ? ' has-error' : '' }}">
                {!! Form::label('family','نام خانوادگی :',['class'=>'pull-right']) !!}
                {!! Form::text('family',null,['class'=>'form-control'])!!}
                @if ($errors->has('family'))
                    <span class="help-block pull-right">
                         <strong>{{ $errors->first('family') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        {!! Form::submit('ویرایش اطلاعات ',['class'=>'form-control btn btn-primary']) !!}
        {!!Form::close()!!}

    </div>
    <div class="clearfix"></div>

@endsection

@section('script')
    <script>

        $(document).ready(function () {
            $('#myForm').submit(function (e) {
                if ($('#avatar')[0].files[0].size > 1024000) {
                    //Prevent default and display error
                    alert("حجم فایل انتخابی شما باید حداکثر 1 مگابایت باشد.");
                    e.preventDefault();
                }
            });
        });

    </script>
@endsection

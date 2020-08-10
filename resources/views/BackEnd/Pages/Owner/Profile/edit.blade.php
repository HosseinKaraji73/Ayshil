@extends('auth.layouts.BackEnd.owner')
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

        <img src="{{auth()->user()->avatar}}" class="img-responsive" style="width: 100px">
        تصویر فروشگاه شما در صفحه اصلی سایت(برای دریافت تصویر با لوگوی خود با ادمین ارتباط برقرار کنید) :
        {!! Form::model(auth()->user(),['method'=>'PATCH','action'=>['BackEnd\Chef\UserController@update',auth()->user()->id],'files'=>true ,'id' => 'myForm'])!!}
        <input type="hidden" value="{{auth()->user()->id}}" name="id" id="id">
        <div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
           <input type="file" class="form-control" name="avatar" id="avatar" value="{{old('avatar')}}">
            @if ($errors->has('avatar'))
                <span class="help-block">
                    <strong>{{ $errors->first('avatar') }}</strong>
                </span>
            @endif
        </div>

        <div class="row">
            <div class="col-sm-6 form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                {!! Form::label('name','نام فروشگاه :') !!}
                {!! Form::text('name',null,['class'=>'form-control'])!!}
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col-sm-6 form-group{{ $errors->has('family') ? ' has-error' : '' }}">
                {!! Form::label('family','نام صاحب فروشگاه :') !!}
                {!! Form::text('family',null,['class'=>'form-control'])!!}
                @if ($errors->has('family'))
                    <span class="help-block">
                         <strong>{{ $errors->first('family') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                {!! Form::label('mobile','شماره تلفن همراه :') !!}
                {!! Form::text('mobile',null,['class'=>'form-control'])!!}
                @if ($errors->has('mobile'))
                    <span class="help-block">
                         <strong>{{ $errors->first('mobile') }}</strong>
                    </span>
                @endif
            </div>
            <div class="col-sm-6 form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                {!! Form::label('phone','شماره تلفن ثابت :') !!}
                {!! Form::text('phone',null,['class'=>'form-control','placeholder'=>'08612345678'])!!}
                @if ($errors->has('phone'))
                    <span class="help-block">
                         <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('city_id') ? ' has-error' : '' }}">
            {!! Form::label('city_id','شهر :') !!}
            {!! Form::select('city_id',$cities,null,['class'=>'form-control','placeholder'=>'انتخاب کنید'])!!}
            @if ($errors->has('city_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('city_id') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
            {!! Form::label('address','آدرس :') !!}
            {!! Form::textarea('address',null,['class'=>'form-control'])!!}
            @if ($errors->has('address'))
                <span class="help-block">
                    <strong>{{ $errors->first('address') }}</strong>
                </span>
            @endif
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

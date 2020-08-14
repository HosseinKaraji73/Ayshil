@extends('BackEnd.Layouts.admin')
@section('head-content')
    <span class="fa fa-plus-circle">&nbsp;</span>  ایجاد زیر منو 1
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

        {!! Form::open(['method'=>'POST', 'action'=>'BackEnd\Admin\SubMenuProductController@store' ,'files' => true , 'enctype'=> 'multipart/form-data' ,'id' => 'myForm']) !!}
        @csrf

            {{--<div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">--}}
                {{--<label for="photo" class="pull-right">تصویر :</label>--}}
                {{--<input type="file" class="form-control" name="photo" id="photo" value="{{old('photo')}}">--}}
                {{--@if ($errors->has('photo'))--}}
                    {{--<span class="help-block">--}}
                        {{--<strong>{{ $errors->first('photo') }}</strong>--}}
                    {{--</span>--}}
                {{--@endif--}}
            {{--</div>--}}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                {!! Form::label('name', ' عنوان منو :') !!}
                {!! Form::text('name', null,['id'=>'name' ,'class'=>'form-control']) !!}
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

{{--            <div class="form-group{{ $errors->has('name_en') ? ' has-error' : '' }}">--}}
{{--                {!! Form::label('name_en', ' عنوان منو انگلیسی:') !!}--}}
{{--                {!! Form::text('name_en', null,['id'=>'name_en' ,'class'=>'form-control']) !!}--}}
{{--                @if ($errors->has('name_en'))--}}
{{--                    <span class="help-block">--}}
{{--                            <strong>{{ $errors->first('name_en') }}</strong>--}}
{{--                        </span>--}}
{{--                @endif--}}
{{--            </div>--}}

            <div class="form-group{{ $errors->has('menuProducts_id') ? ' has-error' : '' }}">
                {!! Form::label('menuProducts_id', 'زیر مجموعه کدام منو اصلی باشد؟') !!}
                {!! Form::select('menuProducts_id',$MenuProduct , null, ['class'=>'form-control','placeholder'=>'انتخاب کنید']) !!}
                @if ($errors->has('menuProducts_id'))
                    <span class="help-block">
                    <strong>{{ $errors->first('menuProducts_id') }}</strong>
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

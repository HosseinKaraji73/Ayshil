@extends('BackEnd.Layouts.admin')
@section('head-content')
	<span class="fa fa-plus-circle">&nbsp;</span> ایجاد خبر جدید
	<br>
	<p style="font-size: 15px;color: red;margin-top: 15px">     Photo Size: 210px * 210px</p>
@endsection
@section('head')
	<link rel="stylesheet" href="{{asset('BackEnd/css/chosen.min.css')}}">
	<style>
		.advBtn {
			margin-right: 10px;
			background-color: #fff;
			padding: 5px 20px;
		}
	</style>
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
	</div>
	{{--    <div class="col-sm-12 well well-sm text-red">--}}
	{{--        پرکردن فیلدهای ستاره دار اجباری است.--}}
	{{--    </div>--}}

	<div class="col-sm-12">
		{!! Form::open(['method'=>'POST', 'action'=>'BackEnd\Admin\EventsController@store' ,'files' => TRUE , 'enctype'=> 'multipart/form-data' ,'id' => 'myForm']) !!}
		{{ csrf_field() }}

		<div class="row">
			<div class="col-sm-3 form-group{{ $errors->has('photo1') ? ' has-error' : '' }}">
				{!! Form::label('photo1', ' عکس خبر* :') !!}
				{!! Form::file('photo1', NULL, ['class'=>'form-control']) !!}
				@if ($errors->has('photo1'))
					<span class="help-block">
                        <strong>{{ $errors->first('photo1') }}</strong>
                    </span>
				@endif
			</div>

			{{--            <div class="col-sm-3 form-group{{ $errors->has('photo2') ? ' has-error' : '' }}">--}}
			{{--                {!! Form::label('photo2', ' عکس دوم :') !!}--}}
			{{--                {!! Form::file('photo2', null, ['class'=>'form-control']) !!}--}}
			{{--                @if ($errors->has('photo2'))--}}
			{{--                    <span class="help-block">--}}
			{{--                        <strong>{{ $errors->first('photo2') }}</strong>--}}
			{{--                    </span>--}}
			{{--                @endif--}}
			{{--            </div>--}}

			{{--            <div class="col-sm-3 form-group{{ $errors->has('photo3') ? ' has-error' : '' }}">--}}
			{{--                {!! Form::label('photo3', ' عکس سوم :') !!}--}}
			{{--                {!! Form::file('photo3', null, ['class'=>'form-control']) !!}--}}
			{{--                @if ($errors->has('photo3'))--}}
			{{--                    <span class="help-block">--}}
			{{--                        <strong>{{ $errors->first('photo3') }}</strong>--}}
			{{--                    </span>--}}
			{{--                @endif--}}
			{{--            </div>--}}

			{{--            <div class="col-sm-3 form-group{{ $errors->has('photo4') ? ' has-error' : '' }}">--}}
			{{--                {!! Form::label('photo4', ' عکس چهارم :') !!}--}}
			{{--                {!! Form::file('photo4', null, ['class'=>'form-control']) !!}--}}
			{{--                @if ($errors->has('photo4'))--}}
			{{--                    <span class="help-block">--}}
			{{--                        <strong>{{ $errors->first('photo4') }}</strong>--}}
			{{--                    </span>--}}
			{{--                @endif--}}
			{{--            </div>--}}


		</div>
		<br>
		<div class="row">

			<div class="col-sm-3 form-group{{ $errors->has('title') ? ' has-error' : '' }}">
				{!! Form::label('title', ' عنوان خبر* :') !!}
				{!! Form::text('title', NULL,['id'=>'title' ,'class'=>'form-control']) !!}
				@if ($errors->has('title'))
					<span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
				@endif
			</div>

            <div class="col-sm-3 form-group{{ $errors->has('title_en') ? ' has-error' : '' }}">
                {!! Form::label('title_en', ' عنوان خبر انگلیسی* :') !!}
                {!! Form::text('title_en', NULL,['id'=>'title_en' ,'class'=>'form-control']) !!}
                @if ($errors->has('title_en'))
                    <span class="help-block">
                    <strong>{{ $errors->first('title_en') }}</strong>
                </span>
                @endif
            </div>

		</div>

        <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
            {!! Form::label('text', ' توضیحات اخبار برای نمایش اولیه(فقط ۱۰۰ کلمه نمایش داده میشود) :') !!}
            {!! Form::textarea('text', null,['class'=>'form-control']) !!}
            @if ($errors->has('text'))
                <span class="help-block">
                    <strong>{{ $errors->first('text') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('text_en') ? ' has-error' : '' }}">
            {!! Form::label('text_en', ' توضیحات اخبار برای نمایش اولیه انگلیسی(فقط ۱۰۰ کلمه نمایش داده میشود) :') !!}
            {!! Form::textarea('text_en', null,['class'=>'form-control']) !!}
            @if ($errors->has('text_en'))
                <span class="help-block">
                    <strong>{{ $errors->first('text_en') }}</strong>
                </span>
            @endif
        </div>

		<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
			{!! Form::label('description', ' توضیح کامل خبر :') !!}
			{!! Form::textarea('description', NULL,['class'=>'form-control','id'=>'ckeditor1']) !!}
			@if ($errors->has('description'))
				<span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
			@endif
		</div>
        <div class="form-group{{ $errors->has('description_en') ? ' has-error' : '' }}">
            {!! Form::label('description_en', ' توضیح کامل خبر انگلیسی:') !!}
            {!! Form::textarea('description_en', NULL,['class'=>'form-control','id'=>'ckeditor2']) !!}
            @if ($errors->has('description_en'))
                <span class="help-block">
                    <strong>{{ $errors->first('description_en') }}</strong>
                </span>
            @endif
        </div>



		<div class="clearfix"></div>

		<div class="form-group">
			{!! Form::submit('ثبت', ['class'=>'form-control btn btn-primary']) !!}
		</div>
		{!! Form::close() !!}

	</div>
	<div class="clearfix"></div>

    <script src="{{asset('BackEnd/vendor/ckeditor_4.13.1_full/ckeditor.js')}}"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>
    <script>
        CKEDITOR.replace('ckeditor1', options);
        CKEDITOR.replace('ckeditor2', options);
    </script>

@endsection

@section('script')

	<script>
        $(document).ready(function () {
            $('#myForm').submit(function (e) {
                if ($('#photo')[0].files[0].size > 1024000) {
                    //Prevent default and display error
                    alert("حجم فایل انتخابی شما باید حداکثر 1 مگابایت باشد.");
                    e.preventDefault();
                }
            });

        });
	</script>
	<script src="{{asset('/js/admin/jquery.mask.min.js')}}"></script>
	<script src="{{asset('/js/admin/chosen.jquery.min.js')}}"></script>
	{{--type script--}}
	{{--<script src="https://code.jquery.com/jquery-latest.js"></script>--}}

	{{--end type script--}}
	<script type="text/javascript">
        $(".chosen").chosen();
	</script>

    <script src="{{asset('BackEnd/vendor/ckeditor_4.13.1_full/ckeditor.js')}}"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>
	<script>
        CKEDITOR.replace('ckeditor1', options);
	</script>
@endsection

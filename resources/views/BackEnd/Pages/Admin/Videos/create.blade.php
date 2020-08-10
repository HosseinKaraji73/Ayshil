@extends('BackEnd.Layouts.admin')
@section('head-content')
	<span class="fa fa-plus-circle">&nbsp;</span> ایجاد ویدیو جدید
	<br>
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

        {!! Form::open(['method'=>'POST','action'=>['BackEnd\Admin\VideoController@store'],'files'=>true ,'id' => 'myForm'])!!}

        <input type="hidden" value="{{auth()->user()->id}}">
        <div class="row">
            <div class="col-sm-6 form-group{{ $errors->has('link') ? ' has-error' : '' }}">
                {!! Form::label('link','لینک ویدئو :',['class'=>'pull-right']) !!}
                {!! Form::text('link',null,['class'=>'form-control'])!!}
                @if ($errors->has('link'))
                    <span class="help-block pull-right">
                        <strong>{{ $errors->first('link') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col-sm-6 form-group{{ $errors->has('picture') ? ' has-error' : '' }}">
                <label for="picture" class="pull-right">تصویر :</label>
                <input type="file" class="form-control" name="picture" id="picture" value="{{old('picture')}}">
                @if ($errors->has('picture'))
                    <span class="help-block">
                    <strong>{{ $errors->first('picture') }}</strong>
                </span>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                {!! Form::label('title','نام ویدئو :',['class'=>'pull-right']) !!}
                {!! Form::text('title',null,['class'=>'form-control'])!!}
                @if ($errors->has('title'))
                    <span class="help-block pull-right">
                         <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif
            </div>
            <div class="col-sm-6 form-group{{ $errors->has('title_en') ? ' has-error' : '' }}">
                {!! Form::label('title_en','نام ویدئو انگلیسی:',['class'=>'pull-right']) !!}
                {!! Form::text('title_en',null,['class'=>'form-control'])!!}
                @if ($errors->has('title_en'))
                    <span class="help-block pull-right">
                         <strong>{{ $errors->first('title_en') }}</strong>
                    </span>
                @endif
            </div>
            <div class="col-sm-6 form-group{{ $errors->has('fav') ? ' has-error' : '' }}">
                {!! Form::label('fav','انتخاب به عنوان ویدئو منتخب:',['class'=>'pull-right']) !!}
                {!! Form::checkbox('fav', '1', false); !!}
                @if ($errors->has('fav'))
                    <span class="help-block pull-right">
                         <strong>{{ $errors->first('fav') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            {!! Form::submit('ثبت', ['class'=>'form-control btn btn-primary']) !!}
        </div>

        {!!Form::close()!!}

    </div>
    <div class="clearfix"></div>

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

@extends('BackEnd.Layouts.admin')
@section('head-content')
	<span class="fa fa-pencil">&nbsp;</span> ویرایش ارتباط با ما
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

	<div class="col-sm-12">
		{!! Form::model($contact ,['method'=>'PATCH', 'action'=> ['BackEnd\Admin\ContactController@update' ,$contact->id] ,'files' => TRUE ,'id' => 'myForm']) !!}
		@csrf

{{--		<div class="row">--}}
{{--			<div class="col-sm-3 form-group img img-responsive">--}}
{{--				 عکس راست--}}
{{--				@if($contact->photo1)--}}
{{--					<img src="{{asset("img/admin/contact/$contact->photo1")}}" style="width: 150px;">--}}
{{--				@elseif(!isset($contact->photo1))--}}
{{--					<img src="{{asset('img/admin/null.png')}}" style="width: 150px;">--}}
{{--				@endif--}}
{{--			</div>--}}

{{--			<div class="col-sm-3 form-group img img-responsive">--}}
{{--				عکس چپ--}}
{{--				@if($contact->photo1)--}}
{{--					<img src="{{asset("img/admin/contact/$contact->photo2")}}" style="width: 150px;">--}}
{{--				@elseif(!isset($contact->photo1))--}}
{{--					<img src="{{asset('img/admin/null.png')}}" style="width: 150px;">--}}
{{--				@endif--}}
{{--			</div>--}}
{{--		</div>--}}

{{--		<div class="row">--}}
{{--			<div class="col-sm-3 form-group{{ $errors->has('photo1') ? ' has-error' : '' }}">--}}
{{--				{!! Form::label('photo1', ' عکس راست: 1500px * 500px') !!}--}}
{{--				{!! Form::file('photo1', NULL, ['class'=>'form-control']) !!}--}}
{{--				@if ($errors->has('photo1'))--}}
{{--					<span class="help-block">--}}
{{--                        <strong>{{ $errors->first('photo1') }}</strong>--}}
{{--                    </span>--}}
{{--				@endif--}}
{{--			</div>--}}


{{--			<div class="col-sm-3 form-group{{ $errors->has('photo2') ? ' has-error' : '' }}">--}}
{{--				{!! Form::label('photo2', ' عکس چپ: 250px * 250px') !!}--}}
{{--				{!! Form::file('photo2', NULL, ['class'=>'form-control']) !!}--}}
{{--				@if ($errors->has('photo2'))--}}
{{--					<span class="help-block">--}}
{{--                        <strong>{{ $errors->first('photo2') }}</strong>--}}
{{--                    </span>--}}
{{--				@endif--}}
{{--			</div>--}}
{{--		</div>--}}


		<div class="row">
			<div class="col-sm-3 form-group{{ $errors->has('title1') ? ' has-error' : '' }}">
				{!! Form::label('title1', ' تلفن:') !!}
				{!! Form::text('title1', NULL,['id'=>'title1' ,'class'=>'form-control']) !!}
				@if ($errors->has('title1'))
					<span class="help-block">
                    <strong>{{ $errors->first('title1') }}</strong>
                </span>
				@endif
			</div>
			<div class="col-sm-3 form-group{{ $errors->has('title2') ? ' has-error' : '' }}">
				{!! Form::label('title2', 'آدرس دفتر:') !!}
				{!! Form::textarea('title2', NULL,['id'=>'title2' ,'class'=>'form-control']) !!}
				@if ($errors->has('title2'))
					<span class="help-block">
                    <strong>{{ $errors->first('title2') }}</strong>
                </span>
				@endif
			</div>
			<div class="col-sm-3 form-group{{ $errors->has('title3') ? ' has-error' : '' }}">
				{!! Form::label('title3', ' آدرس کارخانه :') !!}
				{!! Form::textarea('title3', NULL,['id'=>'title3' ,'class'=>'form-control']) !!}
				@if ($errors->has('title3'))
					<span class="help-block">
                    <strong>{{ $errors->first('title3') }}</strong>
                </span>
				@endif
			</div>

            <div class="col-sm-3 form-group{{ $errors->has('title4') ? ' has-error' : '' }}">
                {!! Form::label('title4', 'ایمیل:') !!}
                {!! Form::text('title4', NULL,['id'=>'title4' ,'class'=>'form-control']) !!}
                @if ($errors->has('title4'))
                    <span class="help-block">
                    <strong>{{ $errors->first('title4') }}</strong>
                </span>
                @endif
            </div>

		</div>

        <div class="row">
            <div class="col-sm-3 form-group{{ $errors->has('title1_en') ? ' has-error' : '' }}">
                {!! Form::label('title1_en', ' تلفن انگلیسی:') !!}
                {!! Form::text('title1_en', NULL,['id'=>'title1_en' ,'class'=>'form-control']) !!}
                @if ($errors->has('title1_en'))
                    <span class="help-block">
                    <strong>{{ $errors->first('title1_en') }}</strong>
                </span>
                @endif
            </div>
            <div class="col-sm-3 form-group{{ $errors->has('title2_en') ? ' has-error' : '' }}">
                {!! Form::label('title2_en', 'آدرس دفتر انگلیسی:') !!}
                {!! Form::textarea('title2_en', NULL,['id'=>'title2_en' ,'class'=>'form-control']) !!}
                @if ($errors->has('title2_en'))
                    <span class="help-block">
                    <strong>{{ $errors->first('title2_en') }}</strong>
                </span>
                @endif
            </div>
            <div class="col-sm-3 form-group{{ $errors->has('title3_en') ? ' has-error' : '' }}">
                {!! Form::label('title3_en', ' آدرس کارخانه انگلیسی:') !!}
                {!! Form::textarea('title3_en', NULL,['id'=>'title3_en' ,'class'=>'form-control']) !!}
                @if ($errors->has('title3_en'))
                    <span class="help-block">
                    <strong>{{ $errors->first('title3_en') }}</strong>
                </span>
                @endif
            </div>

        </div>


{{--		<div class="row">--}}
{{--			<div class="form-group{{ $errors->has('address1') ? ' has-error' : '' }}">--}}
{{--				{!! Form::label('address1', 'ادرس دفتر مرکزی :') !!}--}}
{{--				{!! Form::textarea('address1', NULL,['class'=>'form-control']) !!}--}}
{{--				@if ($errors->has('address1'))--}}
{{--					<span class="help-block">--}}
{{--                    <strong>{{ $errors->first('address1') }}</strong>--}}
{{--                </span>--}}
{{--				@endif--}}
{{--			</div>--}}

{{--			<div class="form-group{{ $errors->has('address2') ? ' has-error' : '' }}">--}}
{{--				{!! Form::label('address2', 'آدرس دفتر شهرستان :') !!}--}}
{{--				{!! Form::textarea('address2', NULL,['class'=>'form-control']) !!}--}}
{{--				@if ($errors->has('address2'))--}}
{{--					<span class="help-block">--}}
{{--                    <strong>{{ $errors->first('address2') }}</strong>--}}
{{--                </span>--}}
{{--				@endif--}}
{{--			</div>--}}

{{--			<div class="form-group{{ $errors->has('address3') ? ' has-error' : '' }}">--}}
{{--				{!! Form::label('address3', 'آدرس کارخانه :') !!}--}}
{{--				{!! Form::textarea('address3', NULL,['class'=>'form-control']) !!}--}}
{{--				@if ($errors->has('address3'))--}}
{{--					<span class="help-block">--}}
{{--                    <strong>{{ $errors->first('address3') }}</strong>--}}
{{--                </span>--}}
{{--				@endif--}}
{{--			</div>--}}
{{--		</div>--}}

		<div class="clearfix"></div>

		{{--        <div class="form-group">--}}
		{{--            {!! Form::submit('ثبت', ['class'=>'form-control btn btn-primary']) !!}--}}
		{{--        </div>--}}
		{{--        {!! Form::close() !!}--}}


		{{--        {!! Form::open(['method'=>'DELETE', 'action'=>['BackEnd\Admin\ProductsController@destroy', $product->id]]) !!}--}}
		{{--        <div class="form-group col-sm-6">--}}
		{{--            {!! Form::submit('حذف', ['class'=>'form-control btn btn-danger', 'onclick' => "return confirm('آیا می خواهید این محصول را حذف کنید؟')"]) !!}--}}
		{{--        </div>--}}
		{{--        {!! Form::close() !!}--}}


		<div class="row">
			<div class="form-group col-sm-12">
				{!! Form::submit('ویرایش', ['class'=>'form-control btn btn-primary']) !!}
				{!! Form::close() !!}
			</div>

			{{--{!! Form::open(['method'=>'DELETE', 'action'=>['BackEnd\Admin\ArticlesController@destroy', $article->id]]) !!}--}}
			{{--<div class="form-group col-sm-6">--}}
			{{--    {!! Form::submit('حذف', ['class'=>'form-control btn btn-danger', 'onclick' => "return confirm('آیا می خواهید این محصول را حذف کنید؟')"]) !!}--}}
			{{--</div>--}}
			{{--{!! Form::close() !!}--}}

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
                    alert("حجم فایل انتخابی شما باید حداکثر 1 مگابایت باشد.");
                    e.preventDefault();
                }
            });

        });
	</script>
	<script src="{{asset('/js/admin/jquery.mask.min.js')}}"></script>
	<script src="{{asset('/js/admin/chosen.jquery.min.js')}}"></script>
	<script type="text/javascript">
        $(".chosen").chosen();
	</script>
@endsection

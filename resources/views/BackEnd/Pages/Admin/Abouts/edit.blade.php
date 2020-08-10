@extends('BackEnd.Layouts.admin')
@section('head-content')
    <span class="fa fa-pencil">&nbsp;</span> ویرایش درباره ما
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
        {!! Form::model($about ,['method'=>'PATCH', 'action'=> ['BackEnd\Admin\AboutController@update' ,$about->id] ,'files' => true ,'id' => 'myForm']) !!}
        @csrf

        <div class="row">
            <div class="col-sm-3 form-group img img-responsive">
                عکس همکار اول
                @if($about->teamPhoto1)
                    <img src="{{asset("img/admin/about/$about->teamPhoto1")}}" style="width: 150px;">
                @elseif(!isset($about->teamPhoto1))
                    <img src="{{asset('img/admin/null.png')}}" style="width: 150px;">
                @endif
            </div>

            <div class="col-sm-3 form-group img img-responsive">
                عکس همکار دوم
                @if($about->teamPhoto2)
                    <img src="{{asset("img/admin/about/$about->teamPhoto2")}}" style="width: 150px;">
                @elseif(!isset($about->teamPhoto2))
                    <img src="{{asset('img/admin/null.png')}}" style="width: 150px;">
                @endif
            </div>

            <div class="col-sm-3 form-group img img-responsive">
                عکس همکار سوم
                @if($about->teamPhoto3)
                    <img src="{{asset("img/admin/about/$about->teamPhoto3")}}" style="width: 150px;">
                @elseif(!isset($about->teamPhoto3))
                    <img src="{{asset('img/admin/null.png')}}" style="width: 150px;">
                @endif
            </div>

            <div class="col-sm-3 form-group img img-responsive">
                عکس همکار چهارم
                @if($about->teamPhoto4)
                    <img src="{{asset("img/admin/about/$about->teamPhoto4")}}" style="width: 150px;">
                @elseif(!isset($about->teamPhoto4))
                    <img src="{{asset('img/admin/null.png')}}" style="width: 150px;">
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3 form-group{{ $errors->has('teamPhoto1') ? ' has-error' : '' }}">
                {!! Form::label('teamPhoto1', 'عکس همکار اول: 1120px * 290px') !!}
                {!! Form::file('teamPhoto1', null, ['class'=>'form-control']) !!}
                @if ($errors->has('teamPhoto1'))
                    <span class="help-block">
                        <strong>{{ $errors->first('teamPhoto1') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col-sm-3 form-group{{ $errors->has('teamPhoto2') ? ' has-error' : '' }}">
                {!! Form::label('teamPhoto2', 'عکس همکار دوم: 1120px * 290px') !!}
                {!! Form::file('teamPhoto2', null, ['class'=>'form-control']) !!}
                @if ($errors->has('teamPhoto2'))
                    <span class="help-block">
                        <strong>{{ $errors->first('teamPhoto2') }}</strong>
                    </span>
                @endif
            </div>
            <div class="col-sm-3 form-group{{ $errors->has('teamPhoto3') ? ' has-error' : '' }}">
                {!! Form::label('teamPhoto3', 'عکس همکار سوم: 290px * 290px') !!}
                {!! Form::file('teamPhoto3', null, ['class'=>'form-control']) !!}
                @if ($errors->has('teamPhoto3'))
                    <span class="help-block">
                        <strong>{{ $errors->first('teamPhoto3') }}</strong>
                    </span>
                @endif
            </div>
            <div class="col-sm-3 form-group{{ $errors->has('teamPhoto4') ? ' has-error' : '' }}">
                {!! Form::label('teamPhoto4', 'عکس همکار چهارم: 290px * 290px') !!}
                {!! Form::file('teamPhoto4', null, ['class'=>'form-control']) !!}
                @if ($errors->has('teamPhoto4'))
                    <span class="help-block">
                        <strong>{{ $errors->first('teamPhoto4') }}</strong>
                    </span>
                @endif
            </div>

        </div>


        <div class="row">
            <div class="col-sm-3 form-group{{ $errors->has('teamDescrition1') ? ' has-error' : '' }}">
                {!! Form::label('teamDescrition1', 'توضیح همکار اول:') !!}
                {!! Form::textarea('teamDescrition1', null,['id'=>'teamDescrition1' ,'class'=>'form-control']) !!}
                @if ($errors->has('teamDescrition1'))
                    <span class="help-block">
                    <strong>{{ $errors->first('teamDescrition1') }}</strong>
                </span>
                @endif
            </div>

            <div class="col-sm-3 form-group{{ $errors->has('teamDescrition2') ? ' has-error' : '' }}">
                {!! Form::label('teamDescrition2', 'توضیح همکار دوم:') !!}
                {!! Form::textarea('teamDescrition2', null,['class'=>'form-control']) !!}
                @if ($errors->has('teamDescrition2'))
                    <span class="help-block">
                    <strong>{{ $errors->first('teamDescrition2') }}</strong>
                </span>
                @endif
            </div>


            <div class="col-sm-3 form-group{{ $errors->has('teamDescrition3') ? ' has-error' : '' }}">
                {!! Form::label('teamDescrition3', 'توضیح همکار سوم:') !!}
                {!! Form::textarea('teamDescrition3', null,['class'=>'form-control']) !!}
                @if ($errors->has('teamDescrition3'))
                    <span class="help-block">
                    <strong>{{ $errors->first('teamDescrition3') }}</strong>
                </span>
                @endif
            </div>

            <div class="col-sm-3 form-group{{ $errors->has('teamDescrition4') ? ' has-error' : '' }}">
                {!! Form::label('teamDescrition4', 'توضیح همکار چهارم:') !!}
                {!! Form::textarea('teamDescrition4', null,['class'=>'form-control']) !!}
                @if ($errors->has('teamDescrition4'))
                    <span class="help-block">
                    <strong>{{ $errors->first('teamDescrition4') }}</strong>
                </span>
                @endif
            </div>
        </div>


        <div class="row">
            <div class="col-sm-3 form-group{{ $errors->has('teamDescrition1_en') ? ' has-error' : '' }}">
                {!! Form::label('teamDescrition1_en', 'توضیح همکار اول انگلیسی:') !!}
                {!! Form::textarea('teamDescrition1_en', null,['id'=>'teamDescrition1_en' ,'class'=>'form-control']) !!}
                @if ($errors->has('teamDescrition1_en'))
                    <span class="help-block">
                    <strong>{{ $errors->first('teamDescrition1_en') }}</strong>
                </span>
                @endif
            </div>

            <div class="col-sm-3 form-group{{ $errors->has('teamDescrition2_en') ? ' has-error' : '' }}">
                {!! Form::label('teamDescrition2_en', 'توضیح همکار دوم انگلیسی:') !!}
                {!! Form::textarea('teamDescrition2_en', null,['class'=>'form-control']) !!}
                @if ($errors->has('teamDescrition2_en'))
                    <span class="help-block">
                    <strong>{{ $errors->first('teamDescrition2_en') }}</strong>
                </span>
                @endif
            </div>


            <div class="col-sm-3 form-group{{ $errors->has('teamDescrition3_en') ? ' has-error' : '' }}">
                {!! Form::label('teamDescrition3_en', 'توضیح همکار سوم انگلیسی:') !!}
                {!! Form::textarea('teamDescrition3_en', null,['class'=>'form-control']) !!}
                @if ($errors->has('teamDescrition3_en'))
                    <span class="help-block">
                    <strong>{{ $errors->first('teamDescrition3_en') }}</strong>
                </span>
                @endif
            </div>

            <div class="col-sm-3 form-group{{ $errors->has('teamDescrition4_en') ? ' has-error' : '' }}">
                {!! Form::label('teamDescrition4_en', 'توضیح همکار چهارم انگلیسی:') !!}
                {!! Form::textarea('teamDescrition4_en', null,['class'=>'form-control']) !!}
                @if ($errors->has('teamDescrition4_en'))
                    <span class="help-block">
                    <strong>{{ $errors->first('teamDescrition4_en') }}</strong>
                </span>
                @endif
            </div>
        </div>


    </div>
    <br>

    <div class="row">

        <div class="col-sm-6 form-group{{ $errors->has('text1') ? ' has-error' : '' }}">
            {!! Form::label('text1', 'متن 1 ') !!}
            {!! Form::textarea('text1', null,['class'=>'form-control','id'=>'ckeditor1']) !!}
            @if ($errors->has('text1'))
                <span class="help-block">
                    <strong>{{ $errors->first('text1') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-sm-6 form-group{{ $errors->has('text2') ? ' has-error' : '' }}">
            {!! Form::label('text2', 'متن 2 ') !!}
            {!! Form::textarea('text2', null,['class'=>'form-control','id'=>'ckeditor2']) !!}
            @if ($errors->has('text2'))
                <span class="help-block">
                    <strong>{{ $errors->first('text2') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-sm-6 form-group{{ $errors->has('text3') ? ' has-error' : '' }}">
            {!! Form::label('text3', 'متن 3 ') !!}
            {!! Form::textarea('text3', null,['class'=>'form-control','id'=>'ckeditor3']) !!}
            @if ($errors->has('text3'))
                <span class="help-block">
                    <strong>{{ $errors->first('text3') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-sm-6 form-group{{ $errors->has('text4') ? ' has-error' : '' }}">
            {!! Form::label('text4', 'متن 4 ') !!}
            {!! Form::textarea('text4', null,['class'=>'form-control','id'=>'ckeditor4']) !!}
            @if ($errors->has('text4'))
                <span class="help-block">
                    <strong>{{ $errors->first('text4') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-sm-6 form-group{{ $errors->has('text5') ? ' has-error' : '' }}">
            {!! Form::label('text5', 'متن 5 ') !!}
            {!! Form::textarea('text5', null,['class'=>'form-control','id'=>'ckeditor5']) !!}
            @if ($errors->has('text5'))
                <span class="help-block">
                    <strong>{{ $errors->first('text5') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-sm-6 form-group{{ $errors->has('text6') ? ' has-error' : '' }}">
            {!! Form::label('text6', 'متن 6 ') !!}
            {!! Form::textarea('text6', null,['class'=>'form-control','id'=>'ckeditor6']) !!}
            @if ($errors->has('text6'))
                <span class="help-block">
                    <strong>{{ $errors->first('text6') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="row">

        <div class="col-sm-6 form-group{{ $errors->has('text1_en') ? ' has-error' : '' }}">
            {!! Form::label('text1_en', 'متن 1 انگلیسی') !!}
            {!! Form::textarea('text1_en', null,['class'=>'form-control','id'=>'ckeditor7']) !!}
            @if ($errors->has('text1_en'))
                <span class="help-block">
                    <strong>{{ $errors->first('text1_en') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-sm-6 form-group{{ $errors->has('text2_en') ? ' has-error' : '' }}">
            {!! Form::label('text2_en', 'متن 2 انگلیسی') !!}
            {!! Form::textarea('text2_en', null,['class'=>'form-control','id'=>'ckeditor8']) !!}
            @if ($errors->has('text2_en'))
                <span class="help-block">
                    <strong>{{ $errors->first('text2_en') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-sm-6 form-group{{ $errors->has('text3_en') ? ' has-error' : '' }}">
            {!! Form::label('text3_en', 'متن 3 انگلیسی') !!}
            {!! Form::textarea('text3_en', null,['class'=>'form-control','id'=>'ckeditor9']) !!}
            @if ($errors->has('text3_en'))
                <span class="help-block">
                    <strong>{{ $errors->first('text3_en') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-sm-6 form-group{{ $errors->has('text4_en') ? ' has-error' : '' }}">
            {!! Form::label('text4_en', 'متن 4 انگلیسی') !!}
            {!! Form::textarea('text4_en', null,['class'=>'form-control','id'=>'ckeditor10']) !!}
            @if ($errors->has('text4_en'))
                <span class="help-block">
                    <strong>{{ $errors->first('text4_en') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-sm-6 form-group{{ $errors->has('text5_en') ? ' has-error' : '' }}">
            {!! Form::label('text5_en', 'متن 5 انگلیسی') !!}
            {!! Form::textarea('text5_en', null,['class'=>'form-control','id'=>'ckeditor11']) !!}
            @if ($errors->has('text5_en'))
                <span class="help-block">
                    <strong>{{ $errors->first('text5_en') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-sm-6 form-group{{ $errors->has('text6_en') ? ' has-error' : '' }}">
            {!! Form::label('text6_en', 'متن 6 انگلیسی') !!}
            {!! Form::textarea('text6_en', null,['class'=>'form-control','id'=>'ckeditor12']) !!}
            @if ($errors->has('text6_en'))
                <span class="help-block">
                    <strong>{{ $errors->first('text6_en') }}</strong>
                </span>
            @endif
        </div>
    </div>

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
        CKEDITOR.replace('ckeditor3', options);
        CKEDITOR.replace('ckeditor4', options);
        CKEDITOR.replace('ckeditor5', options);
        CKEDITOR.replace('ckeditor6', options);
        CKEDITOR.replace('ckeditor7', options);
        CKEDITOR.replace('ckeditor8', options);
        CKEDITOR.replace('ckeditor9', options);
        CKEDITOR.replace('ckeditor10', options);
        CKEDITOR.replace('ckeditor11', options);
        CKEDITOR.replace('ckeditor12', options);
    </script>
@endsection

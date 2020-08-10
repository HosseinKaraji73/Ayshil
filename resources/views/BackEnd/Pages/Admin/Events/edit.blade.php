@extends('BackEnd.Layouts.admin')
@section('head-content')
    <span class="fa fa-pencil">&nbsp;</span> ویرایش خبر
    <br>
    <p style="font-size: 15px;color: red;margin-top: 15px"> Photo Size: 210px * 210px</p>
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
        {!! Form::model($event ,['method'=>'PATCH', 'action'=> ['BackEnd\Admin\EventsController@update' ,$event->id] ,'files' => TRUE ,'id' => 'myForm']) !!}
        @csrf

        <div class="row">
            <div class="col-sm-3 form-group img img-responsive">
                عکس اول
                @if($event->photo1)
                    <img src="{{asset("img/admin/event/$event->photo1")}}" style="width: 150px;">
                @elseif(!isset($event->photo1))
                    <img src="{{asset('img/admin/null.png')}}" style="width: 150px;">
                @endif
            </div>

            {{--			<div class="col-sm-3 form-group img img-responsive">--}}
            {{--				عکس دوم--}}
            {{--				@if($event->photo2)--}}
            {{--					<img src="{{asset("img/admin/event/$event->photo2")}}" style="width: 150px;">--}}
            {{--				@elseif(!isset($event->photo2))--}}
            {{--					<img src="{{asset('img/admin/null.png')}}" style="width: 150px;">--}}
            {{--				@endif--}}
            {{--			</div>--}}

            {{--			<div class="col-sm-3 form-group img img-responsive">--}}
            {{--				عکس سوم--}}
            {{--				@if($event->photo3)--}}
            {{--					<img src="{{asset("img/admin/event/$event->photo3")}}" style="width: 150px;">--}}
            {{--				@elseif(!isset($event->photo3))--}}
            {{--					<img src="{{asset('img/admin/null.png')}}" style="width: 150px;">--}}
            {{--				@endif--}}
            {{--			</div>--}}


        </div>


        <div class="row">
            <div class="col-sm-3 form-group{{ $errors->has('photo1') ? ' has-error' : '' }}">
                {!! Form::label('photo1', ' عکس اول* :') !!}
                {!! Form::file('photo1', NULL, ['class'=>'form-control']) !!}
                @if ($errors->has('photo1'))
                    <span class="help-block">
                        <strong>{{ $errors->first('photo1') }}</strong>
                    </span>
                @endif
            </div>

            {{--			<div class="col-sm-3 form-group{{ $errors->has('photo2') ? ' has-error' : '' }}">--}}
            {{--				{!! Form::label('photo2', ' عکس دوم :') !!}--}}
            {{--				{!! Form::file('photo2', NULL, ['class'=>'form-control']) !!}--}}
            {{--				@if ($errors->has('photo2'))--}}
            {{--					<span class="help-block">--}}
            {{--                        <strong>{{ $errors->first('photo2') }}</strong>--}}
            {{--                    </span>--}}
            {{--				@endif--}}
            {{--			</div>--}}

            {{--			<div class="col-sm-3 form-group{{ $errors->has('photo3') ? ' has-error' : '' }}">--}}
            {{--				{!! Form::label('photo3', ' عکس سوم :') !!}--}}
            {{--				{!! Form::file('photo3', NULL, ['class'=>'form-control']) !!}--}}
            {{--				@if ($errors->has('photo3'))--}}
            {{--					<span class="help-block">--}}
            {{--                        <strong>{{ $errors->first('photo3') }}</strong>--}}
            {{--                    </span>--}}
            {{--				@endif--}}
            {{--			</div>--}}


        </div>
        <br>
        <div class="row">

            <div class="col-sm-3 form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                {!! Form::label('title', ' عنوان خبر :') !!}
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
        {!! Form::label('description', '  توضیحات خبر :') !!}
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

    <div class="row">
        <div class="form-group col-sm-12">
            {!! Form::submit('ویرایش', ['class'=>'form-control btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>

        {!! Form::open(['method'=>'DELETE', 'action'=>['BackEnd\Admin\EventsController@destroy', $event->id]]) !!}
        <div class="form-group col-sm-6">
            {!! Form::submit('حذف', ['class'=>'form-control btn btn-danger', 'onclick' => "return confirm('آیا می خواهید این محصول را حذف کنید؟')"]) !!}
        </div>
        {!! Form::close() !!}

    </div>
    <div class="clearfix"></div>

@endsection

@section('script')

    <script>
        $(document).ready(function () {
            var type = '{{$event->type}}';
            if (type == 'art') {
                $("#artTable").show();
            } else {
                $("#artTable").hide();
            }
            $("#artBtn").click(function () {
                $(".materialDiv").hide();
                $("#artTable").show();

            });
            $(".foodType").click(function () {
                $("#artTable").hide();
                $(".materialDiv").show();
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#myForm')
                // Add button click handler
                .on('click', '.add-more', function () {
                    var num = $('div.paste select').length;
                    if (num < 50) {
                        var $template = $('#copy');
                        $template.find('select').attr('id', 'material_id' + (num + 1));
                        $template.find('label:eq(0)').attr('for', 'material_id' + (num + 1));

                        $template.find('input[type=text]:eq(0)').attr('id', 'amount' + (num + 1));
                        $template.find('label:eq(1)').attr('for', 'amount' + (num + 1));

                        $clone = $template
                            .clone()
                            .removeClass('hide')
                            .removeAttr('id')
                            .appendTo($('div.paste'));
                    } else {
                        return alert('بیش از 50 ماده اولیه مجاز نمی باشد.');
                    }
                })


                // Remove button click handler
                .on('click', '.remove', function () {
                    var num = $('div.paste select').length;
                    if (num > 1) {
                        var $template = $('.paste');
                        $template.find('select#material_id' + num).parent().remove();
                        $template.find('input[type=text]#amount' + num).parent().remove();
                    }
                });
        });
    </script>
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
    </script>
@endsection

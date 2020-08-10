@extends('BackEnd.Layouts.admin')
@section('head-content')
    <span class="fa fa-pencil">&nbsp;</span> ویرایش اسلایدر
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
        {!! Form::model($slider ,['method'=>'PATCH', 'action'=> ['BackEnd\Admin\SliderController@update' ,$slider->id] ,'files' => true ,'id' => 'myForm']) !!}
        @csrf

        <div class="row">
            <div class="col-sm-3 form-group img img-responsive">
                عکس
                @if($slider->photo1)
                    <img src="{{asset("img/admin/sliders/$slider->photo1")}}" style="width: 150px;" alt="">
                @elseif(!isset($slider->photo1))
                    <img src="{{asset('img/admin/null.png')}}" style="width: 150px;" alt="">
                @endif
            </div>

        </div>

        <div class="row">
            <div class="col-sm-3 form-group{{ $errors->has('photo1') ? ' has-error' : '' }}">
                {!! Form::label('photo1', ' عکس * :') !!}
                {!! Form::file('photo1', null, ['class'=>'form-control']) !!}
                @if ($errors->has('photo1'))
                    <span class="help-block">
                        <strong>{{ $errors->first('photo1') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <br>
        <div class="row">

            <div class="col-sm-3 form-group{{ $errors->has('title1') ? ' has-error' : '' }}">
                {!! Form::label('title1', 'متن 1') !!}
                {!! Form::text('title1', $slider->title1,['id'=>'title1' ,'class'=>'form-control']) !!}
                @if ($errors->has('title1'))
                    <span class="help-block">
                    <strong>{{ $errors->first('title1') }}</strong>
                </span>
                @endif
            </div>
            <div class="col-sm-3 form-group{{ $errors->has('title2') ? ' has-error' : '' }}">
                {!! Form::label('title2', 'متن 2') !!}
                {!! Form::text('title2', $slider->title2,['id'=>'title2' ,'class'=>'form-control']) !!}
                @if ($errors->has('title2'))
                    <span class="help-block">
                    <strong>{{ $errors->first('title2') }}</strong>
                </span>
                @endif
            </div>
    

        </div>


      

        <div class="row">
            <div class="form-group col-sm-12">
                {!! Form::submit('ویرایش', ['class'=>'form-control btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>



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
    </script>
@endsection


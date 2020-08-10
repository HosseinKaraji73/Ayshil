@extends('BackEnd.Layouts.admin')
@section('head-content')
    <span class="fa fa-pencil">&nbsp;</span> تنظیمات سایت
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
        {!! Form::model($settings ,['method'=>'PATCH', 'action'=> ['BackEnd\Admin\SettingController@update' ,$settings->id] ,'files' => TRUE ,'id' => 'myForm']) !!}
        <input type="hidden" value="{{$settings->id}}">
        @csrf


        <div class="row">
            <div class="col-sm-2 form-group img img-responsive">
                صفحه اصلی عکس بزرگ
                @if($settings->photo1)
                    <img src="{{asset("img/admin/setting/$settings->photo1")}}" style="width: 150px;">
                @elseif(!isset($settings->photo1))
                    <img src="{{asset('img/admin/null.png')}}" style="width: 150px;">
                @endif
            </div>
            <div class="col-sm-2 form-group img img-responsive">
                صفحه اصلی کوچک چپ
                @if($settings->photo2)
                    <img src="{{asset("img/admin/setting/$settings->photo2")}}" style="width: 150px;">
                @elseif(!isset($settings->photo2))
                    <img src="{{asset('img/admin/null.png')}}" style="width: 150px;">
                @endif
            </div>
            <div class="col-sm-2 form-group img img-responsive">
                صفحه اصلی کوچک راست
                @if($settings->photo3 )
                    <img src="{{asset("img/admin/setting/$settings->photo3 ")}}" style="width: 150px;">
                @elseif(!isset($settings->photo3 ))
                    <img src="{{asset('img/admin/null.png')}}" style="width: 150px;">
                @endif
            </div>
            <div class="col-sm-2 form-group img img-responsive">
                عکس بالای فروشگاه
                @if($settings->photo4)
                    <img src="{{asset("img/admin/setting/$settings->photo4")}}" style="width: 150px;">
                @elseif(!isset($settings->photo4))
                    <img src="{{asset('img/admin/null.png')}}" style="width: 150px;">
                @endif
            </div>

            <div class="col-sm-2 form-group img img-responsive">
                عکس بالای انرژی پاک
                @if($settings->photo5)
                    <img src="{{asset("img/admin/setting/$settings->photo5")}}" style="width: 150px;">
                @elseif(!isset($settings->photo5))
                    <img src="{{asset('img/admin/null.png')}}" style="width: 150px;">
                @endif
            </div>
            <div class="col-sm-2 form-group img img-responsive">
                عکس کوچک بالا-راست صفحه اخبار
                @if($settings->photo6)
                    <img src="{{asset("img/admin/setting/$settings->photo6")}}" style="width: 150px;">
                @elseif(!isset($settings->photo6))
                    <img src="{{asset('img/admin/null.png')}}" style="width: 150px;">
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2 form-group{{ $errors->has('photo1') ? ' has-error' : '' }}">
                {!! Form::label('photo1', '630px * 330px:') !!}
                {!! Form::file('photo1', NULL, ['class'=>'form-control']) !!}
                @if ($errors->has('photo1'))
                    <span class="help-block">
                        <strong>{{ $errors->first('photo1') }}</strong>
                    </span>
                @endif
            </div>
            <div class="col-sm-2 form-group{{ $errors->has('photo2') ? ' has-error' : '' }}">
                {!! Form::label('photo2', '1440px * 800px:') !!}
                {!! Form::file('photo2', NULL, ['class'=>'form-control']) !!}
                @if ($errors->has('photo2'))
                    <span class="help-block">
                        <strong>{{ $errors->first('photo2') }}</strong>
                    </span>
                @endif
            </div>
            <div class="col-sm-2 form-group{{ $errors->has('photo3') ? ' has-error' : '' }}">
                {!! Form::label('photo3', '230px * 230px:') !!}
                {!! Form::file('photo3', NULL, ['class'=>'form-control']) !!}
                @if ($errors->has('photo3'))
                    <span class="help-block">
                        <strong>{{ $errors->first('photo3') }}</strong>
                    </span>
                @endif
            </div>
            <div class="col-sm-2 form-group{{ $errors->has('photo4') ? ' has-error' : '' }}">
                {!! Form::label('photo4', '230px * 230px:') !!}
                {!! Form::file('photo4', NULL, ['class'=>'form-control']) !!}
                @if ($errors->has('photo4'))
                    <span class="help-block">
                        <strong>{{ $errors->first('photo4') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col-sm-2 form-group{{ $errors->has('photo5') ? ' has-error' : '' }}">
                {!! Form::label('photo5', '1440px * 800px:') !!}
                {!! Form::file('photo5', NULL, ['class'=>'form-control']) !!}
                @if ($errors->has('photo5'))
                    <span class="help-block">
                        <strong>{{ $errors->first('photo5') }}</strong>
                    </span>
                @endif
            </div>
            <div class="col-sm-2 form-group{{ $errors->has('photo6') ? ' has-error' : '' }}">
                {!! Form::label('photo6', '1440px * 800px:') !!}
                {!! Form::file('photo6', NULL, ['class'=>'form-control']) !!}
                @if ($errors->has('photo6'))
                    <span class="help-block">
                        <strong>{{ $errors->first('photo6') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        


<br>
<br>
<br>
<br>


        <div class="row">

            <div class="col-sm-2 form-group img img-responsive">
                عکس منو راست
                @if($settings->photo7)
                    <img src="{{asset("img/admin/setting/$settings->photo7")}}" style="width: 150px;">
                @elseif(!isset($settings->photo7))
                    <img src="{{asset('img/admin/null.png')}}" style="width: 150px;">
                @endif
            </div>

            <div class="col-sm-2 form-group img img-responsive">
                عکس منو چپ
                @if($settings->photo8)
                    <img src="{{asset("img/admin/setting/$settings->photo8")}}" style="width: 150px;">
                @elseif(!isset($settings->photo8))
                    <img src="{{asset('img/admin/null.png')}}" style="width: 150px;">
                @endif
            </div>


        </div>


        <div class="row">
            <div class="col-sm-2 form-group{{ $errors->has('photo7') ? ' has-error' : '' }}">
                {!! Form::label('photo7', '630px * 330px:') !!}
                {!! Form::file('photo7', NULL, ['class'=>'form-control']) !!}
                @if ($errors->has('photo7'))
                    <span class="help-block">
                        <strong>{{ $errors->first('photo7') }}</strong>
                    </span>
                @endif
            </div>
            <div class="col-sm-2 form-group{{ $errors->has('photo8') ? ' has-error' : '' }}">
                {!! Form::label('photo8', '1440px * 800px:') !!}
                {!! Form::file('photo8', NULL, ['class'=>'form-control']) !!}
                @if ($errors->has('photo8'))
                    <span class="help-block">
                        <strong>{{ $errors->first('photo8') }}</strong>
                    </span>
                @endif
            </div>
        </div>














        <div class="row">
            <div class="form-group{{ $errors->has('title1') ? ' has-error' : '' }}">
                {!! Form::label('title1', ' زیر خدمات صفحه اصلی:') !!}
                {!! Form::text('title1', $settings->title1,['id'=>'title1' ,'class'=>'form-control']) !!}
                @if ($errors->has('title1'))
                    <span class="help-block">
                        <strong>{{ $errors->first('title1') }}</strong>
                    </span>
                @endif
            </div>
            <div class="row">
                <div class="col-sm-12 form-group{{ $errors->has('text1') ? ' has-error' : '' }}">
                    {!! Form::label('text1', 'زیر خدمات صفحه اصلی:') !!}
                    {!! Form::textarea('text1', $settings->text1,['id'=>'text1' ,'class'=>'form-control','id'=>'ckeditor1']) !!}
                    @if ($errors->has('text1'))
                        <span class="help-block">
                    <strong>{{ $errors->first('text1') }}</strong>
                </span>
                    @endif
                </div>
            </div>
        </div>


        <div class="row">
            <div class="form-group{{ $errors->has('title2') ? ' has-error' : '' }}">
                {!! Form::label('title2', ' زیر برخی مشتریان :') !!}
                {!! Form::text('title2', $settings->title2,['id'=>'title2' ,'class'=>'form-control']) !!}
                @if ($errors->has('title2'))
                    <span class="help-block">
                        <strong>{{ $errors->first('title2') }}</strong>
                    </span>
                @endif
            </div>
            <div class="row">
                <div class="col-sm-12 form-group{{ $errors->has('text2') ? ' has-error' : '' }}">
                    {!! Form::label('text2', ' زیر برخی مشتریان :') !!}
                    {!! Form::textarea('text2', $settings->text2,['id'=>'text2' ,'class'=>'form-control','id'=>'ckeditor2']) !!}
                    @if ($errors->has('text2'))
                        <span class="help-block">
                    <strong>{{ $errors->first('text2') }}</strong>
                </span>
                    @endif
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-sm-12">
                {!! Form::submit('ویرایش', ['class'=>'form-control btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>

        </div>

    </div>

     <div class="row">
    
             <div class="col-sm-3 form-group{{ $errors->has('bank_portal') ? ' has-error' : '' }}">
                {!! Form::label('bank_portal','غیر فعال کردن درگاه های سایت') !!}
                {!! Form::checkbox('bank_portal' ,'0' ,false) !!}
                @if ($errors->has('bank_portal'))
                    <span class="help-block">
                        <strong>{{ $errors->first('bank_portal') }}</strong>
                    </span>
                @endif
            </div>

                <div class="col-sm-12 form-group{{ $errors->has('text3') ? ' has-error' : '' }}">
                    {!! Form::label('text3', ' متن غیر فعال بودن درگاه ها :') !!}
                    {!! Form::textarea('text3', $settings->text3,['id'=>'text3' ,'class'=>'form-control','id'=>'ckeditor3']) !!}
                    @if ($errors->has('text3'))
                        <span class="help-block">
                    <strong>{{ $errors->first('text3') }}</strong>
                </span>
                    @endif
                </div>

        </div>

    <div class="clearfix"></div>

    

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            var type = '{{$settings->type}}';
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
    </script>

@endsection

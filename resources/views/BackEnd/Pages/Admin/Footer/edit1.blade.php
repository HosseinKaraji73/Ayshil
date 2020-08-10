@extends('BackEnd.Layouts.admin')
@section('head-content')
    <span class="fa fa-pencil">&nbsp;</span> ویرایش فوتر {{$footers->title}}
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
        {!! Form::model($footers ,['method'=>'PATCH', 'action'=> ['BackEnd\Admin\FooterController@update' ,$footers->id] ,'files' => TRUE ,'id' => 'myForm']) !!}
        @csrf

        <div class="row">
            <div class="col-sm-3 form-group img img-responsive">
                لوگو
                @if($footers->logo1)
                    <img src="{{asset("img/admin/setting/$footers->logo1")}}" style="width: 150px;">
                @elseif(!isset($footers->logo1))
                    <img src="{{asset('img/admin/null.png')}}" style="width: 150px;">
                @endif
            </div>

{{--            <div class="col-sm-3 form-group img img-responsive">--}}
{{--                عکس دوم--}}
{{--                @if($footers->logo2)--}}
{{--                    <img src="{{asset("img/setting/$footers->logo2")}}" style="width: 150px;">--}}
{{--                @elseif(!isset($footers->logo2))--}}
{{--                    <img src="{{asset('img/admin/null.png')}}" style="width: 150px;">--}}
{{--                @endif--}}
{{--            </div>--}}

{{--            <div class="col-sm-3 form-group img img-responsive">--}}
{{--                عکس سوم--}}
{{--                @if($footers->logo3)--}}
{{--                    <img src="{{asset("img/setting/$footers->logo3")}}" style="width: 150px;">--}}
{{--                @elseif(!isset($footers->logo3))--}}
{{--                    <img src="{{asset('img/admin/null.png')}}" style="width: 150px;">--}}
{{--                @endif--}}
{{--            </div>--}}

{{--            <div class="col-sm-3 form-group img img-responsive">--}}
{{--                عکس چهارم--}}
{{--                @if($footers->logo4)--}}
{{--                    <img src="{{asset("img/setting/$footers->logo4")}}" style="width: 150px;">--}}
{{--                @elseif(!isset($footers->logo4))--}}
{{--                    <img src="{{asset('img/admin/null.png')}}" style="width: 150px;">--}}
{{--                @endif--}}
{{--            </div>--}}
        </div>

        <div class="row">

            <div class="col-sm-3 form-group{{ $errors->has('logo1') ? ' has-error' : '' }}">
                {!! Form::label('logo1', ' عکس اول :') !!}
                {!! Form::file('logo1', NULL, ['class'=>'form-control']) !!}
                @if ($errors->has('logo1'))
                    <span class="help-block">
                        <strong>{{ $errors->first('logo1') }}</strong>
                    </span>
                @endif
            </div>

{{--            <div class="col-sm-3 form-group{{ $errors->has('logo2') ? ' has-error' : '' }}">--}}
{{--                {!! Form::label('logo2', ' عکس دوم :') !!}--}}
{{--                {!! Form::file('logo2', NULL, ['class'=>'form-control']) !!}--}}
{{--                @if ($errors->has('logo2'))--}}
{{--                    <span class="help-block">--}}
{{--                        <strong>{{ $errors->first('logo2') }}</strong>--}}
{{--                    </span>--}}
{{--                @endif--}}
{{--            </div>--}}

{{--            <div class="col-sm-3 form-group{{ $errors->has('logo3') ? ' has-error' : '' }}">--}}
{{--                {!! Form::label('logo3', ' عکس سوم :') !!}--}}
{{--                {!! Form::file('logo3', NULL, ['class'=>'form-control']) !!}--}}
{{--                @if ($errors->has('logo3'))--}}
{{--                    <span class="help-block">--}}
{{--                        <strong>{{ $errors->first('logo3') }}</strong>--}}
{{--                    </span>--}}
{{--                @endif--}}
{{--            </div>--}}

{{--            <div class="col-sm-3 form-group{{ $errors->has('logo4') ? ' has-error' : '' }}">--}}
{{--                {!! Form::label('logo4', ' عکس چهارم :') !!}--}}
{{--                {!! Form::file('logo4', NULL, ['class'=>'form-control']) !!}--}}
{{--                @if ($errors->has('logo4'))--}}
{{--                    <span class="help-block">--}}
{{--                        <strong>{{ $errors->first('logo4') }}</strong>--}}
{{--                    </span>--}}
{{--                @endif--}}
{{--            </div>--}}

        </div>


        <div class="row">
            <div class="form-group{{ $errors->has('othertext1') ? ' has-error' : '' }}">
                {!! Form::label('othertext1', 'متن زیر لوگو') !!}
                {!! Form::text('othertext1', $footers->othertext1,['id'=>'othertext1' ,'class'=>'form-control']) !!}
                @if ($errors->has('othertext1'))
                    <span class="help-block">
                        <strong>{{ $errors->first('othertext1') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('othertext1_en') ? ' has-error' : '' }}">
                {!! Form::label('othertext1_en', 'متن زیر لوگو انگلیسی') !!}
                {!! Form::text('othertext1_en', $footers->othertext1,['id'=>'othertext1_en' ,'class'=>'form-control']) !!}
                @if ($errors->has('othertext1_en'))
                    <span class="help-block">
                        <strong>{{ $errors->first('othertext1_en') }}</strong>
                    </span>
                @endif
            </div>



            <div class="form-group{{ $errors->has('address1') ? ' has-error' : '' }}">
                {!! Form::label('address1', ' آدرس:') !!}
                {!! Form::text('address1', $footers->address2,['id'=>'address1' ,'class'=>'form-control']) !!}
                @if ($errors->has('address1'))
                    <span class="help-block">
                        <strong>{{ $errors->first('address1') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('address1_en') ? ' has-error' : '' }}">
                {!! Form::label('address1_en', ' آدرس انگلیسی:') !!}
                {!! Form::text('address1_en', $footers->address2,['id'=>'address1_en' ,'class'=>'form-control']) !!}
                @if ($errors->has('address1_en'))
                    <span class="help-block">
                        <strong>{{ $errors->first('address1_en') }}</strong>
                    </span>
                @endif
            </div>


            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                {!! Form::label('email', ' ایمیل:') !!}
                {!! Form::text('email', $footers->address2,['id'=>'email' ,'class'=>'form-control']) !!}
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('phone1') ? ' has-error' : '' }}">
                {!! Form::label('phone1', ' تلفن:') !!}
                {!! Form::text('phone1', $footers->address2,['id'=>'phone1' ,'class'=>'form-control']) !!}
                @if ($errors->has('phone1'))
                    <span class="help-block">
                        <strong>{{ $errors->first('phone1') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('instagram') ? ' has-error' : '' }}">
                {!! Form::label('instagram', 'اینستاگرام') !!}
                {!! Form::text('instagram', $footers->instagram,['id'=>'instagram' ,'class'=>'form-control']) !!}
                @if ($errors->has('instagram'))
                    <span class="help-block">
                        <strong>{{ $errors->first('instagram') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('telegram') ? ' has-error' : '' }}">
                {!! Form::label('telegram', 'تلگرام') !!}
                {!! Form::text('telegram', $footers->telegram,['id'=>'telegram' ,'class'=>'form-control']) !!}
                @if ($errors->has('telegram'))
                    <span class="help-block">
                        <strong>{{ $errors->first('telegram') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('google') ? ' has-error' : '' }}">
                {!! Form::label('google', 'گوگل') !!}
                {!! Form::text('google', $footers->google,['id'=>'google' ,'class'=>'form-control']) !!}
                @if ($errors->has('google'))
                    <span class="help-block">
                        <strong>{{ $errors->first('google') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('linkedin') ? ' has-error' : '' }}">
                {!! Form::label('linkedin', 'لینکدین') !!}
                {!! Form::text('linkedin', $footers->linkedin,['id'=>'linkedin' ,'class'=>'form-control']) !!}
                @if ($errors->has('linkedin'))
                    <span class="help-block">
                        <strong>{{ $errors->first('linkedin') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('whatsup') ? ' has-error' : '' }}">
                {!! Form::label('whatsup', 'واتس آپ') !!}
                {!! Form::text('whatsup', $footers->whatsup,['id'=>'whatsup' ,'class'=>'form-control']) !!}
                @if ($errors->has('whatsup'))
                    <span class="help-block">
                        <strong>{{ $errors->first('whatsup') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group{{ $errors->has('facebook') ? ' has-error' : '' }}">
                {!! Form::label('facebook', 'فیس بوک') !!}
                {!! Form::text('facebook', $footers->facebook,['id'=>'facebook' ,'class'=>'form-control']) !!}
                @if ($errors->has('facebook'))
                    <span class="help-block">
                        <strong>{{ $errors->first('facebook') }}</strong>
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
            var type = '{{$footers->type}}';
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
@endsection

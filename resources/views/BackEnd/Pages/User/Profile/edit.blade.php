@extends('BackEnd.Layouts.user')
@section('head-content')
    <span class="fa fa-user">&nbsp;</span> ویرایش پروفایل کاربری
@endsection


@section('topBar')
    <div id="topbar">
        <div class="container d-flex align-items-center justify-content-between  mobile-justify-content-center ">
            <div id="logo-wrapper"><a href="{{url('/')}}"><img
                        src="{{asset('FrontEnd/images/1.png')}}"
                        alt="ibolak"/></a>
                <h2>لذت یک خرید شیک</h2>
            </div>
            <div class="mobile-header-left mobile-only"></div>
            <div class="topbar-menu-wrapper" id="menu-wrapper">
                <ul>
                    <li><a href="{{url('/')}}" title="" target="_self">
                            <div><span>حراجی</span></div>
                        </a>
                    </li>
                    <li class="has-megamenu">
                        <a href="{{url('/')}}"><span>زنانه</span><i class="far fa-angle-down"></i></a>
                        <ul class="megamenu">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="subcategory"><a
                                            href="{{url('/')}}"
                                            title="" target="_self">
                                            <h4>بلوز/شومیز</h4></a>
                                        <ul>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="subcategory">
                                        <a href="{{url('/')}}" title="" target="_self">
                                            <h4>روپوش</h4></a>
                                        <ul>
                                            <li>
                                                <a href="{{url('/')}}"
                                                   title="" target="_self">پانچو/بارانی</a></li>
                                            <li>
                                                <a href="{{url('/')}}"
                                                   title="" target="_self">کاپشن</a></li>
                                            <li>
                                                <a href="{{url('/')}}"
                                                   title="" target="_self">کت/کت کتان/کت جین</a></li>
                                            <li>
                                                <a href="{{url('/')}}"
                                                   title="" target="_self">مانتو/ژاکت</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="has-megamenu">
                        <a href="{{url('/')}}"><span>مردانه</span><i class="far fa-angle-down"></i></a>
                        <ul class="megamenu">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="subcategory"><a
                                            href="{{url('/')}}"
                                            title="" target="_self">
                                            <h4>بلوز/شومیز</h4></a>
                                        <ul>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="subcategory">
                                        <a href="{{url('/')}}" title="" target="_self">
                                            <h4>روپوش</h4></a>
                                        <ul>
                                            <li>
                                                <a href="{{url('/')}}"
                                                   title="" target="_self">پانچو/بارانی</a></li>
                                            <li>
                                                <a href="{{url('/')}}"
                                                   title="" target="_self">کاپشن</a></li>
                                            <li>
                                                <a href="{{url('/')}}"
                                                   title="" target="_self">کت/کت کتان/کت جین</a></li>
                                            <li>
                                                <a href="{{url('/')}}"
                                                   title="" target="_self">مانتو/ژاکت</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="has-megamenu">
                        <a href="{{url('/')}}"><span>بچگانه</span><i class="far fa-angle-down"></i></a>
                        <ul class="megamenu">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="subcategory"><a
                                            href="{{url('/')}}"
                                            title="" target="_self">
                                            <h4>بلوز/شومیز</h4></a>
                                        <ul>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="subcategory">
                                        <a href="{{url('/')}}" title="" target="_self">
                                            <h4>روپوش</h4></a>
                                        <ul>
                                            <li>
                                                <a href="{{url('/')}}"
                                                   title="" target="_self">پانچو/بارانی</a></li>
                                            <li>
                                                <a href="{{url('/')}}"
                                                   title="" target="_self">کاپشن</a></li>
                                            <li>
                                                <a href="{{url('/')}}"
                                                   title="" target="_self">کت/کت کتان/کت جین</a></li>
                                            <li>
                                                <a href="{{url('/')}}"
                                                   title="" target="_self">مانتو/ژاکت</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="has-megamenu">
                        <a href="{{url('/')}}"><span>سایر</span><i class="far fa-angle-down"></i></a>
                        <ul class="megamenu">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="subcategory"><a
                                            href="{{url('/')}}"
                                            title="" target="_self">
                                            <h4>بلوز/شومیز</h4></a>
                                        <ul>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="subcategory">
                                        <a href="{{url('/')}}" title="" target="_self">
                                            <h4>روپوش</h4></a>
                                        <ul>
                                            <li>
                                                <a href="{{url('/')}}"
                                                   title="" target="_self">پانچو/بارانی</a></li>
                                            <li>
                                                <a href="{{url('/')}}"
                                                   title="" target="_self">کاپشن</a></li>
                                            <li>
                                                <a href="{{url('/')}}"
                                                   title="" target="_self">کت/کت کتان/کت جین</a></li>
                                            <li>
                                                <a href="{{url('/')}}"
                                                   title="" target="_self">مانتو/ژاکت</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                </ul>
            </div>
            @include('FrontEnd.Includes.search')

        </div>
    </div>
@endsection

@section('header')
    <header>
        <div id="breadcrumbs">
            <a href="index.html" title="" target="_self">فروشگاه آيشیل</a> <span>پروفایل کاربری</span>

        </div>
    </header>
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

        <img src="{{asset('img/user/profile/'.Auth::user()->avatar)}}" class="img-responsive" style="width: 150px">


        {!! Form::model(auth()->user(),['method'=>'PATCH','action'=>['BackEnd\User\UserController@update',auth()->user()->id],'files'=>true ,'id' => 'myForm'])!!}
        <input type="hidden" value="{{auth()->user()->id}}">

        <div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
            <label for="avatar" class="pull-right">تصویر :</label>
            <input type="file" class="form-control" name="avatar" id="avatar" value="{{old('avatar')}}">
            @if ($errors->has('avatar'))
                <span class="help-block">
                    <strong>{{ $errors->first('avatar') }}</strong>
                </span>
            @endif
        </div>

        <div class="row">
            <div class="col-sm-6 form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                {!! Form::label('name','نام :',['class'=>'pull-right']) !!}
                {!! Form::text('name',null,['class'=>'form-control'])!!}
                @if ($errors->has('name'))
                    <span class="help-block pull-right">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col-sm-6 form-group{{ $errors->has('family') ? ' has-error' : '' }}">
                {!! Form::label('family','نام خانوادگی :',['class'=>'pull-right']) !!}
                {!! Form::text('family',null,['class'=>'form-control'])!!}
                @if ($errors->has('family'))
                    <span class="help-block pull-right">
                         <strong>{{ $errors->first('family') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                {!! Form::label('mobile','تلفن همراه :',['class'=>'pull-right']) !!}
                {!! Form::text('mobile',null,['class'=>'form-control','disabled'=>'disabled'])!!}
                @if ($errors->has('mobile'))
                    <span class="help-block pull-right">
                        <strong>{{ $errors->first('mobile') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col-sm-6 form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                {!! Form::label('phone','تلفن ثابت :',['class'=>'pull-right']) !!}
                {!! Form::text('phone',null,['class'=>'form-control'])!!}
                @if ($errors->has('phone'))
                    <span class="help-block pull-right">
                         <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                {!! Form::label('address','آدرس :',['class'=>'pull-right']) !!}
                {!! Form::text('address',null,['class'=>'form-control'])!!}
                @if ($errors->has('address'))
                    <span class="help-block pull-right">
                         <strong>{{ $errors->first('address') }}</strong>
                    </span>
                @endif
            </div>
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

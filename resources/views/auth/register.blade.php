@extends('FrontEnd.Layouts.master')

@section('title','صفحه اصلی')

@section('meta')
    <meta name="description" content="فروشگاه آی بولک"/>
    <meta name="keywords" content="فروشگاه آی بولک"/>
@endsection


@section('classBody')
    login-page
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
            <a href="index.html" title="" target="_self">فروشگاه آيشیل</a> <span>ورود یا ایجاد حساب کاربری</span>

        </div>
    </header>
@endsection


@section('main')
    <main>
        <div class="card">
            <div class="row">
                <div class="col-lg-6 col-sm-12" style="margin: 0 auto">
                    <form action="{{ route('register') }}" id="customer-form" method="POST"  class="needs-validation">
                        @csrf
                        <h2 class="title-dot">ایجاد حساب کاربری</h2>
                        <div class="input-container">
                            <label for="name">نام (فارسی) <span class="text-danger">*</span></label>
                            <input class="only-persian form-control @error('name') is-invalid @enderror" required type="text"
                                   data-rule-persianOnly="true"
                                   value="{{ old('name') }}"
                                   id="name" name="name"
                                   placeholder="نام و نام خانوادگی خود را وارد نمایید..."/>
                            @error('name')
                            <span class="invalid-feedback redfeedback" role="alert">
                                    <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>




                        <div class="input-container">
                            <label for="family">نام خانوادگی (فارسی) <span class="text-danger">*</span></label>
                            <input class="only-persian form-control @error('family') is-invalid @enderror" required type="text"
                                   data-rule-persianOnly="true"
                                   value="{{ old('family') }}"
                                   id="family" name="family"
                                   placeholder="نام و نام خانوادگی خود را وارد نمایید..."/>
                            @error('family')
                            <span class="invalid-feedback redfeedback" role="alert">
                                    <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="input-container">
                            <label for="mobile"> شماره تلفن همراه <span class="text-danger">*</span></label>
                            <input class="only-digits form-control @error('mobile') is-invalid @enderror" type="text" required dir="ltr"
                                   value="{{ old('mobile') }}"
                                   data-rule-mobile="true"
                                   data-title="شماره تلفن همراه"
                                   maxlength="11"
                                   minlength="11"
                                   id="mobile" name="mobile"
                                   placeholder=" شماره تلفن همراه خود را وارد نمایید..."/>
                            @error('mobile')
                            <span class="invalid-feedback redfeedback" role="alert">
                                    <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>


                        <div class="input-container">
                            <label for="email">آدرس ایمیل (اختیاری) </label>
                            <input class="only-english form-control @error('email') is-invalid @enderror" type="email" dir="ltr"
                                   value="{{ old('email') }}"
                                   data-title="ادرس ایمیل"
                                   id="email" name="email"
                                   placeholder="آدرس ایمیل خود را وارد نمایید..."/>
                            @error('email')
                            <span class="invalid-feedback redfeedback" role="alert">
                                    <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        {{--                        <div class="input-container">--}}
                        {{--                            <label>کلمه عبور (حداقل ۸ کارکتر)  <span class="text-danger">*</span></label>--}}
                        {{--                            <input id="password" dir="ltr" required name="password" minlength="8" type="password"--}}

                        {{--                                   autocomplete="new-password" placeholder="کلمه عبور خود را وارد نمایید..."/>--}}
                        {{--                        </div>--}}
                        <div class="input-container">
                            {{--                            <label>تکرار کلمه عبور <span class="text-danger">*</span></label>--}}
                            {{--                            <input id="password_confirmation" required name="password_confirmation" dir="ltr"--}}
                            {{--                                   minlength="8" type="password" autocomplete="new-password" equalto="#password"--}}
                            {{--                                   placeholder="کلمه عبور خود را وارد نمایید..."/>--}}
                            <small class="d-block mt-5">ثبت نام به معنی پذیرش
                                <a target="_blank" href="{{url('/')}}" class="text-blue"> قوانین و مقررات </a> سایت می‌باشد
                            </small>
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-blue btn-large">
                                <i class="far fa-user-plus"></i>
                                <span>ایجاد حساب</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection



@section('loginScript')
    <script>
       ك

    </script>
@endsection

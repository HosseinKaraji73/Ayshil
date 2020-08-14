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


                    <form method="POST" action="{{ route('login') }}" id="login-form" class="needs-validation">
                        @csrf
                        <a class="mobile-only text-blue" style="text-align:center;margin-top:5px;margin-bottom:35px;font-size:12px;font-weight:bold;" href="#register">اگر حساب کاربری ندارید برای ثبت‌نام اینجا کلیک کنید</a>
                        <h2 class="title-dot">ورود به حساب کاربری</h2>

                        <aside id="notifications">
                            <div class="container">
                                @if (session('error-login'))
                                    <div class="alertTop alert-danger2">
                                        {{ session('error-login') }}
                                    </div>
                                @endif

                                @if (session('completeResetForm'))
                                    <div class="alertTop alert-danger2">
                                        {{ session('completeResetForm') }}
                                    </div>
                                @endif

                                @if (session('completeLoginForm'))
                                    <div class="alertTop alert-danger2">
                                        {{ session('completeLoginForm') }}
                                    </div>
                                @endif
                            </div>
                        </aside>

                        <div class="input-container">
                            <label>شماره تلفن همراه</label>

                            <input type="text" class="username only-digits @error('mobile') is-invalid @enderror"
{{--                                   name="username"--}}
                                   id="mobile" name="mobile" value="{{ old('mobile') }}"
                                   maxlength="11"
                                   minlength="11"
                                   required
                                   data-title="شماره تلفن همراه"
                                   dir="ltr" autocomplete="username"
                                   placeholder="یازده رقم به همراه ۰۹"/>
                        </div>

                        @error('mobile')
                             <span class="invalid-feedback redfeedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                        @enderror


                        <div class="input-container">
                            <label>کلمه عبور</label>
                            <input class="@error('password') is-invalid @enderror" type="password" name="password" autocomplete="current-password" dir="ltr"
                                   required
                                   value="{{ old('password') }}"
                                   placeholder="کلمه عبور خود را وارد نمایید..."/>
                            <input type="hidden" name="redirect_url" value="">
                            @error('password')
                                 <span class="invalid-feedback redfeedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                 </span>
                            @enderror
                            @if (session('password'))
                                <span class="invalid-feedback redfeedback" role="alert">
                                          <strong>{{ session('password') }}</strong>
                                </span>
                            @endif

                        </div>
                        <label class="checkbox-wrapper">
                            <input type="checkbox" name="remember"/>
                            <span>مرا به خاطر بسپار</span>
                        </label>

                        <a class="text-blue mt-4 font-weight-bold d-block" href="{{ route('resetPassword') }}" title="" target="_self">
                            کلمه عبور خود را فراموش کرده‌ام
                        </a>
                        <a class="text-blue mt-4 font-weight-bold d-block" href="{{ route('register') }}" title="" target="_self">
                            حساب کاربری نداری؟ (ساخت حساب کاربری)
                        </a>
                        <div class="d-flex align-items-center justify-content-end mt-5">
                            <button type="submit" class="btn btn-primary btn-large">
                                <i class="far fa-sign-in"></i>
                                <span>ورود به حساب</span>
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
        $('document').ready(function () {
            $('a[href="#register"]').click(function (e) {
                e.preventDefault();
                $('html').animate({scrollTop: $('#register').offset().top - 100}, 300);
            });
        });

        function isEnglish(key) {
            return (key >= 97 && key <= 122)
                || (key >= 65 && key <= 90);
        }

        function isPersian(key) {
            var p = /^[\u0600-\u06FF\s]+$/;
            return p.test(key) && key != ' ';
        }

        function isDigits(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;

            return true;
        }


    </script>
    <script>
        $('.alertTop').delay(4000).fadeOut('slow');
    </script>
@endsection

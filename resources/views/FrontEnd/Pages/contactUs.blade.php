@extends('FrontEnd.Layouts.master')

@section('title','صفحه اصلی')

@section('meta')
    <meta name="description" content="فروشگاه آی بولک"/>
    <meta name="keywords" content="فروشگاه آی بولک"/>
@endsection


@section('classBody')
    static-page contact-page
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
            <a href="../../../index.html" title="" target="_self">فروشگاه آيشیل</a> <span>اسلش</span>

        </div>
    </header>
@endsection


@section('main')
    <main>

        <h1 class="title-dot">تماس با ما </h1>
        <div id="map-wrapper">
            <div id="app" style="width: 100%; height: 100%; overflow: hidden; position: relative;">
                <div class="mapp-container" data-locale="fa" style="display: block;">
                    <div id="mapp-app" class="mapp-map leaflet-container leaflet-touch leaflet-retina leaflet-fade-anim leaflet-touch-zoom" style="position: relative;" tabindex="0" data-gesture-handling-touch-content="برای حرکت دادن نقشه از دو انگشت استفاده کنید." data-gesture-handling-scroll-content="برای بزرگ‌نمایی نقشه، از ⌘ + پیمایش استفاده کنید.">
                        <div class="leaflet-pane leaflet-map-pane" style="transform: translate3d(0px, 0px, 0px);">
                            <div class="leaflet-pane leaflet-tile-pane">
                                <div class="leaflet-layer " style="z-index: 1; opacity: 1;">
                                    <div class="leaflet-tile-container leaflet-zoom-animated" style="z-index: 18; transform: translate3d(0px, 0px, 0px) scale(1);">
                                        <img class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(390px, -82px, 0px); opacity: 1;" src="blob:https://ibolak.com/aa7b17ae-50b4-7e4c-b05e-e7eba85095e2"><img class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(646px, -82px, 0px); opacity: 1;" src="blob:https://ibolak.com/38610b35-20c3-8241-a2a7-2a8261dba9cb"><img class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(390px, 174px, 0px); opacity: 1;" src="blob:https://ibolak.com/960e1f98-951d-f443-a0dc-e3dac248dd7f"><img class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(646px, 174px, 0px); opacity: 1;" src="blob:https://ibolak.com/2a870a11-a9f2-104f-9ace-5bb925c6d782"><img class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(134px, -82px, 0px); opacity: 1;" src="blob:https://ibolak.com/f751a82a-78ed-8143-8a9b-9b02db941cd0"><img class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(902px, -82px, 0px); opacity: 1;" src="blob:https://ibolak.com/19de76d0-3181-bc49-bff4-5e968cafb50a"><img class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(134px, 174px, 0px); opacity: 1;" src="blob:https://ibolak.com/6e290dfd-3e75-4c44-952e-b24bcb984439"><img class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(902px, 174px, 0px); opacity: 1;" src="blob:https://ibolak.com/916f1303-d39a-bb4c-9d1e-c300be2a66fd"><img class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-122px, -82px, 0px); opacity: 1;" src="blob:https://ibolak.com/c50cf828-e118-414f-932b-1b6b99b7dbe9"><img class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(1158px, -82px, 0px); opacity: 1;" src="blob:https://ibolak.com/bb9d52bc-e15b-3947-9088-9babca64664f"><img class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(-122px, 174px, 0px); opacity: 1;" src="blob:https://ibolak.com/056e8950-e13e-5849-bfa7-b587dd86ad3b"><img class="leaflet-tile leaflet-tile-loaded" style="width: 256px; height: 256px; transform: translate3d(1158px, 174px, 0px); opacity: 1;" src="blob:https://ibolak.com/31ba35f4-d8b7-a74a-b9a5-fdae8ed55e77">
                                    </div>
                                </div>
                            </div>
                            <div class="leaflet-pane leaflet-shadow-pane"></div>
                            <div class="leaflet-pane leaflet-overlay-pane"></div>
                            <div class="leaflet-pane leaflet-marker-pane">
                                <img src="https://cdn.map.ir/web-sdk/1.4.2/assets/images/marker-default-blue.svg" class="leaflet-marker-icon leaflet-zoom-animated leaflet-interactive" style="margin-left: -20px; margin-top: -40px; width: 40px; height: 40px; transform: translate3d(635px, 150px, 0px); z-index: 150;" tabindex="0">
                            </div>
                            <div class="leaflet-pane leaflet-tooltip-pane"></div>
                            <div class="leaflet-pane leaflet-popup-pane"></div>
                            <div class="leaflet-proxy leaflet-zoom-animated" style="transform: translate3d(21851900px, 13080600px, 0px) scale(65536);"></div>
                        </div>
                        <div class="leaflet-control-container">
                            <div class="leaflet-top leaflet-left"></div>
                            <div class="leaflet-top leaflet-right"></div>
                            <div class="leaflet-bottom leaflet-left"></div>
                            <div class="leaflet-bottom leaflet-right"></div>
                        </div>
                    </div>
                    <div class="mapp-anchor top position-direct direct item-set horizontal"></div>
                    <div class="mapp-anchor top position-middle direct item-set horizontal"></div>
                    <div class="mapp-anchor top position-reverse reverse item-set horizontal"></div>
                    <div class="mapp-anchor center position-direct"></div>
                    <div class="mapp-anchor center position-middle"></div>
                    <div class="mapp-anchor center position-reverse"></div>
                    <div class="mapp-anchor bottom position-direct direct item-set horizontal"></div>
                    <div class="mapp-anchor bottom position-middle reverse item-set vertical">
                        <a class="mapp-logo" href="http://corp.map.ir"></a></div>
                    <div class="mapp-anchor bottom position-reverse reverse item-set horizontal"></div>
                    <div class="mapp-footer">
                        <div class="item-set vertical centered triggers right"></div>
                        <div class="item-set vertical centered triggers left">
                            <div class="icon-background is-lighter is-rounded is-boxed margined-small">
                                <a data-i18n="[title]mapp-tooltip-zoom-in" href="#" class="icon is-small icon-zoom-in desktop tooltip-right tooltipstered"></a>
                            </div>
                            <div class="icon-background is-lighter is-rounded is-boxed margined-large">
                                <a data-i18n="[title]mapp-tooltip-zoom-out" href="#" class="icon is-small icon-zoom-out desktop tooltip-right tooltipstered"></a>
                            </div>
                        </div>
                        <div class="contents"></div>
                    </div>
                    <div class="mapp-overlay is-invisible"></div>
                </div>
                <div class="mapp-loader is-invisible"></div>
            </div>
        </div>
        <div class="row border-bottom-1">
            <div class="col-lg-6 col-sm-12">
                <ul>
                    <li>
                        <i class="fal fa-phone text-primary"></i><a href="tel:01732534106-9"><span>شماره تماس:<b dir="ltr">01732534106-9</b></span></a>
                    </li>
                    <li>
                        <i class="fal fa-mailbox text-primary"></i><span>آدرس ایمیل:<b dir="ltr">info@ibolak.com</b></span>
                    </li>
                    <li>
                        <i class="fal fa-map-pin text-primary"></i><span>آدرس دفتر مرکزی:<b dir="ltr">گرگان، خیابان ولیعصر، عدالت ۳۹، مجتمع تجاری رویال</b></span>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6 col-sm-12">
                <ul>
                    <li><i class="fal fa-fax text-primary"></i><span>شماره فاکس:<b dir="ltr">021 123871623</b></span>
                    </li>
                    <li>
                        <i class="fal fa-phone text-primary"></i><span>شماره پشتیبانی ۲۴ ساعته:<b dir="ltr">021 123123</b></span>
                    </li>
                </ul>
            </div>
        </div>
{{--        <h3 class="title-dot mt-5 font-weight-bold text-large">ارسال پیام</h3>--}}
{{--        <form class="mt-5 w-50" action="https://ibolak.com/contact" method="POST">--}}
{{--            <input type="hidden" name="_token" value="ARI9bgTnyWc8TttTsYs4jpPwLKqpNcrqs09U9LHS">--}}
{{--            <label>نام و نام خانوادگی</label>--}}
{{--            <input type="text" name="name" value="" placeholder="نام و نام خانوادگی خود را وارد نمایید...">--}}
{{--            <label>آدرس ایمیل</label>--}}
{{--            <input type="email" name="email" value="" placeholder="آدرس ایمیل خود را وارد نمایید...">--}}
{{--            <label>تلفن همراه</label>--}}
{{--            <input type="number" name="cellphone" value="" placeholder="شماره خود را وارد کنید . . .">--}}
{{--            <label>محتوای پیام</label>--}}
{{--            <textarea name="text" placeholder="پیام خود را برای ما بنویسید و مطمئن باشید که آن‌را می‌خوانیم..."></textarea>--}}
{{--            <div class="d-flex align-items-center justify-content-between">--}}
{{--                <div class="g-recaptcha" style="display: inline-block" data-sitekey="6LcUEt4UAAAAAHILvzPAi04ovct7tWpIYL3UVHvn">--}}
{{--                    <div style="width: 304px; height: 78px;">--}}
{{--                        <div>--}}
{{--                            <iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcUEt4UAAAAAHILvzPAi04ovct7tWpIYL3UVHvn&amp;co=aHR0cHM6Ly9pYm9sYWsuY29tOjQ0Mw..&amp;hl=fa&amp;v=IU7gZ7o6RDdDE6U4Y1YJJWnN&amp;size=normal&amp;cb=q7ovmpfalk93" role="presentation" name="a-y4ga64deoazp" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" width="304" height="78" frameborder="0"></iframe>--}}
{{--                        </div>--}}
{{--                        <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>--}}
{{--                    </div>--}}
{{--                    <iframe style="display: none;"></iframe>--}}
{{--                </div>--}}
{{--                <button class="btn btn-primary btn-large"><i class="fal fa-paper-plane"></i><span>ارسال پیام</span>--}}
{{--                </button>--}}
{{--            </div>--}}

{{--        </form>--}}

    </main>
@endsection


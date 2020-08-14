@extends('FrontEnd.Layouts.master')

@section('title','صفحه اصلی')

@section('meta')
    <meta name="description" content="فروشگاه آی بولک"/>
    <meta name="keywords" content="فروشگاه آی بولک"/>
@endsection


@section('classBody')
    basket-page
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
            <a href="index.html" title="" target="_self">فروشگاه آيشیل</a> <span>سبد خرید</span>

        </div>
    </header>
@endsection

@section('main')
    <main class="basket-empty">

        <div class="d-flex align-items-center justify-content-center flex-column">
            <i class="fal fa-shopping-cart page-icon"></i>
            <h1>سبد خرید شما خالی است</h1>
        </div>
        <section class="products-container" id="related-products">
            <div class="section-header">
                <div class="section-title">
                    <h2>محصولاتی که شاید بپسندید</h2>
                </div>
                <div class="section-arrows">
                    <a class="arrow-next" href="#" title="" target="_self"><i class="far fa-arrow-right"></i></a><a class="arrow-prev" href="#" title="" target="_self"><i class="far fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="products-wrapper should-slide slick-initialized slick-slider">
                <div class="slick-list draggable">
                    <div class="slick-track" style="opacity: 1; width: 5334px; transform: translate3d(1270px, 0px, 0px);">
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="-5" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.ir/shop/products/ex8qd/شومیز-جین-خال-خالی" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.ir/uploads/image/2020/8/optimized/1597126917-77obKk3uMZTwxv1i.jpg" alt="شومیز جین خال خالی">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>شومیز جین خال خالی</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">85,000 تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.ir/shop/products/bwype/دامن-کوتاه-نخی" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.ir/uploads/image/2020/8/optimized/1597126879-rolNzo4N09rIsEJ2.jpg" alt="دامن کوتاه نخی">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>دامن کوتاه نخی</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">59,000 تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.ir/shop/products/dv69b/تیشرت-مردانه-TOMTAILOR" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.ir/uploads/image/2020/8/optimized/1597126645-9SwrM4vpOdsHI7jR.jpg" alt="تیشرت مردانه TOMTAILOR">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>تیشرت مردانه TOMTAILOR</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price text-danger">ناموجود</strong>
                                        </div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.ir/shop/products/erqyd/شلوارک-زیر-زانو-طرحدار" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.ir/uploads/image/2020/8/optimized/1597125665-n5qxHLXuWLdIHiUc.jpg" alt="شلوارک زیر زانو طرحدار">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>شلوارک زیر زانو طرحدار</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price text-danger">ناموجود</strong>
                                        </div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.ir/shop/products/bq95d/شورتک-طرحدار-H-M" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.ir/uploads/image/2020/8/optimized/1597125662-84w53onNWHRZbg31.jpg" alt="شورتک طرحدار H&amp;M">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>شورتک طرحدار H&amp;M</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">39,000 تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="product-outer slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 254px;" tabindex="0">
                            <a class="product-wrapper" href="https://ibolak.ir/shop/products/b1yxb/تیشرت-ساده-مردانه" title="" target="_self" tabindex="0">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.ir/uploads/image/2020/8/optimized/1597136762-uvoip4AET3b0sGKc.jpg" alt="تیشرت ساده مردانه">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>تیشرت ساده مردانه</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">59,000 تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="product-outer slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 254px;" tabindex="0">
                            <a class="product-wrapper" href="https://ibolak.ir/shop/products/bzy5e/تاپ-تریکو-blue-motion" title="" target="_self" tabindex="0">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.ir/uploads/image/2020/8/optimized/1597131332-9xJA5L5apiUbGQAS.jpg" alt="تاپ تریکو blue motion">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>تاپ تریکو blue motion</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">39,000 تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="product-outer slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 254px;" tabindex="0">
                            <a class="product-wrapper" href="https://ibolak.ir/shop/products/dyyjd/لگ-ساده-BASIC" title="" target="_self" tabindex="0">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.ir/uploads/image/2020/8/optimized/1597126926-c2wkRy2CwVJimq0b.jpg" alt="لگ ساده BASIC">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>لگ ساده BASIC</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">49,000 تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="product-outer slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 254px;" tabindex="0">
                            <a class="product-wrapper" href="https://ibolak.ir/shop/products/ex8qd/شومیز-جین-خال-خالی" title="" target="_self" tabindex="0">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.ir/uploads/image/2020/8/optimized/1597126917-77obKk3uMZTwxv1i.jpg" alt="شومیز جین خال خالی">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>شومیز جین خال خالی</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">85,000 تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="product-outer slick-slide slick-active" data-slick-index="4" aria-hidden="false" style="width: 254px;" tabindex="0">
                            <a class="product-wrapper" href="https://ibolak.ir/shop/products/bwype/دامن-کوتاه-نخی" title="" target="_self" tabindex="0">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.ir/uploads/image/2020/8/optimized/1597126879-rolNzo4N09rIsEJ2.jpg" alt="دامن کوتاه نخی">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>دامن کوتاه نخی</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">59,000 تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="product-outer slick-slide" data-slick-index="5" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.ir/shop/products/dv69b/تیشرت-مردانه-TOMTAILOR" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.ir/uploads/image/2020/8/optimized/1597126645-9SwrM4vpOdsHI7jR.jpg" alt="تیشرت مردانه TOMTAILOR">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>تیشرت مردانه TOMTAILOR</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price text-danger">ناموجود</strong>
                                        </div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="product-outer slick-slide" data-slick-index="6" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.ir/shop/products/erqyd/شلوارک-زیر-زانو-طرحدار" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.ir/uploads/image/2020/8/optimized/1597125665-n5qxHLXuWLdIHiUc.jpg" alt="شلوارک زیر زانو طرحدار">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>شلوارک زیر زانو طرحدار</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price text-danger">ناموجود</strong>
                                        </div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="product-outer slick-slide" data-slick-index="7" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.ir/shop/products/bq95d/شورتک-طرحدار-H-M" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.ir/uploads/image/2020/8/optimized/1597125662-84w53onNWHRZbg31.jpg" alt="شورتک طرحدار H&amp;M">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>شورتک طرحدار H&amp;M</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">39,000 تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="8" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.ir/shop/products/b1yxb/تیشرت-ساده-مردانه" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.ir/uploads/image/2020/8/optimized/1597136762-uvoip4AET3b0sGKc.jpg" alt="تیشرت ساده مردانه">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>تیشرت ساده مردانه</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">59,000 تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="9" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.ir/shop/products/bzy5e/تاپ-تریکو-blue-motion" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.ir/uploads/image/2020/8/optimized/1597131332-9xJA5L5apiUbGQAS.jpg" alt="تاپ تریکو blue motion">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>تاپ تریکو blue motion</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">39,000 تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="10" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.ir/shop/products/dyyjd/لگ-ساده-BASIC" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.ir/uploads/image/2020/8/optimized/1597126926-c2wkRy2CwVJimq0b.jpg" alt="لگ ساده BASIC">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>لگ ساده BASIC</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">49,000 تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="11" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.ir/shop/products/ex8qd/شومیز-جین-خال-خالی" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.ir/uploads/image/2020/8/optimized/1597126917-77obKk3uMZTwxv1i.jpg" alt="شومیز جین خال خالی">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>شومیز جین خال خالی</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">85,000 تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="12" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.ir/shop/products/bwype/دامن-کوتاه-نخی" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.ir/uploads/image/2020/8/optimized/1597126879-rolNzo4N09rIsEJ2.jpg" alt="دامن کوتاه نخی">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>دامن کوتاه نخی</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">59,000 تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="13" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.ir/shop/products/dv69b/تیشرت-مردانه-TOMTAILOR" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.ir/uploads/image/2020/8/optimized/1597126645-9SwrM4vpOdsHI7jR.jpg" alt="تیشرت مردانه TOMTAILOR">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>تیشرت مردانه TOMTAILOR</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price text-danger">ناموجود</strong>
                                        </div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="14" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.ir/shop/products/erqyd/شلوارک-زیر-زانو-طرحدار" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.ir/uploads/image/2020/8/optimized/1597125665-n5qxHLXuWLdIHiUc.jpg" alt="شلوارک زیر زانو طرحدار">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>شلوارک زیر زانو طرحدار</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price text-danger">ناموجود</strong>
                                        </div>
                                    </div>
                                </div>
                            </a></div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="15" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.ir/shop/products/bq95d/شورتک-طرحدار-H-M" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.ir/uploads/image/2020/8/optimized/1597125662-84w53onNWHRZbg31.jpg" alt="شورتک طرحدار H&amp;M">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>شورتک طرحدار H&amp;M</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">39,000 تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a></div>
                    </div>
                </div>


            </div>
        </section>
        <div class="d-flex align-items-center justify-content-center">
            <a class="btn btn-black" href="https://ibolak.ir" title="" target="_self"><i class="fal fa-arrow-right"></i><span>رفتن به صفحه اصلی</span></a>
        </div>

    </main>

    <main>

        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <div class="basket-items-wrapper">
                    <div class="basket-item">
                        <div class="basket-item__image">
                            <img src="https://ibolak.com/uploads/image/2020/8/optimized/1596359530-OQ3qpGvPFN8dtDWc.jpg" alt="">
                        </div>
                        <div class="basket-item__body">
                            <div class="d-flex align-items-center justify-content-between">
                                <h3>شلوار جین کاغذی اسلش</h3>
                                <a class="remove" data-id="brjvd" data-variant-id="1628" onclick="deleteConfirmation()" style="cursor: pointer" target="_self">
                                    <i class="far fa-trash"></i> </a>
                            </div>
                            <div class="basket-item__details">
                                <span>سایز (حروفی): XS</span> <span>رنگ: آبی روشن</span>
                            </div>
                            <div class="d-flex align-items-end justify-content-between">
                                <div class="product-count basket-item-wrapper__count"><span>تعداد:</span>
                                    <div class="product-count-wrapper" data-max="10000" data-min="1">
                                        <input type="hidden" data-id="brjvd" data-variant-id="1628" value="1">
                                        <a href="#" class="basket-item-wrapper__count__plus" title="" target="_self"><i class="far fa-plus"></i></a>
                                        <span class="item_count">1</span>
                                        <a href="#" title="" class="basket-item-wrapper__count__minus" target="_self" style="opacity: 0.3;"><i class="far fa-minus"></i></a>
                                    </div>
                                </div>

                                <div class="d-flex align-items-end justify-content-end flex-column">
                                    <small>قیمت واحد:</small> <strong class="text-success">89,000 تومان</strong>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <aside class="col-lg-4 col-sm-12">
                <h4 class="title-dot">فاکتور خرید شما</h4>
                <div id="total-price"><i>+</i>
                    <p>مجموع سفارش</p>
                    <strong> 89,000 تومان

                    </strong>
                </div>
                <div id="total-price"><i>=</i>
                    <p>مبلغ پرداختی شما</p>
                    <strong> 89,000 تومان

                    </strong>
                </div>
                <a class="btn btn-primary btn-block" href="https://ibolak.com/shop/basket/info-verify" title="" target="_self"><i class="fal fa-truck"></i><span>ادامه فرایند خرید</span></a>

            </aside>
        </div>
        <section class="products-container" id="related-products">
            <div class="section-header">
                <div class="section-title">
                    <h2>محصولاتی که اغلب همراه محصولات شما خریداری شده‌اند</h2>
                </div>
                <div class="section-arrows">
                    <a class="arrow-next" href="#" title="" target="_self"><i class="far fa-arrow-right"></i></a><a class="arrow-prev" href="#" title="" target="_self"><i class="far fa-arrow-left"></i></a>
                </div>
            </div>


            <div class="products-wrapper should-slide slick-initialized slick-slider">
                <div class="slick-list draggable">
                    <div class="slick-track" style="opacity: 1; width: 11430px; transform: translate3d(1270px, 0px, 0px);">
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="-5" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/bg55d/تونیک-بغل-زیپدار-کد-ib00147" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1596956039-2EPoqkRL353wPQ3s.jpg " alt="تونیک بغل زیپدار کد ib00147">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>تونیک بغل زیپدار کد ib00147</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">125,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/e841d/مانتو-نخی-عبایی-کد-ib00145" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1596894260-k16MeStuUu9U9zqC.jpg " alt="مانتو نخی عبایی کد ib00145">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>مانتو نخی عبایی کد ib00145</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">59,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/b747b/تیشرت-پاندا-fbsister-کد-ib00144" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1596893933-FO7iQbEJ6YO4kkuP.jpg " alt="تیشرت پاندا fbsister کد ib00144">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>تیشرت پاندا fbsister کد ib00144</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">52,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/e541d/ست-تیشرت-و-شلوار-فلامینگو-کد-ib00142" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1596714348-FsMe40jXrOnSgGtA.jpg " alt="ست تیشرت و شلوار فلامینگو کد ib00142">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>ست تیشرت و شلوار فلامینگو کد ib00142</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">98,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/b44jb/شلوار-راحتی-طرحدار-کد-ib00141" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1596700080-OXEl7XZ7jn9bnjVK.jpg " alt="شلوار راحتی طرحدار کد ib00141">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>شلوار راحتی طرحدار کد ib00141</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">59,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 254px;" tabindex="0">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/b1yxb/تیشرت-ساده-مردانه" title="" target="_self" tabindex="0">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1597136762-uvoip4AET3b0sGKc.jpg " alt="تیشرت ساده مردانه">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>تیشرت ساده مردانه</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">59,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide slick-active" data-slick-index="1" aria-hidden="false" style="width: 254px;" tabindex="0">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/bzy5e/تاپ-تریکو-blue-motion" title="" target="_self" tabindex="0">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1597131332-9xJA5L5apiUbGQAS.jpg " alt="تاپ تریکو blue motion">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>تاپ تریکو blue motion</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">39,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide slick-active" data-slick-index="2" aria-hidden="false" style="width: 254px;" tabindex="0">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/dyyjd/لگ-ساده-BASIC" title="" target="_self" tabindex="0">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1597126926-c2wkRy2CwVJimq0b.jpg " alt="لگ ساده BASIC">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>لگ ساده BASIC</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">49,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide slick-active" data-slick-index="3" aria-hidden="false" style="width: 254px;" tabindex="0">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/ex8qd/شومیز-جین-خال-خالی" title="" target="_self" tabindex="0">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1597126917-77obKk3uMZTwxv1i.jpg " alt="شومیز جین خال خالی">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>شومیز جین خال خالی</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">85,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide slick-active" data-slick-index="4" aria-hidden="false" style="width: 254px;" tabindex="0">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/bwype/دامن-کوتاه-نخی" title="" target="_self" tabindex="0">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1597126879-rolNzo4N09rIsEJ2.jpg " alt="دامن کوتاه نخی">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>دامن کوتاه نخی</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">59,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide" data-slick-index="5" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/bq95d/شورتک-طرحدار-H-M" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1597125662-84w53onNWHRZbg31.jpg " alt="شورتک طرحدار H&amp;M">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>شورتک طرحدار H&amp;M</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">39,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide" data-slick-index="6" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/em6pd/تیشرت-minion" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1597123031-GWwQRmcp735VBdFT.jpg " alt="تیشرت minion">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>تیشرت minion</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">42,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide" data-slick-index="7" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/bl6kb/تیشرت-LOVE-کد-ib00158" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1597045365-RQO9SAplF6qsfsT1.jpg " alt="تیشرت LOVE کد ib00158">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>تیشرت LOVE کد ib00158</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">59,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide" data-slick-index="8" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/dk6ze/تاپ-گیپوری-کد-ib00157" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1597043854-qotO0qHys187IKfk.jpg " alt="تاپ گیپوری کد ib00157">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>تاپ گیپوری کد ib00157</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">39,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide" data-slick-index="9" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/dg51e/تیشرت-kenzo-کد-ib00155" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1597041985-yt1dS2l6VdQJsyCQ.jpg " alt="تیشرت kenzo کد ib00155">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>تیشرت kenzo کد ib00155</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">48,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide" data-slick-index="10" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/bp67e/تاپ-ساده-collection-کد-ib00153" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1597041279-8phQdymzwKzWBPU6.jpg " alt="تاپ ساده collection کد ib00153">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>تاپ ساده collection کد ib00153</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">39,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide" data-slick-index="11" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/bn6pd/بلوز-گیپوری-کد-ib00152" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1597040584-YZTidotLvt5iYLxg.jpg " alt="بلوز گیپوری کد ib00152">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>بلوز گیپوری کد ib00152</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">55,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide" data-slick-index="12" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/dm6zb/شلوار-راه-راه-کنفی-کد-ib00151" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1597040195-uv5yhzi0XJoyilla.jpg " alt="شلوار راه راه کنفی کد ib00151">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>شلوار راه راه کنفی کد ib00151</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">85,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide" data-slick-index="13" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/el69e/شلوار-مام-فیت2-کد-ib00150" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1596966723-zJCEp8HsZQUmYjoT.jpg " alt="شلوار مام فیت2 کد ib00150">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>شلوار مام فیت2 کد ib00150</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">109,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide" data-slick-index="14" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/bk6rd/تاپ-بندی-primark-کد-ib00149" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1596964459-gsh5bjLObFbQDN3U.jpg " alt="تاپ بندی primark کد ib00149">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>تاپ بندی primark کد ib00149</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">32,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide" data-slick-index="15" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/bg55d/تونیک-بغل-زیپدار-کد-ib00147" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1596956039-2EPoqkRL353wPQ3s.jpg " alt="تونیک بغل زیپدار کد ib00147">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>تونیک بغل زیپدار کد ib00147</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">125,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide" data-slick-index="16" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/e841d/مانتو-نخی-عبایی-کد-ib00145" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1596894260-k16MeStuUu9U9zqC.jpg " alt="مانتو نخی عبایی کد ib00145">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>مانتو نخی عبایی کد ib00145</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">59,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide" data-slick-index="17" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/b747b/تیشرت-پاندا-fbsister-کد-ib00144" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1596893933-FO7iQbEJ6YO4kkuP.jpg " alt="تیشرت پاندا fbsister کد ib00144">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>تیشرت پاندا fbsister کد ib00144</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">52,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide" data-slick-index="18" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/e541d/ست-تیشرت-و-شلوار-فلامینگو-کد-ib00142" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1596714348-FsMe40jXrOnSgGtA.jpg " alt="ست تیشرت و شلوار فلامینگو کد ib00142">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>ست تیشرت و شلوار فلامینگو کد ib00142</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">98,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide" data-slick-index="19" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/b44jb/شلوار-راحتی-طرحدار-کد-ib00141" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1596700080-OXEl7XZ7jn9bnjVK.jpg " alt="شلوار راحتی طرحدار کد ib00141">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>شلوار راحتی طرحدار کد ib00141</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">59,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="20" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/b1yxb/تیشرت-ساده-مردانه" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1597136762-uvoip4AET3b0sGKc.jpg " alt="تیشرت ساده مردانه">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>تیشرت ساده مردانه</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">59,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="21" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/bzy5e/تاپ-تریکو-blue-motion" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1597131332-9xJA5L5apiUbGQAS.jpg " alt="تاپ تریکو blue motion">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>تاپ تریکو blue motion</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">39,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="22" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/dyyjd/لگ-ساده-BASIC" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1597126926-c2wkRy2CwVJimq0b.jpg " alt="لگ ساده BASIC">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>لگ ساده BASIC</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">49,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="23" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/ex8qd/شومیز-جین-خال-خالی" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1597126917-77obKk3uMZTwxv1i.jpg " alt="شومیز جین خال خالی">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>شومیز جین خال خالی</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">85,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="24" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/bwype/دامن-کوتاه-نخی" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1597126879-rolNzo4N09rIsEJ2.jpg " alt="دامن کوتاه نخی">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>دامن کوتاه نخی</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">59,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="25" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/bq95d/شورتک-طرحدار-H-M" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1597125662-84w53onNWHRZbg31.jpg " alt="شورتک طرحدار H&amp;M">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>شورتک طرحدار H&amp;M</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">39,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="26" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/em6pd/تیشرت-minion" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1597123031-GWwQRmcp735VBdFT.jpg " alt="تیشرت minion">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>تیشرت minion</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">42,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="27" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/bl6kb/تیشرت-LOVE-کد-ib00158" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1597045365-RQO9SAplF6qsfsT1.jpg " alt="تیشرت LOVE کد ib00158">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>تیشرت LOVE کد ib00158</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">59,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="28" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/dk6ze/تاپ-گیپوری-کد-ib00157" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1597043854-qotO0qHys187IKfk.jpg " alt="تاپ گیپوری کد ib00157">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>تاپ گیپوری کد ib00157</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">39,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="29" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/dg51e/تیشرت-kenzo-کد-ib00155" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1597041985-yt1dS2l6VdQJsyCQ.jpg " alt="تیشرت kenzo کد ib00155">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>تیشرت kenzo کد ib00155</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">48,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="30" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/bp67e/تاپ-ساده-collection-کد-ib00153" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1597041279-8phQdymzwKzWBPU6.jpg " alt="تاپ ساده collection کد ib00153">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>تاپ ساده collection کد ib00153</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">39,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="31" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/bn6pd/بلوز-گیپوری-کد-ib00152" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1597040584-YZTidotLvt5iYLxg.jpg " alt="بلوز گیپوری کد ib00152">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>بلوز گیپوری کد ib00152</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">55,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="32" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/dm6zb/شلوار-راه-راه-کنفی-کد-ib00151" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1597040195-uv5yhzi0XJoyilla.jpg " alt="شلوار راه راه کنفی کد ib00151">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>شلوار راه راه کنفی کد ib00151</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">85,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="33" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/el69e/شلوار-مام-فیت2-کد-ib00150" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1596966723-zJCEp8HsZQUmYjoT.jpg " alt="شلوار مام فیت2 کد ib00150">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>شلوار مام فیت2 کد ib00150</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">109,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="34" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/bk6rd/تاپ-بندی-primark-کد-ib00149" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1596964459-gsh5bjLObFbQDN3U.jpg " alt="تاپ بندی primark کد ib00149">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>تاپ بندی primark کد ib00149</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">32,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="35" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/bg55d/تونیک-بغل-زیپدار-کد-ib00147" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1596956039-2EPoqkRL353wPQ3s.jpg " alt="تونیک بغل زیپدار کد ib00147">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>تونیک بغل زیپدار کد ib00147</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">125,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="36" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/e841d/مانتو-نخی-عبایی-کد-ib00145" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1596894260-k16MeStuUu9U9zqC.jpg " alt="مانتو نخی عبایی کد ib00145">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>مانتو نخی عبایی کد ib00145</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">59,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="37" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/b747b/تیشرت-پاندا-fbsister-کد-ib00144" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1596893933-FO7iQbEJ6YO4kkuP.jpg " alt="تیشرت پاندا fbsister کد ib00144">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>تیشرت پاندا fbsister کد ib00144</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">52,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="38" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/e541d/ست-تیشرت-و-شلوار-فلامینگو-کد-ib00142" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1596714348-FsMe40jXrOnSgGtA.jpg " alt="ست تیشرت و شلوار فلامینگو کد ib00142">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>ست تیشرت و شلوار فلامینگو کد ib00142</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">98,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="product-outer slick-slide slick-cloned" data-slick-index="39" aria-hidden="true" style="width: 254px;" tabindex="-1">
                            <a class="product-wrapper" href="https://ibolak.com/shop/products/b44jb/شلوار-راحتی-طرحدار-کد-ib00141" title="" target="_self" tabindex="-1">
                                <div class="product-wrapper__image">
                                    <img src="https://ibolak.com/uploads/image/2020/8/optimized/1596700080-OXEl7XZ7jn9bnjVK.jpg " alt="شلوار راحتی طرحدار کد ib00141">
                                </div>
                                <div class="product-wrapper__body">
                                    <h5>شلوار راحتی طرحدار کد ib00141</h5>
                                    <div class="d-flex align-items-end justify-content-between">
                                        <strong></strong>
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <strong class="product-wrapper__price">59,000تومان</strong>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>


            </div>
        </section>

    </main>
@endsection




@section('scriptCart')
    <script>

        // Check values to see if they're at minimum already on page load
        $('.product-count-wrapper input').each(function () {
            console.log($(this).val());
            $(this).siblings('span').html($(this).val());

            if (parseInt($(this).val()) <= parseInt($(this).parent().data('min'))) {
                $(this).siblings('.basket-item-wrapper__count__minus').css('opacity', '.3');
            }

            if (parseInt($(this).val()) >= parseInt($(this).parent().data('max'))) {
                $(this).siblings('.basket-item-wrapper__count__plus').css('opacity', '.3');
            }

        });

        $('.basket-item-wrapper__count__plus').click(function (e) {
            e.preventDefault();
            var input = $(this).siblings('input');


            if (parseInt(input.val()) + 1 >= parseInt($(this).parent().data('max'))) {
                $(this).css('opacity', '.3');
            }
            if (parseInt($(this).siblings('input').val()) < parseInt($(this).parent().data('max'))) {
                $(this).siblings('input').val(parseInt(input.val()) + 1);
                updateBasket(input);
                $(this).siblings('span').html(input.val());


            }

            if (parseInt($(this).siblings('input').val()) > parseInt($(this).parent().data('min'))) {
                $(this).siblings('.basket-item-wrapper__count__minus').css('opacity', '1');
            }
        });

        $('.basket-item-wrapper__count__minus').click(function (e) {
            e.preventDefault();
            var input = $(this).siblings('input');
            value = input.val();
            if (parseInt(input.val()) - 1 <= parseInt($(this).parent().data('min'))) {
                $(this).css('opacity', '.3');
            }

            if (parseInt($(this).siblings('input').val()) > parseInt($(this).parent().data('min'))) {
                $(this).siblings('input').val(parseInt(input.val()) - 1);
                updateBasket(input);
                $(this).siblings('span').html(input.val());

            }

            if (parseInt($(this).siblings('input').val()) < parseInt($(this).parent().data('max'))) {
                $(this).siblings('.basket-item-wrapper__count__plus').css('opacity', '1');
            }
        });

        $(document).on('change', '.product_count', function () {
            var input = $(this);
            updateBasket(input);
        });

        function updateBasket(item) {
            var productId = item.attr('data-id');
            var productCount = item.val();
            var variantId = item.attr('data-variant-id');

            $.ajax({
                url: "/shop/basket/" + productId + "/update?count=" + productCount + "&sku_id=" + variantId,
                success: function (response) {
                    location.reload();
                },
                error: function () {
                    location.reload();
                }
            })
        }

        function deleteBaketItem() {
            $(document).on('click', '.remove', function () {
                var input = $(this);
                var productId = input.attr('data-id');
                var variantId = input.attr('data-variant-id');
                $.ajax({
                    url: "/shop/basket/" + productId + "/update?count=0&sku_id=" + variantId,
                    success: function (response) {
                        location.reload();
                    },
                    error: function () {
                        location.reload();
                    }
                })
            });
        }

        function deleteConfirmation() {
            var r = confirm('آیا از حذف محصول مطمئن هستید؟');
            if (r == true) {
                deleteBaketItem();
            }
        }
    </script>
@endsection



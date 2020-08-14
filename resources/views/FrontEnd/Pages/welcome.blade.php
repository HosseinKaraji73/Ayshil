@extends('FrontEnd.Layouts.master')

@section('title','صفحه اصلی')

@section('meta')
    <meta name="description" content="فروشگاه آی بولک"/>
    <meta name="keywords" content="فروشگاه آی بولک"/>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org/",
            "@graph": [
                {
                    "@type": "Organization",
                    "name": "فروشگاه اینترنتی آيشیل",
                    "address": {
                        "@type": "PostalAddress",
                        "streetAddress": "گرگان، خیابان ولیعصر، عدالت ۳۹، مجتمع تجاری رویال",
                        "addressLocality": "Tehran",
                        "addressRegion": "TH",
                        "addressCountry": "IR"
                    },
                    "keywords": "پوشاک, لباس",
                    "description": "فروشگاه آی بولک",
                    "url": "index.html",
                    "sameAs": [
                        "https://t.me/ibolak",
                        "https://www.instagram.com/ibolak"
                    ],
                    "contactPoint": {
                        "@type": "ContactPoint",
                        "telephone": "01732534106-9",
                        "contactType": "Customer service"
                    }
                },
                {
                    "@type": "WebSite",
                    "url": "index.html",
                    "name": "فروشگاه اینترنتی آيشیل"
                }
            ]
        }





    </script>
@endsection


@section('classBody')
    home-page
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

            @include('FrontEnd.Includes.search')
        </div>
    </div>
@endsection

@section('header')
    <header>

        <div id="menu-wrapper">
            <ul>
                {{--                    <li>--}}
                {{--                        <a href="{{url('/')}}" title="" target="_self"> <i class="fal fa-ellipsis-h"></i>--}}
                {{--                            <span>حراجی</span> </a>--}}
                {{--                    </li>--}}

                @foreach($menuProducts as $menuProduct)

                    <li class="has-megamenu">
                        <a href="{{action('FrontEnd\ProductController@MenuShow' ,[$menuProduct->id,$menuProduct->name])}}"><i class="fal fa-ellipsis-h"></i><span>{{$menuProduct->name}}</span></a>
                        <i class="far fa-angle-left"></i>
                        <ul class="megamenu">
                            <div class="row">
                                {{--                                                            <div class="col-lg-4">--}}
                                {{--                                                                <div class="subcategory">--}}
                                {{--                                                                    <a href="{{url('/')}}" title="" target="_self">--}}
                                {{--                                                                        <h4>{{$menuProduct->name}}</h4>--}}
                                {{--                                                                    </a>--}}
                                {{--                                                                    <ul>--}}
                                {{--                                                                    </ul>--}}
                                {{--                                                                </div>--}}
                                {{--
                                                                                          </div>--}}
                                @foreach($submenu[$menuProduct->id] as $subMenuProduct)

                                    <div class="col-lg-4">
                                        <div class="subcategory">
                                            <a href="#" title="" target="_self">
{{--                                            <a href="{{action('FrontEnd\ProductController@subMenuShow' ,[$subMenuProduct->menuProducts_id,$subMenuProduct->id,$subMenuProduct->name])}}" title="" target="_self">--}}
                                                <h4>{{$subMenuProduct->name}}</h4>
                                            </a>
                                            <ul>
                                                @foreach($subsubmenu[$subMenuProduct->id] as $subSubMenuProduct)
                                                    <li>
                                                        <a href="{{action('FrontEnd\ProductController@subMenuShow' ,[$subSubMenuProduct->subMenuProducts_id,$subSubMenuProduct->id,$subSubMenuProduct->name])}}" title=""
                                                           target="_self">{{$subSubMenuProduct->name}}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </ul>
                    </li>
                @endforeach


            </ul>
        </div>


        <div class="carousel-wrapper">
            <div class="carousel-controls">
                <div class="arrows-wrapper">
                    <a class="next-slide" href="#" title="" target="_self"> <i class="far fa-arrow-up"></i> </a>
                    <a class="prev-slide" href="#" title="" target="_self"> <i class="far fa-arrow-down"></i> </a>
                </div>
            </div>
            <div class="carousel-inner">
                <div class="slide-wrapper"><img src="img/admin/sliders/{{$slider1[1]->photo1}}" alt="Slide"/></div>
                <div class="slide-wrapper"><img src="img/admin/sliders/{{$slider1[1]->photo2}}" alt="Slide"/></div>
                <div class="slide-wrapper"><img src="img/admin/sliders/{{$slider1[1]->photo3}}" alt="Slide"/></div>
                <div class="slide-wrapper"><img src="img/admin/sliders/{{$slider1[1]->photo4}}" alt="Slide"/></div>
            </div>
        </div>
    </header>
@endsection


@section('main')
    <main>
        <div class="banners-wrapper">
            <div class="row">
                <div class="col-lg-3 col-sm-12 banner-outer">
                    <a class="banner-wrapper" href="{{action('FrontEnd\ProductController@MenuShow' ,[2,'زنانه'])}}" title="" target="_self"><img src="{{asset('img/admin/setting')}}/{{$slider2->photo1}}" alt="Banner"/></a>
                </div>
                <div class="col-lg-3 col-sm-12 banner-outer">
                    <a class="banner-wrapper" href="{{action('FrontEnd\ProductController@MenuShow' ,[3,'مردانه'])}}" title="" target="_self"><img src="{{asset('img/admin/setting')}}/{{$slider2->photo2}}" alt="Banner"/></a>
                </div>
                <div class="col-lg-3 col-sm-12 banner-outer">
                    <a class="banner-wrapper" href="{{action('FrontEnd\ProductController@MenuShow' ,[4,'بچگانه'])}}" title="" target="_self"><img src="{{asset('img/admin/setting')}}/{{$slider2->photo3}}" alt="Banner"/></a>
                </div>
                <div class="col-lg-3 col-sm-12 banner-outer">
                    <a class="banner-wrapper" href="{{action('FrontEnd\ProductController@MenuShow' ,[5,'سایر'])}}" title="" target="_self"><img src="{{asset('img/admin/setting')}}/{{$slider2->photo4}}" alt="Banner"/></a>
                </div>
            </div>
            <a class="h-banner-wrapper" href="{{url('/')}}" title="" target="_self"><img src="{{asset('img/admin/setting')}}/{{$slider2->photo5}}" alt="Banner"/></a>
        </div>
        <section class="products-container" id="latest-sales">
            <div class="section-header">
                <div class="section-title">
                    <h1>جدید‌ترین محصولات آی‌بولک</h1>
                    <small>اولین کسی باشید که سفارش می‌دهید</small>

                </div>
                <div class="section-arrows">
                    <a class="arrow-next" href="#" title="" target="_self"><i class="far fa-arrow-right"></i></a><a class="arrow-prev" href="#" title="" target="_self"><i class="far fa-arrow-left"></i></a>
                </div>
            </div>
            <div class="products-wrapper should-slide">
                @foreach($productsNew2 as $productNew2)
                    <div class="col-lg-3">
                        <a class="product-wrapper" href="{{action('FrontEnd\ProductController@show' ,[$productNew2->sub_menu_product,$productNew2->sub_sub_menu_product,$productNew2->id,$productNew2->title])}}" title="" target="_self">
                            <div class="product-wrapper__image">
                                <img src="{{asset("img/admin/product/$productNew2->photo1")}}" alt="پیراهن خال خالی"/>
                            </div>
                            <div class="product-wrapper__body">
                                <h5>{{$productNew2->title}}</h5>
                                <div class="d-flex align-items-end justify-content-between">
                                    <strong></strong>
                                    @if(isset($productNew2->discount))
                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <s>{{$productNew2->price}} تومان</s>
                                            <strong class="product-wrapper__price">{{$productNew2->price_after_discount}} تومان</strong>
                                        </div>
                                    @else
                                        <strong class="product-wrapper__price">{{$productNew2->price}} تومان</strong>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>

            <a class="btn btn-outline btn-block" href="{{url('products')}}" title="" target="_self"><i class="far fa-plus"></i><span>مشاهده محصولات بیشتر</span></a>
        </section>
        <div id="whyibolak">
            <h2>چرا از آيشیل خرید کنیم؟</h2>
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="d-flex align-items-center justify-content-start">
                        <img src="{{asset('FrontEnd/images/moneybag.svg')}}" alt="لباس‌های ارزان قیمت"/>
                        <div class="d-flex align-items-start justify-content-center flex-column">
                            <h3>قیمت بسیار پایین</h3>
                            <p>قیمتی که هرگز در جایی دیگر پیدا نخواهید کرد</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="d-flex align-items-center justify-content-start">
                        <img src="{{asset('FrontEnd/images/hands.svg')}}" alt="پشتیبانی ۲۴ ساعته"/>
                        <div class="d-flex align-items-start justify-content-center flex-column">
                            <h3>ساعت پاسخگویی پشتیبانی از 9 صبح تا 6 عصر</h3>
                            <p>در هر مرحله‌ای همراه شما هستیم</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section id="latest-products" class="products-container">

            <div class="section-header">
                <h2>پیشنهاد‌های ویژه</h2>
                <div class="section-subtitle"><span>قیمت‌هایی که هیچ‌کجا پیدا نخواهید کرد</span></div>
            </div>
            <div class="row">
                @foreach($productsSpecial2 as $productSpecial2)
                    <div class="product-outer">
                        <a class="product-wrapper" href="{{action('FrontEnd\ProductController@show' ,[$productSpecial2->sub_menu_product,$productSpecial2->sub_sub_menu_product,$productSpecial2->id,$productSpecial2->title])}}" title="" target="_self">
                            <div class="product-wrapper__image">
                                <img src="{{asset("img/admin/product/$productSpecial2->photo1")}}" alt="{{$productSpecial2->title}}">
                            </div>
                            <div class="product-wrapper__body">
                                <h5>{{$productSpecial2->title}}</h5>
                                <div class="d-flex align-items-end justify-content-between">
                                    {{--                            <strong>ست راحتی</strong>--}}
                                    @if(isset($productSpecial2->discount))

                                        <div class="d-flex align-items-end justify-content-center flex-column">
                                            <s>{{$productSpecial2->price}} تومان</s>
                                            <strong class="product-wrapper__price">{{$productSpecial2->price_after_discount}} تومان</strong>
                                        </div>
                                    @else
                                        <strong class="product-wrapper__price">{{$productSpecial2->price}} تومان</strong>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </section>


        <section id="blog-posts-wrapper">
            <div class="d-flex align-items-center justify-content-between mb-5">
                <h1>اخبار آيشیل</h1>
                <a class="btn-text" href="{{url('events')}}" title="بلاگ آيشیل" target="_self"><i class="fal fa-plus"></i><span>مشاهده همه</span></a>
            </div>
            <div class="row">
                @foreach($events as $event)
                    <div class="col-lg-3 col-sm-12">
                        <a class="blog-post" href="{{action('FrontEnd\EventController@show' ,[$event->id,$event->title])}}" title="{{$event->title}}" target="_self">
                            <div class="blog-post__image">
                                <img src="{{asset("img/admin/event/$event->photo1")}}" alt="Blog Post"/>
                            </div>
                            <div class="blog-post__body">
                                <h3>{{$event->title}}</h3>
                                <small>{{$event->cteated_at_fa}}</small>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>
        </section>


    </main>
@endsection

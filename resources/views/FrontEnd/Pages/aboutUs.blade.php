@extends('FrontEnd.Layouts.master')

@if(App::getLocale() == 'fa')
    @section('title','درباره ما')
@elseif(App::getLocale() == 'en')
    @section('title','Abouts Us')
@endif

@section('meta')

@endsection

@section('style')
@endsection

@section('headScript')
    <script type="text/javascript">
        var baseDir = "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/";

        var prestashop = {
            "cart": {
                "products": [],
                "totals": {
                    "total": {"type": "total", "label": "Total", "amount": 0, "value": "$0.00"},
                    "total_including_tax": {
                        "type": "total",
                        "label": "Total (tax incl.)",
                        "amount": 0,
                        "value": "$0.00"
                    },
                    "total_excluding_tax": {
                        "type": "total",
                        "label": "Total (tax excl.)",
                        "amount": 0,
                        "value": "$0.00"
                    }
                },
                "subtotals": {
                    "products": {"type": "products", "label": "Subtotal", "amount": 0, "value": "$0.00"},
                    "discounts": null,
                    "shipping": {"type": "shipping", "label": "Shipping", "amount": 0, "value": "Free"},
                    "tax": {"type": "tax", "label": "Taxes", "amount": 0, "value": "$0.00"}
                },
                "products_count": 0,
                "summary_string": "0 items",
                "vouchers": {"allowed": 0, "added": []},
                "discounts": [],
                "minimalPurchase": 0,
                "minimalPurchaseRequired": ""
            },
            "currency": {"name": "US Dollar", "iso_code": "USD", "iso_code_num": "840", "sign": "$"},
            "customer": {
                "lastname": null,
                "firstname": null,
                "email": null,
                "birthday": null,
                "newsletter": null,
                "newsletter_date_add": null,
                "optin": null,
                "website": null,
                "company": null,
                "siret": null,
                "ape": null,
                "is_logged": false,
                "gender": {"type": null, "name": null},
                "addresses": []
            },
            "language": {
                "name": "English (English)",
                "iso_code": "en",
                "locale": "en-US",
                "language_code": "en-us",
                "is_rtl": "0",
                "date_format_lite": "m\/d\/Y",
                "date_format_full": "m\/d\/Y H:i:s",
                "id": 1
            },
            "page": {
                "title": "",
                "canonical": null,
                "meta": {
                    "title": "About us",
                    "description": "Learn more about us",
                    "keywords": "about us, informations",
                    "robots": "noindex"
                },
                "page_name": "cms",
                "body_classes": {
                    "lang-en": true,
                    "lang-rtl": false,
                    "country-US": true,
                    "currency-USD": true,
                    "layout-left-column": true,
                    "page-cms": true,
                    "tax-display-disabled": true,
                    "cms-id-4": true
                },
                "admin_notifications": []
            },
            "shop": {
                "name": "Demo Store",
                "logo": "\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/demo-store-logo-1555915547.jpg",
                "stores_icon": "\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/logo_stores.png",
                "favicon": "\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/favicon.ico"
            },
            "urls": {
                "base_url": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/",
                "current_url": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/content\/4-about-us",
                "shop_domain_url": "https:\/\/innovatorythemes.com",
                "img_ps_url": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/",
                "img_cat_url": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/c\/",
                "img_lang_url": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/l\/",
                "img_prod_url": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/p\/",
                "img_manu_url": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/m\/",
                "img_sup_url": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/su\/",
                "img_ship_url": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/s\/",
                "img_store_url": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/st\/",
                "img_col_url": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/co\/",
                "img_url": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/themes\/IT1001\/assets\/img\/",
                "css_url": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/themes\/IT1001\/assets\/css\/",
                "js_url": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/themes\/IT1001\/assets\/js\/",
                "pic_url": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/upload\/",
                "pages": {
                    "address": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/address",
                    "addresses": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/addresses",
                    "authentication": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/login",
                    "cart": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/cart",
                    "category": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/index.php?controller=category",
                    "cms": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/index.php?controller=cms",
                    "contact": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/contact-us",
                    "discount": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/discount",
                    "guest_tracking": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/guest-tracking",
                    "history": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/order-history",
                    "identity": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/identity",
                    "index": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/",
                    "my_account": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/my-account",
                    "order_confirmation": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/order-confirmation",
                    "order_detail": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/index.php?controller=order-detail",
                    "order_follow": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/order-follow",
                    "order": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/order",
                    "order_return": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/index.php?controller=order-return",
                    "order_slip": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/credit-slip",
                    "pagenotfound": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/page-not-found",
                    "password": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/password-recovery",
                    "pdf_invoice": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/index.php?controller=pdf-invoice",
                    "pdf_order_return": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/index.php?controller=pdf-order-return",
                    "pdf_order_slip": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/index.php?controller=pdf-order-slip",
                    "prices_drop": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/prices-drop",
                    "product": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/index.php?controller=product",
                    "search": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/search",
                    "sitemap": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/sitemap",
                    "stores": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/stores",
                    "supplier": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/supplier",
                    "register": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/login?create_account=1",
                    "order_login": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/order?login=1"
                },
                "alternative_langs": {
                    "en-us": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/content\/4-about-us",
                    "de-de": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/de\/content\/4-about-us",
                    "fr-fr": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/fr\/content\/4-about-us",
                    "es-es": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/es\/content\/4-about-us",
                    "it-it": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/it\/content\/4-about-us"
                },
                "theme_assets": "\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/themes\/IT1001\/assets\/",
                "actions": {"logout": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/?mylogout="},
                "no_picture_image": {
                    "bySize": {
                        "small_default": {
                            "url": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/p\/en-default-small_default.jpg",
                            "width": 98,
                            "height": 111
                        },
                        "cart_default": {
                            "url": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/p\/en-default-cart_default.jpg",
                            "width": 125,
                            "height": 141
                        },
                        "medium_default": {
                            "url": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/p\/en-default-medium_default.jpg",
                            "width": 350,
                            "height": 396
                        },
                        "home_default": {
                            "url": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/p\/en-default-home_default.jpg",
                            "width": 350,
                            "height": 396
                        },
                        "large_default": {
                            "url": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/p\/en-default-large_default.jpg",
                            "width": 800,
                            "height": 905
                        }
                    },
                    "small": {
                        "url": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/p\/en-default-small_default.jpg",
                        "width": 98,
                        "height": 111
                    },
                    "medium": {
                        "url": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/p\/en-default-medium_default.jpg",
                        "width": 350,
                        "height": 396
                    },
                    "large": {
                        "url": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/p\/en-default-large_default.jpg",
                        "width": 800,
                        "height": 905
                    },
                    "legend": ""
                }
            },
            "configuration": {
                "display_taxes_label": false,
                "is_catalog": false,
                "show_prices": true,
                "opt_in": {"partner": true},
                "quantity_discount": {"type": "discount", "label": "Discount"},
                "voucher_enabled": 0,
                "return_enabled": 0
            },
            "field_required": [],
            "breadcrumb": {
                "links": [{
                    "title": "Home",
                    "url": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/"
                }, {
                    "title": "About us",
                    "url": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/content\/4-about-us"
                }], "count": 2
            },
            "link": {"protocol_link": "https:\/\/", "protocol_content": "https:\/\/"},
            "time": 1570653228,
            "static_token": "b37219994338861bc35224966f2f6efd",
            "token": "3d579dc08fa30b63da91ad8e3f21049d"
        };

        var search_url = "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/search";
    </script>
@endsection

@section('fooScript')
    @if(App::getLocale() == 'fa')
        <script type="text/javascript" src="{{asset('FrontEnd/js/RTL/bottom-ff95c795.js')}}"></script>
    @elseif(App::getLocale() == 'en')
        <script type="text/javascript" src="{{asset('FrontEnd/js/LTR/bottom-ff95c795.js')}}"></script>
    @endif
@endsection

@section('content')
    <section id="wrapper" style="margin-top: 28px;">


        <aside id="notifications">
            <div class="container">

            </div>
        </aside>

        <div class="container">
            <div class="row">
                <div id="content-wrapper" class="left-column col-xs-12 col-md-12">
                    <div class="innovatoryBreadcrumb">
                        <nav data-depth="2" class="breadcrumb">
                            <ol itemscope itemtype="">
                                <li itemprop="itemListElement" itemscope itemtype="{{url('/')}}">
                                    <a itemprop="item" href="{{url('/')}}">
                                        <span itemprop="name">{{__('settings.homeRoute')}}</span> </a>
                                    <meta itemprop="position" content="1">
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="">
                                    <a itemprop="item" href="{{url('/about-us')}}">
                                        <span itemprop="name">{{__('settings.aboutsRoute')}}</span> </a>
                                    <meta itemprop="position" content="2">
                                </li>
                            </ol>
                        </nav>
                    </div>

                    <div id="main">
                        <header class="sec-heading mb-30">
                            <h3>
                                {{__('settings.aboutsRoute')}}
                            </h3>
                        </header>
                        <section id="content" class="page-content page-cms page-cms-4">
                            <p class="sub-heading">
                                @if(App::getLocale() == 'fa')
                                    {!! $abouts->text1 !!}
                                @elseif(App::getLocale() == 'en')
                                    {!! $abouts->text1_en !!}
                                @endif
                            </p>
                            <div class="abt-top-row">
                                <div class="col-xs-12 col-md-6">
                                    <img src="{{asset('FrontEnd/images/admin/aboutUs/2.jpg')}}" alt=""/></div>
                                <div class="col-xs-12 col-md-6">
                                    <div class="cms-block">
                                        {{--                                        <h3 class="page-subheading"></h3>--}}
                                        <p>
                                            @if(App::getLocale() == 'fa')
                                                {!! $abouts->text2 !!}
                                            @elseif(App::getLocale() == 'en')
                                                {!! $abouts->text2_en !!}
                                            @endif
                                        </p>
                                        {{--                                        <ul class="list-1">--}}
                                        {{--                                            <li><em class="icon-ok"></em>Top quality products</li>--}}
                                        {{--                                            <li><em class="icon-ok"></em>Best customer service</li>--}}
                                        {{--                                            <li><em class="icon-ok"></em>30-days money back guarantee</li>--}}
                                        {{--                                        </ul>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="row mission-row">
                                <div class="col-xs-12 col-md-6 mission-col text-center">
                                    <img src="{{asset('FrontEnd/images/admin/aboutUs/3.png')}}" alt=""/>
                                    <h3>{{__('settings.ourMission')}}</h3>
                                    <p>
                                        @if(App::getLocale() == 'fa')
                                            {!! $abouts->text3 !!}
                                        @elseif(App::getLocale() == 'en')
                                            {!! $abouts->text3_en !!}
                                        @endif
                                    </p>
                                </div>
                                <div class="col-xs-12 col-md-6 vision-col text-center">
                                    <img src="{{asset('FrontEnd/images/admin/aboutUs/4.png')}}" alt=""/>
                                    <h3>{{__('settings.ourVision')}}</h3>
                                    <p>
                                        @if(App::getLocale() == 'fa')
                                            {!! $abouts->text4 !!}
                                        @elseif(App::getLocale() == 'en')
                                            {!! $abouts->text4_en !!}
                                        @endif
                                    </p>
                                </div>
                            </div>
                            <!--full-banner-->
                            <div class="sale-banner-bg">
                                <div class="sale-banner-bg-black">
                                    <h2>{{__('settings.ourTitle')}}</h2>
                                    <p>
                                        @if(App::getLocale() == 'fa')
                                            {!! $abouts->text5 !!}
                                        @elseif(App::getLocale() == 'en')
                                            {!! $abouts->text5_en !!}
                                        @endif
                                    </p>
                                    {{--                                    <br/><a href="#">Shop Now!</a></div>--}}
                                </div>
                                <!--team-sec-->
                                <div class="team-sec row">
                                    <h2 class="sec-head text-center">{{__('settings.ourTeam')}}</h2>
                                    <p class="sub-heading">
                                        @if(App::getLocale() == 'fa')
                                            {!! $abouts->text6 !!}
                                        @elseif(App::getLocale() == 'en')
                                            {!! $abouts->text6_en !!}
                                        @endif
                                    </p>
                                    <?php $i = 1 ?>
                                    @foreach($costomers as $costomer)
{{--                                        {{$i++}}--}}
                                        <div class="col-xs-12 col-md-6 col-lg-3">
                                            <div class="team-memb">
                                                <div class="team">
                                                    <div class="team-memb-img">
                                                        <img src="{{asset("img/admin/customers/$costomer->photo")}}" alt="" class="img-responsive"/>
                                                    </div>
                                                </div>
{{--                                                <div class="team-memb-body">--}}
{{--                                                    <h2>--}}
{{--                                                        @if(App::getLocale() == 'fa')--}}
{{--                                                            {{$costomer->title}}--}}
{{--                                                        @elseif(App::getLocale() == 'en')--}}
{{--                                                            {{$costomer->title_en}}--}}
{{--                                                        @endif--}}
{{--                                                    </h2>--}}
                                                    {{--                                                                                                <p class="story-p">Position</p>--}}
{{--                                                    <h4>--}}
{{--                                                        @if(App::getLocale() == 'fa')--}}
{{--                                                            {!! $abouts->teamDescrition.$i  !!}--}}
{{--                                                        @elseif(App::getLocale() == 'en')--}}
{{--                                                            {!! $abouts->teamDescrition.$i._en  !!}--}}
{{--                                                        @endif--}}
{{--                                                    </h4>--}}

                                                    <!--<a href="Johnsan-Keyshop-info.html" class="footer-about-a">Read More &nbsp; <i class="flaticon-arrow-pointing-to-right"></i></a>-->
{{--                                                </div>--}}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>


                        </section>

                        <footer class="page-footer"><!-- Footer content --></footer>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

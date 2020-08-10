@extends('FrontEnd.Layouts.master')

@if(App::getLocale() == 'fa')
    @section('title','صفحه اصلی')
@elseif(App::getLocale() == 'en')
    @section('title','Home')
@endif

@section('meta')
@endsection


@section('style')
    @if(App::getLocale() == 'fa')
        <link rel="stylesheet" href="{{asset('FrontEnd/css/RTL/slider.css')}}" type="text/css" media="all">
    @elseif(App::getLocale() == 'en')
        <link rel="stylesheet" href="{{asset('FrontEnd/css/LTR/slider.css')}}" type="text/css" media="all">
    @endif
@endsection

@section('headScript')
    <script type="text/javascript">
        var baseDir = "";

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
                    "title": "Demo Store",
                    "description": "Shop powered by laravel",
                    "keywords": "",
                    "robots": "index"
                },
                "page_name": "index",
                "body_classes": {
                    "lang-en": true,
                    "lang-rtl": false,
                    "country-US": true,
                    "currency-USD": true,
                    "layout-left-column": true,
                    "page-index": true,
                    "tax-display-disabled": true
                },
                "admin_notifications": []
            },
            "shop": {
                "name": "Demo Store",
                "logo": "",
                "stores_icon": "",
                "favicon": ""
            },
            "urls": {
                "base_url": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/",
                "current_url": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/",
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
                    "en-us": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/",
                    "de-de": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/de\/",
                    "fr-fr": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/fr\/",
                    "es-es": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/es\/",
                    "it-it": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/it\/"
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
                }], "count": 1
            },
            "link": {"protocol_link": "https:\/\/", "protocol_content": "https:\/\/"},
            "time": 1570653219,
            "static_token": "b37219994338861bc35224966f2f6efd",
            "token": "3d579dc08fa30b63da91ad8e3f21049d"
        };

        var search_url = "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/search";
    </script>
@endsection

@section('fooScript')
    @if(App::getLocale() == 'fa')
        <script type="text/javascript" src="{{asset('FrontEnd/js/RTL/bottom-ff95c795.js')}}"></script>
        <script type="text/javascript" src="{{asset('FrontEnd/js/RTL/productsalami.js')}}"></script>
    @elseif(App::getLocale() == 'en')
        <script type="text/javascript" src="{{asset('FrontEnd/js/LTR/bottom-ff95c795.js')}}"></script>
    @endif
    <script type="text/javascript" src="{{asset('FrontEnd/js/cunter.js')}}"></script>
    <script type="text/javascript" src="{{asset('FrontEnd/js/RTL/theme2924.js')}}" defer="defer"></script>
    <script type="text/javascript" src="{{asset('FrontEnd/js/RTL/product-inline-content.js')}}"></script>
    <script type="text/javascript" src="{{asset('FrontEnd/js/RTL/vendor-v2.js')}}"></script>
@endsection

@section('content')

    <div class="full-nav">
        <div class="container">
            <div class="row">
                <div class="container_it_megamenu">
                    <div class="innovatoryMegamenu">
                        <div class="it-menu-horizontal"
                             style="text-align: center;float: left;width: 100%;margin: 13px 0px 13px 0px;">
                            <span style="color: white">در زیر کادر جستجو با زدن تیکت بسته شدن درگاه خرید نوار زرد رنگ همراه با متن نوشته ظاهر گردد – زمینه رنگ کادر زرد پرنگ باشد</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="wrapper">
        <aside id="notifications">
            <div class="container">
            </div>
        </aside>
        @include('FrontEnd.Includes.slider')


        <div class="col-md-12 topmarginh1">
            <div class="service-sec">

                <div class="col-sm-6 col-md-4 service-box">
                    <div class="service">
                        <i class="icon icon1"></i>
                        <div class="ser-detail">
                            @if(App::getLocale() == 'fa')
                                <h2>ارسال از طریق شرکت ملی پست به تمام نقاط کشور</h2>
                                {{--                                <p>متن نمونه متن نمونه</p>--}}
                            @elseif(App::getLocale() == 'en')
                                <h2>Shipping to all locations</h2>
                                <p>sample text</p>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 service-box">
                    <div class="service">
                        <i class="icon icon2"></i>
                        <div class="ser-detail">
                            @if(App::getLocale() == 'fa')
                                <h2>پشتیبانی تمام وقت</h2>
                                {{--                                <p>متن نمونه متن نمونه</p>--}}
                            @elseif(App::getLocale() == 'en')
                                <h2>Support all week</h2>
                                <p>sample text</p>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 service-box">
                    <div class="service">
                        <i class="icon icon3"></i>
                        <div class="ser-detail">
                            @if(App::getLocale() == 'fa')
                                <h2>پرداخت انلاین امن از درگاه بانکی شاپرک</h2>
                                {{--                                <p>متن نمونه متن نمونه</p>--}}
                            @elseif(App::getLocale() == 'en')
                                <h2>Your kitchen partner</h2>
                                <p>sample text</p>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>


        {{--        <div class="team-sec row">--}}
        {{--            <h1 class="sec-head text-center minecenter">متن نمونه</h1>--}}
        {{--            <h2 class="sub-heading">--}}
        {{--                استاین یک متن نمونه است استاین یک متن نمونه است استاین یک متن نمونه است استاین یک متن نمونه است استاین یک م استاین یک متن نمونه استتن نمونه است--}}
        {{--            </h2>--}}
        {{--        </div>--}}


        <div class="container">
            <div class="row">
                <div id="left-column" class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                    <!-- Static Block module -->
                    <div class="offer-banner-sld-sec product-column-style">
                        {{--                        <div class="title_block">--}}
                        {{--                            <h3>تخفیف ویژه</h3>--}}
                        {{--                        </div>--}}
                        <div class="offer-banner-sld-wrap">
                            <div class="">

                                <a href="{{url('/')}}">
                                    <img class=" img-responsive"
                                         src="{{asset('FrontEnd/images/5.png')}}" width="auto"
                                         height="auto">
                                </a>

                            </div>
                        </div>
                    </div>
                    <!-- /Static block module -->
                    <div class="it-special-products product-column-style" data-items="1" data-speed="1000"
                         data-autoplay="0" data-time="3000" data-arrow="1" data-pagination="0" data-move="1"
                         data-pausehover="0" data-md="1" data-sm="1" data-xs="1" data-xxs="1">
                        <div class="itProductList itcolumn">
                            <div class="title_block">
                                <h3><span>{{__('settings.productsTopSelling2')}}</span></h3>
                            </div>
                            <div class="block-content">
                                <div class="itProductFilter row">
                                    <div class="special-item owl-carousel">
                                        <div class="item-product">

                                            @foreach($productsTopSelling2 as $productTopSelling2)
                                                <div class="item">
                                                    <div
                                                        class="innovatoryProductsList product-miniature js-product-miniature"
                                                        data-id-product="47" data-id-product-attribute="304">
                                                        <div class="innovatory-thumbnail-container">
                                                            <div class="row no-margin">
                                                                <div class="pull-left product_img">
                                                                    <a href="" class="thumbnail product-thumbnail"><img
                                                                            width="auto"
                                                                            height="auto"
                                                                            src="{{asset("img/admin/product/$productTopSelling2->photo1")}}"
                                                                            alt=""
                                                                            data-full-size-image-url=""
                                                                            width="auto"
                                                                            height="auto"></a>
                                                                </div>
                                                                <div class="innovatoryMedia-body">
                                                                    <div class="innovatory-product-description">
                                                                        <div class="comments_note">
                                                                            <div class="star_content">
                                                                                <div class="Rate">
                                                                                    <span
                                                                                        class="stars"> {{round($productTopSelling2->rate ,2)}}</span>
                                                                                </div>
                                                                            </div>
                                                                            <span
                                                                                class="laberCountReview pull-left">Review</span>
                                                                        </div>
                                                                        <h2 class="h2 productName" itemprop="name">
                                                                            <a href="">
                                                                                @if(App::getLocale() == 'fa')
                                                                                    {{$productTopSelling2->title}}
                                                                                @elseif(App::getLocale() == 'en')
                                                                                    {{$productTopSelling2->title_en}}
                                                                                @endif

                                                                            </a>
                                                                        </h2>
                                                                        <div
                                                                            class="innovatory-product-price-and-shipping">
                                                                            @if(isset($productTopSelling2->discount))
                                                                                <span itemprop="price"
                                                                                      class="price"><span
                                                                                        style="font-size: 17px;float: left;font-weight: 10;">{{__('settings.tuman')}}</span> {{$productTopSelling2->price_after_discount}}</span>
                                                                                <span class="reduction_percent_display">%{{$productTopSelling2->discount}}</span>
                                                                                <span
                                                                                    class="regular-price">{{$productTopSelling2->price}}</span>
                                                                            @else
                                                                                <span
                                                                                    class="price">{{$productTopSelling2->price}} {{__('settings.tuman')}}</span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="it-special-products product-column-style" data-items="1" data-speed="1000"
                         data-autoplay="0" data-time="3000" data-arrow="1" data-pagination="0" data-move="1"
                         data-pausehover="0" data-md="1" data-sm="1" data-xs="1" data-xxs="1">
                        <div class="itProductList itcolumn">
                            <div class="title_block">
                                <h3><span>{{__('settings.productSpecial2')}}</span></h3>
                            </div>
                            <div class="block-content">
                                <div class="itProductFilter row">
                                    <div class="special-item owl-carousel">
                                        <div class="item-product">
                                            @foreach($productsSpecial2 as $productSpecial2)
                                                <div class="item">
                                                    <div
                                                        class="innovatoryProductsList product-miniature js-product-miniature"
                                                        data-id-product="47" data-id-product-attribute="304">
                                                        <div class="innovatory-thumbnail-container">
                                                            <div class="row no-margin">
                                                                <div class="pull-left product_img">
                                                                    <a href="" class="thumbnail product-thumbnail"><img
                                                                            width="auto"
                                                                            height="auto"
                                                                            src="{{asset("img/admin/product/$productSpecial2->photo1")}}"
                                                                            alt=""
                                                                            data-full-size-image-url=""
                                                                            width="auto"
                                                                            height="auto"></a>
                                                                </div>
                                                                <div class="innovatoryMedia-body">
                                                                    <div class="innovatory-product-description">
                                                                        <div class="comments_note">
                                                                            <div class="star_content">
                                                                                <div class="Rate">
                                                                                    <span
                                                                                        class="stars"> {{round($productSpecial2->rate ,2)}}</span>
                                                                                </div>
                                                                            </div>
                                                                            <span
                                                                                class="laberCountReview pull-left">Review</span>
                                                                        </div>
                                                                        <h2 class="h2 productName" itemprop="name">
                                                                            <a href="">
                                                                                @if(App::getLocale() == 'fa')
                                                                                    {{$productSpecial2->title}}
                                                                                @elseif(App::getLocale() == 'en')
                                                                                    {{$productSpecial2->title_en}}
                                                                                @endif

                                                                            </a>
                                                                        </h2>
                                                                        <div
                                                                            class="innovatory-product-price-and-shipping">
                                                                            @if(isset($productSpecial2->discount))
                                                                                <span itemprop="price"
                                                                                      class="price"><span
                                                                                        style="font-size: 17px;float: left;font-weight: 10;">{{__('settings.tuman')}}</span> {{$productSpecial2->price_after_discount}} </span>
                                                                                <span class="reduction_percent_display">%{{$productSpecial2->discount}}</span>
                                                                                <span
                                                                                    class="regular-price">{{$productSpecial2->price}}</span>
                                                                            @else
                                                                                <span
                                                                                    class="price">{{$productSpecial2->price}} {{__('settings.tuman')}}</span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="it-special-products product-column-style" data-items="1" data-speed="1000"
                         data-autoplay="0" data-time="3000" data-arrow="1" data-pagination="0" data-move="1"
                         data-pausehover="0" data-md="1" data-sm="1" data-xs="1" data-xxs="1">
                        <div class="itProductList itcolumn">
                            <div class="title_block">
                                <h3><span>{{__('settings.productNew2')}}</span></h3>
                            </div>
                            <div class="block-content">
                                <div class="itProductFilter row">
                                    <div class="special-item owl-carousel">
                                        <div class="item-product">
                                            @foreach($productsNew2 as $productNew2)

                                                <div class="item">
                                                    <div
                                                        class="innovatoryProductsList product-miniature js-product-miniature"
                                                        data-id-product="47" data-id-product-attribute="304">
                                                        <div class="innovatory-thumbnail-container">
                                                            <div class="row no-margin">
                                                                <div class="pull-left product_img">
                                                                    <a href="" class="thumbnail product-thumbnail"><img
                                                                            width="auto"
                                                                            height="auto"
                                                                            src="{{asset("img/admin/product/$productNew2->photo1")}}"
                                                                            alt=""
                                                                            data-full-size-image-url=""
                                                                            width="auto"
                                                                            height="auto"></a>
                                                                </div>
                                                                <div class="innovatoryMedia-body">
                                                                    <div class="innovatory-product-description">
                                                                        <div class="comments_note">
                                                                            <div class="star_content">
                                                                                <div class="Rate">
                                                                                    <span
                                                                                        class="stars"> {{round($productNew2->rate ,2)}}</span>
                                                                                </div>
                                                                            </div>
                                                                            <span
                                                                                class="laberCountReview pull-left">Review</span>
                                                                        </div>
                                                                        <h2 class="h2 productName" itemprop="name">
                                                                            <a href="">
                                                                                @if(App::getLocale() == 'fa')
                                                                                    {{$productNew2->title}}
                                                                                @elseif(App::getLocale() == 'en')
                                                                                    {{$productNew2->title_en}}
                                                                                @endif
                                                                            </a>
                                                                        </h2>
                                                                        <div
                                                                            class="innovatory-product-price-and-shipping">
                                                                            @if(isset($productNew2->discount))
                                                                                <span itemprop="price"
                                                                                      class="price"><span
                                                                                        style="font-size: 17px;float: left;font-weight: 10;">{{__('settings.tuman')}}</span> {{$productNew2->price_after_discount}}</span>
                                                                                <span class="reduction_percent_display">%{{$productNew2->discount}}</span>
                                                                                <span
                                                                                    class="regular-price">{{$productNew2->price}}</span>
                                                                            @else
                                                                                <span
                                                                                    class="price">{{$productNew2->price}} {{__('settings.tuman')}}</span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div id="content-wrapper" class="left-column col-xs-12 col-md-9">
                    <div id="main">
                        <div id="content" class="page-home">
                            <div class="displayPosition displayPosition1">
                                <div
                                    class="row">
                                    <!-- <script type="text/javascript" src="/prestashop/INNO02/INNO1001_Cucina/IT01/modules/itproductfilter/views/js/jquery-1.7.1.min.js"></script> -->
                                    <div
                                        class="type-tab innovatoryProductFilter innovatoryProductGrid innovatorythemes clearfix wow animated fadeInUp">
                                        <div class="it_tab sec-head-style">
                                            <h3 class="page-heading">{{__('settings.bestselling')}}</h3>

                                            <ul id="ItProductFilterTabs" class="nav nav-tabs innovatory-tab clearfix">

                                                <li class="nav-item">
                                                    <a data-toggle="tab" href="#It-new-prod_tab"
                                                       class=" active nav-link">
                                                        {{__('settings.new')}}
                                                    </a>
                                                </li>

                                                <li class="nav-item">
                                                    <a data-toggle="tab" href="#It-featured-prod_tab" class=" nav-link">
                                                        {{__('settings.special')}}
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a data-toggle="tab" href="#It-bestseller-prod_tab"
                                                       class=" nav-link">
                                                        {{__('settings.bestselling')}}
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content clearfix itContent">

                                            <div id="It-new-prod_tab" class="It-new-prod tab-pane  active">
                                                <div class="itProductFilter">
                                                    <div class="owlProductFilter-It-new-prod-tab owl-carousel">

                                                        @foreach($productsNew as $productNew)
                                                            <div
                                                                class="item-inner  ajax_block_product wow animated fadeInUp">


                                                                {{--                                                            <div class="item product-box  ajax_block_product js-product-miniature" data-id-product="28" data-id-product-attribute="455">--}}
                                                                {{--                                                                <div class="innovatoryProduct-container">--}}
                                                                {{--                                                                    <div class="innovatoryProduct-image">--}}
                                                                {{--                                                                        <a href="home/28-455-drip-coffee-maker.html#/5-color-grey"--}}
                                                                {{--                                                                           class="thumbnail product-thumbnail"><span--}}
                                                                {{--                                                                                class="cover_image"><img--}}
                                                                {{--                                                                                    src="{{asset('FrontEnd/images/admin/products/8.jpg')}}"--}}
                                                                {{--                                                                                    data-full-size-image-url="https://innovatorythemes.com/prestashop/INNO02/INNO1001_Cucina/IT01/250-large_default/drip-coffee-maker.jpg"--}}
                                                                {{--                                                                                    alt="" width="auto"--}}
                                                                {{--                                                                                    height="auto"/></span><span--}}
                                                                {{--                                                                                class="hover_image"><img--}}
                                                                {{--                                                                                    src="{{asset('FrontEnd/images/admin/products/8.jpg')}}"--}}
                                                                {{--                                                                                    data-full-size-image-url="../251-medium_default/drip-coffee-maker.jpg"--}}
                                                                {{--                                                                                    alt="" width="auto"--}}
                                                                {{--                                                                                    height="auto"/></span></a>--}}
                                                                {{--                                                                        <span class="innovatoryNew-label">New</span>--}}
                                                                {{--                                                                        <div class="innovatoryActions">--}}
                                                                {{--                                                                            <div class="innovatoryActions-i">--}}
                                                                {{--                                                                                <div--}}
                                                                {{--                                                                                    class="innovatoryCart innovatoryItem">--}}
                                                                {{--                                                                                    <form action="cart.html"--}}
                                                                {{--                                                                                          method="post"><input--}}
                                                                {{--                                                                                            type="hidden" name="token"--}}
                                                                {{--                                                                                            value="b37219994338861bc35224966f2f6efd"><input--}}
                                                                {{--                                                                                            type="hidden" value="28"--}}
                                                                {{--                                                                                            name="id_product"><a--}}
                                                                {{--                                                                                            data-button-action="add-to-cart"--}}
                                                                {{--                                                                                            class="cart-btn"--}}
                                                                {{--                                                                                            title="Add To Cart"><i--}}
                                                                {{--                                                                                                class="ti-shopping-cart"></i></a>--}}
                                                                {{--                                                                                    </form>--}}
                                                                {{--                                                                                </div>--}}
                                                                {{--                                                                                <div--}}
                                                                {{--                                                                                    class="innovatoryQuick innovatoryItem">--}}
                                                                {{--                                                                                    <a href="#" class="quick-view"--}}
                                                                {{--                                                                                       data-link-action="quickview"--}}
                                                                {{--                                                                                       title="Quickview"><i--}}
                                                                {{--                                                                                            class="ti-eye"></i><span>Quickview</span></a>--}}
                                                                {{--                                                                                </div>--}}
                                                                {{--                                                                                <div--}}
                                                                {{--                                                                                    class="innovatoryItem innovatoryWish">--}}
                                                                {{--                                                                                    <div--}}
                                                                {{--                                                                                        class="innovatorywishlist product-item-wishlist">--}}
                                                                {{--                                                                                        <a class="addToWishlist wishlistProd_28"--}}
                                                                {{--                                                                                           title="Add to wishlist"--}}
                                                                {{--                                                                                           href="#" rel="28"--}}
                                                                {{--                                                                                           onclick="WishlistCart('wishlist_block_list', 'add', '28', false, 1); return false;">--}}
                                                                {{--                                                                                            <i class="ti-heart"></i>--}}
                                                                {{--                                                                                            <span>Add to wishlist</span>--}}
                                                                {{--                                                                                        </a>--}}
                                                                {{--                                                                                    </div>--}}
                                                                {{--                                                                                </div>--}}
                                                                {{--                                                                            </div>--}}
                                                                {{--                                                                        </div>--}}
                                                                {{--                                                                    </div>--}}
                                                                {{--                                                                    <div class="innovatory-product-description">--}}
                                                                {{--                                                                        <div class="comments_note">--}}
                                                                {{--                                                                            <div class="star_content">--}}
                                                                {{--                                                                                <div class="star"><i--}}
                                                                {{--                                                                                        class="fa fa-star"></i></div>--}}
                                                                {{--                                                                                <div class="star"><i--}}
                                                                {{--                                                                                        class="fa fa-star"></i></div>--}}
                                                                {{--                                                                                <div class="star"><i--}}
                                                                {{--                                                                                        class="fa fa-star"></i></div>--}}
                                                                {{--                                                                                <div class="star"><i--}}
                                                                {{--                                                                                        class="fa fa-star"></i></div>--}}
                                                                {{--                                                                                <div class="star"><i--}}
                                                                {{--                                                                                        class="fa fa-star"></i></div>--}}
                                                                {{--                                                                            </div>--}}
                                                                {{--                                                                            <span--}}
                                                                {{--                                                                                class="laberCountReview pull-left">Review&nbsp</span>--}}
                                                                {{--                                                                        </div>--}}
                                                                {{--                                                                        <h2 class="h2 productName" itemprop="name"><a--}}
                                                                {{--                                                                                href="home/28-455-drip-coffee-maker.html#/5-color-grey">Accumsan Fusce</a>--}}
                                                                {{--                                                                        </h2>--}}
                                                                {{--                                                                        <div--}}
                                                                {{--                                                                            class="innovatory-product-price-and-shipping">--}}
                                                                {{--                                                                                                            <span itemprop="price"--}}
                                                                {{--                                                                                                                  class="price">$135.99</span>--}}
                                                                {{--                                                                        </div>--}}
                                                                {{--                                                                        <div--}}
                                                                {{--                                                                            class="innovatoryCart innovatoryItem hidden-md-down">--}}
                                                                {{--                                                                            <form action="cart.html" method="post">--}}
                                                                {{--                                                                                <input type="hidden" name="token"--}}
                                                                {{--                                                                                       value="b37219994338861bc35224966f2f6efd"><input--}}
                                                                {{--                                                                                    type="hidden" value="28"--}}
                                                                {{--                                                                                    name="id_product"><a--}}
                                                                {{--                                                                                    data-button-action="add-to-cart"--}}
                                                                {{--                                                                                    class="cart-btn"--}}
                                                                {{--                                                                                    title="Add To Cart">Add To Cart</a>--}}
                                                                {{--                                                                            </form>--}}
                                                                {{--                                                                        </div>--}}
                                                                {{--                                                                    </div>--}}
                                                                {{--                                                                </div>--}}
                                                                {{--                                                            </div>--}}


                                                                <div
                                                                    class="item product-box  ajax_block_product js-product-miniature"
                                                                    data-id-product="{{$productNew->id}}"
                                                                    data-id-product-attribute="{{$productNew->id}}">
                                                                    <div class="innovatoryProduct-container">
                                                                        <div class="innovatoryProduct-image">
                                                                            <a href="{{action('FrontEnd\ProductController@show' ,[$productNew->id,$productNew->title,$productNew->title_en])}}"
                                                                               class="thumbnail product-thumbnail">
                                                                                <span class="cover_image">
                                                                                    <img
                                                                                        src="{{asset("img/admin/product/$productNew->photo1")}}"
                                                                                        data-full-size-image-url=""
                                                                                        alt="" width="auto"
                                                                                        height="auto"/>
                                                                                </span> <span class="hover_image">
                                                                                    <img
                                                                                        src="{{asset("img/admin/product/$productNew->photo1")}}"
                                                                                        data-full-size-image-url=""
                                                                                        alt="" width="auto"
                                                                                        height="auto"/>
                                                                                </span> </a>

                                                                            @if($productNew->category == 1)
                                                                                <span
                                                                                    class="innovatoryNew-label">{{__('settings.newest')}}</span>
                                                                            @elseif($productNew->category == 2)
                                                                                <span
                                                                                    class="innovatoryNew-label">{{__('settings.bestSell')}}</span>
                                                                            @elseif($productNew->category == 3)
                                                                                <span
                                                                                    class="innovatoryNew-label">{{__('settings.Special')}}</span>
                                                                            @endif

                                                                            @if(isset($productNew->discount))
                                                                                <span
                                                                                    class="reduction_percent_display innovatorySale-label">%{{$productNew->discount}}</span>
                                                                            @endif
                                                                            {{--                                                                            <div class="innovatoryActions">--}}
                                                                            {{--                                                                                <div class="innovatoryActions-i">--}}
                                                                            {{--                                                                                    <div class="innovatoryCart innovatoryItem">--}}
                                                                            {{--                                                                                        <form action="cart.html" method="post">--}}
                                                                            {{--                                                                                            <input--}}
                                                                            {{--                                                                                                type="hidden" name="token"--}}
                                                                            {{--                                                                                                value="b37219994338861bc35224966f2f6efd"><input--}}
                                                                            {{--                                                                                                type="hidden" value="46"--}}
                                                                            {{--                                                                                                name="id_product"><a--}}
                                                                            {{--                                                                                                data-button-action="add-to-cart"--}}
                                                                            {{--                                                                                                class="cart-btn"--}}
                                                                            {{--                                                                                                title="Add To Cart">--}}
                                                                            {{--                                                                                                <i class="ti-shopping-cart"></i></a>--}}
                                                                            {{--                                                                                        </form>--}}
                                                                            {{--                                                                                    </div>--}}
                                                                            {{--                                                                                    <div--}}
                                                                            {{--                                                                                        class="innovatoryQuick innovatoryItem">--}}
                                                                            {{--                                                                                        <a href="#" class="quick-view"--}}
                                                                            {{--                                                                                           data-link-action="quickview"--}}
                                                                            {{--                                                                                           title="Quickview"><i--}}
                                                                            {{--                                                                                                class="ti-eye"></i><span>{{__('settings.quickview')}}</span></a>--}}
                                                                            {{--                                                                                    </div>--}}
                                                                            {{--                                                                                    <div--}}
                                                                            {{--                                                                                        class="innovatoryItem innovatoryWish">--}}
                                                                            {{--                                                                                        <div--}}
                                                                            {{--                                                                                            class="innovatorywishlist product-item-wishlist">--}}
                                                                            {{--                                                                                            <a class="addToWishlist wishlistProd_46"--}}
                                                                            {{--                                                                                               title="Add to wishlist"--}}
                                                                            {{--                                                                                               href="#" rel="46"--}}
                                                                            {{--                                                                                               onclick="WishlistCart('wishlist_block_list', 'add', '46', false, 1); return false;">--}}
                                                                            {{--                                                                                                <i class="ti-heart"></i>--}}
                                                                            {{--                                                                                                <span>Add to wishlist</span>--}}
                                                                            {{--                                                                                            </a>--}}
                                                                            {{--                                                                                        </div>--}}
                                                                            {{--                                                                                    </div>--}}
                                                                            {{--                                                                                </div>--}}
                                                                            {{--                                                                            </div>--}}
                                                                        </div>
                                                                        <div class="innovatory-product-description">
                                                                            <div class="comments_note">
                                                                                <div class="star_content">
                                                                                    <div class="Rate">
                                                                                        <span
                                                                                            class="stars"> {{round($productNew->rate ,2)}}</span>
                                                                                    </div>
                                                                                </div>
                                                                                <span
                                                                                    class="laberCountReview pull-left">Review</span>
                                                                            </div>
                                                                            <h2 class="h2 productName" itemprop="name">
                                                                                <a href="">
                                                                                    @if(App::getLocale() == 'fa')
                                                                                        {{$productNew->title}}
                                                                                    @elseif(App::getLocale() == 'en')
                                                                                        {{$productNew->title_en}}
                                                                                    @endif
                                                                                </a>
                                                                            </h2>
                                                                            <div
                                                                                class="innovatory-product-price-and-shipping">
                                                                                @if(isset($productNew->discount))
                                                                                    <span
                                                                                        class="old-price regular-price">{{$productNew->price}}</span>
                                                                                    <span itemprop="price"
                                                                                          class="price"><span
                                                                                            style="font-size: 17px;float: left;font-weight: 10;">{{__('settings.tuman')}}</span> {{$productNew->price_after_discount}} </span>
                                                                                @else
                                                                                    <span
                                                                                        class="regular-price">{{$productNew->price}}</span>
                                                                                @endif
                                                                            </div>
                                                                            <div
                                                                                class="innovatoryCart innovatoryItem hidden-md-down cart">

                                                                                <form action="#" method="post">
                                                                                    <input type="hidden" name="token"
                                                                                           data-id="{{$productNew->id}}"
                                                                                           value="0"
                                                                                           class="" disabled>
                                                                                    <a class="cart-btn button ajax_add_to_cart_button add-to-cart"
                                                                                       data-button-action="add-to-cart"
                                                                                       type="submit"
                                                                                       data-id="{{$productNew->id}}"
                                                                                       data-name="@if(App::getLocale() == 'fa'){{$productNew->title}}@elseif(App::getLocale() == 'en'){{$productNew->title_en}}@endif"
                                                                                       data-max="{{$productNew->max}}"
                                                                                       data-price="{{$productNew->price}}"
                                                                                       data-pic="{{asset("img/admin/product/$productNew->photo1")}}"
                                                                                       data-min="1"
                                                                                       data-toggle="tooltip"
                                                                                       title="{{__('settings.addtocard')}}">
                                                                                        {{__('settings.addtocard')}}
                                                                                    </a>
                                                                                    {{--                                                                                    <a class="cart-btn-success alert alert-success">{{__('settings.inCart')}}</a>--}}
                                                                                </form>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>

                                            </div>


                                            <div id="It-featured-prod_tab" class="It-featured-prod tab-pane ">
                                                <div class="itProductFilter">
                                                    <div class="owlProductFilter-It-featured-prod-tab owl-carousel">
                                                        @foreach($productsSpecial as $productSpecial)
                                                            <div
                                                                class="item-inner  ajax_block_product wow animated fadeInUp">
                                                                <div
                                                                    class="item product-box  ajax_block_product js-product-miniature"
                                                                    data-id-product="{{$productSpecial->id}}"
                                                                    data-id-product-attribute="{{$productSpecial->id}}">
                                                                    <div class="innovatoryProduct-container">
                                                                        <div class="innovatoryProduct-image">
                                                                            <a href="{{action('FrontEnd\ProductController@show' ,[$productSpecial->id,$productSpecial->title,$productSpecial->title_en])}}"
                                                                               class="thumbnail product-thumbnail"><span
                                                                                    class="cover_image">
                                                                                <img
                                                                                    src="{{asset("img/admin/product/$productSpecial->photo1")}}"
                                                                                    data-full-size-image-url=""
                                                                                    alt="" width="auto"
                                                                                    height="auto"/>
                                                                            </span> <span class="hover_image">
                                                                                <img
                                                                                    src="{{asset("img/admin/product/$productSpecial->photo1")}}"
                                                                                    data-full-size-image-url=""
                                                                                    alt="" width="auto"
                                                                                    height="auto"/>
                                                                            </span> </a>
                                                                            @if($productSpecial->category == 1)
                                                                                <span
                                                                                    class="innovatoryNew-label"> {{__('settings.newest')}}</span>
                                                                            @elseif($productSpecial->category == 2)
                                                                                <span
                                                                                    class="innovatoryNew-label"> {{__('settings.bestSell')}}</span>
                                                                            @elseif($productSpecial->category == 3)
                                                                                <span
                                                                                    class="innovatoryNew-label"> {{__('settings.Special')}}</span>
                                                                            @endif

                                                                            @if(isset($productSpecial->discount))
                                                                                <span
                                                                                    class="reduction_percent_display innovatorySale-label">%{{$productSpecial->discount}}</span>
                                                                            @endif
                                                                        </div>
                                                                        <div class="innovatory-product-description">
                                                                            <div class="comments_note">
                                                                                <div class="star_content">
                                                                                    <div class="Rate">
                                                                                        <span
                                                                                            class="stars"> {{round($productSpecial->rate ,2)}}</span>
                                                                                    </div>
                                                                                </div>
                                                                                <span
                                                                                    class="laberCountReview pull-left">Review</span>
                                                                            </div>
                                                                            <h2 class="h2 productName" itemprop="name">
                                                                                <a href="#">
                                                                                    @if(App::getLocale() == 'fa')
                                                                                        {{$productSpecial->title}}
                                                                                    @elseif(App::getLocale() == 'en')
                                                                                        {{$productSpecial->title_en}}
                                                                                    @endif
                                                                                </a>
                                                                            </h2>
                                                                            <div
                                                                                class="innovatory-product-price-and-shipping">
                                                                                @if(isset($productSpecial->discount))
                                                                                    <span
                                                                                        class="old-price regular-price">{{$productSpecial->price}}</span>
                                                                                    <span itemprop="price"
                                                                                          class="price"><span
                                                                                            style="font-size: 17px;float: left;font-weight: 10;">{{__('settings.tuman')}}</span> {{$productSpecial->price_after_discount}}</span>
                                                                                @else
                                                                                    <span
                                                                                        class="regular-price">{{$productSpecial->price}}</span>
                                                                                @endif
                                                                            </div>
                                                                            <div
                                                                                class="innovatoryCart innovatoryItem hidden-md-down">
                                                                                <form action="#" method="post">
                                                                                    <input type="hidden" name="token"
                                                                                           data-id="{{$productSpecial->id}}"
                                                                                           value="0"
                                                                                           class="" disabled>
                                                                                    <a class="cart-btn button ajax_add_to_cart_button add-to-cart"
                                                                                       data-button-action="add-to-cart"
                                                                                       type="submit"
                                                                                       data-id="{{$productSpecial->id}}"
                                                                                       data-name="@if(App::getLocale() == 'fa'){{$productSpecial->title}}@elseif(App::getLocale() == 'en'){{$productSpecial->title_en}}@endif"
                                                                                       data-max="{{$productSpecial->max}}"
                                                                                       data-price="{{$productSpecial->price}}"
                                                                                       data-pic="{{asset("img/admin/product/$productSpecial->photo1")}}"
                                                                                       data-min="1"
                                                                                       data-toggle="tooltip"
                                                                                       title="{{__('settings.addtocard')}}">
                                                                                        {{__('settings.addtocard')}}
                                                                                    </a>
                                                                                    {{--                                                                                    <a class="cart-btn-success alert alert-success">{{__('settings.inCart')}}</a>--}}
                                                                                </form>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>

                                            </div>


                                            <div id="It-bestseller-prod_tab" class="It-bestseller-prod tab-pane ">
                                                <div class="itProductFilter">
                                                    <div class="owlProductFilter-It-bestseller-prod-tab owl-carousel">

                                                        @foreach($productsTopSelling as $productTopSelling)
                                                            <div
                                                                class="item-inner  ajax_block_product wow animated fadeInUp">
                                                                <div
                                                                    class="item product-box  ajax_block_product js-product-miniature"
                                                                    data-id-product="{{$productTopSelling->id}}"
                                                                    data-id-product-attribute="{{$productTopSelling->id}}">
                                                                    <div class="innovatoryProduct-container">
                                                                        <div class="innovatoryProduct-image">
                                                                            <a href="{{action('FrontEnd\ProductController@show' ,[$productTopSelling->id,$productTopSelling->title,$productTopSelling->title_en])}}"
                                                                               class="thumbnail product-thumbnail"><span
                                                                                    class="cover_image">
                                                                                <img
                                                                                    src="{{asset("img/admin/product/$productTopSelling->photo1")}}"
                                                                                    data-full-size-image-url=""
                                                                                    alt="" width="auto"
                                                                                    height="auto"/>
                                                                            </span> <span class="hover_image">
                                                                                <img
                                                                                    src="{{asset("img/admin/product/$productTopSelling->photo1")}}"
                                                                                    data-full-size-image-url=""
                                                                                    alt="" width="auto"
                                                                                    height="auto"/>
                                                                            </span> </a>
                                                                            @if($productTopSelling->category == 1)
                                                                                <span
                                                                                    class="innovatoryNew-label">{{__('settings.newest')}}</span>
                                                                            @elseif($productTopSelling->category == 2)
                                                                                <span
                                                                                    class="innovatoryNew-label">{{__('settings.bestSell')}}</span>
                                                                            @elseif($productTopSelling->category == 3)
                                                                                <span
                                                                                    class="innovatoryNew-label">{{__('settings.Special')}}</span>
                                                                            @endif

                                                                            @if(isset($productTopSelling->discount))
                                                                                <span
                                                                                    class="reduction_percent_display innovatorySale-label">%{{$productTopSelling->discount}}</span>
                                                                            @endif
                                                                        </div>
                                                                        <div class="innovatory-product-description">
                                                                            <div class="comments_note">
                                                                                <div class="star_content">
                                                                                    <div class="Rate">
                                                                                        <span
                                                                                            class="stars"> {{round($productTopSelling->rate ,2)}}</span>
                                                                                    </div>
                                                                                </div>
                                                                                <span
                                                                                    class="laberCountReview pull-left">Review</span>
                                                                            </div>
                                                                            <h2 class="h2 productName" itemprop="name">
                                                                                <a href="">
                                                                                    @if(App::getLocale() == 'fa')
                                                                                        {{$productTopSelling->title}}
                                                                                    @elseif(App::getLocale() == 'en')
                                                                                        {{$productTopSelling->title_en}}
                                                                                    @endif
                                                                                </a>
                                                                            </h2>
                                                                            <div
                                                                                class="innovatory-product-price-and-shipping">
                                                                                @if(isset($productTopSelling->discount))
                                                                                    <span
                                                                                        class="old-price regular-price">{{$productTopSelling->price}}</span>
                                                                                    <span itemprop="price"
                                                                                          class="price"><span
                                                                                            style="font-size: 17px;float: left;font-weight: 10;">{{__('settings.tuman')}}</span> {{$productTopSelling->price_after_discount}}</span>
                                                                                @else
                                                                                    <span
                                                                                        class="regular-price">{{$productTopSelling->price}}</span>
                                                                                @endif
                                                                            </div>
                                                                            <div
                                                                                class="innovatoryCart innovatoryItem hidden-md-down">
                                                                                <form action="#" method="post">
                                                                                    <input type="hidden" name="token"
                                                                                           data-id="{{$productTopSelling->id}}"
                                                                                           value="0"
                                                                                           class="" disabled>
                                                                                    <a class="cart-btn button ajax_add_to_cart_button add-to-cart"
                                                                                       data-button-action="add-to-cart"
                                                                                       type="submit"
                                                                                       data-id="{{$productTopSelling->id}}"
                                                                                       data-name="@if(App::getLocale() == 'fa'){{$productTopSelling->title}}@elseif(App::getLocale() == 'en'){{$productTopSelling->title_en}}@endif"
                                                                                       data-max="{{$productTopSelling->max}}"
                                                                                       data-price="{{$productTopSelling->price}}"
                                                                                       data-pic="{{asset("img/admin/product/$productTopSelling->photo1")}}"
                                                                                       data-min="1"
                                                                                       data-toggle="tooltip"
                                                                                       title="{{__('settings.addtocard')}}">
                                                                                        {{__('settings.addtocard')}}
                                                                                    </a>
                                                                                    {{--                                                                                    <a class="cart-btn-success alert alert-success">{{__('settings.inCart')}}</a>--}}
                                                                                </form>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        @endforeach

                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <!-- Static Block module -->
                                    <div class="top-banner-sec">
                                        <div class="col-sm-12 mt-30">
                                            <div class="banner-col"><a href="#"><img
                                                        src="{{asset('img/admin/setting')}}/{{$slider2->photo1}}"
                                                        alt=""
                                                        class="img-responsive" width="auto" height="auto"/></a></div>
                                        </div>
                                        <div class="col-sm-6 mt-30">
                                            <div class="banner-col"><a href="#"><img
                                                        src="{{asset('img/admin/setting')}}/{{$slider2->photo2}}"

                                                        alt=""
                                                        class="img-responsive" width="auto" height="auto"/></a></div>
                                        </div>
                                        <div class="col-sm-6 mt-30">
                                            <div class="banner-col"><a href="#"><img
                                                        src="{{asset('img/admin/setting')}}/{{$slider2->photo3}}"

                                                        alt=""
                                                        class="img-responsive" width="auto" height="auto"/></a></div>
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                    <!-- /Static block module -->
                                </div>
                            </div>
                            <div class="displayPosition displayPosition2">
                                <div class="row">
                                    <!-- Static Block module -->
                                    {{--                                    <div class="col-md-12">--}}
                                    {{--                                        <div class="service-sec">--}}
                                    {{--                                            <div class="col-sm-6 col-md-4 service-box">--}}
                                    {{--                                                <div class="service">--}}
                                    {{--                                                    <i class="icon icon1"></i>--}}
                                    {{--                                                    <div class="ser-detail">--}}
                                    {{--                                                        <h2>Shipping WorldWild</h2>--}}
                                    {{--                                                        <p>ON ORDER OVER $500</p>--}}
                                    {{--                                                    </div>--}}
                                    {{--                                                </div>--}}
                                    {{--                                            </div>--}}
                                    {{--                                            <div class="col-sm-6 col-md-4 service-box">--}}
                                    {{--                                                <div class="service">--}}
                                    {{--                                                    <i class="icon icon2"></i>--}}
                                    {{--                                                    <div class="ser-detail">--}}
                                    {{--                                                        <h2>24 x 7 Hour’s Support</h2>--}}
                                    {{--                                                        <p>LIFE TIME SUPPORT 24/7</p>--}}
                                    {{--                                                    </div>--}}
                                    {{--                                                </div>--}}
                                    {{--                                            </div>--}}
                                    {{--                                            <div class="col-sm-6 col-md-4 service-box">--}}
                                    {{--                                                <div class="service">--}}
                                    {{--                                                    <i class="icon icon3"></i>--}}
                                    {{--                                                    <div class="ser-detail">--}}
                                    {{--                                                        <h2>Official Help Partner</h2>--}}
                                    {{--                                                        <p>HELP ALL ASPECTS</p>--}}
                                    {{--                                                    </div>--}}
                                    {{--                                                </div>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                    <div class="clearfix"></div>


                                    <div id="shopify-section-1559585995085" class="shopify-section">


                                        <div class="index-section index-section--overflow-scroller">

                                            <div id="CollectionSection-1559585995085" data-section-id="1559585995085"
                                                 data-section-type="featured-collection" data-scrollable="true"
                                                 data-product-sliders-mobile="false" data-paginate="false"
                                                 data-paginate-by="24" data-collection-url="/collections/leggings"
                                                 data-collection-count="9" data-aos="" class="aos-init aos-animate">

                                                <div class="page-width">
                                                    <header class="section-header aos-init aos-animate" data-aos="">
                                                        <h2 class="section-header__title appear-delay">
                                                            Leggings
                                                        </h2>

                                                        <div
                                                            class="rte section-header__description section-header__description--large appear-delay-1">
                                                            Sculpted fit with 4-way stretch
                                                        </div>

                                                    </header>
                                                </div>


                                                <div class="overflow-scroll-wrap" data-ajax-loader="">
                                                    <button type="button"
                                                            class="btn btn--tertiary overflow-scroller__arrow overflow-scroller__arrow--left small--hide"
                                                            aria-hidden="true" data-arrow="">
                                                        <svg aria-hidden="true" focusable="false" role="presentation"
                                                             class="icon icon-chevron-left" viewBox="0 0 284.49 498.98">
                                                            <path d="M249.49 0a35 35 0 0 1 24.75 59.75L84.49 249.49l189.75 189.74a35.002 35.002 0 1 1-49.5 49.5L10.25 274.24a35 35 0 0 1 0-49.5L224.74 10.25A34.89 34.89 0 0 1 249.49 0z"></path>
                                                        </svg>
                                                    </button>
                                                    <button type="button"
                                                            class="btn btn--tertiary overflow-scroller__arrow overflow-scroller__arrow--right small--hide"
                                                            aria-hidden="true" data-arrow="">
                                                        <svg aria-hidden="true" focusable="false" role="presentation"
                                                             class="icon icon-chevron-right"
                                                             viewBox="0 0 284.49 498.98">
                                                            <path
                                                                d="M35 498.98a35 35 0 0 1-24.75-59.75l189.74-189.74L10.25 59.75a35.002 35.002 0 0 1 49.5-49.5l214.49 214.49a35 35 0 0 1 0 49.5L59.75 488.73A34.89 34.89 0 0 1 35 498.98z"></path>
                                                        </svg>
                                                    </button>



                                                    <div class="overflow-scroller" data-pagination-wrapper="">
                                                        <div
                                                            class="grid grid--uniform grid--scattered-large-2 grid--scattered-small-2 aos-init aos-animate"
                                                            data-aos="overflow__animation" data-product-container="">


                                                            <div class="grid__item grid-product grid-product--medium aos-init aos-animate"
                                                                data-aos="" data-product-grid=""
                                                                data-id="2546236457042">
                                                                <div class="grid-product__content">


                                                                    <a href="/collections/leggings/products/calatrava-legging-grey"
                                                                       class="grid-product__link quick-product__btn js-screen-open-product-2546236457042 js-no-transition"
                                                                       data-product-id="2546236457042"
                                                                       data-url="/collections/leggings/products/calatrava-legging-grey"
                                                                       aria-expanded="false">
                                                                        <div class="product-slider product-slider--init"
                                                                             data-image-count="3"
                                                                             data-id="2546236457042">


                                                                            <div class="product-slide" style=""
                                                                                 tabindex="-1" role="option"
                                                                                 aria-describedby="slick-slide310">
                                                                                <div class="image-wrap">


                                                                                    <div class="image-wrap loaded"
                                                                                         style="height: 0; padding-bottom: 150.0%;">
                                                                                        <img
                                                                                            class="grid-product__image lazyautosizes lazyloaded"
                                                                                            data-widths="[750, 900, 1080]"
                                                                                            data-aspectratio="0.6666666666666666"
                                                                                            data-sizes="auto" alt=""
                                                                                            data-srcset="//cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-2_750x.jpg?v=1569225870 750w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-2_900x.jpg?v=1569225870 900w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-2_1080x.jpg?v=1569225870 1080w"
                                                                                            sizes="271px"
                                                                                            srcset="//cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-2_750x.jpg?v=1569225870 750w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-2_900x.jpg?v=1569225870 900w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-2_1080x.jpg?v=1569225870 1080w">
                                                                                        <noscript>
                                                                                            <img
                                                                                                class="grid-product__image lazyloaded"
                                                                                                src="//cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-2_400x.jpg?v=1569225870"
                                                                                                alt="">
                                                                                        </noscript>
                                                                                    </div>


                                                                                </div>
                                                                            </div>
                                                                            <div class="product-slide" style=""
                                                                                 tabindex="-1" role="option"
                                                                                 aria-describedby="slick-slide311">
                                                                                <div class="image-wrap loaded">

                                                                                    <div
                                                                                        class="grid__image-ratio grid__image-ratio--natural lazyloaded"
                                                                                        style="padding-bottom: 150%; background-image: url();"
                                                                                        data-bgset="

                                                                                              //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging_180x.jpg?v=1569225870 180w 270h,
                                                                                              //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging_360x.jpg?v=1569225870 360w 540h,
                                                                                              //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging_540x.jpg?v=1569225870 540w 810h,
                                                                                              //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging_750x.jpg?v=1569225870 750w 1125h,">
                                                                                        <picture style="display: none;"
                                                                                                 class="loaded">
                                                                                            <source
                                                                                                data-srcset=" //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging_180x.jpg?v=1569225870 180w 270h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging_360x.jpg?v=1569225870 360w 540h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging_540x.jpg?v=1569225870 540w 810h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging_750x.jpg?v=1569225870 750w 1125h, "
                                                                                                sizes="270.66666666666663px"
                                                                                                srcset=" //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging_180x.jpg?v=1569225870 180w 270h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging_360x.jpg?v=1569225870 360w 540h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging_540x.jpg?v=1569225870 540w 810h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging_750x.jpg?v=1569225870 750w 1125h, ">
                                                                                            <img alt=""
                                                                                                 class="lazyautosizes lazyloaded"
                                                                                                 data-sizes="auto"
                                                                                                 data-parent-fit="contain"
                                                                                                 sizes="270.66666666666663px">
                                                                                        </picture>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                            <div class="product-slide" style=""
                                                                                 tabindex="-1" role="option"
                                                                                 aria-describedby="slick-slide312">
                                                                                <div class="image-wrap loaded">

                                                                                    <div
                                                                                        class="grid__image-ratio grid__image-ratio--natural lazyloaded"
                                                                                        style="padding-bottom: 150%; background-image: url();"
                                                                                        data-bgset="

                                                                                                //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-3_180x.jpg?v=1569225870 180w 270h,
                                                                                                //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-3_360x.jpg?v=1569225870 360w 540h,
                                                                                                //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-3_540x.jpg?v=1569225870 540w 810h,
                                                                                                //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-3_750x.jpg?v=1569225870 750w 1125h,">
                                                                                        <picture style="display: none;"
                                                                                                 class="loaded">
                                                                                            <source
                                                                                                data-srcset=" //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-3_180x.jpg?v=1569225870 180w 270h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-3_360x.jpg?v=1569225870 360w 540h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-3_540x.jpg?v=1569225870 540w 810h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-3_750x.jpg?v=1569225870 750w 1125h, "
                                                                                                sizes="270.66666666666663px"
                                                                                                srcset=" //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-3_180x.jpg?v=1569225870 180w 270h,
                                                                                                 //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-3_360x.jpg?v=1569225870 360w 540h,
                                                                                                  //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-3_540x.jpg?v=1569225870 540w 810h,
                                                                                                   //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-3_750x.jpg?v=1569225870 750w 1125h, ">
                                                                                            <img alt=""
                                                                                                 class="lazyautosizes lazyloaded"
                                                                                                 data-sizes="auto"
                                                                                                 data-parent-fit="contain"
                                                                                                 sizes="270.66666666666663px">
                                                                                        </picture>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <style>
                                                                            .product-slider.slick-initialized[data-id="2546236457042"]:after {
                                                                                animation-duration: 4050ms;
                                                                            }
                                                                        </style>


                                                                        <div class="grid-product__meta">
                                                                            <div class="grid-product__title">Calatrava
                                                                                Legging Grey
                                                                            </div>

                                                                            <div class="grid-product__price">


                                                                                            <span>
                                                                                            $140
                                                                                            </span>

                                                                            </div>
                                                                        </div>


                                                                    </a>
                                                                </div>

                                                            </div>


                                                            <div class="grid__item grid-product grid-product--medium aos-init aos-animate"
                                                                data-aos="" data-product-grid=""
                                                                data-id="2546240159826">
                                                                <div class="grid-product__content">


                                                                    <a href="/collections/leggings/products/highline-legging"
                                                                       class="grid-product__link quick-product__btn js-screen-open-product-2546240159826 js-no-transition"
                                                                       data-product-id="2546240159826"
                                                                       data-url="/collections/leggings/products/highline-legging"
                                                                       aria-expanded="false">
                                                                        <div class="product-slider product-slider--init"
                                                                             data-image-count="2"
                                                                             data-id="2546240159826">


                                                                            <div class="product-slide" style=""
                                                                                 tabindex="-1" role="option"
                                                                                 aria-describedby="slick-slide320">
                                                                                <div class="image-wrap">


                                                                                    <div class="image-wrap loaded"
                                                                                         style="height: 0; padding-bottom: 150.0%;">
                                                                                        <img
                                                                                            class="grid-product__image lazyautosizes lazyloaded"
                                                                                            data-widths="[750, 900, 1080]"
                                                                                            data-aspectratio="0.6666666666666666"
                                                                                            data-sizes="auto" alt=""
                                                                                            data-srcset="//cdn.shopify.com/s/files/1/0076/0014/4466/products/highling-legging-2_750x.jpg?v=1569225871 750w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/highling-legging-2_900x.jpg?v=1569225871 900w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/highling-legging-2_1080x.jpg?v=1569225871 1080w"
                                                                                            sizes="271px"
                                                                                            srcset="//cdn.shopify.com/s/files/1/0076/0014/4466/products/highling-legging-2_750x.jpg?v=1569225871 750w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/highling-legging-2_900x.jpg?v=1569225871 900w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/highling-legging-2_1080x.jpg?v=1569225871 1080w">
                                                                                        <noscript>
                                                                                            <img
                                                                                                class="grid-product__image lazyloaded"
                                                                                                src="//cdn.shopify.com/s/files/1/0076/0014/4466/products/highling-legging-2_400x.jpg?v=1569225871"
                                                                                                alt="">
                                                                                        </noscript>
                                                                                    </div>


                                                                                </div>
                                                                            </div>
                                                                            <div class="product-slide" style=""
                                                                                 tabindex="-1" role="option"
                                                                                 aria-describedby="slick-slide321">
                                                                                <div class="image-wrap">

                                                                                    <div
                                                                                        class="grid__image-ratio grid__image-ratio--natural lazyload"
                                                                                        style="padding-bottom: 150.0%"
                                                                                        data-bgset="
                                                                                        //cdn.shopify.com/s/files/1/0076/0014/4466/products/highline-legging_180x.jpg?v=1569225871 180w 270h,
                                                                                        //cdn.shopify.com/s/files/1/0076/0014/4466/products/highline-legging_360x.jpg?v=1569225871 360w 540h,
                                                                                        //cdn.shopify.com/s/files/1/0076/0014/4466/products/highline-legging_540x.jpg?v=1569225871 540w 810h,
                                                                                        //cdn.shopify.com/s/files/1/0076/0014/4466/products/highline-legging_750x.jpg?v=1569225871 750w 1125h,"data-sizes="auto">
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <style>
                                                                            .product-slider.slick-initialized[data-id="2546240159826"]:after {
                                                                                animation-duration: 2700ms;
                                                                            }
                                                                        </style>


                                                                        <div class="grid-product__meta">
                                                                            <div class="grid-product__title">Highline
                                                                                Legging
                                                                            </div>

                                                                            <div class="grid-product__price">


                                                                                            <span>
                                                                                            $115
                                                                                            </span>

                                                                            </div>
                                                                        </div>


                                                                    </a>
                                                                </div>

                                                            </div>


                                                            <div class="grid__item grid-product grid-product--medium aos-init aos-animate"
                                                                data-aos="" data-product-grid=""
                                                                data-id="2546237014098">
                                                                <div class="grid-product__content">


                                                                    <a href="/collections/leggings/products/calatrava-legging-blush"
                                                                       class="grid-product__link quick-product__btn js-screen-open-product-2546237014098 js-no-transition"
                                                                       data-product-id="2546237014098"
                                                                       data-url="/collections/leggings/products/calatrava-legging-blush"
                                                                       aria-expanded="false">
                                                                        <div class="product-slider product-slider--init"
                                                                             data-image-count="2"
                                                                             data-id="2546237014098">


                                                                            <div class="product-slide" style=""
                                                                                 tabindex="-1" role="option"
                                                                                 aria-describedby="slick-slide330">
                                                                                <div class="image-wrap">


                                                                                    <div class="image-wrap loaded"
                                                                                         style="height: 0; padding-bottom: 150.0%;">
                                                                                        <img
                                                                                            class="grid-product__image lazyautosizes lazyloaded"
                                                                                            data-widths="[750, 900, 1080]"
                                                                                            data-aspectratio="0.6666666666666666"
                                                                                            data-sizes="auto" alt=""
                                                                                            data-srcset="//cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-4_750x.jpg?v=1569225870 750w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-4_900x.jpg?v=1569225870 900w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-4_1080x.jpg?v=1569225870 1080w"
                                                                                            sizes="271px"
                                                                                            srcset="//cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-4_750x.jpg?v=1569225870 750w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-4_900x.jpg?v=1569225870 900w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-4_1080x.jpg?v=1569225870 1080w">
                                                                                        <noscript>
                                                                                            <img
                                                                                                class="grid-product__image lazyloaded"
                                                                                                src="//cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-4_400x.jpg?v=1569225870"
                                                                                                alt="">
                                                                                        </noscript>
                                                                                    </div>


                                                                                </div>
                                                                            </div>
                                                                            <div class="product-slide" style=""
                                                                                 tabindex="-1" role="option"
                                                                                 aria-describedby="slick-slide331">
                                                                                <div class="image-wrap loaded">

                                                                                    <div
                                                                                        class="grid__image-ratio grid__image-ratio--natural lazyloaded"
                                                                                        style="padding-bottom: 150%; background-image: url(&quot;https://cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-5_750x.jpg?v=1569225870&quot;);"
                                                                                        data-bgset="

                                                                                                //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-5_180x.jpg?v=1569225870 180w 270h,
                                                                                                //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-5_360x.jpg?v=1569225870 360w 540h,
                                                                                                //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-5_540x.jpg?v=1569225870 540w 810h,
                                                                                                //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-5_750x.jpg?v=1569225870 750w 1125h,">
                                                                                        <picture style="display: none;"
                                                                                                 class="loaded">
                                                                                            <source
                                                                                                data-srcset=" //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-5_180x.jpg?v=1569225870 180w 270h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-5_360x.jpg?v=1569225870 360w 540h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-5_540x.jpg?v=1569225870 540w 810h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-5_750x.jpg?v=1569225870 750w 1125h, "
                                                                                                sizes="270.66666666666663px"
                                                                                                srcset=" //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-5_180x.jpg?v=1569225870 180w 270h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-5_360x.jpg?v=1569225870 360w 540h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-5_540x.jpg?v=1569225870 540w 810h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/calatrava-legging-5_750x.jpg?v=1569225870 750w 1125h, ">
                                                                                            <img alt=""
                                                                                                 class="lazyautosizes lazyloaded"
                                                                                                 data-sizes="auto"
                                                                                                 data-parent-fit="contain"
                                                                                                 sizes="270.66666666666663px">
                                                                                        </picture>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <style>
                                                                            .product-slider.slick-initialized[data-id="2546237014098"]:after {
                                                                                animation-duration: 2700ms;
                                                                            }
                                                                        </style>


                                                                        <div class="grid-product__meta">
                                                                            <div class="grid-product__title">Calatrava
                                                                                Legging Blush
                                                                            </div>

                                                                            <div class="grid-product__price">


                                                                                    <span>
                                                                                    $140
                                                                                    </span>

                                                                            </div>
                                                                        </div>


                                                                    </a>
                                                                </div>

                                                            </div>


                                                            <div class="grid__item grid-product grid-product--medium aos-init aos-animate"
                                                                data-aos="" data-product-grid=""
                                                                data-id="2546237341778">
                                                                <div class="grid-product__content">


                                                                    <a href="/collections/leggings/products/velvet-legging"
                                                                       class="grid-product__link quick-product__btn js-screen-open-product-2546237341778 js-no-transition"
                                                                       data-product-id="2546237341778"
                                                                       data-url="/collections/leggings/products/velvet-legging"
                                                                       aria-expanded="false">
                                                                        <div class="product-slider product-slider--init"
                                                                             data-image-count="2"
                                                                             data-id="2546237341778">


                                                                            <div class="product-slide" style=""
                                                                                 tabindex="-1" role="option"
                                                                                 aria-describedby="slick-slide340">
                                                                                <div class="image-wrap">


                                                                                    <div class="image-wrap loaded"
                                                                                         style="height: 0; padding-bottom: 150.0%;">
                                                                                        <img
                                                                                            class="grid-product__image lazyautosizes lazyloaded"
                                                                                            data-widths="[750, 900, 1080]"
                                                                                            data-aspectratio="0.6666666666666666"
                                                                                            data-sizes="auto" alt=""
                                                                                            data-srcset="//cdn.shopify.com/s/files/1/0076/0014/4466/products/velvet-legging_750x.jpg?v=1569225870 750w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/velvet-legging_900x.jpg?v=1569225870 900w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/velvet-legging_1080x.jpg?v=1569225870 1080w"
                                                                                            sizes="271px"
                                                                                            srcset="//cdn.shopify.com/s/files/1/0076/0014/4466/products/velvet-legging_750x.jpg?v=1569225870 750w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/velvet-legging_900x.jpg?v=1569225870 900w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/velvet-legging_1080x.jpg?v=1569225870 1080w">
                                                                                        <noscript>
                                                                                            <img
                                                                                                class="grid-product__image lazyloaded"
                                                                                                src="//cdn.shopify.com/s/files/1/0076/0014/4466/products/velvet-legging_400x.jpg?v=1569225870"
                                                                                                alt="">
                                                                                        </noscript>
                                                                                    </div>


                                                                                </div>
                                                                            </div>
                                                                            <div class="product-slide" style=""
                                                                                 tabindex="-1" role="option"
                                                                                 aria-describedby="slick-slide341">
                                                                                <div class="image-wrap">

                                                                                    <div
                                                                                        class="grid__image-ratio grid__image-ratio--natural lazyload"
                                                                                        style="padding-bottom: 150.0%"
                                                                                        data-bgset="

                                                                                            //cdn.shopify.com/s/files/1/0076/0014/4466/products/velvet-legging-2_180x.jpg?v=1569225870 180w 270h,
                                                                                            //cdn.shopify.com/s/files/1/0076/0014/4466/products/velvet-legging-2_360x.jpg?v=1569225870 360w 540h,
                                                                                            //cdn.shopify.com/s/files/1/0076/0014/4466/products/velvet-legging-2_540x.jpg?v=1569225870 540w 810h,
                                                                                            //cdn.shopify.com/s/files/1/0076/0014/4466/products/velvet-legging-2_750x.jpg?v=1569225870 750w 1125h,"data-sizes="auto">
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <style>
                                                                            .product-slider.slick-initialized[data-id="2546237341778"]:after {
                                                                                animation-duration: 2700ms;
                                                                            }
                                                                        </style>


                                                                        <div class="grid-product__meta">
                                                                            <div class="grid-product__title">Velvet
                                                                                Legging
                                                                            </div>

                                                                            <div class="grid-product__price">


                                                                                    <span>
                                                                                    $88
                                                                                    </span>

                                                                            </div>
                                                                        </div>


                                                                    </a>
                                                                </div>

                                                            </div>


                                                            <div class="grid__item grid-product grid-product--medium aos-init aos-animate"
                                                                data-aos="" data-product-grid=""
                                                                data-id="2546237866066">
                                                                <div class="grid-product__content">


                                                                    <a href="/collections/leggings/products/taronga-legging"
                                                                       class="grid-product__link quick-product__btn js-screen-open-product-2546237866066 js-no-transition"
                                                                       data-product-id="2546237866066"
                                                                       data-url="/collections/leggings/products/taronga-legging"
                                                                       aria-expanded="false">
                                                                        <div class="product-slider product-slider--init"
                                                                             data-image-count="4"
                                                                             data-id="2546237866066">


                                                                            <div class="product-slide" style=""
                                                                                 tabindex="-1" role="option"
                                                                                 aria-describedby="slick-slide350">
                                                                                <div class="image-wrap">


                                                                                    <div class="image-wrap loaded"
                                                                                         style="height: 0; padding-bottom: 150.0%;">
                                                                                        <img
                                                                                            class="grid-product__image lazyautosizes lazyloaded"
                                                                                            data-widths="[750, 900, 1080]"
                                                                                            data-aspectratio="0.6666666666666666"
                                                                                            data-sizes="auto" alt=""
                                                                                            data-srcset="//cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging-3_750x.jpg?v=1569225871 750w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging-3_900x.jpg?v=1569225871 900w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging-3_1080x.jpg?v=1569225871 1080w"
                                                                                            sizes="271px"
                                                                                            srcset="//cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging-3_750x.jpg?v=1569225871 750w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging-3_900x.jpg?v=1569225871 900w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging-3_1080x.jpg?v=1569225871 1080w">
                                                                                        <noscript>
                                                                                            <img
                                                                                                class="grid-product__image lazyloaded"
                                                                                                src="//cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging-3_400x.jpg?v=1569225871"
                                                                                                alt="">
                                                                                        </noscript>
                                                                                    </div>


                                                                                </div>
                                                                            </div>
                                                                            <div class="product-slide" style=""
                                                                                 tabindex="-1" role="option"
                                                                                 aria-describedby="slick-slide351">
                                                                                <div class="image-wrap loaded">

                                                                                    <div
                                                                                        class="grid__image-ratio grid__image-ratio--natural lazyloaded"
                                                                                        style="padding-bottom: 150%; background-image: url(&quot;https://cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging-4_750x.jpg?v=1569225871&quot;);"
                                                                                        data-bgset="

                                                                                            //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging-4_180x.jpg?v=1569225871 180w 270h,
                                                                                            //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging-4_360x.jpg?v=1569225871 360w 540h,
                                                                                            //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging-4_540x.jpg?v=1569225871 540w 810h,
                                                                                            //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging-4_750x.jpg?v=1569225871 750w 1125h,">
                                                                                        <picture style="display: none;"
                                                                                                 class="loaded">
                                                                                            <source
                                                                                                data-srcset=" //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging-4_180x.jpg?v=1569225871 180w 270h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging-4_360x.jpg?v=1569225871 360w 540h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging-4_540x.jpg?v=1569225871 540w 810h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging-4_750x.jpg?v=1569225871 750w 1125h, "
                                                                                                sizes="270.66666666666663px"
                                                                                                srcset=" //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging-4_180x.jpg?v=1569225871 180w 270h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging-4_360x.jpg?v=1569225871 360w 540h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging-4_540x.jpg?v=1569225871 540w 810h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging-4_750x.jpg?v=1569225871 750w 1125h, ">
                                                                                            <img alt=""
                                                                                                 class="lazyautosizes lazyloaded"
                                                                                                 data-sizes="auto"
                                                                                                 data-parent-fit="contain"
                                                                                                 sizes="270.66666666666663px">
                                                                                        </picture>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                            <div class="product-slide" style=""
                                                                                 tabindex="-1" role="option"
                                                                                 aria-describedby="slick-slide352">
                                                                                <div class="image-wrap loaded">

                                                                                    <div
                                                                                        class="grid__image-ratio grid__image-ratio--natural lazyloaded"
                                                                                        style="padding-bottom: 150%; background-image: url(&quot;https://cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging-2_750x.jpg?v=1569225871&quot;);"
                                                                                        data-bgset="

                                                                                            //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging-2_180x.jpg?v=1569225871 180w 270h,
                                                                                            //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging-2_360x.jpg?v=1569225871 360w 540h,
                                                                                            //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging-2_540x.jpg?v=1569225871 540w 810h,
                                                                                            //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging-2_750x.jpg?v=1569225871 750w 1125h,">
                                                                                        <picture style="display: none;"
                                                                                                 class="loaded">
                                                                                            <source
                                                                                                data-srcset=" //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging-2_180x.jpg?v=1569225871 180w 270h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging-2_360x.jpg?v=1569225871 360w 540h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging-2_540x.jpg?v=1569225871 540w 810h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging-2_750x.jpg?v=1569225871 750w 1125h, "
                                                                                                sizes="270.66666666666663px"
                                                                                                srcset=" //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging-2_180x.jpg?v=1569225871 180w 270h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging-2_360x.jpg?v=1569225871 360w 540h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging-2_540x.jpg?v=1569225871 540w 810h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging-2_750x.jpg?v=1569225871 750w 1125h, ">
                                                                                            <img alt=""
                                                                                                 class="lazyautosizes lazyloaded"
                                                                                                 data-sizes="auto"
                                                                                                 data-parent-fit="contain"
                                                                                                 sizes="270.66666666666663px">
                                                                                        </picture>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                            <div class="product-slide" style=""
                                                                                 tabindex="-1" role="option"
                                                                                 aria-describedby="slick-slide353">
                                                                                <div class="image-wrap loaded">

                                                                                    <div
                                                                                        class="grid__image-ratio grid__image-ratio--natural lazyloaded"
                                                                                        style="padding-bottom: 150%; background-image: url(&quot;https://cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging_750x.jpg?v=1569225871&quot;);"
                                                                                        data-bgset="

                                                                                                //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging_180x.jpg?v=1569225871 180w 270h,
                                                                                                //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging_360x.jpg?v=1569225871 360w 540h,
                                                                                                //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging_540x.jpg?v=1569225871 540w 810h,
                                                                                                //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging_750x.jpg?v=1569225871 750w 1125h,">
                                                                                        <picture style="display: none;"
                                                                                                 class="loaded">
                                                                                            <source
                                                                                                data-srcset=" //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging_180x.jpg?v=1569225871 180w 270h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging_360x.jpg?v=1569225871 360w 540h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging_540x.jpg?v=1569225871 540w 810h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging_750x.jpg?v=1569225871 750w 1125h, "
                                                                                                sizes="270.66666666666663px"
                                                                                                srcset=" //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging_180x.jpg?v=1569225871 180w 270h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging_360x.jpg?v=1569225871 360w 540h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging_540x.jpg?v=1569225871 540w 810h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/taronga-legging_750x.jpg?v=1569225871 750w 1125h, ">
                                                                                            <img alt=""
                                                                                                 class="lazyautosizes lazyloaded"
                                                                                                 data-sizes="auto"
                                                                                                 data-parent-fit="contain"
                                                                                                 sizes="270.66666666666663px">
                                                                                        </picture>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <style>
                                                                            .product-slider.slick-initialized[data-id="2546237866066"]:after {
                                                                                animation-duration: 5400ms;
                                                                            }
                                                                        </style>


                                                                        <div class="grid-product__meta">
                                                                            <div class="grid-product__title">Taronga
                                                                                Legging
                                                                            </div>

                                                                            <div class="grid-product__price">


                                                                                        <span>
                                                                                        $115
                                                                                        </span>

                                                                            </div>
                                                                        </div>


                                                                    </a>
                                                                </div>

                                                            </div>


                                                            <div class="grid__item grid-product grid-product--medium aos-init aos-animate"
                                                                data-aos="" data-product-grid=""
                                                                data-id="2546238783570">
                                                                <div class="grid-product__content">


                                                                    <a href="/collections/leggings/products/color-block-legging"
                                                                       class="grid-product__link quick-product__btn js-screen-open-product-2546238783570 js-no-transition"
                                                                       data-product-id="2546238783570"
                                                                       data-url="/collections/leggings/products/color-block-legging"
                                                                       aria-expanded="false">
                                                                        <div class="product-slider product-slider--init"
                                                                             data-image-count="4"
                                                                             data-id="2546238783570">


                                                                            <div class="product-slide" style=""
                                                                                 tabindex="-1" role="option"
                                                                                 aria-describedby="slick-slide420">
                                                                                <div class="image-wrap">


                                                                                    <div class="image-wrap loaded"
                                                                                         style="height: 0; padding-bottom: 149.969933854%;">
                                                                                        <img
                                                                                            class="grid-product__image lazyautosizes lazyloaded"
                                                                                            data-widths="[750, 900, 1080]"
                                                                                            data-aspectratio="0.6668003207698476"
                                                                                            data-sizes="auto" alt=""
                                                                                            data-srcset="//cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-2_750x.jpg?v=1569225871 750w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-2_900x.jpg?v=1569225871 900w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-2_1080x.jpg?v=1569225871 1080w"
                                                                                            sizes="271px"
                                                                                            srcset="//cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-2_750x.jpg?v=1569225871 750w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-2_900x.jpg?v=1569225871 900w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-2_1080x.jpg?v=1569225871 1080w">
                                                                                        <noscript>
                                                                                            <img
                                                                                                class="grid-product__image lazyloaded"
                                                                                                src="//cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-2_400x.jpg?v=1569225871"
                                                                                                alt="">
                                                                                        </noscript>
                                                                                    </div>


                                                                                </div>
                                                                            </div>
                                                                            <div class="product-slide" style=""
                                                                                 tabindex="-1" role="option"
                                                                                 aria-describedby="slick-slide421">
                                                                                <div class="image-wrap loaded">

                                                                                    <div
                                                                                        class="grid__image-ratio grid__image-ratio--natural lazyloaded"
                                                                                        style="padding-bottom: 149.97%; background-image: url(&quot;https://cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-4_750x.jpg?v=1569225871&quot;);"
                                                                                        data-bgset="

                                                                                            //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-4_180x.jpg?v=1569225871 180w 270h,
                                                                                            //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-4_360x.jpg?v=1569225871 360w 540h,
                                                                                            //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-4_540x.jpg?v=1569225871 540w 810h,
                                                                                            //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-4_750x.jpg?v=1569225871 750w 1125h,">
                                                                                        <picture style="display: none;"
                                                                                                 class="loaded">
                                                                                            <source
                                                                                                data-srcset=" //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-4_180x.jpg?v=1569225871 180w 270h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-4_360x.jpg?v=1569225871 360w 540h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-4_540x.jpg?v=1569225871 540w 810h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-4_750x.jpg?v=1569225871 750w 1125h, "
                                                                                                sizes="270.66666666666663px"
                                                                                                srcset=" //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-4_180x.jpg?v=1569225871 180w 270h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-4_360x.jpg?v=1569225871 360w 540h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-4_540x.jpg?v=1569225871 540w 810h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-4_750x.jpg?v=1569225871 750w 1125h, ">
                                                                                            <img alt=""
                                                                                                 class="lazyautosizes lazyloaded"
                                                                                                 data-sizes="auto"
                                                                                                 data-parent-fit="contain"
                                                                                                 sizes="270.66666666666663px">
                                                                                        </picture>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                            <div class="product-slide" style=""
                                                                                 tabindex="-1" role="option"
                                                                                 aria-describedby="slick-slide422">
                                                                                <div class="image-wrap loaded">

                                                                                    <div
                                                                                        class="grid__image-ratio grid__image-ratio--natural lazyloaded"
                                                                                        style="padding-bottom: 149.97%; background-image: url(&quot;https://cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-3_750x.jpg?v=1569225871&quot;);"
                                                                                        data-bgset="

                                                                                            //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-3_180x.jpg?v=1569225871 180w 270h,
                                                                                            //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-3_360x.jpg?v=1569225871 360w 540h,
                                                                                            //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-3_540x.jpg?v=1569225871 540w 810h,
                                                                                            //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-3_750x.jpg?v=1569225871 750w 1125h,
                                                                                            //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-3_900x.jpg?v=1569225871 900w 1350h,
                                                                                            //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-3_1080x.jpg?v=1569225871 1080w 1620h,
                                                                                            //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-3_1296x.jpg?v=1569225871 1296w 1944h,
                                                                                            //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-3_1512x.jpg?v=1569225871 1512w 2268h,">
                                                                                        <picture style="display: none;"
                                                                                                 class="loaded">
                                                                                            <source
                                                                                                data-srcset=" //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-3_180x.jpg?v=1569225871 180w 270h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-3_360x.jpg?v=1569225871 360w 540h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-3_540x.jpg?v=1569225871 540w 810h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-3_750x.jpg?v=1569225871 750w 1125h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-3_900x.jpg?v=1569225871 900w 1350h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-3_1080x.jpg?v=1569225871 1080w 1620h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-3_1296x.jpg?v=1569225871 1296w 1944h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-3_1512x.jpg?v=1569225871 1512w 2268h, "
                                                                                                sizes="270.66666666666663px"
                                                                                                srcset=" //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-3_180x.jpg?v=1569225871 180w 270h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-3_360x.jpg?v=1569225871 360w 540h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-3_540x.jpg?v=1569225871 540w 810h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-3_750x.jpg?v=1569225871 750w 1125h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-3_900x.jpg?v=1569225871 900w 1350h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-3_1080x.jpg?v=1569225871 1080w 1620h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-3_1296x.jpg?v=1569225871 1296w 1944h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-3_1512x.jpg?v=1569225871 1512w 2268h, ">
                                                                                            <img alt=""
                                                                                                 class="lazyautosizes lazyloaded"
                                                                                                 data-sizes="auto"
                                                                                                 data-parent-fit="contain"
                                                                                                 sizes="270.66666666666663px">
                                                                                        </picture>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                            <div class="product-slide" style=""
                                                                                 tabindex="-1" role="option"
                                                                                 aria-describedby="slick-slide423">
                                                                                <div class="image-wrap loaded">

                                                                                    <div
                                                                                        class="grid__image-ratio grid__image-ratio--natural lazyloaded"
                                                                                        style="padding-bottom: 149.97%; background-image: url(&quot;https://cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging_750x.jpg?v=1569225871&quot;);"
                                                                                        data-bgset="

                                                                                                    //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging_180x.jpg?v=1569225871 180w 270h,
                                                                                                    //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging_360x.jpg?v=1569225871 360w 540h,
                                                                                                    //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging_540x.jpg?v=1569225871 540w 810h,
                                                                                                    //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging_750x.jpg?v=1569225871 750w 1125h,
                                                                                                    //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging_900x.jpg?v=1569225871 900w 1350h,
                                                                                                    //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging_1080x.jpg?v=1569225871 1080w 1620h,
                                                                                                    //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging_1296x.jpg?v=1569225871 1296w 1944h,
                                                                                                    //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging_1512x.jpg?v=1569225871 1512w 2268h,">
                                                                                        <picture style="display: none;"
                                                                                                 class="loaded">
                                                                                            <source
                                                                                                data-srcset=" //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging_180x.jpg?v=1569225871 180w 270h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging_360x.jpg?v=1569225871 360w 540h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging_540x.jpg?v=1569225871 540w 810h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging_750x.jpg?v=1569225871 750w 1125h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging_900x.jpg?v=1569225871 900w 1350h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging_1080x.jpg?v=1569225871 1080w 1620h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging_1296x.jpg?v=1569225871 1296w 1944h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging_1512x.jpg?v=1569225871 1512w 2268h, "
                                                                                                sizes="270.66666666666663px"
                                                                                                srcset=" //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging_180x.jpg?v=1569225871 180w 270h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging_360x.jpg?v=1569225871 360w 540h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging_540x.jpg?v=1569225871 540w 810h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging_750x.jpg?v=1569225871 750w 1125h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging_900x.jpg?v=1569225871 900w 1350h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging_1080x.jpg?v=1569225871 1080w 1620h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging_1296x.jpg?v=1569225871 1296w 1944h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging_1512x.jpg?v=1569225871 1512w 2268h, ">
                                                                                            <img alt=""
                                                                                                 class="lazyautosizes lazyloaded"
                                                                                                 data-sizes="auto"
                                                                                                 data-parent-fit="contain"
                                                                                                 sizes="270.66666666666663px">
                                                                                        </picture>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <style>
                                                                            .product-slider.slick-initialized[data-id="2546238783570"]:after {
                                                                                animation-duration: 5400ms;
                                                                            }
                                                                        </style>


                                                                        <div class="grid-product__meta">
                                                                            <div class="grid-product__title">Color Block
                                                                                Legging
                                                                            </div>

                                                                            <div class="grid-product__price">


                                                                                            <span>
                                                                                            $165
                                                                                            </span>

                                                                            </div>
                                                                        </div>


                                                                    </a>
                                                                </div>

                                                            </div>


                                                            <div
                                                                class="grid__item grid-product grid-product--medium aos-init aos-animate"
                                                                data-aos="" data-product-grid=""
                                                                data-id="2546235474002">
                                                                <div class="grid-product__content">


                                                                    <a href="/collections/leggings/products/bolt-legging"
                                                                       class="grid-product__link quick-product__btn js-screen-open-product-2546235474002 js-no-transition"
                                                                       data-product-id="2546235474002"
                                                                       data-url="/collections/leggings/products/bolt-legging"
                                                                       aria-expanded="false">
                                                                        <div class="product-slider product-slider--init"
                                                                             data-image-count="3"
                                                                             data-id="2546235474002">


                                                                            <div class="product-slide" style=""
                                                                                 tabindex="-1" role="option"
                                                                                 aria-describedby="slick-slide450">
                                                                                <div class="image-wrap">


                                                                                    <div class="image-wrap loaded"
                                                                                         style="height: 0; padding-bottom: 150.0%;">
                                                                                        <img
                                                                                            class="grid-product__image lazyautosizes lazyloaded"
                                                                                            data-widths="[750, 900, 1080]"
                                                                                            data-aspectratio="0.6666666666666666"
                                                                                            data-sizes="auto" alt=""
                                                                                            data-srcset="//cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings_750x.jpg?v=1569225870 750w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings_900x.jpg?v=1569225870 900w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings_1080x.jpg?v=1569225870 1080w"
                                                                                            sizes="271px"
                                                                                            srcset="//cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings_750x.jpg?v=1569225870 750w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings_900x.jpg?v=1569225870 900w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings_1080x.jpg?v=1569225870 1080w">
                                                                                        <noscript>
                                                                                            <img
                                                                                                class="grid-product__image lazyloaded"
                                                                                                src="//cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings_400x.jpg?v=1569225870"
                                                                                                alt="">
                                                                                        </noscript>
                                                                                    </div>


                                                                                </div>
                                                                            </div>
                                                                            <div class="product-slide" style=""
                                                                                 tabindex="-1" role="option"
                                                                                 aria-describedby="slick-slide451">
                                                                                <div class="image-wrap loaded">

                                                                                    <div
                                                                                        class="grid__image-ratio grid__image-ratio--natural lazyloaded"
                                                                                        style="padding-bottom: 150%; background-image: url(&quot;https://cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-3_750x.jpg?v=1569225870&quot;);"
                                                                                        data-bgset="

                                                                                                        //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-3_180x.jpg?v=1569225870 180w 270h,
                                                                                                        //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-3_360x.jpg?v=1569225870 360w 540h,
                                                                                                        //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-3_540x.jpg?v=1569225870 540w 810h,
                                                                                                        //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-3_750x.jpg?v=1569225870 750w 1125h,">
                                                                                        <picture style="display: none;"
                                                                                                 class="loaded">
                                                                                            <source
                                                                                                data-srcset=" //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-3_180x.jpg?v=1569225870 180w 270h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-3_360x.jpg?v=1569225870 360w 540h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-3_540x.jpg?v=1569225870 540w 810h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-3_750x.jpg?v=1569225870 750w 1125h, "
                                                                                                sizes="270.66666666666663px"
                                                                                                srcset=" //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-3_180x.jpg?v=1569225870 180w 270h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-3_360x.jpg?v=1569225870 360w 540h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-3_540x.jpg?v=1569225870 540w 810h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-3_750x.jpg?v=1569225870 750w 1125h, ">
                                                                                            <img alt=""
                                                                                                 class="lazyautosizes lazyloaded"
                                                                                                 data-sizes="auto"
                                                                                                 data-parent-fit="contain"
                                                                                                 sizes="270.66666666666663px">
                                                                                        </picture>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                            <div class="product-slide" style=""
                                                                                 tabindex="-1" role="option"
                                                                                 aria-describedby="slick-slide452">
                                                                                <div class="image-wrap loaded">

                                                                                    <div
                                                                                        class="grid__image-ratio grid__image-ratio--natural lazyloaded"
                                                                                        style="padding-bottom: 150%; background-image: url(&quot;https://cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-2_750x.jpg?v=1569225870&quot;);"
                                                                                        data-bgset="

                                                                                            //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-2_180x.jpg?v=1569225870 180w 270h,
                                                                                            //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-2_360x.jpg?v=1569225870 360w 540h,
                                                                                            //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-2_540x.jpg?v=1569225870 540w 810h,
                                                                                            //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-2_750x.jpg?v=1569225870 750w 1125h,">
                                                                                        <picture style="display: none;"
                                                                                                 class="loaded">
                                                                                            <source
                                                                                                data-srcset=" //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-2_180x.jpg?v=1569225870 180w 270h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-2_360x.jpg?v=1569225870 360w 540h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-2_540x.jpg?v=1569225870 540w 810h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-2_750x.jpg?v=1569225870 750w 1125h, "
                                                                                                sizes="270.66666666666663px"
                                                                                                srcset=" //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-2_180x.jpg?v=1569225870 180w 270h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-2_360x.jpg?v=1569225870 360w 540h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-2_540x.jpg?v=1569225870 540w 810h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-2_750x.jpg?v=1569225870 750w 1125h, ">
                                                                                            <img alt=""
                                                                                                 class="lazyautosizes lazyloaded"
                                                                                                 data-sizes="auto"
                                                                                                 data-parent-fit="contain"
                                                                                                 sizes="270.66666666666663px">
                                                                                        </picture>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <style>
                                                                            .product-slider.slick-initialized[data-id="2546235474002"]:after {
                                                                                animation-duration: 4050ms;
                                                                            }
                                                                        </style>


                                                                        <div class="grid-product__meta">
                                                                            <div class="grid-product__title">Bolt
                                                                                Legging
                                                                            </div>

                                                                            <div class="grid-product__price">


                                                                                            <span>
                                                                                            $75
                                                                                            </span>

                                                                            </div>
                                                                        </div>


                                                                    </a>
                                                                </div>

                                                            </div>


                                                            <div
                                                                class="grid__item grid-product grid-product--medium aos-init aos-animate"
                                                                data-aos="" data-product-grid=""
                                                                data-id="2546235899986">
                                                                <div class="grid-product__content">


                                                                    <a href="/collections/leggings/products/bolt-legging-grey"
                                                                       class="grid-product__link quick-product__btn js-screen-open-product-2546235899986 js-no-transition"
                                                                       data-product-id="2546235899986"
                                                                       data-url="/collections/leggings/products/bolt-legging-grey"
                                                                       aria-expanded="false">
                                                                        <div class="product-slider product-slider--init"
                                                                             data-image-count="3"
                                                                             data-id="2546235899986">


                                                                            <div class="product-slide" style=""
                                                                                 tabindex="-1" role="option"
                                                                                 aria-describedby="slick-slide440">
                                                                                <div class="image-wrap">


                                                                                    <div class="image-wrap loaded"
                                                                                         style="height: 0; padding-bottom: 150.0%;">
                                                                                        <img
                                                                                            class="grid-product__image lazyautosizes lazyloaded"
                                                                                            data-widths="[750, 900, 1080]"
                                                                                            data-aspectratio="0.6666666666666666"
                                                                                            data-sizes="auto" alt=""
                                                                                            data-srcset="//cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-4_750x.jpg?v=1569225870 750w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-4_900x.jpg?v=1569225870 900w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-4_1080x.jpg?v=1569225870 1080w"
                                                                                            sizes="271px"
                                                                                            srcset="//cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-4_750x.jpg?v=1569225870 750w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-4_900x.jpg?v=1569225870 900w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-4_1080x.jpg?v=1569225870 1080w">
                                                                                        <noscript>
                                                                                            <img
                                                                                                class="grid-product__image lazyloaded"
                                                                                                src="//cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-4_400x.jpg?v=1569225870"
                                                                                                alt="">
                                                                                        </noscript>
                                                                                    </div>


                                                                                </div>
                                                                            </div>
                                                                            <div class="product-slide" style=""
                                                                                 tabindex="-1" role="option"
                                                                                 aria-describedby="slick-slide441">
                                                                                <div class="image-wrap loaded">

                                                                                    <div
                                                                                        class="grid__image-ratio grid__image-ratio--natural lazyloaded"
                                                                                        style="padding-bottom: 150%; background-image: url(&quot;https://cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-5_750x.jpg?v=1569225870&quot;);"
                                                                                        data-bgset="

                                                                                            //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-5_180x.jpg?v=1569225870 180w 270h,
                                                                                            //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-5_360x.jpg?v=1569225870 360w 540h,
                                                                                            //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-5_540x.jpg?v=1569225870 540w 810h,
                                                                                            //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-5_750x.jpg?v=1569225870 750w 1125h,">
                                                                                        <picture style="display: none;"
                                                                                                 class="loaded">
                                                                                            <source
                                                                                                data-srcset=" //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-5_180x.jpg?v=1569225870 180w 270h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-5_360x.jpg?v=1569225870 360w 540h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-5_540x.jpg?v=1569225870 540w 810h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-5_750x.jpg?v=1569225870 750w 1125h, "
                                                                                                sizes="270.66666666666663px"
                                                                                                srcset=" //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-5_180x.jpg?v=1569225870 180w 270h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-5_360x.jpg?v=1569225870 360w 540h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-5_540x.jpg?v=1569225870 540w 810h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-5_750x.jpg?v=1569225870 750w 1125h, ">
                                                                                            <img alt=""
                                                                                                 class="lazyautosizes lazyloaded"
                                                                                                 data-sizes="auto"
                                                                                                 data-parent-fit="contain"
                                                                                                 sizes="270.66666666666663px">
                                                                                        </picture>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                            <div class="product-slide" style=""
                                                                                 tabindex="-1" role="option"
                                                                                 aria-describedby="slick-slide442">
                                                                                <div class="image-wrap loaded">

                                                                                    <div
                                                                                        class="grid__image-ratio grid__image-ratio--natural lazyloaded"
                                                                                        style="padding-bottom: 150%; background-image: url(&quot;https://cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-6_750x.jpg?v=1569225870&quot;);"
                                                                                        data-bgset="

                                                                                                //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-6_180x.jpg?v=1569225870 180w 270h,
                                                                                                //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-6_360x.jpg?v=1569225870 360w 540h,
                                                                                                //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-6_540x.jpg?v=1569225870 540w 810h,
                                                                                                //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-6_750x.jpg?v=1569225870 750w 1125h,">
                                                                                        <picture style="display: none;"
                                                                                                 class="loaded">
                                                                                            <source
                                                                                                data-srcset=" //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-6_180x.jpg?v=1569225870 180w 270h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-6_360x.jpg?v=1569225870 360w 540h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-6_540x.jpg?v=1569225870 540w 810h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-6_750x.jpg?v=1569225870 750w 1125h, "
                                                                                                sizes="270.66666666666663px"
                                                                                                srcset=" //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-6_180x.jpg?v=1569225870 180w 270h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-6_360x.jpg?v=1569225870 360w 540h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-6_540x.jpg?v=1569225870 540w 810h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/bolt-leggings-6_750x.jpg?v=1569225870 750w 1125h, ">
                                                                                            <img alt=""
                                                                                                 class="lazyautosizes lazyloaded"
                                                                                                 data-sizes="auto"
                                                                                                 data-parent-fit="contain"
                                                                                                 sizes="270.66666666666663px">
                                                                                        </picture>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <style>
                                                                            .product-slider.slick-initialized[data-id="2546235899986"]:after {
                                                                                animation-duration: 4050ms;
                                                                            }
                                                                        </style>


                                                                        <div class="grid-product__meta">
                                                                            <div class="grid-product__title">Bolt
                                                                                Legging Grey
                                                                            </div>

                                                                            <div class="grid-product__price">


                                                                                <span>
                                                                                $115
                                                                                </span>

                                                                            </div>
                                                                        </div>


                                                                    </a>
                                                                </div>

                                                            </div>


                                                            <div
                                                                class="grid__item grid-product grid-product--medium aos-init aos-animate"
                                                                data-aos="" data-product-grid=""
                                                                data-id="2546239733842">
                                                                <div class="grid-product__content">


                                                                    <a href="/collections/leggings/products/blue-block-legging"
                                                                       class="grid-product__link quick-product__btn js-screen-open-product-2546239733842 js-no-transition"
                                                                       data-product-id="2546239733842"
                                                                       data-url="/collections/leggings/products/blue-block-legging"
                                                                       aria-expanded="false">
                                                                        <div class="product-slider product-slider--init"
                                                                             data-image-count="3"
                                                                             data-id="2546239733842">


                                                                            <div class="product-slide" style=""
                                                                                 tabindex="-1" role="option"
                                                                                 aria-describedby="slick-slide360">
                                                                                <div class="image-wrap">


                                                                                    <div class="image-wrap loaded"
                                                                                         style="height: 0; padding-bottom: 150.0%;">
                                                                                        <img
                                                                                            class="grid-product__image lazyautosizes lazyloaded"
                                                                                            data-widths="[750, 900, 1080]"
                                                                                            data-aspectratio="0.6666666666666666"
                                                                                            data-sizes="auto" alt=""
                                                                                            data-srcset="//cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-5_750x.jpg?v=1569225871 750w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-5_900x.jpg?v=1569225871 900w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-5_1080x.jpg?v=1569225871 1080w"
                                                                                            sizes="271px"
                                                                                            srcset="//cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-5_750x.jpg?v=1569225871 750w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-5_900x.jpg?v=1569225871 900w, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-5_1080x.jpg?v=1569225871 1080w">
                                                                                        <noscript>
                                                                                            <img
                                                                                                class="grid-product__image lazyloaded"
                                                                                                src="//cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-5_400x.jpg?v=1569225871"
                                                                                                alt="">
                                                                                        </noscript>
                                                                                    </div>


                                                                                </div>
                                                                            </div>
                                                                            <div class="product-slide" style=""
                                                                                 tabindex="-1" role="option"
                                                                                 aria-describedby="slick-slide361">
                                                                                <div class="image-wrap loaded">

                                                                                    <div
                                                                                        class="grid__image-ratio grid__image-ratio--natural lazyloaded"
                                                                                        style="padding-bottom: 150%; background-image: url(&quot;https://cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-7_750x.jpg?v=1569225871&quot;);"
                                                                                        data-bgset="

                                                                                                    //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-7_180x.jpg?v=1569225871 180w 270h,
                                                                                                    //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-7_360x.jpg?v=1569225871 360w 540h,
                                                                                                    //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-7_540x.jpg?v=1569225871 540w 810h,
                                                                                                    //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-7_750x.jpg?v=1569225871 750w 1125h,">
                                                                                        <picture style="display: none;"
                                                                                                 class="loaded">
                                                                                            <source
                                                                                                data-srcset=" //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-7_180x.jpg?v=1569225871 180w 270h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-7_360x.jpg?v=1569225871 360w 540h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-7_540x.jpg?v=1569225871 540w 810h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-7_750x.jpg?v=1569225871 750w 1125h, "
                                                                                                sizes="270.66666666666663px"
                                                                                                srcset=" //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-7_180x.jpg?v=1569225871 180w 270h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-7_360x.jpg?v=1569225871 360w 540h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-7_540x.jpg?v=1569225871 540w 810h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-7_750x.jpg?v=1569225871 750w 1125h, ">
                                                                                            <img alt=""
                                                                                                 class="lazyautosizes lazyloaded"
                                                                                                 data-sizes="auto"
                                                                                                 data-parent-fit="contain"
                                                                                                 sizes="270.66666666666663px">
                                                                                        </picture>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                            <div class="product-slide" style=""
                                                                                 tabindex="-1" role="option"
                                                                                 aria-describedby="slick-slide362">
                                                                                <div class="image-wrap loaded">

                                                                                    <div
                                                                                        class="grid__image-ratio grid__image-ratio--natural lazyloaded"
                                                                                        style="padding-bottom: 150%; background-image: url(&quot;https://cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-6_750x.jpg?v=1569225871&quot;);"
                                                                                        data-bgset="

                                                                                                //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-6_180x.jpg?v=1569225871 180w 270h,
                                                                                                //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-6_360x.jpg?v=1569225871 360w 540h,
                                                                                                //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-6_540x.jpg?v=1569225871 540w 810h,
                                                                                                //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-6_750x.jpg?v=1569225871 750w 1125h,">
                                                                                        <picture style="display: none;"
                                                                                                 class="loaded">
                                                                                            <source
                                                                                                data-srcset=" //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-6_180x.jpg?v=1569225871 180w 270h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-6_360x.jpg?v=1569225871 360w 540h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-6_540x.jpg?v=1569225871 540w 810h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-6_750x.jpg?v=1569225871 750w 1125h, "
                                                                                                sizes="270.66666666666663px"
                                                                                                srcset=" //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-6_180x.jpg?v=1569225871 180w 270h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-6_360x.jpg?v=1569225871 360w 540h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-6_540x.jpg?v=1569225871 540w 810h, //cdn.shopify.com/s/files/1/0076/0014/4466/products/color-block-legging-6_750x.jpg?v=1569225871 750w 1125h, ">
                                                                                            <img alt=""
                                                                                                 class="lazyautosizes lazyloaded"
                                                                                                 data-sizes="auto"
                                                                                                 data-parent-fit="contain"
                                                                                                 sizes="270.66666666666663px">
                                                                                        </picture>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <style>
                                                                            .product-slider.slick-initialized[data-id="2546239733842"]:after {
                                                                                animation-duration: 4050ms;
                                                                            }
                                                                        </style>


                                                                        <div class="grid-product__meta">
                                                                            <div class="grid-product__title">Blue Block
                                                                                Legging
                                                                            </div>

                                                                            <div class="grid-product__price">


                                                                                                <span>
                                                                                                $165
                                                                                                </span>

                                                                            </div>
                                                                        </div>


                                                                    </a>
                                                                </div>

                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                    </div>


                                    {{--                                    <div class="It-bestseller-prod innovatoryProductFilter innovatoryProductGrid clearfix">--}}
                                    {{--                                        <div class="sec-head-style mb-30 text-center">--}}
                                    {{--                                            <h3 class="page-heading">--}}
                                    {{--                                                <span>{{__('settings.hoods')}}</span>--}}
                                    {{--                                            </h3>--}}
                                    {{--                                        </div>--}}
                                    {{--                                        <div class="prod-filter itContent">--}}
                                    {{--                                            <div class="itProductFilter">--}}
                                    {{--                                                <div class="owlProductFilter-It-bestseller-prod  owl-carousel">--}}

                                    {{--                                                    @foreach($hoods as $hood)--}}
                                    {{--                                                        <div--}}
                                    {{--                                                            class="item-inner  ajax_block_product wow animated fadeInUp">--}}

                                    {{--                                                            <div--}}
                                    {{--                                                                class="item product-box  ajax_block_product js-product-miniature"--}}
                                    {{--                                                                data-id-product="{{$hood->id}}"--}}
                                    {{--                                                                data-id-product-attribute="{{$hood->id}}">--}}
                                    {{--                                                                <div class="innovatoryProduct-container">--}}
                                    {{--                                                                    <div class="innovatoryProduct-image">--}}
                                    {{--                                                                        <a href="{{action('FrontEnd\ProductController@show' ,[$hood->id,$hood->title,$hood->title_en])}}"--}}
                                    {{--                                                                           class="thumbnail product-thumbnail"><span--}}
                                    {{--                                                                                class="cover_image">--}}
                                    {{--                                                                                <img--}}
                                    {{--                                                                                    src="{{asset("img/admin/product/$hood->photo1")}}"--}}
                                    {{--                                                                                    data-full-size-image-url=""--}}
                                    {{--                                                                                    alt="" width="auto"--}}
                                    {{--                                                                                    height="auto"/>--}}
                                    {{--                                                                            </span> <span class="hover_image">--}}
                                    {{--                                                                                <img--}}
                                    {{--                                                                                    src="{{asset("img/admin/product/$hood->photo1")}}"--}}
                                    {{--                                                                                    data-full-size-image-url=""--}}
                                    {{--                                                                                    alt="" width="auto"--}}
                                    {{--                                                                                    height="auto"/>--}}
                                    {{--                                                                            </span> </a>--}}
                                    {{--                                                                        @if($hood->category == 1)--}}
                                    {{--                                                                            <span--}}
                                    {{--                                                                                class="innovatoryNew-label">{{__('settings.newest')}}</span>--}}
                                    {{--                                                                        @elseif($hood->category == 2)--}}
                                    {{--                                                                            <span--}}
                                    {{--                                                                                class="innovatoryNew-label">{{__('settings.bestSell')}}</span>--}}
                                    {{--                                                                        @elseif($hood->category == 3)--}}
                                    {{--                                                                            <span--}}
                                    {{--                                                                                class="innovatoryNew-label">{{__('settings.Special')}}</span>--}}
                                    {{--                                                                        @endif--}}
                                    {{--                                                                        <span--}}
                                    {{--                                                                            class="reduction_percent_display innovatorySale-label">%{{$hood->discount}}</span>--}}
                                    {{--                                                                    </div>--}}
                                    {{--                                                                    <div class="innovatory-product-description">--}}
                                    {{--                                                                        <div class="comments_note">--}}
                                    {{--                                                                            <div class="star_content">--}}
                                    {{--                                                                                <div class="Rate">--}}
                                    {{--                                                                                    <span--}}
                                    {{--                                                                                        class="stars"> {{round($hood->rate ,2)}}</span>--}}
                                    {{--                                                                                </div>--}}
                                    {{--                                                                            </div>--}}
                                    {{--                                                                            <span--}}
                                    {{--                                                                                class="laberCountReview pull-left">Review</span>--}}
                                    {{--                                                                        </div>--}}
                                    {{--                                                                        <h2 class="h2 productName" itemprop="name">--}}
                                    {{--                                                                            <a href="">--}}
                                    {{--                                                                                @if(App::getLocale() == 'fa')--}}
                                    {{--                                                                                    {{$hood->title}}--}}
                                    {{--                                                                                @elseif(App::getLocale() == 'en')--}}
                                    {{--                                                                                    {{$hood->title_en}}--}}
                                    {{--                                                                                @endif--}}
                                    {{--                                                                            </a>--}}
                                    {{--                                                                        </h2>--}}
                                    {{--                                                                        <div--}}
                                    {{--                                                                            class="innovatory-product-price-and-shipping">--}}
                                    {{--                                                                            <span itemprop="price" class="price">--}}
                                    {{--                                                                                @if(isset($hood->discount))--}}
                                    {{--                                                                                    <span--}}
                                    {{--                                                                                        class="old-price regular-price">{{$hood->price}}</span>--}}
                                    {{--                                                                                    <span itemprop="price"--}}
                                    {{--                                                                                          class="price"><span--}}
                                    {{--                                                                                            style="font-size: 17px;float: left;font-weight: 10;">{{__('settings.tuman')}}</span> {{$hood->price_after_discount}}</span>--}}
                                    {{--                                                                                @else--}}
                                    {{--                                                                                    <span--}}
                                    {{--                                                                                        class="regular-price">{{$hood->price}}</span>--}}
                                    {{--                                                                                @endif--}}
                                    {{--                                                                            </span>--}}
                                    {{--                                                                        </div>--}}
                                    {{--                                                                        <div--}}
                                    {{--                                                                            class="innovatoryCart innovatoryItem hidden-md-down">--}}
                                    {{--                                                                            <form action="#" method="post">--}}
                                    {{--                                                                                <input type="hidden" name="token"--}}
                                    {{--                                                                                       data-id="{{$hood->id}}" value="0"--}}
                                    {{--                                                                                       class="" disabled>--}}
                                    {{--                                                                                <a class="cart-btn button ajax_add_to_cart_button add-to-cart"--}}
                                    {{--                                                                                   data-button-action="add-to-cart"--}}
                                    {{--                                                                                   type="submit"--}}
                                    {{--                                                                                   data-id="{{$hood->id}}"--}}
                                    {{--                                                                                   data-name="@if(App::getLocale() == 'fa'){{$hood->title}}@elseif(App::getLocale() == 'en'){{$hood->title_en}}@endif"--}}
                                    {{--                                                                                   data-max="{{$hood->max}}"--}}
                                    {{--                                                                                   data-price="{{$hood->price}}"--}}
                                    {{--                                                                                   data-pic="{{asset("img/admin/product/$hood->photo1")}}"--}}
                                    {{--                                                                                   data-min="1"--}}
                                    {{--                                                                                   data-toggle="tooltip"--}}
                                    {{--                                                                                   title="{{__('settings.addtocard')}}">--}}
                                    {{--                                                                                    {{__('settings.addtocard')}}--}}
                                    {{--                                                                                </a>--}}
                                    {{--                                                                                --}}{{--                                                                                <a class="cart-btn-success alert alert-success">{{__('settings.inCart')}}</a>--}}
                                    {{--                                                                            </form>--}}

                                    {{--                                                                        </div>--}}
                                    {{--                                                                    </div>--}}
                                    {{--                                                                </div>--}}
                                    {{--                                                            </div>--}}

                                    {{--                                                        </div>--}}
                                    {{--                                                    @endforeach--}}

                                    {{--                                                </div>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}


                                    <div class="It-Specials-prod innovatoryProductFilter innovatoryProductGrid clearfix">
                                        <div class="sec-head-style mb-30 text-center">
                                            <h3 class="page-heading"><span>{{__('settings.ojaghs')}}</span></h3>
                                        </div>
                                        <div class="prod-filter itContent">
                                            <div class="itProductFilter">
                                                <div class="owlProductFilter-It-Specials-prod  owl-carousel">

                                                    @foreach($ojaghs as $ojagh)
                                                        <div
                                                            class="item-inner  ajax_block_product wow animated fadeInUp">

                                                            <div
                                                                class="item product-box  ajax_block_product js-product-miniature"
                                                                data-id-product="{{$ojagh->id}}"
                                                                data-id-product-attribute="{{$ojagh->id}}">
                                                                <div class="innovatoryProduct-container">
                                                                    <div class="innovatoryProduct-image">
                                                                        <a href="{{action('FrontEnd\ProductController@show' ,[$ojagh->id,$ojagh->title,$ojagh->title_en])}}"
                                                                           class="thumbnail product-thumbnail"><span
                                                                                class="cover_image">
                                                                                <img
                                                                                    src="{{asset("img/admin/product/$ojagh->photo1")}}"
                                                                                    data-full-size-image-url=""
                                                                                    alt="" width="auto"
                                                                                    height="auto"/>
                                                                            </span> <span class="hover_image">
                                                                                <img
                                                                                    src="{{asset("img/admin/product/$ojagh->photo1")}}"
                                                                                    data-full-size-image-url=""
                                                                                    alt="" width="auto"
                                                                                    height="auto"/>
                                                                            </span> </a>
                                                                        @if($ojagh->category == 1)
                                                                            <span
                                                                                class="innovatoryNew-label">{{__('settings.newest')}}</span>
                                                                        @elseif($ojagh->category == 2)
                                                                            <span
                                                                                class="innovatoryNew-label">{{__('settings.bestSell')}}</span>
                                                                        @elseif($ojagh->category == 3)
                                                                            <span
                                                                                class="innovatoryNew-label">{{__('settings.Special')}}</span>
                                                                        @endif
                                                                        <span
                                                                            class="reduction_percent_display innovatorySale-label">%{{$ojagh->discount}}</span>
                                                                        {{--                                                                        <div class="innovatoryActions">--}}
                                                                        {{--                                                                            <div class="innovatoryActions-i">--}}
                                                                        {{--                                                                                <div--}}
                                                                        {{--                                                                                    class="innovatoryCart innovatoryItem">--}}
                                                                        {{--                                                                                    <form action="cart.html"--}}
                                                                        {{--                                                                                          method="post"><input--}}
                                                                        {{--                                                                                            type="hidden" name="token"--}}
                                                                        {{--                                                                                            value="b37219994338861bc35224966f2f6efd"><input--}}
                                                                        {{--                                                                                            type="hidden" value="46"--}}
                                                                        {{--                                                                                            name="id_product"><a--}}
                                                                        {{--                                                                                            data-button-action="add-to-cart"--}}
                                                                        {{--                                                                                            class="cart-btn"--}}
                                                                        {{--                                                                                            title="Add To Cart"><i--}}
                                                                        {{--                                                                                                class="ti-shopping-cart"></i></a>--}}
                                                                        {{--                                                                                    </form>--}}
                                                                        {{--                                                                                </div>--}}
                                                                        {{--                                                                                <div--}}
                                                                        {{--                                                                                    class="innovatoryQuick innovatoryItem">--}}
                                                                        {{--                                                                                    <a href="#" class="quick-view"--}}
                                                                        {{--                                                                                       data-link-action="quickview"--}}
                                                                        {{--                                                                                       title="Quickview"><i--}}
                                                                        {{--                                                                                            class="ti-eye"></i><span>Quickview</span></a>--}}
                                                                        {{--                                                                                </div>--}}
                                                                        {{--                                                                                <div--}}
                                                                        {{--                                                                                    class="innovatoryItem innovatoryWish">--}}
                                                                        {{--                                                                                    <div--}}
                                                                        {{--                                                                                        class="innovatorywishlist product-item-wishlist">--}}
                                                                        {{--                                                                                        <a class="addToWishlist wishlistProd_46"--}}
                                                                        {{--                                                                                           title="Add to wishlist"--}}
                                                                        {{--                                                                                           href="#" rel="46"--}}
                                                                        {{--                                                                                           onclick="WishlistCart('wishlist_block_list', 'add', '46', false, 1); return false;">--}}
                                                                        {{--                                                                                            <i class="ti-heart"></i>--}}
                                                                        {{--                                                                                            <span>Add to wishlist</span>--}}
                                                                        {{--                                                                                        </a>--}}
                                                                        {{--                                                                                    </div>--}}
                                                                        {{--                                                                                </div>--}}
                                                                        {{--                                                                            </div>--}}
                                                                        {{--                                                                        </div>--}}
                                                                    </div>
                                                                    <div class="innovatory-product-description">
                                                                        <div class="comments_note">
                                                                            <div class="star_content">
                                                                                <div class="Rate">
                                                                                    <span
                                                                                        class="stars"> {{round($ojagh->rate ,2)}}</span>
                                                                                </div>
                                                                            </div>
                                                                            <span
                                                                                class="laberCountReview pull-left">Review</span>
                                                                        </div>
                                                                        <h2 class="h2 productName" itemprop="name">
                                                                            <a href="">
                                                                                @if(App::getLocale() == 'fa')
                                                                                    {{$ojagh->title}}
                                                                                @elseif(App::getLocale() == 'en')
                                                                                    {{$ojagh->title_en}}
                                                                                @endif
                                                                            </a>
                                                                        </h2>
                                                                        <div
                                                                            class="innovatory-product-price-and-shipping">
                                                                            <span itemprop="price" class="price">
                                                                           @if(isset($ojagh->discount))
                                                                                    <span
                                                                                        class="old-price regular-price">{{$ojagh->price}}</span>
                                                                                    <span itemprop="price"
                                                                                          class="price"><span
                                                                                            style="font-size: 17px;float: left;font-weight: 10;">{{__('settings.tuman')}}</span> {{$ojagh->price_after_discount}}</span>
                                                                                @else
                                                                                    <span
                                                                                        class="regular-price">{{$ojagh->price}}</span>
                                                                                @endif
                                                                            </span>
                                                                        </div>
                                                                        <div
                                                                            class="innovatoryCart innovatoryItem hidden-md-down">
                                                                            <form action="#" method="post">
                                                                                <input type="hidden" name="token"
                                                                                       data-id="{{$ojagh->id}}"
                                                                                       value="0"
                                                                                       class="" disabled>
                                                                                <a class="cart-btn button ajax_add_to_cart_button add-to-cart"
                                                                                   data-button-action="add-to-cart"
                                                                                   type="submit"
                                                                                   data-id="{{$ojagh->id}}"
                                                                                   data-name="@if(App::getLocale() == 'fa'){{$ojagh->title}}@elseif(App::getLocale() == 'en'){{$ojagh->title_en}}@endif"
                                                                                   data-max="{{$ojagh->max}}"
                                                                                   data-price="{{$ojagh->price}}"
                                                                                   data-pic="{{asset("img/admin/product/$ojagh->photo1")}}"
                                                                                   data-min="1"
                                                                                   data-toggle="tooltip"
                                                                                   title="{{__('settings.addtocard')}}">
                                                                                    {{__('settings.addtocard')}}
                                                                                </a>
                                                                                {{--                                                                                <a class="cart-btn-success alert alert-success">{{__('settings.inCart')}}</a>--}}
                                                                            </form>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="displayPosition displayPosition3">
                                <div class="row">
                                    <!-- Static Block module -->
                                    <!-- /Static block module -->
                                </div>
                            </div>
                            <div class="displayPosition displayPosition4">
                                <div class="row">
                                    <div id="itblog_block" class="block products_block clearfix">
                                        <div class="itblog_block_inner">
                                            <div class="sec-head-style mb-30 text-center">
                                                <h3 class="page-heading">{{__('settings.production')}}</h3>
                                            </div>
                                            <div class="row">
                                                <div
                                                    class="sdsblog-box-content block_content home_blog_post owl-carousel">
                                                    @foreach($events as $event)
                                                        <div class="item sds_blog_post">
                                                            <div class="blog_post">
                                                                <div class="blog_post_content">
                                                                    <div
                                                                        class="news_module_image_holder post_thumbnail">
                                                                        <a class="thumbnail"
                                                                           href="{{action('FrontEnd\EventController@show' ,[$event->id,$event->title,$event->title_en])}}">
                                                                            <img
                                                                                class="replace-2x img-responsive feat_img_small"
                                                                                alt="Donec tellus Nulla lorem"
                                                                                src="{{asset("img/admin/event/$event->photo1")}}"
                                                                                width="auto" height="auto"/>
                                                                        </a> <span class="blogicons">
{{--                                                                        <a title="Click to view Full Image" href="{{action('FrontEnd\EventController@show' ,[$event->id,$event->title,$event->title_en])}}" rel="blog_group" class="icon grouped_elements zoom ti-search">--}}

</a>
{{--                                                                        <a title="Click to view Read More" href="" class="icon readmore ti-link"></a>--}}
                                                                    </span>
                                                                    </div>

                                                                    <div class="blog_content">
                                                                        <div class="blog_inner">
                                                                             <span class="blog_date">
                                                                                 <span
                                                                                     class="day_date">{{$event->cteated_at_fa}}</span>
{{--                                                                                 <span class="day_month">Mar / </span>--}}
                                                                                 {{--                                                                                 <span class="day_year">2019</span>--}}
                                                                             </span>
                                                                            <h4 class="sds_post_title">
                                                                                <a href="">
                                                                                    @if(App::getLocale() == 'fa')
                                                                                        {{$event->title}}
                                                                                    @elseif(App::getLocale() == 'en')
                                                                                        {{$event->title_en}}
                                                                                    @endif
                                                                                </a>
                                                                            </h4>
                                                                            <div class="itbloginfo">
                                                                                <p class="desc">
                                                                                    @if(App::getLocale() == 'fa')
                                                                                        {!!\Illuminate\Support\Str::limit($event->description, 40)!!}
                                                                                    @elseif(App::getLocale() == 'en')
                                                                                        {!!\Illuminate\Support\Str::limit($event->description_en, 40)!!}
                                                                                    @endif

                                                                                </p>
                                                                            </div>
                                                                            <a href="{{action('FrontEnd\EventController@show' ,[$event->id,$event->title,$event->title_en])}}"
                                                                               class="btn btn-primary">{{__('settings.Continues')}}</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="displayPosition displayPosition5 nonecunter">
                                <div class="sec-head-style mb-30 text-center">
                                    <h3 class="page-heading">{{__('settings.performance')}}</h3>
                                </div>
                                <div class="wrapperCunter" id="counter">
                                    <div class="counter col_fourth">
                                        <i class="fa fa-code fa-2x"></i>
                                        <h2 class="timer count-title count-number counter-value" data-count="300"></h2>
                                        <p class="count-text ">{{__('settings.numberOfProducts')}}</p>
                                    </div>

                                    <div class="counter col_fourth">
                                        <i class="fa fa-coffee fa-2x"></i>
                                        <h2 class="timer count-title count-number counter-value" data-count="1700"></h2>
                                        <p class="count-text ">{{__('settings.visitToday')}}</p>
                                    </div>

                                    <div class="counter col_fourth">
                                        <i class="fa fa-lightbulb-o fa-2x"></i>
                                        <h2 class="timer count-title count-number counter-value"
                                            data-count="11900"></h2>
                                        <p class="count-text ">{{__('settings.visitAll')}}</p>
                                    </div>

                                    <div class="counter col_fourth end">
                                        <i class="fa fa-bug fa-2x"></i>
                                        <h2 class="timer count-title count-number counter-value" data-count="157"></h2>
                                        <p class="count-text ">{{__('settings.salesNumber')}}</p>
                                    </div>
                                </div>

                            </div>


                            <div class="displayPosition displayPosition5">
                                <div class="innovatoryLogo_manufacturer wow fadeInUp">
                                    <div class="sec-head-style mb-30 text-center">
                                        <h3 class="page-heading">{{__('settings.colleagues')}}</h3>
                                    </div>
                                    <div class="content-manufacturer">
                                        <div class="list_manufacturer owl-carousel">
                                            @foreach($customers as $customer)
                                                <div class="item-inner first_item">
                                                    <div class="item">
                                                        @if(App::getLocale() == 'fa')
                                                            <a class="image_hoverwashe" href="#"
                                                               title="{{$customer->title}}">
                                                                <img
                                                                    src="{{{asset("img/admin/customers/$customer->photo")}}}"
                                                                    alt="{{$customer->title}}" width="auto"
                                                                    height="auto"/>
                                                            </a>
                                                        @elseif(App::getLocale() == 'en')
                                                            <a class="image_hoverwashe" href="#"
                                                               title="{{$customer->title_en}}">
                                                                <img
                                                                    src="{{{asset("img/admin/customers/$customer->photo")}}}"
                                                                    alt="{{$customer->title_en}}" width="auto"
                                                                    height="auto"/>
                                                            </a>
                                                        @endif

                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="displayPosition displayPosition6">
                                <div class="container">
                                    <div class="row">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--                        <footer class="page-footer"></footer>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

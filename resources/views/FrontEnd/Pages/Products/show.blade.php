@extends('FrontEnd.Layouts.master')

@if(App::getLocale() == 'fa')
    @section('title','نمایش جزییات')
@elseif(App::getLocale() == 'en')
    @section('title','Product Details')
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
                    "total": {
                        "type": "total",
                        "label": "Total",
                        "amount": 0,
                        "value": "$0.00"
                    },
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
                    "products": {
                        "type": "products",
                        "label": "Subtotal",
                        "amount": 0,
                        "value": "$0.00"
                    },
                    "discounts": null,
                    "shipping": {
                        "type": "shipping",
                        "label": "Shipping",
                        "amount": 0,
                        "value": "Free"
                    },
                    "tax": {
                        "type": "tax",
                        "label": "Taxes",
                        "amount": 0,
                        "value": "$0.00"
                    }
                },
                "products_count": 0,
                "summary_string": "0 items",
                "vouchers": {
                    "allowed": 0,
                    "added": []
                },
                "discounts": [],
                "minimalPurchase": 0,
                "minimalPurchaseRequired": ""
            },
            "currency": {
                "name": "US Dollar",
                "iso_code": "USD",
                "iso_code_num": "840",
                "sign": "$"
            },
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
                "gender": {
                    "type": null,
                    "name": null
                },
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
                    "title": "Aliquam Consequat",
                    "description": "Fusce vel tristique nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut vitae auctor turpis.",
                    "keywords": "",
                    "robots": "index"
                },
                "page_name": "product",
                "body_classes": {
                    "lang-en": true,
                    "lang-rtl": false,
                    "country-US": true,
                    "currency-USD": true,
                    "layout-left-column": true,
                    "page-product": true,
                    "tax-display-disabled": true,
                    "product-id-46": true,
                    "product-Aliquam Consequat": true,
                    "product-id-category-2": true,
                    "product-id-manufacturer-8": true,
                    "product-id-supplier-0": true,
                    "product-available-for-order": true
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
                "current_url": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/home\/46-301-kitchen-egg-separator.html",
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
                    "en-us": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/home\/46-kitchen-egg-separator.html",
                    "de-de": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/de\/startseite\/46-kitchen-egg-separator.html",
                    "fr-fr": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/fr\/accueil\/46-kitchen-egg-separator.html",
                    "es-es": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/es\/inicio\/46-kitchen-egg-separator.html",
                    "it-it": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/it\/home\/46-kitchen-egg-separator.html"
                },
                "theme_assets": "\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/themes\/IT1001\/assets\/",
                "actions": {
                    "logout": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/?mylogout="
                },
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
                "opt_in": {
                    "partner": true
                },
                "quantity_discount": {
                    "type": "discount",
                    "label": "Discount"
                },
                "voucher_enabled": 0,
                "return_enabled": 0
            },
            "field_required": [],
            "breadcrumb": {
                "links": [{
                    "title": "Home",
                    "url": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/"
                }, {
                    "title": "Aliquam Consequat",
                    "url": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/home\/46-301-kitchen-egg-separator.html#\/color-grey"
                }],
                "count": 2
            },
            "link": {
                "protocol_link": "https:\/\/",
                "protocol_content": "https:\/\/"
            },
            "time": 1570653251,
            "static_token": "b37219994338861bc35224966f2f6efd",
            "token": "3d579dc08fa30b63da91ad8e3f21049d"
        };

        var search_url = "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/search";

        var zoom_cursortype = "crosshair";

        var zoom_easing = "1";

        var zoom_fadein = "500";

        var zoom_fadeout = "500";

        var zoom_lenssize = "200";

        var zoom_lenstype = "round";

        var zoom_scroll = false;

        var zoom_tint = false;

        var zoom_tintcolor = "#2a2a2a";

        var zoom_tintopacity = "0.2";

        var zoom_type = "inner";
    </script>
@endsection

@section('fooScript')
    @if(App::getLocale() == 'fa')
        <script type="text/javascript" src="{{asset('FrontEnd/js/RTL/bottom-c357ca95.js')}}"></script>
    @elseif(App::getLocale() == 'en')
        <script type="text/javascript" src="{{asset('FrontEnd/js/LTR/bottom-c357ca95.js')}}"></script>
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
                            <ol itemscope itemtype="#">
                                <li itemprop="itemListElement" itemscope itemtype="{{url('/')}}">
                                    <a itemprop="item" href="{{url('/')}}">
                                        <span itemprop="name">{{__('settings.homeRoute')}}</span> </a>
                                    <meta itemprop="position" content="1">
                                </li>

                                <li itemprop="itemListElement" itemscope itemtype="{{url('products')}}">
                                    <a itemprop="item" href="{{url('products')}}">
                                        <span itemprop="name">{{__('settings.productsRoute')}}</span> </a>
                                    <meta itemprop="position" content="2">
                                </li>

                                <li itemprop="itemListElement" itemscope itemtype="{{action('FrontEnd\ProductController@show' ,[$products->id,$products->title,$products->title_en])}}">
                                    <a itemprop="item" href="{{action('FrontEnd\ProductController@show' ,[$products->id,$products->title,$products->title_en])}}">
                                        <span itemprop="name">
                                             @if(App::getLocale() == 'fa')
                                                {{$products->title}}
                                            @elseif(App::getLocale() == 'en')
                                                {{$products->title_en}}
                                            @endif
                                        </span> </a>
                                    <meta itemprop="position" content="2">
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <section id="main" itemscope itemtype="">
                        <meta itemprop="url" content="">
                        <div class="innovatoryProduct">
                            <div class="row">
                                <div class="col-md-6">
                                    <section class="page-content" id="content">
                                        <!--
                                               <ul class="product-flags">
                                                                     <li class="product-flag new">New</li>
                                                                 </ul>
                                               -->
                                        <div class="images-container">
                                            <div class="product-cover">
                                                <img id="itzoom-products" class="js-qv-product-cover" src="{{asset("img/admin/product/$products->photo1")}}" alt="" title="" style="width:100%;" itemprop="image">
                                                <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
                                                    <i class="material-icons zoom-in">
                                                        <div class="">
                                                            <span class="zoom-">
                                                                <i class="fa fa-search-plus" aria-hidden="true"></i>
                                                            </span>
                                                        </div>
                                                    </i>
                                                </div>
                                            </div>
                                            <div class="js-qv-mask mask">
                                                <ul id="product-gellery" class="product-images owl-carousel js-qv-product-images" style="display: block">
                                                    @if(isset($products->photo4))
                                                        <li class="thumb-container">
                                                            <a href="javascript:void(0)" data-image="{{asset("img/admin/product/$products->photo4")}}" data-zoom-image="{{asset("img/admin/product/$products->photo4")}}">
                                                                <img class="thumb js-thumb  selected " data-image-medium-src="{{asset("img/admin/product/$products->photo4")}}" data-image-large-src="{{asset("img/admin/product/$products->photo4")}}" src="{{asset("img/admin/product/$products->photo4")}}" alt="{{$products->title}}" title="{{$products->title}}" itemprop="image">
                                                            </a>
                                                        </li>
                                                        <li class="thumb-container">
                                                            <a href="javascript:void(0)" data-image="{{asset("img/admin/product/$products->photo3")}}" data-zoom-image="{{asset("img/admin/product/$products->photo3")}}">
                                                                <img class="thumb js-thumb  selected " data-image-medium-src="{{asset("img/admin/product/$products->photo3")}}" data-image-large-src="{{asset("img/admin/product/$products->photo3")}}" src="{{asset("img/admin/product/$products->photo3")}}" alt="{{$products->title}}" title="{{$products->title}}" itemprop="image">
                                                            </a>
                                                        </li>
                                                        <li class="thumb-container">
                                                            <a href="javascript:void(0)" data-image="{{asset("img/admin/product/$products->photo2")}}" data-zoom-image="{{asset("img/admin/product/$products->photo2")}}">
                                                                <img class="thumb js-thumb  selected " data-image-medium-src="{{asset("img/admin/product/$products->photo2")}}" data-image-large-src="{{asset("img/admin/product/$products->photo2")}}" src="{{asset("img/admin/product/$products->photo4")}}" alt="{{$products->title}}" title="{{$products->title}}" itemprop="image">
                                                            </a>
                                                        </li>
                                                        <li class="thumb-container">
                                                            <a href="javascript:void(0)" data-image="{{asset("img/admin/product/$products->photo1")}}" data-zoom-image="{{asset("img/admin/product/$products->photo1")}}">
                                                                <img class="thumb js-thumb  selected " data-image-medium-src="{{asset("img/admin/product/$products->photo1")}}" data-image-large-src="{{asset("img/admin/product/$products->photo1")}}" src="{{asset("img/admin/product/$products->photo4")}}" alt="{{$products->title}}" title="{{$products->title}}" itemprop="image">
                                                            </a>
                                                        </li>
                                                    @endif

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="scroll-box-arrows">
                                            <i class="left" aria-hidden="true"></i>
                                            <i class="right" aria-hidden="true"></i>
                                        </div>
                                    </section>
                                </div>
                                <div class="col-md-6">
                                                                        <div class="innovatoryNextPrev pull-right">
                                                                            <div class="itPrev_product nextPrevProduct pull-left">
                                                                                <a href="45-300-two-tier-fruit-basket.html" class="button button_prev">
                                                                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                                                                </a>
                                                                                <div class="innovatoryContent">
                                                                                    <!-- <h2 class="h2 innovatory-product-title">
                                                                                           <a class="product-name" href="45-300-two-tier-fruit-basket.html" title="Donec Non Est">Donec Non Est</a>

                                                                                           </h2> -->
                                                                                    <a class="product-name" href="45-300-two-tier-fruit-basket.html" title="Donec Non Est">
                                                                                        <img class="img-responsive" src="../../212-cart_default/two-tier-fruit-basket.jpg" itemprop="image" />
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="itNext_product nextPrevProduct pull-left">
                                                                                <a href="47-304-slotted-spoon-stainless-silver.html" class="button button_next">
                                                                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                                                </a>
                                                                                <div class="innovatoryContent">
                                                                                    <!-- <h2 class="h2 innovatory-product-title">
                                                                                           <a class="product-name" href="47-304-slotted-spoon-stainless-silver.html" title="Quisque In Arcu">Quisque In Arcu</a>

                                                                                           </h2> -->
                                                                                    <a class="product-img" href="47-304-slotted-spoon-stainless-silver.html" title="Quisque In Arcu">
                                                                                        <img class="img-responsive" src="../../202-cart_default/slotted-spoon-stainless-silver.jpg" itemprop="image" />
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                    <h1 class="h1" itemprop="name">
                                        @if(App::getLocale() == 'fa')
                                            {{$products->title}}
                                        @elseif(App::getLocale() == 'en')
                                            {{$products->title_en}}
                                        @endif
                                    </h1>
                                    <div class="comments_note">
                                        <div class="star_content">
                                            <div class="Rate">
{{--                                                <span class="stars"> {{round($products->rate ,2)}}</span>--}}
                                                کد کالا:
                                            </div>
                                        </div>
                                        <span class="laberCountReview pull-left"></span>
                                    </div>
                                    <div class="product-prices">
                                        <div class="product-price h5 " itemprop="offers" itemscope itemtype="">
                                            <link itemprop="availability" href=""/>
                                            <meta itemprop="priceCurrency" content="USD">
                                            <div class="current-price">

                                                @if(isset($products->discount))
                                                    <span class="regular-price" style="color: #999;text-decoration: line-through;">{{$products->price}}</span>
                                                    <span class="reduction_percent_display" style="background-color: var(--main-color);">%{{$products->discount}}</span>
                                                    <br>
                                                    <span itemprop="price" class="price" style="margin-top: 10">{{$products->price_after_discount}} {{__('settings.tuman')}}</span>

                                                @else
                                                    <span class="regular-price">{{$products->price}}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="tax-shipping-delivery-label">
                                        </div>
                                    </div>
                                    <div class="product-description-short" id="product-description-short-46" itemprop="description">
                                        <p>
                                            @if(App::getLocale() == 'fa')
                                                {!! \Illuminate\Support\Str::limit($products->description,1000) !!}
                                            @elseif(App::getLocale() == 'en')
                                                {!! \Illuminate\Support\Str::limit($products->description_en,1000) !!}
                                            @endif
                                        </p>
                                    </div>
                                    <div class="product-information">
                                        <div class="product-actions">
                                            <form action="#" method="post">
                                                <input type="hidden" name="token"
                                                       data-id="{{$products->id}}" value="0"
                                                       class="" disabled>
                                                <a class="btn btn-primary button ajax_add_to_cart_button add-to-cart"
                                                   data-button-action="add-to-cart"
                                                   type="submit"
                                                   data-id="{{$products->id}}"
                                                   data-name="@if(App::getLocale() == 'fa'){{$products->title}}@elseif(App::getLocale() == 'en'){{$products->title_en}}@endif"
                                                   data-max="{{$products->max}}"
                                                   data-price="{{$products->price}}"
                                                   data-pic="{{asset("img/admin/product/$products->photo1")}}"
                                                   data-min="1"
                                                   data-toggle="tooltip"
                                                   title="{{__('settings.addtocard')}}">
                                                    {{__('settings.addtocard')}}
                                                </a>
{{--                                                <a class="cart-btn-success alert alert-success">{{__('settings.inCart')}}</a>--}}
                                            </form>
                                                                                        <form action="../cart.html" method="post" id="add-to-cart-or-refresh">
                                                                                            <input type="hidden" name="token" value="b37219994338861bc35224966f2f6efd">
                                                                                            <input type="hidden" name="id_product" value="46" id="product_page_product_id">
                                                                                            <input type="hidden" name="id_customization" value="0" id="product_customization_id">
                                                                                            <div class="product-variants">
                                                                                                <script>
                                                                                                    $(document).ready(function () {
                                                                                                        var owl = $(".quickview .product-images");
                                                                                                        owl.owlCarousel({
                                                                                                            nav: true,
                                                                                                            autoplay: false,
                                                                                                            dots: false,
                                                                                                            navText: ["<i class='left'></i>", "<i class='right'></i>"],
                                                                                                            responsive: {
                                                                                                                0: {
                                                                                                                    items: 2
                                                                                                                },
                                                                                                                480: {
                                                                                                                    items: 2
                                                                                                                },
                                                                                                                544: {
                                                                                                                    items: 3
                                                                                                                },
                                                                                                                1500: {
                                                                                                                    items: 3
                                                                                                                }
                                                                                                            }
                                                                                                        });
                                                                                                    });
                                                                                                </script>
                                                                                                <div class="clearfix product-variants-item">
                                                                                                    <span class="control-label">رنگ</span>
                                                                                                    <ul id="group_2">
                                                                                                        <li class="pull-xs-left input-container">
                                                                                                            <input class="input-color" type="radio" data-product-attribute="2" name="group[2]" value="5" checked="checked">
                                                                                                            <span class="color" style="background-color: #AAB2BD"><span class="sr-only">Grey</span></span>
                                                                                                        </li>
                                                                                                        <li class="pull-xs-left input-container">
                                                                                                            <input class="input-color" type="radio" data-product-attribute="2" name="group[2]" value="8">
                                                                                                            <span class="color" style="background-color: #ffffff"><span class="sr-only">White</span></span>
                                                                                                        </li>
                                                                                                        <li class="pull-xs-left input-container">
                                                                                                            <input class="input-color" type="radio" data-product-attribute="2" name="group[2]" value="11">
                                                                                                            <span class="color" style="background-color: #434A54"><span class="sr-only">Black</span></span>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>
                                                                                            <section class="product-discounts">
                                                                                            </section>
                                                                                            <div class="product-add-to-cart">
                                                                                                <span class="control-label">تعداد</span>
                                                                                                <div class="product-quantity">
                                                                                                    <div class="qty">
                                                                                                        <input type="text" name="qty" id="quantity_wanted" value="1" class="input-group" min="1">
                                                                                                    </div>
                                                                                                    <div class="add">
                                                                                                        <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit">
                                                                                                                                                                             <i class="material-icons shopping-cart">&#xE547;</i>
                                                                                                            {{__('settings.addToCart')}}
                                                                                                        </button>

                                                                                                        <form action="#" method="post">
                                                                                                            <input type="hidden" name="token"
                                                                                                                   data-id="{{$products->id}}" value="0"
                                                                                                                   class="" disabled>
                                                                                                            <a class="btn btn-primary button ajax_add_to_cart_button add-to-cart"
                                                                                                               data-button-action="add-to-cart"
                                                                                                               type="submit"
                                                                                                               data-id="{{$products->id}}"
                                                                                                               data-name="{{$products->title}}"
                                                                                                               data-max="{{$products->max}}"
                                                                                                               data-price="{{$products->price}}"
                                                                                                               data-min="1"
                                                                                                               data-toggle="tooltip"
                                                                                                               title="{{__('settings.addtocard')}}">
                                                                                                                {{__('settings.addtocard')}}
                                                                                                            </a>
                                                                                                            <a class="cart-btn-success alert alert-success">در سبد خرید</a>
                                                                                                        </form>

                                                                                                    </div>
                                                                                                    <span id="product-availability">
                                                                                            </span>
                                                                                                </div>
                                                                                                <div class="clearfix"></div>
                                                                                                <p class="product-minimal-quantity">
                                                                                                </p>
                                                                                            </div>

                                                                                            <div class="innovatorySocial-sharing innovatory-media-body">  <span class="labeTitle pull-left">Share</span>
                                                                                            <ul class="pull-left">
                                                                                                <li class="innovatoryfacebook pull-left icon-gray">  <a href="http://www.facebook.com/sharer.php?u=https://innovatorythemes.com/prestashop/INNO02/INNO1001_Cucina/IT01/en/home/46-kitchen-egg-separator.html" title="Share" target="_blank">
                                                                                                                                                            <i class="fa fa-facebook"></i></a>  </li>
                                                                                                <li class="innovatorytwitter pull-left icon-gray"><a href="https://twitter.com/intent/tweet?text=Aliquam%20Consequat%20https://innovatorythemes.com/prestashop/INNO02/INNO1001_Cucina/IT01/en/home/46-kitchen-egg-separator.html" title="Tweet" target="_blank">
                                                                                                                                                            <i class="fa fa-twitter"></i></a>  </li>
                                                                                                <li class="innovatorygoogleplus pull-left icon-gray"><a href="https://plus.google.com/share?url=https://innovatorythemes.com/prestashop/INNO02/INNO1001_Cucina/IT01/en/home/46-kitchen-egg-separator.html" title="Google+" target="_blank">
                                                                                                                                                            <i class="fa fa-google-plus"></i></a>  </li>
                                                                                                <li class="innovatorypinterest pull-left icon-gray"><a href="http://www.pinterest.com/pin/create/button/?media=https://innovatorythemes.com/prestashop/INNO02/INNO1001_Cucina/IT01/207/kitchen-egg-separator.jpg&amp;url=https://innovatorythemes.com/prestashop/INNO02/INNO1001_Cucina/IT01/en/home/46-kitchen-egg-separator.html" title="Pinterest" target="_blank">
                                                                                                                                                            <i class="fa fa-pinterest-p"></i></a>  </li>  </ul>  </div>
                                                                                            <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="Refresh">
                                                                                        </form>
                                        </div>
                                        <div id="block-reassurance">
                                            <ul>
                                                <li>
                                                    <div class="block-reassurance-item">
                                                        <img src="{{asset('FrontEnd/images/settings/1.png')}}" alt="Security policy (edit with Customer reassurance module)">
                                                        <span class="h6">{{__('settings.showProductSell1')}}</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-reassurance-item">
                                                        <img src="{{asset('FrontEnd/images/settings/2.png')}}" alt="Delivery policy (edit with Customer reassurance module)">
                                                        <span class="h6">{{__('settings.showProductSell2')}}</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="block-reassurance-item">
                                                        <img src="{{asset('FrontEnd/images/settings/3.png')}}" alt="Return policy (edit with Customer reassurance module)">
                                                        <span class="h6">{{__('settings.showProductSell3')}}</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabs innovatoryTabs">
                            <div class="nav nav-tabs">
                                <ul>
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#description">{{__('settings.description')}}</a>
                                    </li>
                                    {{--                                    <li class="nav-item">--}}
                                    {{--                                        <a class="nav-link" data-toggle="tab" href="#product-details">جزییات محصول</a>--}}
                                    {{--                                    </li>--}}
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#productcomment">{{__('settings.comments')}}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="tab-content">
                                <div class="tab-pane fade in active" id="description">
                                    <div class="product-description">
                                        <p>
                                            @if(App::getLocale() == 'fa')
                                                {!! $products->description !!}
                                            @elseif(App::getLocale() == 'en')
                                                {!! $products->description_en !!}
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="product-details" data-product="">
                                    <div class="product-manufacturer">
                                        <a href=""> <img src="" class="img img-thumbnail manufacturer-logo"/> </a>
                                    </div>
                                    <div class="product-reference">
                                        <label class="label">Reference </label> <span itemprop="sku"></span>
                                    </div>
                                    <div class="product-quantities">
                                        <label class="label">In stock</label> <span>600 Items</span>
                                    </div>
                                    <div class="product-out-of-stock">
                                    </div>
                                    <section class="product-features">
                                        <h3 class="h6">Data sheet</h3>
                                        <dl class="data-sheet">
                                            <dt class="name">Compositions</dt>
                                            <dd class="value">Elastane</dd>
                                            <dt class="name">Color</dt>
                                            <dd class="value">White</dd>
                                        </dl>
                                    </section>
                                    <!--
                                           <section class="product-features">
                                           <h3 class="h6">Specific References</h3>
                                           <dl class="data-sheet">
                                                       </dl>
                                           </section>
                                           -->
                                </div>
                                <div class="tab-pane fade in" id="productcomment">
                                    <script type="text/javascript">
                                        var productcomments_controller_url = 'https://innovatorythemes.com/prestashop/INNO02/INNO1001_Cucina/IT01/en/module/productcomments/default';
                                        var confirm_report_message = 'Are you sure that you want to report this comment?';
                                        var secure_key = 'd445cc052e730c800fc8e0396424a582';
                                        var productcomments_url_rewrite = '1';
                                        var productcomment_added = 'Your comment has been added!';
                                        var productcomment_added_moderation = 'Thanks for your Review. It will be available once approved by a moderator.';
                                        var productcomment_title = 'New comment';
                                        var productcomment_ok = 'OK';
                                        var moderation_active = 1;
                                    </script>
                                    <div id="productCommentsBlock">
                                        <div class="innovatorytabs">
                                            <div class="innovatoryButtonReviews clearfix">
                                                <a class="open-comment-form btn btn-primary" href="#new_comment_form">Write your review</a>
                                            </div>
                                            <div id="new_comment_form_ok" class="alert alert-success" style="display:none;padding:15px 25px"></div>
                                            <div id="product_comments_block_tab">
                                                <div class="comment clearfix">
                                                    <div class="comment_author">
                                                        <div class="star_content clearfix">
                                                            <div class="Rate">
{{--                                                                <span class="stars"> {{round($products->rate ,2)}}</span>--}}
                                                            </div>
                                                        </div>
                                                        <div class="comment_author_infos">| <span>Bob Frapples</span>
                                                            <em>03/16/2019</em>
                                                        </div>
                                                    </div>
                                                    <div class="comment_details">
                                                        <h4 class="title_block"> Spoons to stir the cooking items</h4>
                                                        <p>The coating is so superb. After you are finished cooking and you empty the kadhai, no one can tell that it was even used.&lt;br /&gt; DO NOT USE Steel scrub to clean it.&lt;br /&gt; DO NOT USE steel Spoons to stir the cooking items. Use the wooden stick, or silicon/rubber based to cook.
                                                        </p>
                                                        <ul>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Fancybox -->
                                        <div style="display:none">
                                            <div id="new_comment_form">
                                                <form id="id_new_comment_form" action="#">
                                                    <h2 class="title">Write your review</h2>
                                                    <div class="product clearfix">
                                                        <div class="product_desc">
                                                            <p class="product_name"><strong>Aliquam Consequat</strong>
                                                            </p>
                                                            <p>Fusce vel tristique nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut vitae auctor turpis.</p>
                                                        </div>
                                                    </div>
                                                    <div class="new_comment_form_content">
                                                        <h2>Write your review</h2>
                                                        <div id="new_comment_form_error" class="error" style="display:none;padding:15px 25px">
                                                            <ul></ul>
                                                        </div>
                                                        <ul id="criterions_list">
                                                            <li>
                                                                <label>Quality</label>
                                                                <div class="star_content">
                                                                    <input class="star" type="radio" name="criterion[1]" value="1"/>
                                                                    <input class="star" type="radio" name="criterion[1]" value="2"/>
                                                                    <input class="star" type="radio" name="criterion[1]" value="3"/>
                                                                    <input class="star" type="radio" name="criterion[1]" value="4"/>
                                                                    <input class="star" type="radio" name="criterion[1]" value="5" checked="checked"/>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </li>
                                                        </ul>
                                                        <label for="comment_title">Title for your review<sup class="required">*</sup></label>
                                                        <input id="comment_title" name="title" type="text" value=""/>
                                                        <label for="content">Your review<sup class="required">*</sup></label>
                                                        <textarea id="content" name="content"></textarea>
                                                        <label>Your name<sup class="required">*</sup></label>
                                                        <input id="commentCustomerName" name="customer_name" type="text" value=""/>
                                                        <div id="new_comment_form_footer">
                                                            <input id="id_product_comment_send" name="id_product" type="hidden" value='46'/>
                                                            <p class="fl required"><sup>*</sup> Required fields</p>
                                                            <p class="fr">
                                                                <button class="btn btn-primary" id="submitNewMessage" name="submitMessage" type="submit">Send</button>&nbsp; or&nbsp;
                                                                <a href="#" class="btn btn-primary" onclick="$.fancybox.close();">Cancel</a>
                                                            </p>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                    </div>
                                                </form>
                                                <!-- /end new_comment_form_content -->
                                            </div>
                                        </div>
                                        <!-- End fancybox -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section>
                            <div class="Categoryproducts innovatoryProductGrid">
                                <div class="sec-head-style">
                                    <h3 class="page-heading">
                                        {{__('settings.similarProducts')}}
                                    </h3>
                                </div>
                                <div class="innovatoryCate row">
                                    <div class="innovatoryCategoryproducts owl-carousel">
                                        <div class="item-inner  ajax_block_product">

                                            @foreach($SimilarProducts as $SimilarProduct)

                                                <div class="item">
                                                    <article class="product-miniature js-product-miniature" data-id-product="{{$SimilarProduct->id}}" data-id-product-attribute="{{$SimilarProduct->id}}" itemscope itemtype="">
                                                        <div class="innovatoryProduct-container">
                                                            <div class="innovatoryProduct-image">
                                                                <a href="{{action('FrontEnd\ProductController@show' ,[$SimilarProduct->id,$SimilarProduct->title,$SimilarProduct->title_en])}}" class="thumbnail product-thumbnail">
                                                            <span class="cover_image">
                                                   <img src="{{asset("img/admin/product/$SimilarProduct->photo1")}}" data-full-size-image-url="#" alt="{{$SimilarProduct->title_en}}" width="auto" height="auto"/>
                                                   </span>
                                                                    <span class="hover_image"><img src="" data-full-size-image-url="#" alt="" width="auto" height="auto"/>
                                                   </span> </a>

                                                                @if($SimilarProduct->category == 1)
                                                                    <span class="innovatoryNew-label">{{__('settings.newest')}}</span>
                                                                @elseif($SimilarProduct->category == 2)
                                                                    <span class="innovatoryNew-label">{{__('settings.bestSell')}}</span>
                                                                @elseif($SimilarProduct->category == 3)
                                                                    <span class="innovatoryNew-label">{{__('settings.Special')}}</span>
                                                                @endif
                                                                @if(isset($SimilarProduct->discount))
                                                                    <span class="reduction_percent_display innovatorySale-label">%{{$SimilarProduct->discount}}</span>
                                                                @endif

                                                            </div>
                                                            <div class="innovatory-product-description">
                                                                <div class="comments_note">
                                                                    <div class="star_content">
                                                                        <div class="Rate">
                                                                            <span class="stars"> {{round($SimilarProduct->rate ,2)}}</span>
                                                                        </div>
                                                                    </div>
                                                                    <span class="laberCountReview pull-left">
                                                                            @if(App::getLocale() == 'fa')
                                                                            {{$SimilarProduct->title}}
                                                                        @elseif(App::getLocale() == 'en')
                                                                            {{$SimilarProduct->title_en}}
                                                                        @endif
                                                                    </span>
                                                                </div>
                                                                <h2 class="h2 productName" itemprop="name">
                                                                    <a href="#">
                                                                        @if(App::getLocale() == 'fa')
                                                                            {{$SimilarProduct->title}}
                                                                        @elseif(App::getLocale() == 'en')
                                                                            {{$SimilarProduct->title_en}}
                                                                        @endif
                                                                    </a>
                                                                </h2>
                                                                <div class="innovatory-product-price-and-shipping">
                                                                    @if(isset($SimilarProduct->discount))
                                                                        <span class="old-price regular-price">{{$SimilarProduct->price}}</span>
                                                                        <span itemprop="price" class="price">{{$SimilarProduct->price_after_discount}}</span>
                                                                    @else
                                                                        <span class="regular-price">{{$SimilarProduct->price}}</span>
                                                                    @endif
                                                                </div>
                                                                <div class="innovatoryCart innovatoryItem hidden-md-down">
                                                                    <form action="#" method="post">
                                                                        <input type="hidden" name="token"
                                                                               data-id="{{$SimilarProduct->id}}" value="0"
                                                                               class="" disabled>
                                                                        <a class="cart-btn button ajax_add_to_cart_button add-to-cart"
                                                                           data-button-action="add-to-cart"
                                                                           type="submit"
                                                                           data-id="{{$SimilarProduct->id}}"
                                                                           data-name="@if(App::getLocale() == 'fa'){{$SimilarProduct->title}}@elseif(App::getLocale() == 'en'){{$SimilarProduct->title_en}}@endif"
                                                                           data-max="{{$SimilarProduct->max}}"
                                                                           data-price="{{$SimilarProduct->price}}"
                                                                           data-pic="{{asset("img/admin/product/$SimilarProduct->photo1")}}"
                                                                           data-min="1"
                                                                           data-toggle="tooltip"
                                                                           title="{{__('settings.addtocard')}}">
                                                                            {{__('settings.addtocard')}}
                                                                        </a>
{{--                                                                        <a class="cart-btn-success alert alert-success">{{__('settings.inCart')}}</a>--}}
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>

                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>
                        <script type="text/javascript">
                            $(document).ready(function () {
                                var owl = $(".innovatoryCategoryproducts");
                                owl.owlCarousel({
                                    loop: false,
                                    nav: true,
                                    dots: false,
                                    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                                    responsive: {
                                        0: {
                                            items: 2
                                        },
                                        480: {
                                            items: 2
                                        },
                                        768: {
                                            items: 3
                                        },
                                        992: {
                                            items: 3
                                        },
                                        1200: {
                                            items: 4
                                        }
                                    }
                                });
                            });
                        </script>
                        <div class="modal fade js-product-images-modal" id="product-modal">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <figure>
                                            <img class="js-modal-product-cover product-cover-modal" width="800" src="" alt="" title="" itemprop="image">
                                            <figcaption class="image-caption">
                                                <div id="product-description-short" itemprop="description">
                                                    <p>Fusce vel tristique nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut vitae auctor turpis.</p>
                                                </div>
                                            </figcaption>
                                        </figure>
                                        <aside id="thumbnails" class="thumbnails js-thumbnails text-xs-center">
                                            <div class="js-modal-mask mask  nomargin ">
                                                <ul class="product-images js-modal-product-images">
                                                    <li class="thumb-container">
                                                        <img data-image-large-src="../../207-large_default/kitchen-egg-separator.jpg" class="thumb js-modal-thumb" src="../../207-medium_default/kitchen-egg-separator.jpg" alt="" title="" width="350" itemprop="image">
                                                    </li>
                                                    <li class="thumb-container">
                                                        <img data-image-large-src="../../208-large_default/kitchen-egg-separator.jpg" class="thumb js-modal-thumb" src="../../208-medium_default/kitchen-egg-separator.jpg" alt="" title="" width="350" itemprop="image">
                                                    </li>
                                                    <li class="thumb-container">
                                                        <img data-image-large-src="../../209-large_default/kitchen-egg-separator.jpg" class="thumb js-modal-thumb" src="../../209-medium_default/kitchen-egg-separator.jpg" alt="" title="" width="350" itemprop="image">
                                                    </li>
                                                    <li class="thumb-container">
                                                        <img data-image-large-src="../../210-large_default/kitchen-egg-separator.jpg" class="thumb js-modal-thumb" src="../../210-medium_default/kitchen-egg-separator.jpg" alt="" title="" width="350" itemprop="image">
                                                    </li>
                                                    <li class="thumb-container">
                                                        <img data-image-large-src="../../211-large_default/kitchen-egg-separator.jpg" class="thumb js-modal-thumb" src="../../211-medium_default/kitchen-egg-separator.jpg" alt="" title="" width="350" itemprop="image">
                                                    </li>
                                                </ul>
                                            </div>
                                        </aside>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                        <footer class="page-footer">
                            <!-- Footer content -->
                        </footer>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('FrontEnd.Layouts.master')

@if(App::getLocale() == 'fa')
    @section('title','اخبار')
@elseif(App::getLocale() == 'en')
    @section('title','News')
@endif

@section('meta')
@endsection

@section('style')
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
        <script type="text/javascript" src="{{asset('FrontEnd/js/RTL/bottom-ff95c795-events.js')}}"></script>
    @elseif(App::getLocale() == 'en')
        <script type="text/javascript" src="{{asset('FrontEnd/js/LTR/bottom-ff95c795-events.js')}}"></script>
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
                <div id="left-column" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                    <div class="innovatoryBreadcrumb">
                        <nav data-depth="3" class="breadcrumb">
                            <ol itemscope itemtype="">
                                <li itemprop="itemListElement" itemscope itemtype="{{url('/')}}">
                                    <a itemprop="item" href="{{url('/')}}">
                                        <span itemprop="name">{{__('settings.homeRoute')}}</span> </a>
                                    <meta itemprop="position" content="1">
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="">
                                    <a itemprop="item" href="{{url('/events')}}">
                                        <span itemprop="name">{{__('settings.newsRoute')}}</span> </a>
                                    <meta itemprop="position" content="2">
                                </li>

                            </ol>
                        </nav>
                    </div>
                </div>

                <div id="left-column" class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                    <div class="offer-banner-sld-sec product-column-style" style="background-image: url({{asset("img/admin/setting/$menuPic->photo6")}})">
                        {{--                        <div class="title_block">--}}
                        {{--                            <h3>تخفیف ویژه</h3>--}}
                        {{--                        </div>--}}
                        <style>
                            .owl-dots {
                                display: none !important;
                            }
                        </style>
                        <div class="offer-banner-sld-wrap">
                            <div class="offer-banner-sld owl-carousel">
                                <div class="offer-banner-col text-center">
                                    {{--                                    <h5>اخبار آیشیل</h5>--}}
                                    {{--                                    <h3>This week Only</h3>--}}
                                    {{--                                    <p>Harry Up For More Discount</p>--}}
                                    {{--                                    <h4>Up To <span class="offer-red">70%</span> Offer</h4>--}}
                                </div>
                                <div class="offer-banner-col text-center">
                                    <h5>Cookware</h5>
                                    <h3>Best price sale</h3>
                                    <p>Harry Up For More Discount</p>
                                    <h4>Up To <span class="offer-red">20%</span> Offer</h4>
                                </div>
                                <div class="offer-banner-col text-center">
                                    <h5>Kitchen Pan</h5>
                                    <h3>All in one sale</h3>
                                    <p>Harry Up For More Discount</p>
                                    <h4>Up To <span class="offer-red">50%</span> Offer</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Static block module -->
                    <div class="it-special-products product-column-style" data-items="1" data-speed="1000"
                         data-autoplay="0" data-time="3000" data-arrow="1" data-pagination="0" data-move="1"
                         data-pausehover="0" data-md="1" data-sm="1" data-xs="1" data-xxs="1">
                        <div class="itProductList itcolumn">
                            <div class="title_block">
                                <h3>{{__('settings.production')}}</h3>
                            </div>
                            <div class="block-content">
                                <div class="itProductFilter row">
                                    <div class="special-item owl-carousel">
                                        <div class="item-product">
                                            @foreach($latestEvents as $latestEvent)
                                                <div class="item">
                                                    <div class="innovatoryProductsList product-miniature js-product-miniature" data-id-product="{{$latestEvent->id}}" data-id-product-attribute="{{$latestEvent->id}}">
                                                        <div class="innovatory-thumbnail-container">
                                                            <div class="row no-margin">
                                                                <div class="pull-left product_img">
                                                                    <a href="{{action('FrontEnd\ProductController@show' ,[$latestEvent->id,$latestEvent->title,$latestEvent->title_en])}}" class="thumbnail product-thumbnail"><img
                                                                            width="auto"
                                                                            height="auto"
                                                                            src="{{asset("img/admin/event/$latestEvent->photo1")}}"
                                                                            alt=""
                                                                            data-full-size-image-url=""
                                                                            width="auto"
                                                                            height="auto"></a>
                                                                </div>
                                                                <div class="innovatoryMedia-body">
                                                                    <div class="innovatory-product-description">
                                                                        <h2 class="h2 productName" itemprop="name">
                                                                            <a href="{{action('FrontEnd\ProductController@show' ,[$latestEvent->id,$latestEvent->title,$latestEvent->title_en])}}">
                                                                                @if(App::getLocale() == 'fa')
                                                                                    {{$latestEvent->title}}
                                                                                @elseif(App::getLocale() == 'en')
                                                                                    {{$latestEvent->title_en}}
                                                                                @endif
                                                                            </a>
                                                                        </h2>
                                                                        <div class="innovatory-product-price-and-shipping">
                                                                            {{--                                                                        <span itemprop="price" class="price">{{$latestEvent->cteated_at_fa }}</span>--}}
                                                                            <span class="reduction_percent_display">{{$latestEvent->cteated_at_fa }}</span>
                                                                            {{--                                                                        <span class="regular-price">$155.80</span>--}}
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
                                <div class="row">

                                </div>
                            </div>

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
                                            <h3 class="page-heading">{{__('settings.menu5')}}</h3>
                                        </div>


                                        <div class="row">
                                            <div class="sdsblog-box-content block_content home_blog_post">
                                                @foreach($events as $event)
                                                    <div style="margin-bottom: 20px" class="item-inner col-lg-4 col-xl-4 col-md-4 col-sm-6 col-xs-12 last-in-line first-item-of-tablet-line last-item-of-mobile-line">
                                                        <div class="item sds_blog_post">
                                                            <div class="blog_post">
                                                                <div class="blog_post_content">
                                                                    <div class="news_module_image_holder post_thumbnail">
                                                                        <a class="thumbnail" href="{{action('FrontEnd\EventController@show' ,[$event->id,$event->title,$event->title_en])}}">
                                                                            <img class="replace-2x img-responsive feat_img_small" alt="{{$event->title}}" src="{{asset("img/admin/event/$event->photo1")}}" width="auto" height="auto"/>
                                                                        </a>
{{--                                                                        <span class="blogicons">--}}
{{--                                                                        <a title="Click to view Full Image" href="{{asset("img/admin/event/$event->photo1")}}" rel="blog_group" class="icon grouped_elements zoom ti-search"></a>--}}
{{--                                                                        <a title="Click to view Read More" href="i{{action('FrontEnd\EventController@show' ,[$event->id,$event->title,$event->title_en])}}" class="icon readmore ti-link"></a>--}}
{{--                                                                        </span>--}}
                                                                    </div>
                                                                    <div class="blog_content">
                                                                        <div class="blog_inner">
                                                                       <span class="blog_date">

                                                                           <span class="day_date">{{$event->cteated_at_fa}}</span>
{{--                                                                           <span class="day_month">Mar / </span>--}}
                                                                           {{--                                                                           <span class="day_year">2019</span>--}}
                                                                       </span>
                                                                            <h4 class="sds_post_title">
                                                                                <a href="{{action('FrontEnd\EventController@show' ,[$event->id,$event->title,$event->title_en])}}">
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
                                                                                        {{\Illuminate\Support\Str::limit($event->text, 40)}}
                                                                                    @elseif(App::getLocale() == 'en')
                                                                                        {{\Illuminate\Support\Str::limit($event->text_en, 40)}}
                                                                                    @endif
                                                                                </p>
                                                                            </div>
                                                                            <a href="{{action('FrontEnd\EventController@show' ,[$event->id,$event->title,$event->title_en])}}" class="btn btn-primary">{{__('settings.Continues')}}</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                        </div>
                                    </div>
                                        {{ $events->links('FrontEnd.Includes.pagination') }}
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
                    <footer class="page-footer"></footer>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection


@extends('FrontEnd.Layouts.master')


@if(App::getLocale() == 'fa')
    @section('title','تماس با ما')
@elseif(App::getLocale() == 'en')
    @section('title','Contact Us')
@endif

@section('meta')

@endsection

@section('style')
@endsection

@section('headScript')
    <script type="text/javascript">
        var baseDir = "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/";

        var customized_map = null;

        var defaultLat = "20.7711247";

        var defaultLong = "73.7287618";

        var ggApiKey = "AIzaSyDkA-XBOOnDXlvjbNXzmSxk7xUybAzqQPo";

        var id_lang = 1;

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
                    "title": "Contact us",
                    "description": "Use our form to contact us",
                    "keywords": "",
                    "robots": "index"
                },
                "page_name": "contact",
                "body_classes": {
                    "lang-en": true,
                    "lang-rtl": false,
                    "country-US": true,
                    "currency-USD": true,
                    "layout-left-column": true,
                    "page-contact": true,
                    "tax-display-disabled": true
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
                "current_url": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/contact-us",
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
                    "en-us": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/contact-us",
                    "de-de": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/de\/kontakt",
                    "fr-fr": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/fr\/nous-contacter",
                    "es-es": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/es\/contactenos",
                    "it-it": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/it\/contattaci"
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
                    "title": "Contact us",
                    "url": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/contact-us"
                }],
                "count": 2
            },
            "link": {
                "protocol_link": "https:\/\/",
                "protocol_content": "https:\/\/"
            },
            "time": 1570653230,
            "static_token": "b37219994338861bc35224966f2f6efd",
            "token": "3d579dc08fa30b63da91ad8e3f21049d"
        };

        var search_url = "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/search";

        var storeGGmapCall = "\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/modules\/storeggmap\/storeggmapCall.php";

        var urlIcon = null;
    </script>
@endsection

@section('fooScript')
    @if(App::getLocale() == 'fa')
        <script type="text/javascript" src="{{asset('FrontEnd/js/RTL/bottom-317da995.js')}}"></script>
    @elseif(App::getLocale() == 'en')
        <script type="text/javascript" src="{{asset('FrontEnd/js/LTR/bottom-317da995.js')}}"></script>
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

                <div id="left-column">
                    <div class="contact-rich">
                        <!-- <h4>Store information</h4> -->
                        <div class="block">
                            <div class="block-inner">
                                <div class="icon"><i class="ti-mobile"></i></div>
                                <div class="data">
                                    <h4 class="block-title">{{__('settings.contactPhone')}}</h4>
                                    <a href="tel:+ 0123456789">
                                        @if(App::getLocale() == 'fa')
                                            {{$contacts->title1}}
                                        @elseif(App::getLocale() == 'en')
                                            {{$contacts->title1_en}}
                                        @endif
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="block">
                            <div class="block-inner">
                                <div class="icon"><i class="ti-location-pin"></i></div>
                                <div class="data">
                                    <h4 class="block-title">{{__('settings.contactAddress1')}}</h4>
{{--                                   اراک--}}
{{--                                    <br />خیابان قائم مقام٫ آیت الله غفاری--}}
{{--                                    <br />چهار راه سعیدی--}}
                                    @if(App::getLocale() == 'fa')
                                        {{$contacts->title2}}
                                    @elseif(App::getLocale() == 'en')
                                        {{$contacts->title2_en}}
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="block">
                            <div class="block-inner">
                                <div class="icon"><i class="ti-location-pin"></i></div>
                                <div class="data">
                                    <h4 class="block-title">{{__('settings.contactAddress2')}}</h4>
{{--                                    اراک--}}
{{--                                    <br />خیابان قائم مقام٫ آیت الله غفاری--}}
{{--                                    <br />چهار راه سعیدی--}}
                                    @if(App::getLocale() == 'fa')
                                        {{$contacts->title3}}
                                    @elseif(App::getLocale() == 'en')
                                        {{$contacts->title3_en}}
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="block">
                            <div class="block-inner">
                                <div class="icon"><i class="ti-email"></i></div>
                                <div class="data email">
                                    <h4 class="block-title">{{__('settings.contactMail')}}</h4>
                                    <a href="mailto:innovatorythemes@gmail.com">
                                        @if(App::getLocale() == 'fa')
                                            {{$contacts->title4}}
                                        @elseif(App::getLocale() == 'en')
                                            {{$contacts->title4}}
                                        @endif
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

{{--                <div id="content-wrapper" class="left-column col-xs-12 col-md-12">--}}
{{--                    <div class="innovatoryBreadcrumb">--}}

{{--                        <nav data-depth="2" class="breadcrumb">--}}
{{--                            <ol itemscope itemtype="http://schema.org/BreadcrumbList">--}}

{{--                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">--}}
{{--                                    <a itemprop="item" href="index.html">--}}
{{--                                        <span itemprop="name">خان</span>--}}
{{--                                    </a>--}}
{{--                                    <meta itemprop="position" content="1">--}}
{{--                                </li>--}}

{{--                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">--}}
{{--                                    <a itemprop="item" href="contact-us.html">--}}
{{--                                        <span itemprop="name">Contact us</span>--}}
{{--                                    </a>--}}
{{--                                    <meta itemprop="position" content="2">--}}
{{--                                </li>--}}

{{--                            </ol>--}}
{{--                        </nav>--}}
{{--                    </div>--}}

                    <div id="main">

                        <section id="content" class="page-content card card-block">

                            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6478.4292005400885!2d51.4386567!3d35.7209404!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1586088491273!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </section>
{{--                        <section id="content" class="page-content card card-block">--}}

{{--                            <div class="sec-heading mb-30">--}}
{{--                                <h3>{{__('settings.contactForm')}}</h3>--}}
{{--                            </div>--}}
{{--                            <section class="contact-form">--}}
{{--                                <form action="contact-us.html" method="post" enctype="multipart/form-data">--}}

{{--                                    <section class="form-fields row">--}}

{{--                                        <div class="form-group col-sm-6">--}}
{{--                                            <label class="form-control-label">{{__('settings.contactSubject')}}</label>--}}
{{--                                            <select name="id_contact" class="form-control form-control-select">--}}
{{--                                                <option value="2">{{__('settings.contactSelect')}}</option>--}}
{{--                                                <option value="1">Webmaster</option>--}}
{{--                                            </select>--}}
{{--                                        </div>--}}

{{--                                        <div class="form-group col-sm-6">--}}
{{--                                            <label class="form-control-label">{{__('settings.contactMail')}}</label>--}}
{{--                                            <input class="form-control" name="from" type="name" value="" placeholder="your@email.com">--}}
{{--                                        </div>--}}


{{--                                        <div class="form-group col-sm-6 floatForm">--}}
{{--                                            <label class="form-control-label">{{__('settings.contactFile')}}</label>--}}
{{--                                            <input type="file" name="fileUpload" class="filestyle" data-buttonText="{{__('settings.contactChoose')}}">--}}
{{--                                            --}}{{--                                            <span class="form-control-comment">optional</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group col-sm-6">--}}
{{--                                            <label class="form-control-label">{{__('settings.contactNumber')}}</label>--}}
{{--                                            <input class="form-control" name="from" type="email" value="" placeholder="09129283406">--}}
{{--                                        </div>--}}


{{--                                        <div class="form-group col-sm-12">--}}
{{--                                            <label class="form-control-label">{{__('settings.contactMessage')}}</label>--}}
{{--                                            <textarea class="form-control" name="message" placeholder="{{__('settings.contactMessageDescription')}}" rows="3"></textarea>--}}
{{--                                        </div>--}}

{{--                                        <div class="form-group">--}}
{{--                                            <div class="offset-md-3">--}}

{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                    </section>--}}

{{--                                    <footer class="form-footer text-center">--}}
{{--                                        <style>--}}
{{--                                            input[name=url] {--}}
{{--                                                display: none !important;--}}
{{--                                            }--}}
{{--                                        </style>--}}
{{--                                        <input type="text" name="url" value="" />--}}
{{--                                        <input type="hidden" name="token" value="" />--}}
{{--                                        <input class="btn btn-primary" type="submit" name="submitMessage" value="{{__('settings.contactSend')}}">--}}
{{--                                    </footer>--}}

{{--                                </form>--}}
{{--                            </section>--}}

{{--                            <section id="map-style">--}}
{{--                                <div id="storemap"></div>--}}
{{--                            </section>--}}

{{--                        </section>--}}

                        <footer class="page-footer">
                            <!-- Footer content -->
                        </footer>
                    </div>

                </div>

            </div>
{{--        </div>--}}

    </section>
@endsection

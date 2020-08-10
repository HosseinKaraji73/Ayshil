@extends('FrontEnd.Layouts.master')


@if(App::getLocale() == 'fa')
    @section('title','فروشگاه')
@elseif(App::getLocale() == 'en')
    @section('title','Product')
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
                    "total": {"type": "total", "label": "Total", "amount": 0, "value": "\u20ac0.00"},
                    "total_including_tax": {
                        "type": "total",
                        "label": "Total (tax incl.)",
                        "amount": 0,
                        "value": "\u20ac0.00"
                    },
                    "total_excluding_tax": {
                        "type": "total",
                        "label": "Total (tax excl.)",
                        "amount": 0,
                        "value": "\u20ac0.00"
                    }
                },
                "subtotals": {
                    "products": {"type": "products", "label": "Subtotal", "amount": 0, "value": "\u20ac0.00"},
                    "discounts": null,
                    "shipping": {"type": "shipping", "label": "Shipping", "amount": 0, "value": "Free"},
                    "tax": {"type": "tax", "label": "Taxes", "amount": 0, "value": "\u20ac0.00"}
                },
                "products_count": 0,
                "summary_string": "0 items",
                "vouchers": {"allowed": 0, "added": []},
                "discounts": [],
                "minimalPurchase": 0,
                "minimalPurchaseRequired": ""
            },
            "currency": {"name": "Euro", "iso_code": "EUR", "iso_code_num": "978", "sign": "\u20ac"},
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
                "canonical": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/2-home",
                "meta": {"title": "Home", "description": "", "keywords": "", "robots": "index"},
                "page_name": "category",
                "body_classes": {
                    "lang-en": true,
                    "lang-rtl": false,
                    "country-US": true,
                    "currency-EUR": true,
                    "layout-left-column": true,
                    "page-category": true,
                    "tax-display-disabled": true,
                    "category-id-2": true,
                    "category-Home": true,
                    "category-id-parent-1": true,
                    "category-depth-level-1": true
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
                "current_url": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/2-home?q=Categories-Tableware",
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
                    "en-us": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/2-home",
                    "de-de": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/de\/2-startseite",
                    "fr-fr": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/fr\/2-accueil",
                    "es-es": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/es\/2-inicio",
                    "it-it": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/it\/2-home"
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
                }, null], "count": 2
            },
            "link": {"protocol_link": "https:\/\/", "protocol_content": "https:\/\/"},
            "time": 1570660805,
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
    <script type="text/javascript">
        $(document).ready(function(){
            $("input:checkbox").change(function() {

                var categoryValue = [];
                $.each($("input[name='categoryValueCheckbox[]']:checked"), function () {
                    categoryValue.push($(this).val());
                });

                $.ajax({
                    method: 'get',
                    headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
                    url: '{{URL::to('products')}}',
                    data: {
                        categoryValue: categoryValue,
                    },
                    // success: function (data) {
                    //     $('#result').html(data);
                    // }
                }).done(function (output) {
                    $("#result").html(output.html);
                    location.hash = page;
                });

            });
        });
    </script>
@endsection

@section('content')

    <section id="wrapper" style="margin-top: 28px;">
        {{--        <aside id="notifications">--}}
        <div class="container">
            <div class="innovatoryBreadcrumb">
                <nav data-depth="3" class="breadcrumb">
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
{{--                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">--}}
{{--                            <a itemprop="item" href="4-kitchen-tools.html">--}}
{{--                                <span itemprop="name">{{__('settings.productsRoute')}}</span> </a>--}}
{{--                            <meta itemprop="position" content="3">--}}
{{--                        </li>--}}
                    </ol>
                </nav>
            </div>
            <section id="main">
                <div class="block-category card card-block">
                    {{--                            <h1 class="h1">هود آشپزخانه</h1>--}}
                    <div class="category-cover">
                        <img src="{{asset("img/admin/setting/$menuPic->photo4")}}" alt="">
                    </div>
                    <div id="category-description" class="text-muted">
                        {{--                                <p>--}}
                        {{--                                    تمام هود های آیشیل... توضیح توضیح توضیح توضیح توضیح توضیح توضیح توضیحتوضیحتوضیحتوضیحتوضیحتوضیح--}}
                        {{--                                </p>--}}
                    </div>
                </div>
            </section>


        </div>
        {{--        </aside>--}}
        <div class="container">
            <div class="row">
                <div id="left-column" class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                    <div id="search_filters_wrapper" class="hidden-sm-down">
                        <div id="search_filter_controls" class="hidden-md-up">
                            <span id="_mobile_search_filters_clear_all"></span>
                            <button class="btn btn-secondary ok">
                                <i class="material-icons">&#xE876;</i> OK
                            </button>
                        </div>
                        <div id="search_filters">
                            {{--                            <section class="facet clearfix filter-by">--}}
                            {{--                                <h4 class="text-uppercase h6 hidden-sm-down">فیلترها</h4>--}}
                            {{--                                <div id="_desktop_search_filters_clear_all" class="hidden-sm-down clear-all-wrapper">--}}
                            {{--                                    <button data-search-url="https://innovatorythemes.com/prestashop/INNO02/INNO1001_Cucina/IT01/en/4-kitchen-tools?order=product.name.asc" class="bor-btn js-search-filters-clear-all">--}}
                            {{--                                        <i class="material-icons">&#10005;</i>--}}
                            {{--                                        پاک کردن فیلترها--}}
                            {{--                                    </button>--}}
                            {{--                                </div>--}}
                            {{--                            </section>--}}
                            <section class="facet clearfix">
                                <h1 class="h6 facet-title hidden-sm-down">{{__('settings.barasase')}}</h1>
                                <div class="title hidden-md-up" data-target="#facet_29325" data-toggle="collapse">
                                    <h1 class="h6 facet-title">{{__('settings.brand')}}</h1>
                                    <span class="pull-xs-right">
                                 <span class="navbar-toggler collapse-icons">
                                 <i class="material-icons add">&#xE313;</i>
                                 <i class="material-icons remove">&#xE316;</i>
                                 </span>
                                 </span>
                                </div>
                                <ul id="facet_29325" class="collapse">
                                    <li>
                                        <label class="facet-label">
                                    <span class="custom-checkbox">
                                    <input class="checkbox-ajax" autocomplete="off" name="categoryValueCheckbox[]" type="checkbox" value="3">
                                    <span class="ps-shown-by-js">
{{--                                        <i class="material-icons checkbox-checked">&#xE5CA;</i>--}}
                                        <i class="fa fa-check mainChecked checkbox-checked" aria-hidden="true"></i>

                                    </span>
                                    </span>
                                            <a href="" class="_gray-darker search-link js-search-link" rel="nofollow"> {{__('settings.special')}}
                                                {{--                                                                                                <span class="magnitude">(2)</span>--}}
                                            </a> </label>
                                    </li>


                                    <li>
                                        <label class="facet-label">
                                    <span class="custom-checkbox">
                                    <input class="checkbox-ajax" autocomplete="off" name="categoryValueCheckbox[]" type="checkbox" value="2">
                                    <span class="ps-shown-by-js">
{{--                                        <i class="material-icons checkbox-checked">&#xE5CA;</i>--}}
                                        <i class="fa fa-check mainChecked checkbox-checked" aria-hidden="true"></i>

                                    </span>
                                    </span>
                                            <a href="" class="_gray-darker search-link js-search-link" rel="nofollow"> {{__('settings.bestSell')}}
                                                {{--                                                                                                <span class="magnitude">(2)</span>--}}
                                            </a> </label>
                                    </li>

                                    <li>
                                        <label class="facet-label">
                                    <span class="custom-checkbox">
                                    <input class="checkbox-ajax" autocomplete="off" name="categoryValueCheckbox[]" type="checkbox" value="1">
                                    <span class="ps-shown-by-js">
{{--                                        <i class="material-icons checkbox-checked">&#xE5CA;</i>--}}
                                        <i class="fa fa-check mainChecked checkbox-checked" aria-hidden="true"></i>

                                    </span>
                                    </span>
                                            <a href="{{url('/activate-carbon')}}" class="_gray-darker"> {{__('settings.menu3')}}
                                                {{--                                                                                                <span class="magnitude">(2)</span>--}}
                                            </a> </label>
                                    </li>

{{--                                    <li>--}}
{{--                                        <label class="facet-label">--}}
{{--                                    <span class="custom-checkbox">--}}
{{--                                    <input class="checkbox-ajax" autocomplete="off" name="categoryValueCheckbox[]" type="checkbox" value="cheapest">--}}
{{--                                    <span class="ps-shown-by-js">--}}
{{--                                        <i class="material-icons checkbox-checked">&#xE5CA;</i>--}}
{{--                                        <i class="fa fa-check mainChecked checkbox-checked" aria-hidden="true"></i>--}}

{{--                                    </span>--}}
{{--                                    </span>--}}
{{--                                            <a href="" class="_gray-darker search-link js-search-link" rel="nofollow"> ارزانترین--}}
{{--                                                --}}{{--                                                                                                <span class="magnitude">(2)</span>--}}
{{--                                            </a> </label>--}}
{{--                                    </li>--}}

{{--                                    <li>--}}
{{--                                        <label class="facet-label">--}}
{{--                                    <span class="custom-checkbox">--}}
{{--                                    <input class="checkbox-ajax expensive2" autocomplete="off" name="expensive" type="checkbox" value="asc">--}}
{{--                                    <span class="ps-shown-by-js">--}}
{{--                                        <i class="material-icons checkbox-checked">&#xE5CA;</i>--}}
{{--                                        <i class="fa fa-check mainChecked checkbox-checked" aria-hidden="true"></i>--}}

{{--                                    </span>--}}
{{--                                    </span>--}}
{{--                                            <a href="" class="_gray-darker search-link js-search-link" rel="nofollow"> گرانترین--}}
{{--                                                --}}{{--                                                                                                <span class="magnitude">(2)</span>--}}
{{--                                            </a> </label>--}}
{{--                                    </li>--}}

                                    <li>
                                        <label class="facet-label">
                                    <span class="custom-checkbox">
                                    <input class="checkbox-ajax" autocomplete="off" name="categoryValueCheckbox[]" type="checkbox" value="4">
                                    <span class="ps-shown-by-js">
{{--                                        <i class="material-icons checkbox-checked">&#xE5CA;</i>--}}
                                        <i class="fa fa-check mainChecked checkbox-checked" aria-hidden="true"></i>

                                    </span>
                                    </span>
                                            <a href="" class="_gray-darker search-link js-search-link" rel="nofollow"> {{__('settings.new')}}
                                                {{--                                                                                                <span class="magnitude">(2)</span>--}}
                                            </a> </label>
                                    </li>

                                </ul>
                            </section>

{{--                            <section class="facet clearfix">--}}
{{--                                <h1 class="h6 facet-title hidden-sm-down">{{__('settings.brand')}}</h1>--}}
{{--                                <div class="title hidden-md-up" data-target="#facet_29325" data-toggle="collapse">--}}
{{--                                    <h1 class="h6 facet-title">{{__('settings.brand')}}</h1>--}}
{{--                                    <span class="pull-xs-right">--}}
{{--                                 <span class="navbar-toggler collapse-icons">--}}
{{--                                 <i class="material-icons add">&#xE313;</i>--}}
{{--                                 <i class="material-icons remove">&#xE316;</i>--}}
{{--                                 </span>--}}
{{--                                 </span>--}}
{{--                                </div>--}}
{{--                                <ul id="facet_29325" class="collapse">--}}
{{--                                    <li>--}}
{{--                                        <label class="facet-label">--}}
{{--                                    <span class="custom-checkbox">--}}
{{--                                    <input--}}
{{--                                        data-search-url="4-kitchen-tools-order=product.name.asc&amp;q=Brand-Amongst+Kitchen.html"--}}
{{--                                        type="checkbox"--}}
{{--                                    >--}}
{{--                                    <span class="ps-shown-by-js">                                        <i class="fa fa-check mainChecked checkbox-checked" aria-hidden="true"></i></span>--}}
{{--                                    </span> <a--}}
{{--                                                href="4-kitchen-tools-order=product.name.asc&amp;q=Brand-Amongst+Kitchen.html"--}}
{{--                                                class="_gray-darker search-link js-search-link"--}}
{{--                                                rel="nofollow"--}}
{{--                                            > Amongst Kitchen <span class="magnitude">(2)</span> </a> </label>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <label class="facet-label">--}}
{{--                                    <span class="custom-checkbox">--}}
{{--                                    <input--}}
{{--                                        data-search-url="4-kitchen-tools-order=product.name.asc&amp;q=Brand-Bazzar.html"--}}
{{--                                        type="checkbox"--}}
{{--                                    >--}}
{{--                                    <span class="ps-shown-by-js">                                        <i class="fa fa-check mainChecked checkbox-checked" aria-hidden="true"></i></span>--}}
{{--                                    </span> <a--}}
{{--                                                href="4-kitchen-tools-order=product.name.asc&amp;q=Brand-Bazzar.html"--}}
{{--                                                class="_gray-darker search-link js-search-link"--}}
{{--                                                rel="nofollow"--}}
{{--                                            > Bazzar <span class="magnitude">(1)</span> </a> </label>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <label class="facet-label">--}}
{{--                                    <span class="custom-checkbox">--}}
{{--                                    <input--}}
{{--                                        data-search-url="4-kitchen-tools-order=product.name.asc&amp;q=Brand-Bento+Brand.html"--}}
{{--                                        type="checkbox"--}}
{{--                                    >--}}
{{--                                    <span class="ps-shown-by-js">                                        <i class="fa fa-check mainChecked checkbox-checked" aria-hidden="true"></i></span>--}}
{{--                                    </span> <a--}}
{{--                                                href="4-kitchen-tools-order=product.name.asc&amp;q=Brand-Bento+Brand.html"--}}
{{--                                                class="_gray-darker search-link js-search-link"--}}
{{--                                                rel="nofollow"--}}
{{--                                            > Bento Brand <span class="magnitude">(4)</span> </a> </label>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <label class="facet-label">--}}
{{--                                    <span class="custom-checkbox">--}}
{{--                                    <input--}}
{{--                                        data-search-url="4-kitchen-tools-order=product.name.asc&amp;q=Brand-Best+Choice.html"--}}
{{--                                        type="checkbox"--}}
{{--                                    >--}}
{{--                                    <span class="ps-shown-by-js">                                        <i class="fa fa-check mainChecked checkbox-checked" aria-hidden="true"></i></span>--}}
{{--                                    </span> <a--}}
{{--                                                href="4-kitchen-tools-order=product.name.asc&amp;q=Brand-Best+Choice.html"--}}
{{--                                                class="_gray-darker search-link js-search-link"--}}
{{--                                                rel="nofollow"--}}
{{--                                            > Best Choice <span class="magnitude">(3)</span> </a> </label>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <label class="facet-label">--}}
{{--                                    <span class="custom-checkbox">--}}
{{--                                    <input--}}
{{--                                        data-search-url="4-kitchen-tools-order=product.name.asc&amp;q=Brand-Coffee+Shop.html"--}}
{{--                                        type="checkbox"--}}
{{--                                    >--}}
{{--                                    <span class="ps-shown-by-js">                                        <i class="fa fa-check mainChecked checkbox-checked" aria-hidden="true"></i></span>--}}
{{--                                    </span> <a--}}
{{--                                                href="4-kitchen-tools-order=product.name.asc&amp;q=Brand-Coffee+Shop.html"--}}
{{--                                                class="_gray-darker search-link js-search-link"--}}
{{--                                                rel="nofollow"--}}
{{--                                            > Coffee Shop <span class="magnitude">(7)</span> </a> </label>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </section>--}}
























                            {{--                            <section class="facet clearfix">--}}
                            {{--                                <h1 class="h6 facet-title hidden-sm-down">{{__('settings.colorProducts')}}</h1>--}}
                            {{--                                <div class="title hidden-md-up" data-target="#facet_74679" data-toggle="collapse">--}}
                            {{--                                    <h1 class="h6 facet-title">{{__('settings.colorProducts')}}</h1>--}}
                            {{--                                    <span class="pull-xs-right">--}}
                            {{--                                 <span class="navbar-toggler collapse-icons">--}}
                            {{--                                 <i class="material-icons add">&#xE313;</i>--}}
                            {{--                                 <i class="material-icons remove">&#xE316;</i>--}}
                            {{--                                 </span>--}}
                            {{--                                 </span>--}}
                            {{--                                </div>--}}
                            {{--                                <ul id="facet_74679" class="collapse">--}}
                            {{--                                    <li>--}}
                            {{--                                        <label class="facet-label">--}}
                            {{--                                    <span class="custom-checkbox">--}}
                            {{--                                    <input--}}
                            {{--                                        data-search-url="4-kitchen-tools-order=product.name.asc&amp;q=Color-Grey.html"--}}
                            {{--                                        type="checkbox"--}}
                            {{--                                    >--}}
                            {{--                                    <span class="color" style="background-color:#AAB2BD"></span>--}}
                            {{--                                    </span> <a--}}
                            {{--                                                href="4-kitchen-tools-order=product.name.asc&amp;q=Color-Grey.html"--}}
                            {{--                                                class="_gray-darker search-link js-search-link"--}}
                            {{--                                                rel="nofollow"--}}
                            {{--                                            > Grey <span class="magnitude">(16)</span> </a> </label>--}}
                            {{--                                    </li>--}}
                            {{--                                    <li>--}}
                            {{--                                        <label class="facet-label">--}}
                            {{--                                    <span class="custom-checkbox">--}}
                            {{--                                    <input--}}
                            {{--                                        data-search-url="4-kitchen-tools-order=product.name.asc&amp;q=Color-White.html"--}}
                            {{--                                        type="checkbox"--}}
                            {{--                                    >--}}
                            {{--                                    <span class="color" style="background-color:#ffffff"></span>--}}
                            {{--                                    </span> <a--}}
                            {{--                                                href="4-kitchen-tools-order=product.name.asc&amp;q=Color-White.html"--}}
                            {{--                                                class="_gray-darker search-link js-search-link"--}}
                            {{--                                                rel="nofollow"--}}
                            {{--                                            > White <span class="magnitude">(12)</span> </a> </label>--}}
                            {{--                                    </li>--}}
                            {{--                                    <li>--}}
                            {{--                                        <label class="facet-label">--}}
                            {{--                                    <span class="custom-checkbox">--}}
                            {{--                                    <input--}}
                            {{--                                        data-search-url="4-kitchen-tools-order=product.name.asc&amp;q=Color-Off+White.html"--}}
                            {{--                                        type="checkbox"--}}
                            {{--                                    >--}}
                            {{--                                    <span class="color" style="background-color:#faebd7"></span>--}}
                            {{--                                    </span> <a--}}
                            {{--                                                href="4-kitchen-tools-order=product.name.asc&amp;q=Color-Off+White.html"--}}
                            {{--                                                class="_gray-darker search-link js-search-link"--}}
                            {{--                                                rel="nofollow"--}}
                            {{--                                            > Off White <span class="magnitude">(11)</span> </a> </label>--}}
                            {{--                                    </li>--}}
                            {{--                                    <li>--}}
                            {{--                                        <label class="facet-label">--}}
                            {{--                                    <span class="custom-checkbox">--}}
                            {{--                                    <input--}}
                            {{--                                        data-search-url="4-kitchen-tools-order=product.name.asc&amp;q=Color-Red.html"--}}
                            {{--                                        type="checkbox"--}}
                            {{--                                    >--}}
                            {{--                                    <span class="color" style="background-color:#E84C3D"></span>--}}
                            {{--                                    </span> <a--}}
                            {{--                                                href="4-kitchen-tools-order=product.name.asc&amp;q=Color-Red.html"--}}
                            {{--                                                class="_gray-darker search-link js-search-link"--}}
                            {{--                                                rel="nofollow"--}}
                            {{--                                            > Red <span class="magnitude">(9)</span> </a> </label>--}}
                            {{--                                    </li>--}}
                            {{--                                    <li>--}}
                            {{--                                        <label class="facet-label">--}}
                            {{--                                    <span class="custom-checkbox">--}}
                            {{--                                    <input--}}
                            {{--                                        data-search-url="4-kitchen-tools-order=product.name.asc&amp;q=Color-Black.html"--}}
                            {{--                                        type="checkbox"--}}
                            {{--                                    >--}}
                            {{--                                    <span class="color" style="background-color:#434A54"></span>--}}
                            {{--                                    </span> <a--}}
                            {{--                                                href="4-kitchen-tools-order=product.name.asc&amp;q=Color-Black.html"--}}
                            {{--                                                class="_gray-darker search-link js-search-link"--}}
                            {{--                                                rel="nofollow"--}}
                            {{--                                            > Black <span class="magnitude">(16)</span> </a> </label>--}}
                            {{--                                    </li>--}}
                            {{--                                </ul>--}}
                            {{--                            </section>--}}
                        </div>
                    </div>
                    <!-- Static Block module -->
                    <div class="offer-banner-sld-sec product-column-style">
                        {{--                        <div class="title_block">--}}
                        {{--                            <h3>تخفیف ویژه</h3>--}}
                        {{--                        </div>--}}
                        <div class="offer-banner-sld-wrap">
                            <div class="offer-banner-sld owl-carousel">
{{--                                @foreach($products as $product)--}}
                                <a href="" >
                                    <div class="offer-banner-col text-center">
                                        @if(App::getLocale() == 'fa')
{{--                                            <h5>{{$products[0]['title']}}</h5>--}}
{{--                                            <h5>{{$cheapProducts->title}}</h5>--}}
                                            <h3>فقط این هفته</h3>
                                            <p>عجله کنید برای خرید</p>
                                            <p>خرید</p>
                                        @elseif(App::getLocale() == 'en')
{{--                                            <h5>{{$chapProducts[0]['title_en']}}</h5>--}}
                                            <h3>Only this week</h3>
                                            <p>Hurry to buy</p>
                                            <p>Shop</p>
                                        @endif
{{--                                        <h4><span class="offer-red">%{{$products->discount}}</span> {{__('settings.discountOnly')}}</h4>--}}
                                    </div>
{{--                                @endforeach--}}
                                </a>

                                {{--                                    <h3>This week Only</h3>--}}
                                {{--                                    <p>Harry Up For More Discount</p>--}}

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
                                                    <div class="innovatoryProductsList product-miniature js-product-miniature"
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
                                                                                    <span class="stars"> {{round($productTopSelling2->chefRate ,2)}}</span>
                                                                                </div>
                                                                            </div>
                                                                            <span
                                                                                class="laberCountReview pull-left">Review</span>
                                                                        </div>
                                                                        <h2 class="h2 productName" itemprop="name"><a
                                                                                href="">{{$productTopSelling2->title}}</a>
                                                                        </h2>
                                                                        <div class="innovatory-product-price-and-shipping">
                                                                            @if(isset($productTopSelling2->discount))
                                                                                <span itemprop="price" class="price">{{$productTopSelling2->price_after_discount}} {{__('settings.tuman')}}</span>
                                                                                <span class="reduction_percent_display">%{{$productTopSelling2->discount}}</span>
                                                                                <span class="regular-price">{{$productTopSelling2->price}}</span>
                                                                            @else
                                                                                <span class="price">{{$productTopSelling2->price}} {{__('settings.tuman')}}</span>
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
                                                    <div class="innovatoryProductsList product-miniature js-product-miniature"
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
                                                                                    <span class="stars"> {{round($productSpecial2->rate ,2)}}</span>
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
                                                                        <div class="innovatory-product-price-and-shipping">
                                                                            @if(isset($productSpecial2->discount))
                                                                                <span itemprop="price" class="price">{{$productSpecial2->price_after_discount}} {{__('settings.tuman')}}</span>
                                                                                <span class="reduction_percent_display">%{{$productSpecial2->discount}}</span>
                                                                                <span class="regular-price">{{$productSpecial2->price}}</span>
                                                                            @else
                                                                                <span class="price">{{$productSpecial2->price}} {{__('settings.tuman')}}</span>
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
                                                                                    <span class="stars"> {{round($productNew2->rate ,2)}}</span>
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
                                                                        <div class="innovatory-product-price-and-shipping">
                                                                            @if(isset($productNew2->discount))
                                                                                <span itemprop="price" class="price">{{$productNew2->price_after_discount}} {{__('settings.tuman')}}</span>
                                                                                <span class="reduction_percent_display">%{{$productNew2->discount}}</span>
                                                                                <span class="regular-price">{{$productNew2->price}}</span>
                                                                            @else
                                                                                <span class="price">{{$productNew2->price}} {{__('settings.tuman')}}</span>
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
                    {{--                    <div class="innovatoryBreadcrumb">--}}
                    {{--                        <nav data-depth="3" class="breadcrumb">--}}
                    {{--                            <ol itemscope itemtype="http://schema.org/BreadcrumbList">--}}
                    {{--                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">--}}
                    {{--                                    <a itemprop="item" href="index.html">--}}
                    {{--                                        <span itemprop="name">خانه</span>--}}
                    {{--                                    </a>--}}
                    {{--                                    <meta itemprop="position" content="1">--}}
                    {{--                                </li>--}}
                    {{--                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">--}}
                    {{--                                    <a itemprop="item" href="3-cookware.html">--}}
                    {{--                                        <span itemprop="name">محصولات</span>--}}
                    {{--                                    </a>--}}
                    {{--                                    <meta itemprop="position" content="2">--}}
                    {{--                                </li>--}}
                    {{--                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">--}}
                    {{--                                    <a itemprop="item" href="4-kitchen-tools.html">--}}
                    {{--                                        <span itemprop="name">هود آشپزخانه</span>--}}
                    {{--                                    </a>--}}
                    {{--                                    <meta itemprop="position" content="3">--}}
                    {{--                                </li>--}}
                    {{--                            </ol>--}}
                    {{--                        </nav>--}}
                    {{--                    </div>--}}
                    <section id="main">
                        {{--                        <div class="block-category card card-block">--}}
                        {{--                            <h1 class="h1">هود آشپزخانه</h1>--}}
                        {{--                            <div class="category-cover">--}}
                        {{--                                <img src="{{asset('FrontEnd/images/admin/products-banner/1.jpg')}}" alt="">--}}
                        {{--                            </div>--}}
                        {{--                            <div id="category-description" class="text-muted">--}}
                        {{--                                <p>--}}
                        {{--تمام هود های آیشیل... توضیح توضیح توضیح توضیح توضیح توضیح توضیح توضیحتوضیحتوضیحتوضیحتوضیحتوضیح--}}
                        {{--                                </p>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}


                        <section id="products" class="active_grid">
                            <div id="">
                                <div id="js-product-list-top" class="products-selection row">
                                    {{--                                    <div class="col-lg-5 total-products">--}}
                                    {{--                                        <ul class="innovatoryGridList">--}}
                                    {{--                                            <li id="grid" class="pull-left">--}}
                                    {{--                                                <a rel="nofollow" href="javascript:void(0)" title="Grid"></a></li>--}}
                                    {{--                                            <li id="list" class="pull-left">--}}
                                    {{--                                                <a rel="nofollow" href="javascript:void(0)" title="List"></a></li>--}}
                                    {{--                                        </ul>--}}
                                    {{--                                        <p>30 {{__('settings.productFound')}}</p>--}}
                                    {{--                                    </div>--}}
                                    {{--                                    <div class="col-lg-12">--}}
                                    {{--                                        <div class="products-sort-order dropdown pull-right">--}}
                                    {{--                                            <a class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> بر اساس حروف--}}
                                    {{--                                                <i class="material-icons pull-xs-right">&#8690;</i> </a>--}}
                                    {{--                                            <div class="dropdown-menu">--}}
                                    {{--                                                <a rel="nofollow" href="4-kitchen-tools-order=product.position.asc.html" class="select-list js-search-link">--}}
                                    {{--                                                    {{__('settings.cheapest')}}--}}
                                    {{--                                                </a>--}}
                                    {{--                                                <a rel="nofollow" href="4-kitchen-tools-order=product.position.asc.html" class="select-list js-search-link">--}}
                                    {{--                                                    {{__('settings.expensive')}}--}}
                                    {{--                                                </a>--}}
                                    {{--                                                <a rel="nofollow" href="4-kitchen-tools-order=product.position.asc.html" class="select-list js-search-link">--}}
                                    {{--                                                    {{__('settings.newest')}}--}}
                                    {{--                                                </a>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </div>--}}
                                    {{--                                        <span class=" hidden-sm-down sort-by pull-right">{{__('settings.sortBy')}}</span>--}}
                                    {{--                                        <div class="col-sm-3 col-xs-4 hidden-md-up filter-button">--}}
                                    {{--                                            <button id="search_filter_toggler" class="btn btn-secondary">--}}
                                    {{--                                                Filter--}}
                                    {{--                                            </button>--}}
                                    {{--                                        </div>--}}
                                    {{--                                        <div class="clearfix"></div>--}}
                                    {{--                                    </div>--}}
                                    {{--                                    <div class="clearfix"></div>--}}
                                    {{--                                    <div class="col-sm-12 hidden-md-up text-xs-center showing">--}}
                                    {{--                                        Showing 1-12 of 19 item(s)--}}
                                    {{--                                    </div>--}}
                                </div>
                            </div>
                            <div id="" class="hidden-sm-down">
                                <section id="js-active-search-filters" class="hide">
                                    <h6 class="h6 active-filter-title">Active filters</h6>
                                </section>
                            </div>
                            <div id="">
                                <div id="js-product-list">
                                    <div class="innovatoryProductGrid innovatoryProducts">
                                        <div class="row" id="result">
                                            @foreach($products as $product)

                                                <div class="item-inner col-lg-4 col-xl-3 col-md-4 col-sm-6 col-xs-6 last-in-line first-item-of-tablet-line last-item-of-mobile-line not6isHossein">
                                                    <article class="product-miniature js-product-miniature" data-id-product="{{$product->id}}" data-id-product-attribute="{{$product->id}}" itemscope itemtype="">
                                                        <div class="innovatoryProduct-container item">
                                                            <div class="innovatoryProduct-image">
                                                                <a href="{{action('FrontEnd\ProductController@show' ,[$product->id,$product->title,$product->title_en])}}" class="thumbnail product-thumbnail">
                                                                  <span class="cover_image">
                                                                        <img src="{{asset("img/admin/product/$product->photo1")}}" data-full-size-image-url="" alt="" width="auto" height="auto"/>
                                                                 </span>

                                                                    <span class="hover_image">
                                                                           <img src="{{asset("img/admin/product/$product->photo1")}}" data-full-size-image-url="" alt="" width="auto" height="auto"/>
                                                                      </span> </a>

                                                                @if($product->category == 1)
                                                                    <span class="innovatoryNew-label">{{__('settings.newest')}}</span>
                                                                @elseif($product->category == 2)
                                                                    <span class="innovatoryNew-label">{{__('settings.bestSell')}}</span>
                                                                @elseif($product->category == 3)
                                                                    <span class="innovatoryNew-label">{{__('settings.Special')}}</span>
                                                                @endif
                                                                @if(isset($product->discount))
                                                                    <span class="reduction_percent_display innovatorySale-label">%{{$product->discount}}</span>
                                                                @endif

                                                                {{--                                                            <div class="innovatoryActions">--}}
                                                                {{--                                                                <div class="innovatoryActions-i">--}}
                                                                {{--                                                                    <div class="innovatoryCart innovatoryItem">--}}
                                                                {{--                                                                        <form action="cart.html" method="post">--}}
                                                                {{--                                                                            <input type="hidden" name="token" value="b37219994338861bc35224966f2f6efd">--}}
                                                                {{--                                                                            <input type="hidden" value="45" name="id_product">--}}
                                                                {{--                                                                            <a data-button-action="add-to-cart" class="cart-btn" title="Add To Cart">--}}
                                                                {{--                                                                                <i class="ti-shopping-cart"></i>--}}
                                                                {{--                                                                            </a>--}}
                                                                {{--                                                                        </form>--}}
                                                                {{--                                                                    </div>--}}
                                                                {{--                                                                    <div class="innovatoryQuick innovatoryItem">--}}
                                                                {{--                                                                        <a href="#" class="quick-view" data-link-action="quickview" title="Quickview">--}}
                                                                {{--                                                                            <i class="ti-eye"></i>--}}
                                                                {{--                                                                        </a>--}}
                                                                {{--                                                                    </div>--}}
                                                                {{--                                                                    <div class="innovatoryItem innovatoryWish">--}}
                                                                {{--                                                                        <div class="innovatorywishlist product-item-wishlist">--}}
                                                                {{--                                                                            <a class="addToWishlist wishlistProd_45" title="Add to wishlist" href="#" rel="45" onclick="WishlistCart('wishlist_block_list', 'add', '45', false, 1); return false;">--}}
                                                                {{--                                                                                <i class="ti-heart"></i>--}}
                                                                {{--                                                                                <span>Add to wishlist</span>--}}
                                                                {{--                                                                            </a>--}}
                                                                {{--                                                                        </div>--}}
                                                                {{--                                                                    </div>--}}
                                                                {{--                                                                </div>--}}
                                                                {{--                                                            </div>--}}
                                                            </div>
                                                            <div class="innovatory-product-description">
                                                                <div class="comments_note">
                                                                    <div class="star_content">
                                                                        <div class="Rate">
                                                                            <span class="stars"> {{round($product->rate ,2)}}</span>
                                                                        </div>
                                                                    </div>
                                                                    <span class="laberCountReview pull-left">Review</span>
                                                                </div>
                                                                <h2 class="h2 productName" itemprop="name">
                                                                    <a href="">
                                                                        @if(App::getLocale() == 'fa')
                                                                            {{$product->title}}
                                                                        @elseif(App::getLocale() == 'en')
                                                                            {{$product->title_en}}
                                                                        @endif
                                                                    </a>
                                                                </h2>
                                                                <div class="innovatory-product-price-and-shipping">
                                                                    @if(isset($product->discount))
                                                                        <span class="old-price regular-price">{{$product->price}}</span>
                                                                        <span itemprop="price" class="price">{{$product->price_after_discount}}</span>
                                                                    @else
                                                                        <span class="regular-price">{{$product->price}}</span>
                                                                    @endif
                                                                </div>
                                                                <div class="innovatoryCart innovatoryItem hidden-md-down">
                                                                    <form action="#" method="post">
                                                                        <input type="hidden" name="token"
                                                                               data-id="{{$product->id}}" value="0"
                                                                               class="" disabled>
                                                                        <a class="cart-btn button ajax_add_to_cart_button add-to-cart"
                                                                           data-button-action="add-to-cart"
                                                                           type="submit"
                                                                           data-id="{{$product->id}}"
                                                                           data-name="@if(App::getLocale() == 'fa'){{$product->title}}@elseif(App::getLocale() == 'en'){{$product->title_en}}@endif"
                                                                           data-max="{{$product->max}}"
                                                                           data-price="{{$product->price}}"
                                                                           data-pic="{{asset("img/admin/product/$product->photo1")}}"
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
                                    {{--                                    <div class="innovatoryProductList innovatoryProducts">--}}
                                    {{--                                        <div class="row no-margin">--}}

                                    {{--                                            <div class="item-inner clearfix">--}}
                                    {{--                                                <article class="product-miniature js-product-miniature" data-id-product="46" data-id-product-attribute="301" itemscope itemtype="http://schema.org/Product">--}}
                                    {{--                                                    <div class="innovatoryProduct-container item">--}}
                                    {{--                                                        <div class="col-sm-5 col-md-4 productlist-left">--}}
                                    {{--                                                            <div class="innovatoryProduct-image">--}}
                                    {{--                                                                <a href="home/46-301-kitchen-egg-separator.html#/5-color-grey" class="thumbnail product-thumbnail">--}}
                                    {{--                                                      <span class="cover_image">--}}
                                    {{--                                                      <img src="../207-medium_default/kitchen-egg-separator.jpg" data-full-size-image-url="https://innovatorythemes.com/prestashop/INNO02/INNO1001_Cucina/IT01/207-large_default/kitchen-egg-separator.jpg" alt="" width="auto" height="auto"/>--}}
                                    {{--                                                      </span> <span class="hover_image">--}}
                                    {{--                                                      <img src="../208-medium_default/kitchen-egg-separator.jpg" data-full-size-image-url="https://innovatorythemes.com/prestashop/INNO02/INNO1001_Cucina/IT01/208-medium_default/kitchen-egg-separator.jpg" alt="" width="auto" height="auto"/>--}}
                                    {{--                                                      </span> </a> <span class="innovatoryNew-label">New</span>--}}
                                    {{--                                                            </div>--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                        <div class="col-sm-7 col-md-8 productlist-right">--}}
                                    {{--                                                            <div class="innovatory-product-description">--}}
                                    {{--                                                                <h2 class="h2 innovatory-product-title" itemprop="name">--}}
                                    {{--                                                                    <a href="home/46-301-kitchen-egg-separator.html#/5-color-grey">Aliquam Consequat</a>--}}
                                    {{--                                                                </h2>--}}
                                    {{--                                                                <div class="comments_note">--}}
                                    {{--                                                                    <div class="star_content">--}}
                                    {{--                                                                        <div class="star star_on">--}}
                                    {{--                                                                            <i class="fa fa-star"></i></div>--}}
                                    {{--                                                                        <div class="star star_on">--}}
                                    {{--                                                                            <i class="fa fa-star"></i></div>--}}
                                    {{--                                                                        <div class="star star_on">--}}
                                    {{--                                                                            <i class="fa fa-star"></i></div>--}}
                                    {{--                                                                        <div class="star star_on">--}}
                                    {{--                                                                            <i class="fa fa-star"></i></div>--}}
                                    {{--                                                                        <div class="star"><i class="fa fa-star"></i>--}}
                                    {{--                                                                        </div>--}}
                                    {{--                                                                    </div>--}}
                                    {{--                                                                    <span class="laberCountReview pull-left">Review</span>--}}
                                    {{--                                                                </div>--}}
                                    {{--                                                                <div class="innovatory-product-price-and-shipping">--}}
                                    {{--                                                                    <span itemprop="price" class="price">€124.99</span>--}}
                                    {{--                                                                </div>--}}
                                    {{--                                                                <div class="description_short">--}}
                                    {{--                                                                    <p>Fusce vel tristique nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut vitae auctor turpis.</p>--}}
                                    {{--                                                                </div>--}}
                                    {{--                                                                <div class="variant-links">--}}
                                    {{--                                                                    <a href="home/46-301-kitchen-egg-separator.html#/5-color-grey"--}}
                                    {{--                                                                       class="color"--}}
                                    {{--                                                                       title="Grey"--}}
                                    {{--                                                                       style="background-color: #AAB2BD"><span class="sr-only">Grey</span></a>--}}
                                    {{--                                                                    <a href="home/46-303-kitchen-egg-separator.html#/8-color-white"--}}
                                    {{--                                                                       class="color"--}}
                                    {{--                                                                       title="White"--}}
                                    {{--                                                                       style="background-color: #ffffff"><span class="sr-only">White</span></a>--}}
                                    {{--                                                                    <a href="home/46-302-kitchen-egg-separator.html#/11-color-black"--}}
                                    {{--                                                                       class="color"--}}
                                    {{--                                                                       title="Black"--}}
                                    {{--                                                                       style="background-color: #434A54"><span class="sr-only">Black</span></a>--}}
                                    {{--                                                                    <span class="js-count count"></span>--}}
                                    {{--                                                                </div>--}}
                                    {{--                                                                <!-- 				<p class="available_now"></p>--}}
                                    {{--                                                         -->--}}
                                    {{--                                                                <div class="actions clearfix">--}}
                                    {{--                                                                    <div class="innovatoryCart pull-left">--}}
                                    {{--                                                                        <form action="cart.html" method="post">--}}
                                    {{--                                                                            <input type="hidden" name="token" value="b37219994338861bc35224966f2f6efd">--}}
                                    {{--                                                                            <input type="hidden" value="46" name="id_product">--}}
                                    {{--                                                                            <button data-button-action="add-to-cart" class="innovatoryBottom">--}}
                                    {{--                                                                                <i class="ti-shopping-cart"></i><span>Add to cart</span>--}}
                                    {{--                                                                            </button>--}}
                                    {{--                                                                        </form>--}}
                                    {{--                                                                    </div>--}}
                                    {{--                                                                    <div class="innovatoryItem pull-left">--}}
                                    {{--                                                                        <a href="#" class="quick-view" data-link-action="quickview">--}}
                                    {{--                                                                            <i class="ti-eye"></i><span>Quick view</span>--}}
                                    {{--                                                                        </a>--}}
                                    {{--                                                                    </div>--}}
                                    {{--                                                                    <div class="innovatoryItem pull-left">--}}
                                    {{--                                                                        <div class="innovatorywishlist product-item-wishlist">--}}
                                    {{--                                                                            <a class="addToWishlist wishlistProd_46" title="Add to wishlist" href="#" rel="46" onclick="WishlistCart('wishlist_block_list', 'add', '46', false, 1); return false;">--}}
                                    {{--                                                                                <i class="ti-heart"></i>--}}
                                    {{--                                                                                <span>Add to wishlist</span> </a>--}}
                                    {{--                                                                        </div>--}}
                                    {{--                                                                    </div>--}}
                                    {{--                                                                </div>--}}
                                    {{--                                                            </div>--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                    </div>--}}
                                    {{--                                                </article>--}}
                                    {{--                                            </div>--}}

                                    {{--                                        </div>--}}
                                    {{--                                    </div>--}}
                                    {{ $products->links('FrontEnd.Includes.pagination') }}

                                    <div class="hidden-md-up text-xs-right up">
                                        <a href="#header" class="btn btn-secondary"> Back to top
                                            <i class="material-icons">&#xE316;</i> </a>
                                    </div>
                                </div>
                            </div>
                            <div id="js-product-list-bottom">
                                <div id="js-product-list-bottom"></div>
                            </div>
                        </section>
                    </section>
                </div>
            </div>
        </div>
    </section>



    <script>
        $(document).ready(function () {
            $('.rating span').click(function () {
                var rate = $(this).attr('id');
                var star = 5;
                if (rate == 'star5') {
                    star = 5
                } else if (rate == 'star4') {
                    star = 4
                } else if (rate == 'star3') {
                    star = 3
                } else if (rate == 'star2') {
                    star = 2
                } else if (rate == 'star1') {
                    star = 1
                }
                $("#STRTE").val(star);
                $('#step1_rate').css({'display': 'none'});
                $('#step2_rate').css({'display': 'block'})
            });

        });


        if (screen.width > 991) {
            $('#left-column').css({'display': 'none'});
            $('.not6isHossein').removeClass('col-xl-3').css({'width': '19.667%'});
            $('#content-wrapper').removeClass('col-md-9').addClass('col-md-12')
        }
    </script>

@endsection

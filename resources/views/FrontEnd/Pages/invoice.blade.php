@extends('FrontEnd.Layouts.master')


@if(App::getLocale() == 'fa')
    @section('title','فاکتور خرید شما')
@elseif(App::getLocale() == 'en')
    @section('title','Shopping invoice')
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
                    "title": "Cart",
                    "description": "",
                    "keywords": "",
                    "robots": "index"
                },
                "page_name": "cart",
                "body_classes": {
                    "lang-en": true,
                    "lang-rtl": false,
                    "country-US": true,
                    "currency-USD": true,
                    "layout-left-column": true,
                    "page-cart": true,
                    "tax-display-disabled": true,
                    "cart-empty": true
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
                "current_url": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/cart",
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
                    "en-us": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/cart",
                    "de-de": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/de\/warenkorb",
                    "fr-fr": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/fr\/panier",
                    "es-es": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/es\/carrito",
                    "it-it": "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/it\/carrello"
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
                }],
                "count": 1
            },
            "link": {
                "protocol_link": "https:\/\/",
                "protocol_content": "https:\/\/"
            },
            "time": 1570653256,
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
    <section id="wrapper">

        <aside id="notifications">
            <div class="container">

            </div>
        </aside>

        <div class="container">
            <div class="row">
                <div id="content-wrapper" class="left-column col-xs-12 col-md-12">
                    <div class="innovatoryBreadcrumb">

                        <nav data-depth="1" class="breadcrumb">
                            <ol itemscope itemtype="">

                                <li itemprop="itemListElement" itemscope itemtype="">
                                    <a itemprop="item" href=""> <span itemprop="name">Home</span> </a>
                                    <meta itemprop="position" content="1">
                                </li>

                            </ol>
                        </nav>
                    </div>

                    <section id="main">

                        <div class="cart-grid row">

                            <!-- Left Block: cart product informations & shpping -->
                            <div class="cart-grid-body col-xs-12 col-xl-12">

                                <!-- cart products detailed -->
                                <form method="post" action="{{action('FrontEnd\OrderController@addBefore')}}" >
                                    {{ csrf_field() }}
                                    <div class="card cart-container">
                                        <div class="card-block">
                                            <h1 class="h1 text-center">{{__('settings.FinalOrder')}}</h1>
                                            <div class="container">
                                                <div class="row">
                                                    {{--                                            <div class="col-md-8 col-md-offset-2 divWizard">--}}
                                                    @if (isset($discountcode))
                                                        @foreach($discountcode as $discountcod)
                                                            {{$discountcod->id}}
                                                        @endforeach
                                                    @endif
                                                    {{--                                                    <h4 class="text-center" style="padding-top: 20px">لیست نهایی سفارشات</h4>--}}
                                                    <div class="stepwizard">
                                                        <div class="stepwizard-row setup-panel">
                                                            <div class="stepwizard-step">
                                                                <p>{{__('settings.faktor')}}</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    {{--                                                <div class="row">--}}
                                                    {{--                                                    <div class="col-md-9 col-sm-12">--}}
                                                    {{--                                                        <input class="form-control tooltipstered" name="discountcode" id="discountcode" type="text" placeholder="کد تخفیف خود را وارد کنید" style="margin-bottom: 10px">--}}
                                                    {{--                                                    </div>--}}

                                                    {{--                                                    <div class="col-md-3 col-sm-12">--}}
                                                    {{--                                                        <input class="discontBiuuom" type="submit" value="     اعمال کد تخفیف     " id="btn">--}}
                                                    {{--                                                    </div>--}}
                                                    {{--                                                    --}}{{--						{{ Auth::user()->session_id}}--}}
                                                    {{--                                                </div>--}}
                                                    <div id="rate-msg"></div>
                                                    {{--                                                <form id="UserDetailsForm" method="post" class="form-horizontal tab-content"--}}
                                                    {{--                                                      action="{{action('FrontEnd\CartController@addBefore')}}"--}}
                                                    {{--                                                      data-bv-message="This value is not valid"--}}
                                                    {{--                                                      data-bv-feedbackicons-valid="glyphicon glyphicon-ok"--}}
                                                    {{--                                                      data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"--}}
                                                    {{--                                                      data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">--}}
                                                    {{csrf_field()}}
                                                    <div class="row setup-content" id="step-1">
                                                        <div class="col-xs-12">
                                                            <div class="col-md-12">
                                                                @if(Session::has('alert-success'))
                                                                    <div class="alert alert-success">
                                                                        {{session('alert-success')}}
                                                                    </div>
                                                                @endif
                                                                @if(Session::has('alert_error'))
                                                                    <div class="alert alert-danger">
                                                                        {{session('alert_error')}}
                                                                    </div>
                                                                @endif
                                                            <!-- table list order -->
                                                                <table class="table table-hover table-responsive" style="display: inline-table">
                                                                    <!-- repeat that -->
                                                                    @if(isset($orders))
                                                                        {{--                                                                        @foreach($orders as $order)--}}
                                                                        <thead>
                                                                        <tr>
                                                                            <th>{{__('settings.invoiveName')}}</th>
                                                                            <th>{{__('settings.invoivePrice')}}</th>
                                                                            <th>{{__('settings.invoiveCount')}}</th>
                                                                            <th>{{__('settings.invoiveTotal')}}</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        @foreach($orders as $item)
                                                                            <tr>
                                                                                @if(App::getLocale() == 'fa')
                                                                                    <th>{{$item->title}}</th>
                                                                                @elseif(App::getLocale() == 'en')
                                                                                    <th>{{$item->title_en}}</th>
                                                                                @endif
                                                                                <td class="persian-digit">{{$item->price}}</td>
                                                                                <td class="persian-digit">{{$item->count}}</td>
                                                                                <td class="persian-digit">{{$item->price*$item->count}}</td>
                                                                            </tr>
                                                                        @endforeach

                                                                        {{--                                                                            <tr>--}}
                                                                        {{--                                                                                <th colspan="2">هزینه ارسال</th>--}}
                                                                        {{--                                                                                <td colspan="2" class="persian-digit">{{$user->city['forward_cost']}} تومان</td>--}}
                                                                        {{--                                                                            </tr>--}}
                                                                        @if (Session::get('discountValue'))
                                                                            <tr class="trOrdersMom">
                                                                                <th colspan="2"> {{__('settings.invoiveDiscount')}} {{Session::get('discountValue')}} %
                                                                                </th>
                                                                                <td colspan="2">
                                                                                    @php $sum=0; @endphp
                                                                                    @foreach($order as $item)
                                                                                        @php $sum += $item->price*$item->count; @endphp
                                                                                    @endforeach
                                                                                    @php $orderPrice=0; @endphp
                                                                                    <span id="trOrdersMom" class="persian-digit">
														                                	@php $priceFinally = 0 ; @endphp
                                                                                        @if(!empty($orders))
                                                                                            @foreach($orders as $order)
                                                                                                @foreach($order as $item)
                                                                                                    @php $priceFinally += $item->price * $item->count ;  @endphp
                                                                                                @endforeach
                                                                                            @endforeach
                                                                                            @php $priceFinally += sizeof($orders) * $user->city['forward_cost'] @endphp
                                                                                        @endif
                                                                                        @if (Session::get('discountValue'))
                                                                                            @php $finallDiscount=Session::get('discountValue') ;
																                                	$priceFinally=(($finallDiscount/100)*$priceFinally)
                                                                                            @endphp
                                                                                            <span class="persian-digit">{{ $priceFinally }}</span> {{__('settings.tuman')}}
                                                                                        @endif
														                                </span>
                                                                                </td>
                                                                            </tr>
                                                                        @endif
                                                                        <!-- empty -->
                                                                        <tr>
                                                                            <th colspan="2"></th>
                                                                            <td colspan="2"></td>
                                                                        </tr>
                                                                        <!--/ empty -->
                                                                        </tbody>
                                                                    <!--/ repeat that -->
                                                                    {{--                                                                    @endforeach--}}
                                                                @endif
                                                                <!-- total orders -->
                                                                    <tr class="trTotalOrders">
                                                                        <td></td>
                                                                        <td></td>

                                                                        <th style="text-align: left">{{__('settings.invoiveTotalPayble')}}</th>
                                                                        <td>
                                                                            @php $priceFinally = 0 ; @endphp
                                                                            @if(!empty($orders))
                                                                                @foreach($orders as $order)
{{--                                                                                    @foreach($order as $item)--}}
                                                                                        @php $priceFinally += $order->price * $order->count ;  @endphp
{{--                                                                                    @endforeach--}}
                                                                                @endforeach
                                                                            @endif
                                                                            @if (Session::get('discountValue'))
                                                                                @php $finallDiscount=Session::get('discountValue') ;
                                                                                $priceFinally=$priceFinally-(($finallDiscount/100)*$priceFinally)
                                                                                @endphp
                                                                                <span class="persian-digit">{{ $priceFinally }}</span> {{__('settings.tuman')}}
                                                                            @else
                                                                                <span class="persian-digit">{{ $priceFinally }}</span> {{__('settings.tuman')}}
                                                                            @endif
                                                                        </td>
                                                                    </tr>
                                                                    <!--/ total orders -->
                                                                </table>
                                                                <!--/ table list order -->
                                                                <!-- address-->
                                                                <div>
                                                                    <h4 class="AddressTitle">{{__('settings.invoiveAddress1')}} {{$user->address}}</h4>
                                                                    {{--                                                                    <p>{{$user->address}}</p>--}}
                                                                </div>
                                                                <!--/ address-->
                                                                <!-- new address -->
                                                                <div class="form-group">
                                                                    <div class="TooltipIcon" data-toggle="tooltip" title="">
{{--                                                                                                                                                <i class="fa fa-location-arrow"></i>--}}
                                                                    </div>
                                                                    <label class="control-label" for="UserAddress">{{__('settings.invoiveAddress2')}}</label>
                                                                    <div>
                                                                        <textarea name="UserAddress" id="UserAddress" class="form-control" rows="3"></textarea>
                                                                    </div>
                                                                </div>
                                                                <!--/ new address -->
                                                                {{--<button class="btn btn-primary nextBtn pull-right" type="button">مرحله دوم بعدی</button>--}}
                                                                {{--<button class="btn btn-primary nextBtn pull-right" id="stepTwoBtn" type="button" >مرحله بعدی</button>--}}
                                                            </div>
                                                            {{--                                                        </div>--}}
                                                        </div>
                                                        {{--                                                        <div class="row" id="-3">--}}
                                                        {{--                                                            <div class="col-xs-12">--}}
                                                        {{--                                                                <div class="col-md-12">--}}
                                                                                                                                                                                            {{\Session::put('orders' ,$orders)}}
                                                        {{--                                                                    <hr/>--}}
                                                        {{--                                                                    <h4 class="text-center">یکی از روش های پرداخت محصول را انتخاب کنید </h4>--}}

                                                        {{--                                                                    <div>--}}
                                                        {{--                                                                    </div>--}}
                                                        {{--                                                                    <input value="پرداخت" class="btn btn-success pull-right" id="paymentBtn"--}}
                                                        {{--                                                                           type="submit" style="margin-bottom: 24px; display: none">--}}
                                                        {{--                                                                    <input value="ثبت سفارش" class="btn btn-success pull-right" id="LocationPay"--}}
                                                        {{--                                                                           type="submit" style="margin-bottom: 24px; display: none">--}}
                                                        {{--                                                                </div>--}}
                                                        {{--                                                            </div>--}}
                                                        {{--                                                        </div>--}}
                                                        {{--                                                </form>--}}
                                                        {{--                                            </div>--}}
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <hr>
                                    </div>


                                    <div class="modal-footer modal-footer-cart">
                                        <button type="submit" class="btn record-order " id="orderBtn">{{__('settings.invoivePayment')}}</button>
                                    </div>

                                </form>
                            </div>


                            <!-- Right Block: cart subtotal & cart total -->
                            <div class="clearfix"></div>

                        </div>
                    </section>


                    <script type="text/javascript">
                        $(document).ready(function () {
                            var owl = $(".innovatoryFeatured");
                            owl.owlCarousel({
                                loop: true,
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

                </div>

            </div>
        </div>
    </section>
@endsection

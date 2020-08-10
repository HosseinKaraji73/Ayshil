@extends('FrontEnd.Layouts.master')


@if(App::getLocale() == 'fa')
    @section('title','ویدیو ها')
@elseif(App::getLocale() == 'en')
    @section('title','Videos')
@endif


@section('meta')

@endsection

@section('style')

    @if(App::getLocale() == 'fa')
        <link rel="stylesheet" href="{{asset('FrontEnd/css/RTL/videos.css')}}" type="text/css" media="all">
    @elseif(App::getLocale() == 'en')
        <link rel="stylesheet" href="{{asset('FrontEnd/css/LTR/videos.css')}}" type="text/css" media="all">
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
        <script type="text/javascript" src="{{asset('FrontEnd/js/RTL/video.js')}}"></script>
    @elseif(App::getLocale() == 'en')
        <script type="text/javascript" src="{{asset('FrontEnd/js/LTR/bottom-ff95c795.js')}}"></script>
        <script type="text/javascript" src="{{asset('FrontEnd/js/LTR/video.js')}}"></script>
    @endif

    <script>
        function AddsongGen() {
            var Addsongs = document.getElementById("passlinkID").value;
            var Addname = document.getElementById("nameID").value;
            var list = document.getElementById("td_youtube_playlist_video");
            // list.innerHTML += '<a ' + 'onclick="playSong(' + "'" + Addsongs + "','"
            //     + Addname + "'" + ')" class="' + Addsongs +
            //     ' td_click_video td_click_video_youtube" data-video-id="'
            //     + Addsongs + '"><div class="td_video_thumb" ><img src="https://img.youtube.com/vi/' + Addsongs +
            //     '/default.jpg" alt="Video thumbnail"></div> <div class="td_video_title_and_time"><div class="td_video_title">'
            //     + Addname + '</div> <div class="td_video_time">03:47</div></div></a>';
            document.getElementById("passlinkID").value = "";
            document.getElementById("nameID").value = "";
        }

        function EsongsGen() {
            var EsongsArray = {
                @foreach($FavVideos as $FavVideo)
                "{{$FavVideo->id}}": "{{$FavVideo->title}}",
                @endforeach
            };
            var Esongs = new Array(
                @foreach($FavVideos as $FavVideo)
                    "{{$FavVideo->id}}",
                @endforeach
                // "WUE0Dub7dZ4",
            );
            var list = document.getElementById("td_youtube_playlist_video");
            // Esongs.forEach(function (songID) {
            //
            //     list.innerHTML += '<a ' + 'onclick="playSong(' + "'" +
            //         songID + "','" + EsongsArray[songID] + "'" + ')" class="' +
            //         songID + ' td_click_video td_click_video_youtube" data-video-id="' +
            //         songID + '"><div class="td_video_thumb" ><img src="https://static.cdn.asset.aparat.com/avt/' + songID + '/default.jpg" alt="Video thumbnail"></div> <div class="td_video_title_and_time"><div id="' + songID + '" class="td_video_title">' + EsongsArray[songID] + '</div> <div id="dur' +
            //         songID + '" class="td_video_time">03:30</div></div></a>';
            // });
        }

        function AsongsGen() {
            var AsongsArray = {
                @foreach($FavVideos as $FavVideo)
                "{{$FavVideo->link}}": "{{$FavVideo->title}}",
                @endforeach
            };

            var Asongs = new Array(
                @foreach($FavVideos as $FavVideo)
                    "{{$FavVideo->link}}",
                @endforeach
                // "WUE0Dub7dZ4",
            );
            var list = document.getElementById("td_youtube_playlist_video");
            Asongs.forEach(function (songID) {
                list.innerHTML += '<a ' + 'onclick="playSong(' + "'" + songID + "','" + AsongsArray[songID] + "'" + ')" class="' + songID + ' td_click_video td_click_video_youtube" data-video-id="' + songID + '"><div class="td_video_thumb" ><img src="{{asset("img/admin/video")}}/' + songID + '.jpg" alt="Video thumbnail"></div> <div class="td_video_title_and_time"><div class="td_video_title">' + AsongsArray[songID] + '</div> <div class="td_video_time duration"></div></div></a>';
            });
        }

        function playSong(song, sTilte) {
            var player = document.getElementById("player_youtube");
            var SongTile = document.getElementById("playID");
            SongTile.innerHTML = sTilte;
            // player.innerHTML = '<iframe id="iframe' + song + '" src="https://www.aparat.com/v/' + song + '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
            player.innerHTML = '<style>.h_iframe-aparat_embed_frame{position:relative;}.h_iframe-aparat_embed_frame .ratio{display:block;width:100%;height:auto;}.h_iframe-aparat_embed_frame iframe{position:absolute;top:0;left:0;width:100%;height:100%;}</style><div class="h_iframe-aparat_embed_frame"><span style="display: block;padding-top: 57%"></span><iframe  id="iframe' + song + '" src="https://www.aparat.com/video/video/embed/videohash/' + song + '/vt/frame"  allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe></div>';

        }


        /*-----------------------Botton 3 Videos---------------------*/



        // $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
        //     event.preventDefault();
        //     $(this).ekkoLightbox();
        // });

    </script>

@endsection

@section('content')
    <section id="wrapper" style="margin-top: 20px">
        <aside id="notifications">
            <div class="container">
            </div>
        </aside>


        <div class="container">
            <div class="row">
                <div id="content-wrapper" class="left-column col-xs-12 col-md-12">

                    <div class="innovatoryBreadcrumb">
                        <nav data-depth="3" class="breadcrumb">
                            <ol itemscope itemtype="#">
                                <li itemprop="itemListElement" itemscope itemtype="#">
                                    <a itemprop="item" href="{{url('/')}}">
                                        <span itemprop="name">{{__('settings.homeRoute')}}</span> </a>
                                    <meta itemprop="position" content="1">
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="">
                                    <a itemprop="item" href="{{url('/videos')}}">
                                        <span itemprop="name">{{__('settings.videosRoute')}}</span> </a>
                                    <meta itemprop="position" content="2">
                                </li>

                            </ol>
                        </nav>
                    </div>

                    <div id="main">
                        <div id="content" class="page-home">

                            <body onload="EsongsGen(),AsongsGen()">
                            <div id="td_uid_7_5d9f731f9699b" class="tdc-row">
                                <div class="vc_row td_uid_14_5d9f731f969a8_rand  wpb_row td-pb-row">
                                    <div class="vc_column td_uid_15_5d9f731f96d86_rand  wpb_column vc_column_container tdc-column td-pb-span12">
                                        <div class="wpb_wrapper">
                                            <div class="td_block_wrap td_block_video_playlist td_uid_16_5d9f731f97589_rand">
                                                <div class="td_block_inner">
                                                    <div class="td_video_playlist_column_3">
                                                        <div class="td_video_playlist_title">
{{--                                                            <div id="titleplayer" class="td_video_title_text">Videoplayer--}}
{{--                                                                <input id="passlinkID" type="text" placeholder="Paste a youtube video id here to add to the list" value="">--}}
{{--                                                                <label for="name"></label>--}}
{{--                                                                <input id="nameID" placeholder="Give a name for the song" type="text">--}}
{{--                                                                <span id="buttonspanID"> <button id="AddbuttonID" onclick="AddsongGen()">Add</button>--}}
{{--                                                            </span>--}}
{{--                                                            </div>--}}
                                                        </div>
                                                        <div class="td_wrapper_video_playlist">
                                                            <div class="td_wrapper_player td_wrapper_playlist_player_youtube" data-first-video="" data-autoplay="1">
                                                                <div id="player_youtube">
                                                                    <iframe id="iframeAJtDXIazrMo" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                                                </div>
                                                            </div>
                                                            <div class="td_container_video_playlist ">
                                                                <div class="td_video_controls_playlist_wrapper">
                                                                    <div class="td_video_stop_play_control">
                                                                        <a id="aPlayID" class="td-sp-video-play td-sp td_youtube_control" onlclick="play(AJtDXIazrMo)">&nbsp;&gt; </a>
                                                                    </div>
                                                                    <div id="playID" class="td_current_video_play_title_youtube td_video_title_playing">
                                                                        {{__('settings.videoBoxSubject')}}
                                                                    </div>
                                                                    <div class="td_current_video_play_time_youtube td_video_time_playing">
                                                                    </div>
                                                                </div>

                                                                <div id="td_youtube_playlist_video" class="td_playlist_clickable ">
                                                                    <!---start of new song in the list-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </body>


                            <div class="container">
                                <h3 class="page-header" id="youtube-gallery" style="margin: 71px 0px 28px 0px;
text-align: center;
font-size: 30px;
font-family: titr;">{{__('settings.otherVideos')}}</h3>
                                <div class="row">

@foreach($videos as $video)
                                    <a class="col-sm-4 video voideo2" href="#" data-title="{{$video->title}}" onclick="playSong('{{$video->link}}','{{$video->title}}')" data-video-id="{{$video->link}}" data-width="1024" data-toggle="lightbox" data-gallery="youtubevideos">
                                        <button type="button" class="btn btn-play">
                                            <span class="glyphicon glyphicon-play fa fa-play-circle" aria-label="Play"></span>
                                        </button>
                                        <img src="{{asset("img/admin/video/$video->picture")}}" class="img-responsive">
                                        <div class="titlevideo">
                                            <span class="bvideo">{{$video->title}}</span>
                                        </div>
                                    </a>
@endforeach

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

@extends('FrontEnd.Layouts.master')

@if(App::getLocale() == 'fa')
    @section('title','نمایش اخبار')
@elseif(App::getLocale() == 'en')
    @section('title','News Details')
@endif
@section('meta')

@endsection

@section('style')
@endsection

@section('headScript')
    <script type="text/javascript">
        var baseDir = "https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/";

        var prestashop = {"cart":{"products":[],"totals":{"total":{"type":"total","label":"Total","amount":0,"value":"$0.00"},"total_including_tax":{"type":"total","label":"Total (tax incl.)","amount":0,"value":"$0.00"},"total_excluding_tax":{"type":"total","label":"Total (tax excl.)","amount":0,"value":"$0.00"}},"subtotals":{"products":{"type":"products","label":"Subtotal","amount":0,"value":"$0.00"},"discounts":null,"shipping":{"type":"shipping","label":"Shipping","amount":0,"value":"Free"},"tax":{"type":"tax","label":"Taxes","amount":0,"value":"$0.00"}},"products_count":0,"summary_string":"0 items","vouchers":{"allowed":0,"added":[]},"discounts":[],"minimalPurchase":0,"minimalPurchaseRequired":""},"currency":{"name":"US Dollar","iso_code":"USD","iso_code_num":"840","sign":"$"},"customer":{"lastname":null,"firstname":null,"email":null,"birthday":null,"newsletter":null,"newsletter_date_add":null,"optin":null,"website":null,"company":null,"siret":null,"ape":null,"is_logged":false,"gender":{"type":null,"name":null},"addresses":[]},"language":{"name":"English (English)","iso_code":"en","locale":"en-US","language_code":"en-us","is_rtl":"0","date_format_lite":"m\/d\/Y","date_format_full":"m\/d\/Y H:i:s","id":1},"page":{"title":"","canonical":null,"meta":{"title":"Demo Store","description":"","keywords":"","robots":"index"},"page_name":"module-itblog-details","body_classes":{"lang-en":true,"lang-rtl":false,"country-US":true,"currency-USD":true,"layout-left-column":true,"page-":true,"tax-display-disabled":true},"admin_notifications":[]},"shop":{"name":"Demo Store","logo":"\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/demo-store-logo-1555915547.jpg","stores_icon":"\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/logo_stores.png","favicon":"\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/favicon.ico"},"urls":{"base_url":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/","current_url":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/itblog\/8_Donec-tellus-Nulla-lorem.html","shop_domain_url":"https:\/\/innovatorythemes.com","img_ps_url":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/","img_cat_url":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/c\/","img_lang_url":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/l\/","img_prod_url":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/p\/","img_manu_url":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/m\/","img_sup_url":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/su\/","img_ship_url":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/s\/","img_store_url":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/st\/","img_col_url":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/co\/","img_url":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/themes\/IT1001\/assets\/img\/","css_url":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/themes\/IT1001\/assets\/css\/","js_url":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/themes\/IT1001\/assets\/js\/","pic_url":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/upload\/","pages":{"address":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/address","addresses":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/addresses","authentication":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/login","cart":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/cart","category":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/index.php?controller=category","cms":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/index.php?controller=cms","contact":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/contact-us","discount":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/discount","guest_tracking":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/guest-tracking","history":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/order-history","identity":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/identity","index":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/","my_account":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/my-account","order_confirmation":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/order-confirmation","order_detail":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/index.php?controller=order-detail","order_follow":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/order-follow","order":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/order","order_return":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/index.php?controller=order-return","order_slip":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/credit-slip","pagenotfound":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/page-not-found","password":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/password-recovery","pdf_invoice":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/index.php?controller=pdf-invoice","pdf_order_return":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/index.php?controller=pdf-order-return","pdf_order_slip":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/index.php?controller=pdf-order-slip","prices_drop":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/prices-drop","product":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/index.php?controller=product","search":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/search","sitemap":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/sitemap","stores":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/stores","supplier":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/supplier","register":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/login?create_account=1","order_login":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/order?login=1"},"alternative_langs":{"en-us":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/module\/itblog\/details?id_post=8","de-de":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/de\/module\/itblog\/details?id_post=8","fr-fr":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/fr\/module\/itblog\/details?id_post=8","es-es":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/es\/module\/itblog\/details?id_post=8","it-it":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/it\/module\/itblog\/details?id_post=8"},"theme_assets":"\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/themes\/IT1001\/assets\/","actions":{"logout":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/?mylogout="},"no_picture_image":{"bySize":{"small_default":{"url":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/p\/en-default-small_default.jpg","width":98,"height":111},"cart_default":{"url":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/p\/en-default-cart_default.jpg","width":125,"height":141},"medium_default":{"url":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/p\/en-default-medium_default.jpg","width":350,"height":396},"home_default":{"url":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/p\/en-default-home_default.jpg","width":350,"height":396},"large_default":{"url":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/p\/en-default-large_default.jpg","width":800,"height":905}},"small":{"url":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/p\/en-default-small_default.jpg","width":98,"height":111},"medium":{"url":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/p\/en-default-medium_default.jpg","width":350,"height":396},"large":{"url":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/img\/p\/en-default-large_default.jpg","width":800,"height":905},"legend":""}},"configuration":{"display_taxes_label":false,"is_catalog":false,"show_prices":true,"opt_in":{"partner":true},"quantity_discount":{"type":"discount","label":"Discount"},"voucher_enabled":0,"return_enabled":0},"field_required":[],"breadcrumb":{"links":[{"title":"Home","url":"https:\/\/innovatorythemes.com\/prestashop\/INNO02\/INNO1001_Cucina\/IT01\/en\/"}],"count":1},"link":{"protocol_link":"https:\/\/","protocol_content":"https:\/\/"},"time":1570653268,"static_token":"b37219994338861bc35224966f2f6efd","token":"3d579dc08fa30b63da91ad8e3f21049d"};

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

                        <nav data-depth="1" class="breadcrumb">
                            <ol itemscope itemtype="">

                                <li itemprop="itemListElement" itemscope itemtype="">
                                    <a itemprop="item" href="{{url('/')}}">
                                        <span itemprop="name">{{__('settings.homeRoute')}}</span>
                                    </a>
                                    <meta itemprop="position" content="1">
                                </li>

                            </ol>
                        </nav>
                    </div>
                    <div class="innovatoryBreadcrumb">
                        <nav data-depth="3" class="breadcrumb">
                            <ol itemscope itemtype="">
                                <li itemprop="itemListElement" itemscope itemtype="{{url('/')}}">
                                    <a itemprop="item" href="index.html">
                                        <span itemprop="name">{{__('settings.homeRoute')}}</span>
                                    </a>
                                    <meta itemprop="position" content="1">
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="">
                                    <a itemprop="item" href="{{url('/events')}}">
                                        <span itemprop="name">{{__('settings.newsRoute')}}</span>
                                    </a>
                                    <meta itemprop="position" content="2">
                                </li>
                                <li itemprop="itemListElement" itemscope itemtype="">
                                    <a itemprop="item" href="{{action('FrontEnd\ProductController@show' ,[$events->id,$events->title,$events->title_en])}}">
                                        <span itemprop="name">
                                              @if(App::getLocale() == 'fa')
                                                {{$events->title}}
                                            @elseif(App::getLocale() == 'en')
                                                {{$events->title_en}}
                                            @endif
                                        </span>

                                    </a>
                                    <meta itemprop="position" content="3">
                                </li>
                            </ol>
                        </nav>
                    </div>

                    <div id="content" class="block">

                        <div itemtype="#" itemscope="" id="sdsblogArticle" class="blog-post blog_post_content">

                            <div itemprop="articleBody">

                                <div id="lipsum" class="articleContent" style="width: 50%;
margin: 0 auto;
height: auto;
">

                                    <a id="post_images" href="#">

                                        <img src="{{asset("img/admin/event/$events->photo1")}}" alt="{{$events->title}}">

                                    </a>

                                </div>

                                <div class="bolg_des">

                                    <div class="sdsarticleHeader">

                                        <h1 class='sdstitle_block'>
                                            @if(App::getLocale() == 'fa')
                                                {{$events->title}}
                                            @elseif(App::getLocale() == 'en')
                                                {{$events->title_en}}
                                            @endif
                                        </h1>

                                    </div>

                                    <div class="blogdetail">

                                        <div>

{{--                                            <span class="author" itemprop="author"><i class="fa fa-user"></i>&nbsp;&nbsp;  نویسنده: &nbsp;آیشیل</span>&nbsp;&nbsp;--}}
{{--<span>/&nbsp;</span>--}}
                                            <span class="dateCreated" itemprop="dateCreated"><i class="fa fa-calendar"></i>&nbsp;&nbsp; {{__('settings.date')}}: {{$events->cteated_at_fa }}</span>&nbsp;&nbsp;

{{--                                            <span class="articleSection" itemprop="articleSection"><a href="category/1_uncategories.html"><i class="fa fa-tags"></i>&nbsp;&nbsp;Uncategories</a></span>&nbsp;&nbsp;--}}

{{--                                            <span class="blogcomment"><i class="fa fa-comments"></i>&nbsp;&nbsp;0 Comments</span>--}}

                                        </div>

                                        <a title="" style="display:none" itemprop="url" href="#"></a>

                                    </div>

                                    <div class="sdsarticle-des">

                                        <p>
                                            @if(App::getLocale() == 'fa')
                                                {!! $events->description  !!}
                                            @elseif(App::getLocale() == 'en')
                                                {!! $events->description_en  !!}
                                            @endif
                                        </p>

                                    </div>

                                </div>

                            </div>

                            <div class="sdsarticleBottom">

                            </div>

                        </div>

                    </div>
{{--                    <div class="itblog_block_inner">--}}
{{--                        <div class="sec-head-style mb-30 text-center">--}}
{{--                            <h3--}}
{{--                                class="page-heading">اخبار مرتبط</h3>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div--}}
{{--                                class="sdsblog-box-content block_content home_blog_post owl-carousel">--}}
{{--                                <div class="item sds_blog_post">--}}
{{--                                    <div class="blog_post">--}}
{{--                                        <div class="blog_post_content">--}}
{{--                                            <div class="news_module_image_holder post_thumbnail">--}}
{{--                                                <a class="thumbnail"--}}
{{--                                                   href="itblog/8_Donec-tellus-Nulla-lorem.html"><img--}}
{{--                                                        class="replace-2x img-responsive feat_img_small"--}}
{{--                                                        alt="Donec tellus Nulla lorem"--}}
{{--                                                        src="{{asset('FrontEnd/images/admin/articles/1.jpg')}}"--}}
{{--                                                        width="auto" height="auto"/></a>--}}
{{--                                                <span class="blogicons"><a--}}
{{--                                                        title="Click to view Full Image"--}}
{{--                                                        href="../modules/itblog/images/8-single-default.jpg"--}}
{{--                                                        rel="blog_group"--}}
{{--                                                        class="icon grouped_elements zoom ti-search"></a><a--}}
{{--                                                        title="Click to view Read More"--}}
{{--                                                        href="itblog/8_Donec-tellus-Nulla-lorem.html"--}}
{{--                                                        class="icon readmore ti-link"></a></span>--}}
{{--                                            </div>--}}
{{--                                            <div class="blog_content">--}}
{{--                                                <div class="blog_inner">--}}
{{--                                             <span class="blog_date"><span--}}
{{--                                                     class="day_date">11 / </span><span--}}
{{--                                                     class="day_month">Mar / </span><span--}}
{{--                                                     class="day_year">2019</span></span>--}}
{{--                                                    <h4 class="sds_post_title"><a--}}
{{--                                                            href="itblog/8_Donec-tellus-Nulla-lorem.html">Donec tellus Nulla lorem</a>--}}
{{--                                                    </h4>--}}
{{--                                                    <div class="itbloginfo">--}}
{{--                                                        <p class="desc">Nascetur ridiculus mus upon...</p>--}}
{{--                                                    </div>--}}
{{--                                                    <a href="itblog/8_Donec-tellus-Nulla-lorem.html"--}}
{{--                                                       class="btn btn-primary">ادامه...</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="item sds_blog_post">--}}
{{--                                    <div class="blog_post">--}}
{{--                                        <div class="blog_post_content">--}}
{{--                                            <div class="news_module_image_holder post_thumbnail">--}}
{{--                                                <a class="thumbnail"--}}
{{--                                                   href="itblog/7_Without-very-darkness.html"><img--}}
{{--                                                        class="replace-2x img-responsive feat_img_small"--}}
{{--                                                        alt="Without very darkness"--}}
{{--                                                        src="{{asset('FrontEnd/images/admin/articles/2.jpg')}}"--}}
{{--                                                        width="auto" height="auto"/></a>--}}
{{--                                                <span class="blogicons"><a--}}
{{--                                                        title="Click to view Full Image"--}}
{{--                                                        href="../modules/itblog/images/7-single-default.jpg"--}}
{{--                                                        rel="blog_group"--}}
{{--                                                        class="icon grouped_elements zoom ti-search"></a><a--}}
{{--                                                        title="Click to view Read More"--}}
{{--                                                        href="itblog/7_Without-very-darkness.html"--}}
{{--                                                        class="icon readmore ti-link"></a></span>--}}
{{--                                            </div>--}}
{{--                                            <div class="blog_content">--}}
{{--                                                <div class="blog_inner">--}}
{{--                                             <span class="blog_date"><span--}}
{{--                                                     class="day_date">11 / </span><span--}}
{{--                                                     class="day_month">Mar / </span><span--}}
{{--                                                     class="day_year">2019</span></span>--}}
{{--                                                    <h4 class="sds_post_title"><a--}}
{{--                                                            href="itblog/7_Without-very-darkness.html">Without very darkness</a>--}}
{{--                                                    </h4>--}}
{{--                                                    <div class="itbloginfo">--}}
{{--                                                        <p class="desc">Lorem Ipsum is simply dummy...</p>--}}
{{--                                                    </div>--}}
{{--                                                    <a href="itblog/7_Without-very-darkness.html"--}}
{{--                                                       class="btn btn-primary">ادامه...</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="item sds_blog_post">--}}
{{--                                    <div class="blog_post">--}}
{{--                                        <div class="blog_post_content">--}}
{{--                                            <div class="news_module_image_holder post_thumbnail">--}}
{{--                                                <a class="thumbnail"--}}
{{--                                                   href="itblog/6_Remaining-essentially.html"><img--}}
{{--                                                        class="replace-2x img-responsive feat_img_small"--}}
{{--                                                        alt="Remaining essentially"--}}
{{--                                                        src="{{asset('FrontEnd/images/admin/articles/3.jpg')}}"--}}
{{--                                                        width="auto" height="auto"/></a>--}}
{{--                                                <span class="blogicons"><a--}}
{{--                                                        title="Click to view Full Image"--}}
{{--                                                        href="../modules/itblog/images/6-single-default.jpg"--}}
{{--                                                        rel="blog_group"--}}
{{--                                                        class="icon grouped_elements zoom ti-search"></a><a--}}
{{--                                                        title="Click to view Read More"--}}
{{--                                                        href="itblog/6_Remaining-essentially.html"--}}
{{--                                                        class="icon readmore ti-link"></a></span>--}}
{{--                                            </div>--}}
{{--                                            <div class="blog_content">--}}
{{--                                                <div class="blog_inner">--}}
{{--                                             <span class="blog_date"><span--}}
{{--                                                     class="day_date">11 / </span><span--}}
{{--                                                     class="day_month">Mar / </span><span--}}
{{--                                                     class="day_year">2019</span></span>--}}
{{--                                                    <h4 class="sds_post_title"><a--}}
{{--                                                            href="itblog/6_Remaining-essentially.html">Remaining essentially</a>--}}
{{--                                                    </h4>--}}
{{--                                                    <div class="itbloginfo">--}}
{{--                                                        <p class="desc">Doctus omittam intellegam...</p>--}}
{{--                                                    </div>--}}
{{--                                                    <a href="itblog/6_Remaining-essentially.html"--}}
{{--                                                       class="btn btn-primary">ادامه...</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="item sds_blog_post">--}}
{{--                                    <div class="blog_post">--}}
{{--                                        <div class="blog_post_content">--}}
{{--                                            <div class="news_module_image_holder post_thumbnail">--}}
{{--                                                <a class="thumbnail"--}}
{{--                                                   href="itblog/5_Morbi-at-ligula-porta.html"><img--}}
{{--                                                        class="replace-2x img-responsive feat_img_small"--}}
{{--                                                        alt="Morbi at ligula porta"--}}
{{--                                                        src="../modules/itblog/images/5-home-default.jpg"--}}
{{--                                                        width="auto" height="auto"/></a>--}}
{{--                                                <span class="blogicons"><a--}}
{{--                                                        title="Click to view Full Image"--}}
{{--                                                        href="../modules/itblog/images/5-single-default.jpg"--}}
{{--                                                        rel="blog_group"--}}
{{--                                                        class="icon grouped_elements zoom ti-search"></a><a--}}
{{--                                                        title="Click to view Read More"--}}
{{--                                                        href="itblog/5_Morbi-at-ligula-porta.html"--}}
{{--                                                        class="icon readmore ti-link"></a></span>--}}
{{--                                            </div>--}}
{{--                                            <div class="blog_content">--}}
{{--                                                <div class="blog_inner">--}}
{{--                                             <span class="blog_date"><span--}}
{{--                                                     class="day_date">11 / </span><span--}}
{{--                                                     class="day_month">Mar / </span><span--}}
{{--                                                     class="day_year">2019</span></span>--}}
{{--                                                    <h4 class="sds_post_title"><a--}}
{{--                                                            href="itblog/5_Morbi-at-ligula-porta.html">Morbi at ligula porta</a>--}}
{{--                                                    </h4>--}}
{{--                                                    <div class="itbloginfo">--}}
{{--                                                        <p class="desc">Ei has mutat solum. Fugit...</p>--}}
{{--                                                    </div>--}}
{{--                                                    <a href="itblog/5_Morbi-at-ligula-porta.html"--}}
{{--                                                       class="btn btn-primary">ادامه...</a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}

{{--                    <div class="itblogcomments" id="respond">--}}

{{--                        <h4 class="comment-reply-title" id="reply-title">--}}

{{--                            Leave a Reply--}}

{{--                            <small style="float:right;">--}}

{{--                                <a style="display: none;" href="../../../../../../wp/sellya/sellya/this-is-a-post-with-preview-image/index.html#respond" id="cancel-comment-reply-link" rel="nofollow">Cancel Reply</a>--}}

{{--                            </small>--}}

{{--                        </h4>--}}

{{--                        <section id="commentInput" class="page-content card card-block">--}}

{{--                            <form action="" method="post" id="commentform">--}}

{{--                                <div class="form-group row">--}}

{{--                                    <label class="col-md-3 form-control-label required">--}}
{{--                                        <span class="required">*</span> Name:--}}

{{--                                    </label>--}}

{{--                                    <div class="col-md-9">--}}

{{--                                        <input class="form-control inputName grey" name="name" value="" maxlength="255" required="" type="text">--}}

{{--                                    </div>--}}

{{--                                </div>--}}

{{--                                <div class="form-group row">--}}

{{--                                    <label class="col-md-3 form-control-label required">--}}
{{--                                        <span class="required">*</span> E-mail:--}}

{{--                                        <span class="note">(Not Published)</span>--}}

{{--                                    </label>--}}

{{--                                    <div class="col-md-9">--}}

{{--                                        <input class="form-control inputMail grey" name="mail" value="" maxlength="255" required="" type="text">--}}

{{--                                    </div>--}}

{{--                                </div>--}}

{{--                                <div class="form-group row">--}}

{{--                                    <label class="col-md-3 form-control-label required">--}}

{{--                                        Website:--}}

{{--                                        <span class="note">(Site url withhttp://)</span>--}}

{{--                                    </label>--}}

{{--                                    <div class="col-md-9">--}}

{{--                                        <input class="form-control grey" name="website" value="" maxlength="255" required="" type="text">--}}

{{--                                    </div>--}}

{{--                                </div>--}}

{{--                                <div class="form-group row">--}}

{{--                                    <label class="col-md-3 form-control-label required">--}}
{{--                                        <span class="required">*</span> Comment:--}}

{{--                                    </label>--}}

{{--                                    <div class="col-md-9">--}}

{{--                                        <textarea class="form-control inputContent grey" name="comment" rows="8" cols="50" required=""></textarea>--}}

{{--                                    </div>--}}

{{--                                </div>--}}

{{--                                <div class="form-group row">--}}

{{--                                    <label class="col-md-3">--}}

{{--                                    </label>--}}

{{--                                    <div class="col-md-9">--}}

{{--                                        <img src="../../modules/itblog/classes/CaptchaSecurityImages.php-width=100&amp;height=40&amp;characters=5.html">--}}

{{--                                    </div>--}}

{{--                                </div>--}}

{{--                                <div class="form-group row">--}}

{{--                                    <label class="col-md-3 form-control-label required">--}}

{{--                                        Type Code--}}

{{--                                    </label>--}}

{{--                                    <div class="col-md-9">--}}

{{--                                        <input class="form-control itblogcaptcha grey" name="itblogcaptcha" value="" maxlength="255" required="" type="text">--}}

{{--                                    </div>--}}

{{--                                </div>--}}

{{--                                <input type='hidden' name='comment_post_ID' value='1478' id='comment_post_ID' />--}}

{{--                                <input type='hidden' name='id_post' value='8' id='id_post' />--}}

{{--                                <input type='hidden' name='comment_parent' id='comment_parent' value='0' />--}}

{{--                                <div class="right">--}}

{{--                                    <div class="submit">--}}

{{--                                        <input type="submit" name="addComment" id="submitComment" class="bbutton btn btn-default button-medium btn-primary" value="Submit">--}}

{{--                                    </div>--}}

{{--                                </div>--}}

{{--                            </form>--}}

{{--                        </section>--}}

{{--                    </div>--}}

                    <style>

                    </style>

                </div>

            </div>
        </div>
    </section>

@endsection

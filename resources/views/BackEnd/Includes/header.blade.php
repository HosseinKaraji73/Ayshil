<script>
    $(function () {
        // var loanding = "<p class='loanding'></p>";
        // var content_result = "<div id='itsearch_content_result'><a href='javascript:void(0)' id='close_search_query_nav'><span>" + close_text + "</span></a><div id='itsearch_data'  class='it-container'></div></div>";
        // var content_result = "<div id='itsearch_content_result'><div id='itsearch_data'  class='it-container'></div></div>";
        // $(content_result).insertAfter("#search_block_top");
        // $('#search_query_nav').click(function () {
        //     $("#search_block_top").addClass('show')
        // });
        // $('#close_search_query_nav').click(function () {
        //     $('#itsearch_content_result').slideUp(300);
        //     $("#search_block_top").removeClass('show')
        // });

        $('#searchbox input.search_query').keyup(function () {
            // $('.ac_results').remove();
            // $('#itsearch_data').html(loanding);
            // $('#itsearch_data').html(loanding);
            $('#itsearch_content_result').slideDown(0);
            if (this.value.length == '') {
                $('#itsearch_content_result').slideUp(0);
                $("#search_block_top").removeClass('show')
            }

            $keyword = $('.search_query').val();

            $.ajax({
                type: 'get',
                url: '{{URL::to('/')}}',
                data: {'keyword': $keyword},
                success: function (data) {
                    $('#itsearch_data').html(data);
                }
            });
        });
    });

</script>




<header id="header">
    <div class="header-banner"></div>
    <nav class="header-nav">
        <div class="container">
            <div class="row">
                <div class="hidden-md-down">
                    <div class="Nav col-sm-12 col-md-12 col-xs-12">
                        <div class="dropdown js-dropdown customer-account">
                            <i class="fa fa-user-circle user-icon" aria-hidden="true"></i>


                            @if (Route::has('login'))
                                @auth

                                    @if(isset(Auth::user()->name))
                                        <span class="expand-more expand-fa" data-toggle="dropdown">{{Auth::user()->name}}</span>
                                    @else
                                        <span class="expand-more expand-fa" data-toggle="dropdown">{{Auth::user()->mobile}}</span>
                                    @endif

                                    <div class="dropdown-menu">
                                        <div id="_desktop_user_info">
                                            <div class="user-info language-selector innovatory-user-info">


                                                <div class="user-info-wrap hidden-lg-up">
                                                    <i class="fa fa-user-circle user-icon" aria-hidden="true"></i>
                                                    <div class="user-info-btn">
                                                        @if(isset(Auth::user()->name))
                                                            <a href="{{ url('/') }}" rel="nofollow">{{Auth::user()->name}}</a>
                                                        @else
                                                            <a href="{{ url('/') }}" rel="nofollow">{{Auth::user()->mobile}}</a>

                                                        @endif

                                                        @if(Auth::user()->roleId == 0)
                                                            <a href="{{url('/panel/admin/profile')}}" class="register">{{__('auth.viewPrpfile')}}</a>
                                                        @elseif(Auth::user()->roleId == 1)
                                                            <a href="{{url('/panel/owner/profile')}}" class="register">{{__('auth.viewPrpfile')}}</a>
                                                        @else
                                                            <a href="{{url('/panel/user/profile')}}" class="register">{{__('auth.viewPrpfile')}}</a>
                                                        @endif

                                                        <a href="{{ route('logout') }}" class="register"
                                                           onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                                                            {{__('auth.logout')}}
                                                            <span class="fa fa-sign-out"></span>

                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                              style="display: none;">
                                                            {{ csrf_field() }}
                                                        </form>
                                                    </div>
                                                </div>


                                                <ul class="dropdown-menu hidden-md-down">
                                                    @if(Auth::user()->roleId == 0)
                                                        <li>
                                                            <a class="dropdown-item" href="{{url('/panel/admin/profile')}}" class="register" target="_blank">{{__('auth.viewPrpfile')}}</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="{{url('/panel/admin/profile')}}" class="register" target="_blank">{{__('settings.order')}}</a>
                                                        </li>
                                                    @elseif(Auth::user()->roleId == 1)
                                                        <li>
                                                            <a class="dropdown-item" href="{{url('/panel/owner/profile')}}" class="register" target="_blank">{{__('auth.viewPrpfile')}}</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="{{url('/panel/owner/profile')}}" class="register" target="_blank">{{__('settings.order')}}</a>
                                                        </li>
                                                    @else
                                                        <li>
                                                            <a class="dropdown-item" href="{{url('/panel/user/profile')}}" class="register" target="_blank">{{__('auth.viewPrpfile')}}</a>
                                                        <li>
                                                            <a class="dropdown-item" href="{{url('/panel/user/profile')}}" class="register" target="_blank">{{__('settings.order')}}</a>
                                                        </li>
                                                    @endif


                                                    <li>
                                                        {{--                                                        <a class="dropdown-item" href="{{ route('logout') }}" rel="nofollow">{{__('auth.logout')}}</a>--}}
                                                        <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                            {{__('auth.logout')}}

                                                            <span class="fa fa-sign-out"></span>
                                                        </a>
                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                              style="display: none;">
                                                            {{ csrf_field() }}
                                                        </form>

                                                    </li>


                                                </ul>

                                            </div>
                                        </div>
                                        <script type="text/javascript">
                                            var wishlistProductsIds = '';
                                            var baseDir = 'https://innovatorythemes.com/prestashop/INNO02/INNO1001_Cucina/IT01/';
                                            var static_token = 'b37219994338861bc35224966f2f6efd';
                                            var isLogged = '0';
                                            var loggin_required = 'You must be logged in to manage your wishlist.';
                                            var added_to_wishlist = 'The product was successfully added to your wishlist.';
                                            var mywishlist_url = 'https://innovatorythemes.com/prestashop/INNO02/INNO1001_Cucina/IT01/en/module/blockwishlist/mywishlist';
                                            var isLoggedWishlist = false;
                                        </script>
                                    </div>

                                @else


                                    <span class="expand-more expand-fa" data-toggle="dropdown">{{__('settings.myProfile')}}</span>
                                    <div class="dropdown-menu">
                                        <div id="_desktop_user_info">
                                            <div class="user-info language-selector innovatory-user-info">


                                                <div class="user-info-wrap hidden-lg-up">
                                                    <i class="fa fa-user-circle user-icon" aria-hidden="true"></i>
                                                    <div class="user-info-btn">

                                                        <a href="{{ route('login') }}" rel="nofollow">{{__('settings.login')}}</a>
                                                        <a href="{{ route('register') }}" class="register">{{__('settings.reister')}}</a>
                                                    </div>
                                                </div>

                                                <ul class="dropdown-menu hidden-md-down">
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('login') }}" rel="nofollow">{{__('settings.login')}}</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('register') }}" class="register">{{__('settings.reister')}}</a>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                        <script type="text/javascript">
                                            var wishlistProductsIds = '';
                                            var baseDir = 'https://innovatorythemes.com/prestashop/INNO02/INNO1001_Cucina/IT01/';
                                            var static_token = 'b37219994338861bc35224966f2f6efd';
                                            var isLogged = '0';
                                            var loggin_required = 'You must be logged in to manage your wishlist.';
                                            var added_to_wishlist = 'The product was successfully added to your wishlist.';
                                            var mywishlist_url = 'https://innovatorythemes.com/prestashop/INNO02/INNO1001_Cucina/IT01/en/module/blockwishlist/mywishlist';
                                            var isLoggedWishlist = false;
                                        </script>
                                    </div>

                                @endauth
                            @endif


                        </div>

                        <p class="pull-left">{{__('settings.welcome')}}</p>

                        {{--                        <div id="_desktop_language_selector">--}}
                        {{--                            <div class="language-selector-wrapper">--}}
                        {{--                                <div class="language-selector dropdown js-dropdown">--}}
                        {{--                                    @if(App::getLocale() == 'fa')--}}
                        {{--                                        <img alt="English" src="{{asset('FrontEnd/images/settings/fa-flag.jpg')}}" width="auto" height="auto"/>--}}
                        {{--                                        <span class="hidden-md-down expand-more" data-toggle="dropdown">فارسی</span>--}}
                        {{--                                    @elseif(App::getLocale() == 'en')--}}
                        {{--                                        <img alt="English" src="{{asset('FrontEnd/images/settings/en-flag.jpg')}}" width="auto" height="auto"/>--}}
                        {{--                                        <span class="hidden-md-down expand-more" data-toggle="dropdown">English</span>--}}
                        {{--                                    @endif--}}

                        {{--                                    <ul class="hidden-md-down dropdown-menu">--}}

                        {{--                                        <li class="current">--}}
                        {{--                                            --}}{{--                                            <a href="{{Route::currentRouteName(),'fa'}}" class="dropdown-item">--}}
                        {{--                                            <a href="{{url('Localization/fa')}}" class="dropdown-item">--}}
                        {{--                                                <img alt="English" src="{{asset('FrontEnd/images/settings/fa-flag.jpg')}}" width="auto" height="auto"/>--}}
                        {{--                                                {{__('settings.headerFaLan')}}--}}
                        {{--                                            </a>--}}
                        {{--                                        </li>--}}

                        {{--                                        <li>--}}
                        {{--                                            <a href="{{url('Localization/en')}}" class="dropdown-item">--}}
                        {{--                                                <img alt="Deutsch" src="{{asset('FrontEnd/images/settings/en-flag.jpg')}}" width="auto" height="auto"/>--}}
                        {{--                                                {{__('settings.headerEnLan')}}--}}
                        {{--                                            </a>--}}
                        {{--                                        </li>--}}

                        {{--                                    </ul>--}}

                        {{--                                    <select class="link hidden-lg-up">--}}

                        {{--                                        <option value="{{url('Localization/fa')}}" selected="selected">{{__('settings.headerFaLan')}}</option>--}}
                        {{--                                        <option value="{{url('Localization/en')}}">{{__('settings.headerEnLan')}}</option>--}}

                        {{--                                    </select>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                        <div id="_desktop_currency_selector">--}}
                        {{--                            <div class="currency-selector-wrapper">--}}
                        {{--                                <div class="language-selector dropdown js-dropdown">--}}
                        {{--                                    <span class="hidden-md-down expand-more" data-toggle="dropdown">USD</span>--}}
                        {{--                                    <ul class="hidden-md-down dropdown-menu">--}}
                        {{--                                        <li><a title="Euro" rel="nofollow"--}}
                        {{--                                               href="index-SubmitCurrency=1&amp;id_currency=4.html"--}}
                        {{--                                               class="dropdown-item">EUR €</a></li>--}}
                        {{--                                        <li class="current"><a title="US Dollar" rel="nofollow"--}}
                        {{--                                                               href="index-SubmitCurrency=1&amp;id_currency=1.html"--}}
                        {{--                                                               class="dropdown-item">USD $</a></li>--}}
                        {{--                                    </ul>--}}
                        {{--                                    <select class="link hidden-lg-up">--}}
                        {{--                                        <option value="index-SubmitCurrency=1&amp;id_currency=4.html">EUR €</option>--}}
                        {{--                                        <option value="index-SubmitCurrency=1&amp;id_currency=1.html"--}}
                        {{--                                                selected="selected">USD $--}}
                        {{--                                        </option>--}}
                        {{--                                    </select>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="mobile-menu-meta">
            <div class="container">
                <div class="row">
                    <div class="mobile-logo-bar">
                        <div id="menu-icon"><i class="mdi mdi-menu" aria-hidden="true"></i></div>
                        <div class="top-logo" id="_mobile_logo"></div>
                        <div id="_mobile_cart"></div>
                    </div>
                </div>
            </div>
            <div class="mobile-search-bar">
                <div class="container">
                    <div id="_mobile_search" class="innovatoryDisplaySearch search-wrapMob"></div>
                </div>
            </div>
        </div>
    </nav>
    <div class="sidebar-overlay"></div>
    <div id="mobile_top_menu_wrapper" class="row hidden-lg-up">
        <a class="close-sidebar pull-right"><i class="ti-close"></i></a>
        <div id="_mobile_user_info"></div>
        <div class="js-top-menu-bottom">









            <!-- Module Megamenu-->
            <div class="it-menu-horizontal">
                <h4 class="menu-tit hidden-lg-up"><i class="ti-menu"></i>{{__('settings.menu')}}</h4>
                <ul class="menu-content">

                    <li class="level-1 ">
                        <a href="{{url('/')}}"><span>{{__('settings.menu1')}}</span></a>
                        <span class="icon-drop-mobile"></span>
                    </li>
                    <li class="level-1 ">
                        <a href="{{url('/products')}}"><span>{{__('settings.menu2')}}</span></a>
                        <span class="icon-drop-mobile"></span>
                    </li>

                    <li class="level-1 ">
                        <a href="{{url('/activate-carbon')}}"><span>{{__('settings.menu3')}}</span></a>
                        <span class="icon-drop-mobile"></span>
                    </li>
                    <li class="level-1 ">
                        <a href="{{url('/videos')}}"><span>{{__('settings.menu4')}}</span></a>
                        <span class="icon-drop-mobile"></span>
                    </li>
                    <li class="level-1 ">
                        <a href="{{url('/events')}}"><span>{{__('settings.menu5')}}</span></a>
                        <span class="icon-drop-mobile"></span>
                    </li>
                    <li class="level-1 ">
                        <a href="{{url('/about-us')}}"><span>{{__('settings.menu6')}}</span></a>
                        <span class="icon-drop-mobile"></span>
                    </li>
                    <li class="level-1 ">
                        <a href="{{url('/call-us')}}"><span>{{__('settings.menu7')}}</span></a>
                        <span class="icon-drop-mobile"></span>
                    </li>
                </ul>
            </div>
            <!-- /Module Megamenu -->


            <div id="_mobile_vegamenu"></div>
            <div class="slidetoggle mobile-sidebar-meta mb-30">
                {{--                <h4 class="menu-tit hidden-lg-up slidetoggle-init">--}}
                {{--                    <i class="ti-settings"></i>--}}
                {{--                    {{__('settings.language')}}--}}
                {{--                </h4>--}}
                {{--                <div class="slidetoggle-menu">--}}
                {{--                    <div id="_mobile_language_selector" class="col-xs-6"></div>--}}
                {{--                    <div id="_mobile_currency_selector" class="col-xs-6"></div>--}}
                {{--                    <div id="_mobile_wishtlistTop" class="col-xs-6"></div>--}}
                {{--                    <div class="clearfix"></div>--}}
                {{--                </div>--}}
            </div>


            <div class="it-menu-horizontal">
                <h4 class="menu-tit hidden-lg-up"><i class="ti-settings"></i>
                    {{__('settings.language')}}
                    @if(App::getLocale() == 'fa')
                        <img alt="English" src="{{asset('FrontEnd/images/settings/fa-flag.jpg')}}" width="auto" height="auto"/>
                        <span class="hidden-md-down expand-more" data-toggle="dropdown">فارسی</span>
                    @elseif(App::getLocale() == 'en')
                        <img alt="English" src="{{asset('FrontEnd/images/settings/en-flag.jpg')}}" width="auto" height="auto"/>
                        <span class="hidden-md-down expand-more" data-toggle="dropdown">English</span>
                    @endif
                </h4>
                <ul class="menu-content">

                    <li class="level-1 ">
                        <a href="{{url('Localization/fa')}}" class="dropdown-item">
                            <img alt="English" src="{{asset('FrontEnd/images/settings/fa-flag.jpg')}}" width="auto" height="auto"/>
                            {{__('settings.headerFaLan')}}
                        </a>
                        <span class="icon-drop-mobile"></span>
                    </li>
                    <li class="level-1">
                        <a href="{{url('Localization/en')}}" class="dropdown-item">
                            <img alt="Deutsch" src="{{asset('FrontEnd/images/settings/en-flag.jpg')}}" width="auto" height="auto"/>
                            {{__('settings.headerEnLan')}}
                        </a> <span class="icon-drop-mobile"></span>
                    </li>
                </ul>
            </div>


        </div>
    </div>


    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="valign-middle">
                    <div class="hidden-md-down innovatoryLogo col-md-12 col-lg-12" id="_desktop_logo">
                        <a href="{{url('/')}}" style="display: block;width: 18%;margin: 0 auto">
                            <img class="logo img-responsive" src="{{asset('FrontEnd/images/settings/header-logo.png')}}" width="auto" height="auto" alt="Demo Store">
                        </a>
                    </div>

                    {{--                    <div class="hidden-md-down search-wrap col-lg-6">--}}
                    {{--                        <div id="_desktop_search" class="innovatoryDisplaySearch hidden-md-down">--}}
                    {{--                            <a href="{{url('/')}}">--}}
                    {{--                                <img class="logo img-responsive" src="{{asset('FrontEnd/images/settings/header-logo.png')}}" width="auto" height="auto" alt="Demo Store">--}}
                    {{--                            </a>--}}

                    {{--                        </div>--}}
                    {{--                    </div>--}}

                    {{--                    <div class="col-md-3 nav-right text-right hidden-md-down col-lg-3">--}}
                    {{--                        <div class="icon-wrap-circle">--}}
                    {{--                            <span class="icon"><i class="icon"></i>--}}
                    {{--                            </span>--}}
                    {{--                            <div class="user-content-right">--}}
                    {{--                                <span class="icon-wrap-tit">{{__('settings.phoneHeader')}}</span>--}}
                    {{--                                <span class="nav-total">{{__('settings.workingtime')}}</span>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="full-nav">
            <div class="container">
                <div class="row">


                    <!-------------- Start sub menu MOshtarak bein windows va gooshi -------------->

                    <div class="col-lg-3" id="_desktop_vegamenu">
                        <div class="container_it_vegamenu mb-30">
                            <div class="it-menu-vertical clearfix">

                                <div class="title-menu">
                                    <i class="ti-menu"></i>
                                    <span class="hidden-md-down">{{__('settings.categories')}}</span>
                                    <span class="hidden-lg-up">{{__('settings.categories')}}</span>
                                </div>
                                <div class="menu-vertical">
                                    <ul class="menu-content">
                                        {{--                                        <li class="innovatoryCart level-1 parent ">--}}
                                        {{--                                            <a href="3-cookware.html" class="">--}}
                                        {{--                                                <span>Cookware</span>--}}
                                        {{--                                            </a>--}}
                                        {{--                                            <span class="icon-drop-mobile"></span>--}}

                                        {{--                                            <ul class="menu-dropdown cat-drop-menu it-sub-auto">--}}
                                        {{--                                                <li class="innovatoryCart level-2 ">--}}
                                        {{--                                                    <a href="4-kitchen-tools.html" class="">--}}
                                        {{--                                                        <span>Kitchen Tools</span>--}}
                                        {{--                                                    </a>--}}
                                        {{--                                                </li>--}}

                                        {{--                                                <li class="innovatoryCart level-2 ">--}}
                                        {{--                                                    <a href="5-kitchen-storage.html" class="">--}}
                                        {{--                                                        <span>Kitchen Storage</span>--}}
                                        {{--                                                    </a>--}}
                                        {{--                                                </li>--}}

                                        {{--                                                <li class="innovatoryCart level-2 ">--}}
                                        {{--                                                    <a href="19-fry-pans.html" class="">--}}
                                        {{--                                                        <span>Fry Pans</span>--}}
                                        {{--                                                    </a>--}}
                                        {{--                                                </li>--}}

                                        {{--                                            </ul>--}}
                                        {{--                                        </li>--}}
                                        {{--                                        <li class="level-1  parent">--}}
                                        {{--                                            <a href="4-kitchen-tools.html" class="">--}}
                                        {{--                                                <span>Kitchen Tools</span>--}}
                                        {{--                                            </a>--}}
                                        {{--                                            <span class="icon-drop-mobile"></span>--}}
                                        {{--                                            <div class="it-sub-menu menu-dropdown col-xs-12 column-3 col-sm-6 it-sub-center">--}}
                                        {{--                                                <div class="it-menu-row row ">--}}
                                        {{--                                                    <div class="it-menu-col col-xs-12 col-sm-3  CAT">--}}
                                        {{--                                                        <ul class="ul-column">--}}
                                        {{--                                                            <li class="menu-item  item-header ">--}}
                                        {{--                                                                <a href="3-cookware.html">Cookware</a>--}}
                                        {{--                                                            </li>--}}
                                        {{--                                                            <li class="menu-item  item-line ">--}}
                                        {{--                                                                <a href="5-kitchen-storage.html">Kitchen Storage</a>--}}
                                        {{--                                                            </li>--}}
                                        {{--                                                            <li class="menu-item  item-line ">--}}
                                        {{--                                                                <a href="9-tableware.html">Tableware</a>--}}
                                        {{--                                                            </li>--}}
                                        {{--                                                            <li class="menu-item  item-line ">--}}
                                        {{--                                                                <a href="6-backing-ware.html">Backing ware</a>--}}
                                        {{--                                                            </li>--}}
                                        {{--                                                            <li class="menu-item  item-line ">--}}
                                        {{--                                                                <a href="18-bakeware-sets.html">Bakeware Sets</a>--}}
                                        {{--                                                            </li>--}}
                                        {{--                                                            <li class="menu-item  item-line ">--}}
                                        {{--                                                                <a href="7-juicer.html">Juicer</a>--}}
                                        {{--                                                            </li>--}}
                                        {{--                                                        </ul>--}}
                                        {{--                                                    </div>--}}

                                        {{--                                                    <div class="it-menu-col col-xs-12 col-sm-3  CAT">--}}
                                        {{--                                                        <ul class="ul-column ">--}}
                                        {{--                                                            <li class="menu-item  item-header ">--}}
                                        {{--                                                                <a href="6-backing-ware.html">Backing ware</a>--}}
                                        {{--                                                            </li>--}}
                                        {{--                                                            <li class="menu-item  item-line ">--}}
                                        {{--                                                                <a href="9-tableware.html">Tableware</a>--}}
                                        {{--                                                            </li>--}}
                                        {{--                                                            <li class="menu-item  item-line ">--}}
                                        {{--                                                                <a href="8-kitchen-container.html">Kitchen Container</a>--}}
                                        {{--                                                            </li>--}}
                                        {{--                                                            <li class="menu-item  item-line ">--}}
                                        {{--                                                                <a href="18-bakeware-sets.html">Bakeware Sets</a>--}}
                                        {{--                                                            </li>--}}
                                        {{--                                                            <li class="menu-item  item-line ">--}}
                                        {{--                                                                <a href="3-cookware.html">Cookware</a>--}}
                                        {{--                                                            </li>--}}
                                        {{--                                                            <li class="menu-item  item-line ">--}}
                                        {{--                                                                <a href="7-juicer.html">Juicer</a>--}}
                                        {{--                                                            </li>--}}
                                        {{--                                                        </ul>--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                    <div class="it-menu-col col-xs-12 col-sm-3  CAT">--}}
                                        {{--                                                        <ul class="ul-column ">--}}
                                        {{--                                                            <li class="menu-item  item-header ">--}}
                                        {{--                                                                <a href="22-kitchen-appliances.html">Kitchen Appliances</a>--}}
                                        {{--                                                            </li>--}}
                                        {{--                                                            <li class="menu-item  item-line ">--}}
                                        {{--                                                                <a href="27-sandwich-makers.html">Sandwich Makers</a>--}}
                                        {{--                                                            </li>--}}
                                        {{--                                                            <li class="menu-item  item-line ">--}}
                                        {{--                                                                <a href="26-microwave.html">Microwave</a>--}}
                                        {{--                                                            </li>--}}
                                        {{--                                                            <li class="menu-item  item-line ">--}}
                                        {{--                                                                <a href="28-dishwasher.html">Dishwasher</a>--}}
                                        {{--                                                            </li>--}}
                                        {{--                                                            <li class="menu-item  item-line ">--}}
                                        {{--                                                                <a href="13-chopping-boards.html">Chopping Boards</a>--}}
                                        {{--                                                            </li>--}}
                                        {{--                                                            <li class="menu-item  item-line ">--}}
                                        {{--                                                                <a href="5-kitchen-storage.html">Kitchen Storage</a>--}}
                                        {{--                                                            </li>--}}
                                        {{--                                                        </ul>--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                    <div class="it-menu-col col-xs-12 col-sm-3 menu-banner CAT">--}}
                                        {{--                                                        <ul class="ul-column ">--}}
                                        {{--                                                            <li class="menu-item  item-line ">--}}
                                        {{--                                                                <a href="#"></a>--}}
                                        {{--                                                                <div class="html-block">--}}
                                        {{--                                                                    <div class="banner-col">--}}
                                        {{--                                                                        <a href="#">--}}
                                        {{--                                                                            <img src="../modules/itvegamenu/views/img/menu-banner-1.jpg" width="auto" height="auto" alt=""/>--}}
                                        {{--                                                                        </a>--}}
                                        {{--                                                                    </div>--}}
                                        {{--                                                                </div>--}}
                                        {{--                                                            </li>--}}
                                        {{--                                                        </ul>--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </li>--}}


                                        <li class="level-1  parent">
                                            {{--                                            @if(App::getLocale() == 'fa')--}}
                                            {{--                                                @foreach($errors as $menuProducts)--}}
                                            {{--                                                <a href="#" class=""><span>{{$menuProducts->name}}</span></a>--}}
                                            {{--                                                @endforeach--}}
                                            {{--                                            @elseif(App::getLocale() == 'en')--}}
                                            {{--                                                @foreach($errors as $menuProducts)--}}
                                            {{--                                                    <a href="#" class="" ><span>{{$menuProducts->name_en}}</span></a>--}}
                                            {{--                                                @endforeach--}}
                                            {{--                                            @endif--}}

                                            <a href="#" class="" ><span>{{__('settings.allMenus')}}</span></a>

                                            <span class="icon-drop-mobile"></span>
                                            <div class="it-sub-menu menu-dropdown col-xs-12 column-3 column-3 it-sub-top">
                                                <div class="it-menu-row row ">



                                                    @if(App::getLocale() == 'fa')

                                                        @foreach($menuProducts as $menuProducts)
                                                            <div class="it-menu-col col-xs-12 col-sm-3  CAT">
                                                                <ul class="ul-column ">
                                                                    <li class="menu-item  item-header ">
                                                                        <a href="#">{{$menuProducts->name}}</a>
                                                                    </li>
                                                                    @foreach($submenu[$menuProducts->id] as $subMenuProduct)
                                                                        <li class="menu-item  item-line ">
                                                                            <a href="{{action('FrontEnd\ProductController@subMenuShow' ,[$subMenuProduct->id,$subMenuProduct->menuProducts_id,$subMenuProduct->name,$subMenuProduct->name_en])}}">{{$subMenuProduct->name}}</a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        @endforeach

                                                    @elseif(App::getLocale() == 'en')

                                                        @foreach($menuProducts as $menuProducts)
                                                            <div class="it-menu-col col-xs-12 col-sm-3  CAT">
                                                                <ul class="ul-column ">
                                                                    <li class="menu-item  item-header ">
                                                                        <a href="#">{{$menuProducts->name_en}}</a>
                                                                    </li>
                                                                    @foreach($submenu[$menuProducts->id] as $subMenuProduct)
                                                                        <li class="menu-item  item-line ">
                                                                            <a href="{{action('FrontEnd\ProductController@subMenuShow' ,[$subMenuProduct->id,$subMenuProduct->menuProducts_id,$subMenuProduct->name,$subMenuProduct->name_en])}}">{{$subMenuProduct->name_en}}</a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        @endforeach

                                                    @endif


                                                </div>
                                                <div class="it-menu-row row menu-banner mt-20">
                                                    <div class="it-menu-col col-xs-12 col-sm-6  CAT">
                                                        <ul class="ul-column ">
                                                            <li class="menu-item  item-line ">
                                                                <a href="#"></a>
                                                                <div class="html-block">
                                                                    <div class="banner-col"><a href="#">
                                                                            <img src="{{asset("img/admin/setting/$menuPic->photo7")}}" width="auto" height="auto" alt=""/>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="it-menu-col col-xs-12 col-sm-6  CAT">
                                                        <ul class="ul-column ">
                                                            <li class="menu-item  item-line ">
                                                                <a href="#"></a>
                                                                <div class="html-block">
                                                                    <div class="banner-col"><a href="#">
                                                                            <img src="{{asset("img/admin/setting/$menuPic->photo8")}}" width="auto" height="auto" alt=""/>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        {{--                                        <li class="level-1 ">--}}
                                        {{--                                            <a href="20-serveware.html" class="">--}}
                                        {{--                                                <span>دسته دوم</span>--}}
                                        {{--                                            </a>--}}
                                        {{--                                            <span class="icon-drop-mobile"></span>--}}
                                        {{--                                        </li>--}}

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---------- End sub menu MOshtarak bein windows va gooshi-->


                    <!-------------- Start windows menu bar --------->

                    <div class="container_it_megamenu hidden-md-down col-lg-7">
                        <div class="innovatoryMegamenu"><!-- Module Megamenu-->
                            <div class="it-menu-horizontal">

                                <h4 class="menu-tit hidden-lg-up"><i class="ti-menu"></i>{{__('settings.menu')}}</h4>
                                <ul class="menu-content">
                                    <li class="level-1 ">
                                        <a href="{{url('/')}}"><span>{{__('settings.menu1')}}</span></a>
                                        <span class="icon-drop-mobile"></span>
                                    </li>
                                    <li class="level-1 ">
                                        <a href="{{url('/products')}}"><span>{{__('settings.menu2')}}</span></a>
                                        <span class="icon-drop-mobile"></span>
                                    </li>

                                    <li class="level-1 ">
                                        <a href="{{url('/activate-carbon')}}"><span>{{__('settings.menu3')}}</span></a>
                                        <span class="icon-drop-mobile"></span>
                                    </li>
                                    <li class="level-1 ">
                                        <a href="{{url('/videos')}}"><span>{{__('settings.menu4')}}</span></a>
                                        <span class="icon-drop-mobile"></span>
                                    </li>
                                    <li class="level-1 ">
                                        <a href="{{url('/events')}}"><span>{{__('settings.menu5')}}</span></a>
                                        <span class="icon-drop-mobile"></span>
                                    </li>
                                    <li class="level-1 ">
                                        <a href="{{url('/about-us')}}"><span>{{__('settings.menu6')}}</span></a>
                                        <span class="icon-drop-mobile"></span>
                                    </li>
                                    <li class="level-1 ">
                                        <a href="{{url('/call-us')}}"><span>{{__('settings.menu7')}}</span></a>
                                        <span class="icon-drop-mobile"></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-------------- End windows menu bar ------------>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block top-15">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <div class="col-lg-2">
                        {{--                        <a href="{{route('cart.index')}}">--}}
                        <div id="_desktop_cart">


                            <div class="blockcart innovatory-cart">
                                <a href="{{route('cart.index')}}" class="cart" rel="nofollow" >
                                    <span class="icon"></span>
                                    <div class="cart-content-right">
                                        <span class="cart-text text-uppercase hidden-md-down">{{__('settings.cart')}}</span>
                                        {{--                                        <div class="blockcart cart-preview"--}}
                                        {{--                                             data-refresh-url=""--}}
                                        {{--                                             data-cartitems="0">--}}
                                        {{--                                            <div class="header">--}}
                                        {{--                                                <a class="cart_size"--}}
                                        {{--                                                   rel="nofollow"--}}
                                        {{--                                                   data-toggle="modal"--}}
                                        {{--                                                   data-target="#cart"> (<span class="item_total total-count persian-digit"></span>)--}}
                                        {{--                                                </a>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}


                                        @if(App::getLocale() == 'fa')
                                            (<span class="cart-products-count hidden-md-down item_total total-count persian-digit"></span>)
                                        @elseif(App::getLocale() == 'en')
                                            (<span class="cart-products-count hidden-md-down item_total total-count"></span>)
                                        @endif
                                        {{--                                            <span class="cart-products-count hidden-lg-up">(0)</span>--}}
                                    </div>

                                </a>
                                {{--                                <div class="cart_block block exclusive">--}}
                                {{--                                    <i class="empty-cart-icon"></i>--}}
                                {{--                                    <p class="no-item">{{__('settings.cartEmpty')}}</p>--}}
                                {{--                                </div>--}}
                                {{--                                <script> if (window.jQuery) {--}}
                                {{--                                        $(document).ready(function () {--}}
                                {{--                                            accordionCart();--}}
                                {{--                                        });--}}
                                {{--                                    }--}}
                                {{--                                </script>--}}
                            </div>

                        </div>
                        {{--                        </a>--}}
                    </div>
                </div>
            </div>
        </div>
        {{--        <div class="full-nav">--}}
        {{--            <div class="container">--}}
        {{--                <div class="row">--}}
        {{--                    <div class="container_it_megamenu">--}}
        {{--                        <div class="innovatoryMegamenu">--}}
        {{--                            <div class="it-menu-horizontal" style="text-align: center;float: left;width: 100%;margin: 13px 0px 13px 0px;">--}}
        {{--                                <span style="color: white">در زیر کادر جستجو با زدن تیکت بسته شدن درگاه خرید نوار زرد رنگ همراه با متن نوشته ظاهر گردد – زمینه رنگ کادر زرد پرنگ باشد</span>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}

    </div>

</header>



<header class="main-header">
	<!-- Logo -->
	<a href="/" class="logo">
		<!-- mini logo for sidebar mini 50x50 pixels -->
		<span class="logo-mini" style="font-family: WYekan"><b>پنل</b></span>
		<!-- logo for regular state and mobile devices -->
		<span class="logo-lg" style="font-family: WYekan"><b>پنل</b> مشتریان فروشگاه </span> </a>
	<!-- Header Navbar: style can be found in header.less -->
	<nav class="navbar navbar-static-top" role="navigation" style="padding: 0px 0px !important;Z">
		<!-- Sidebar toggle button-->
		<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
			<span class="sr-only">Toggle navigation</span> </a>
		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">

			</ul>
		</div>
	</nav>
</header>

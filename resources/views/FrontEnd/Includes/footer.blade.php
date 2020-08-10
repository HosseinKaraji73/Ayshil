<footer id="footer">
    <div class="innovatoryFooter-top">
        <div class="container">
            <div class="row"></div>
        </div>
    </div>
    <div class="innovatoryFooter-center footer">
        <div class="container"><!-- Static Block module -->
                               <!-- /Static block module -->
            <div id="itfooterlogo" class="footer-about text-center">
                <div class="footer-logo">
                    <a href="{{url('/')}}" title="فروشگاه آیشیل">
{{--                        <img src="{{asset("img/admin/setting/$footers->logo1")}}" alt="فروشگاه آیشیل" width="auto" height="auto"/>--}}

                        <a rel="origin" target="_blank" href="https://trustseal.enamad.ir/?id=174018&amp;Code=CsJJRx8Qc3Udc2s0fSdA"><img src="https://Trustseal.eNamad.ir/logo.aspx?id=174018&amp;Code=CsJJRx8Qc3Udc2s0fSdA" alt="" style="cursor:pointer" id="CsJJRx8Qc3Udc2s0fSdA"></a>
                    </a>
                </div>
                @if(App::getLocale() == 'fa')
                    <p class="storeinfo-desc">{{$footers->othertext1}}</p>
                @elseif(App::getLocale() == 'en')
                    <p class="storeinfo-desc">{{$footers->othertext1_en}}</p>
                @endif
            </div>
            <div class="innovatorySocial">
                <ul class="innovatory-media-body">
                    <li class="pull-left innovatory-facebook"><a href="#" title="Facebook" target="_blank"><i
                                class="fa fa-facebook"></i></a></li>
                    <li class="pull-left innovatory-twitter"><a href="#" title="Twitter" target="_blank"><i
                                class="fa fa-twitter"></i></a></li>
                    <li class="pull-left innovatory-youtube"><a href="#" title="YouTube" target="_blank"><i
                                class="fa fa-youtube"></i></a></li>
                    <li class="pull-left innovatory-googleplus"><a href="#" title="Google +" target="_blank"><i
                                class="fa fa-google-plus"></i></a></li>
                    <li class="pull-left innovatory-pinterest"><a href="#" title="Pinterest" target="_blank"><i
                                class="fa fa-pinterest-p"></i></a></li>
                    <li class="pull-left innovatory-instagram"><a href="#" title="Instagram" target="_blank"><i
                                class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-3 wrapper link-wrap"><h3 class="h3 hidden-md-down">{{__('settings.newsRoute')}}</h3>
                <div class="title clearfix hidden-lg-up collapsed" data-target="#footer_sub_menu_76533"
                     data-toggle="collapse">
                    <span class="h3">{{__('settings.newsRoute')}}</span><span class="pull-xs-right"><span
                            class="navbar-toggler collapse-icons"><i class="fa fa-plus-square-o" aria-hidden="true"></i><i
                                class="fa fa-minus-square-o" aria-hidden="true"></i></span></span></div>
                <ul id="footer_sub_menu_76533" class="collapse">

                    @foreach($enents as $event)
                        <li>
                            <a id="link-product-page-prices-drop-1" class="cms-page-link" href="{{action('FrontEnd\EventController@show' ,[$event->id,$event->title,$event->title_en])}}"
                               title="Our special products">
                                @if(App::getLocale() == 'fa')
                                    {{$event->title}}
                                @elseif(App::getLocale() == 'en')
                                    {{$event->title_en}}
                                @endif

                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-3 wrapper link-wrap"><h3 class="h3 hidden-md-down">{{__('settings.products')}}</h3>
                <div class="title clearfix hidden-lg-up collapsed" data-target="#footer_sub_menu_79366"
                     data-toggle="collapse">
                    <span class="h3">{{__('settings.products')}}</span><span class="pull-xs-right"><span
                            class="navbar-toggler collapse-icons"><i class="fa fa-plus-square-o" aria-hidden="true"></i><i
                                class="fa fa-minus-square-o" aria-hidden="true"></i></span></span></div>
                <ul id="footer_sub_menu_79366" class="collapse">
                    @foreach($menuProducts as $menuProduct)

                        @foreach($submenu[$menuProduct->id] as $subMenuProduct)

                            <li>
                                <a id="link-cms-page-1-2" class="cms-page-link"
                                   href="{{action('FrontEnd\ProductController@subMenuShow' ,[$subMenuProduct->id,$subMenuProduct->menuProducts_id,$subMenuProduct->name,$subMenuProduct->name_en])}}"
                                   title="Our terms and conditions of delivery">
                                    @if(App::getLocale() == 'fa')
                                        {{$subMenuProduct->name}}
                                    @elseif(App::getLocale() == 'en')
                                        {{$subMenuProduct->name_en}}
                                    @endif
                                </a>
                            </li>
                        @endforeach
                    @endforeach

                </ul>
            </div>
            <div id="block_myaccount_infos" class="col-lg-3 link-wrap wrapper"><h3
                    class="h3 myaccount-title hidden-md-down">
                    <!-- <a class="text-uppercase" href="login-back=my-account.html" rel="nofollow"> -->{{__('settings.menu')}} <!--  </a> --></h3>
                <div class="title clearfix hidden-lg-up collapsed" data-target="#footer_account_list"
                     data-toggle="collapse">
                    <span class="h3">{{__('settings.menu')}}</span><span class="pull-xs-right"><span
                            class="navbar-toggler collapse-icons"><i class="fa fa-plus-square-o" aria-hidden="true"></i><i
                                class="fa fa-minus-square-o" aria-hidden="true"></i></span></span></div>
                <ul class="account-list collapse" id="footer_account_list">
                    <li>
                        <a href="{{url('/')}}" title="Personal info" rel="nofollow">{{__('settings.menu1')}}</a>
                    </li>
                    <li><a href="{{url('/products')}}" title="Orders" rel="nofollow">{{__('settings.menu2')}}</a>
                    </li>
                    <li>
                        <a href="{{url('/activate-carbon')}}" title="Credit slips" rel="nofollow">{{__('settings.menu3')}}</a>
                    </li>
                    <li>
                        <a href="{{url('/videos')}}" title="Addresses" rel="nofollow">{{__('settings.menu4')}}</a>
                    </li>
                    <li>
                        <!-- MODULE WishList -->
                        <a class="lnk_wishlist col-lg-4 col-md-6 col-sm-6 col-xs-12" href="{{url('/events')}}"
                                                   title="My wishlists"><span class="link-item"><i
                                    class="fa fa-heart"></i>{{__('settings.menu5')}}</span></a><!-- END : MODULE WishList -->
                    </li>
                </ul>
            </div><!-- Static Block module -->
            <div class="col-lg-3 ft-contact ft-col">
                <h3 class="h3 hidden-md-down">{{__('settings.contactRoute')}}</h3>
                <div class="title clearfix hidden-lg-up collapsed" data-target="#ft-contact" data-toggle="collapse">
                    <span class="h3">{{__('settings.contactRoute')}}</span><span class="pull-xs-right"><span
                            class="navbar-toggler collapse-icons"><i class="fa fa-plus-square-o" aria-hidden="true"></i><i
                                class="fa fa-minus-square-o" aria-hidden="true"></i></span></span></div>
                <div id="ft-contact" class="collapse">
                    <div class="footer-contact-list"><i class="ti-location-pin" aria-hidden="true"></i>
                        @if(App::getLocale() == 'fa')
                            <p>{{$footers->address1}}</p>
                        @elseif(App::getLocale() == 'en')
                            <p>{{$footers->address1}}</p>
                        @endif
                    </div>

                    <div class="footer-contact-list"><i class="fa fa-phone" aria-hidden="true"></i>

                        <p>کادر جدید</p>
                    </div>

                    <div class="footer-contact-list"><i class="ti-mobile" aria-hidden="true"></i>
                        <p>{{$footers->phone1}}</p>
                    </div>
                    <div class="footer-contact-list"><i class="ti-email" aria-hidden="true"></i>

                        <p>{{$footers->email}}</p>
                    </div>
                    <div class="applink"><a href="https://play.google.com/store?hl=en"><img
                                src="../modules/itcustomhtml/views/img/playstore.png" width="auto" height="auto"
                                alt=""/></a><a href="https://www.apple.com/in/ios/app-store/"><img
                                src="../modules/itcustomhtml/views/img/appstore.png" width="auto" height="auto" alt=""/></a>
                    </div>
                </div>
            </div>
                               <!-- /Static block module -->
        </div>
    </div>
    <div class="innovatoryFooter-bottom">
        <div class="container">
            <div class="footer-payment row">
                <div class="col-xs-12 col-lg-5 footer-pay-p">
                    <div class="copyright">
                        طراحی و توسعه وب سایت توسط
                        <a class="_blank" href="https://www.afsaweb.ir" target="_blank" style="text-decoration: underline;font-weight: bold">افساوب</a>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-7 text-center">
                    <div id="paiement_logos" class="payment_logos_images">
                        <a href="http://NihaKala.ir">
                            <p class="payment-p">Copyright © 2019 www.AyShil.com</p>
                            {{--                        <a href="content/1-delivery.html">--}}
                            {{--                            <img src="../modules/itpaymentlogo/views/img/visa.png" alt="Visa" width="40" height="25"/>--}}
                            {{--                            <img src="../modules/itpaymentlogo/views/img/mastercard.png" alt="Mastercard" width="40" height="25"/>--}}
                            {{--                            <img src="../modules/itpaymentlogo/views/img/paypal.png" alt="Paypal" width="40" height="25"/>--}}
                            {{--                            <img src="../modules/itpaymentlogo/views/img/american_express.png" alt="American Express" width="40" height="25"/>--}}
                            {{--                            <img src="../modules/itpaymentlogo/views/img/discover.png" alt="Discover" width="40" height="25"/>--}}
                            {{--                            <img src="../modules/itpaymentlogo/views/img/diners.png.jpeg" alt="Diners" width="40" height="25"/>--}}
                            {{--                        </a>--}}
                        </a>

                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</footer>

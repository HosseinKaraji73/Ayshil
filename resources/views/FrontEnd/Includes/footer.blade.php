<footer>
    <div class="container">
        <div class="d-flex align-items-center justify-content-between" id="socials">

            <p class="text-primary font-weight-bold">
                {{$footers->othertext1}}
            </p>
            <div class="d-flex align-items-center justify-content-end">
                <a href="https://t.me/ibolak" title="" target="_blank"> <i class="fab fa-telegram"></i> </a>
                <a href="https://www.instagram.com/ibolak" title="" target="_blank">
                    <i class="fab fa-instagram"></i></a>
                <a href="https://www.instagram.com/ibolak" title="" target="_blank"> <i class="fab fa-whatsapp"></i></a>
                <a href="https://www.instagram.com/ibolak" title="" target="_blank"> <i class="fab fa-facebook"></i></a>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <div class="footer-block">
                    <h5>آدرس فروشگاه</h5>
                    <div class="footer-block__body">
                        <p><i class="fal fa-map-pin"></i><span>{{$footers->address1}}</span>
                        </p>
                    </div>
                </div>
                <div class="footer-block">
                    <h5>شماره‌های تماس</h5>
                    <div class="footer-block__body">
                        <p>
                            <i class="fal fa-phone"></i> <span dir="ltr">

                                <a class="text-white" href="tel:01732534106-9">
                                {{$footers->phone1}}
                                </a>
                            </span> <br>
                        </p>
                    </div>
                </div>

                <div class="footer-block">
                    <h5>ایمیل</h5>
                    <div class="footer-block__body">
                        <p>
                            <i class="fal fa-email"></i> <span dir="ltr">

                                <a class="text-white" href="tel:01732534106-9">
                                {{$footers->email}}
                                </a>
                            </span> <br>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">

                <div class="footer-block">
                    <h5>دسترسی سریع</h5>
                    <div class="footer-block__body">
                        <ul>
                            @foreach($menuProducts as $menuProduct)
                                @foreach($submenu[$menuProduct->id] as $subMenuProduct)
                                    <li>
                                        <a href="{{action('FrontEnd\ProductController@subMenuShow' ,[$subMenuProduct->id,$subMenuProduct->menuProducts_id,$subMenuProduct->name])}}" title="" target="_self">
                                            {{$subMenuProduct->name}}
                                        </a>
                                    </li>
                                @endforeach
                            @endforeach

                            <li><a href="{{url('call-us')}}" title="" target="_self">تماس با‌ ما</a>
                            </li>

                            <li><a href="{{url('about-us')}}" title="" target="_self">درباره‌ما</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-12">
                <div class="d-flex align-items-center justify-content-end" id="signs-wrapper">
                    <a rel="origin" target="_blank" href="#"><img src="{{asset('FrontEnd/images/namad/enamad.png')}}" alt="" style="cursor:pointer" id="Zjn4ngVF9uVoACxtfycY"></a>
                    <a rel="origin" target="_blank" href="#"><img src="{{asset('FrontEnd/images/namad/enamad.png')}}" alt="" style="cursor:pointer" id="Zjn4ngVF9uVoACxtfycY"></a>
                    <a rel="origin" target="_blank" href="#"><img src="{{asset('FrontEnd/images/namad/enamad.png')}}" alt="" style="cursor:pointer" id="Zjn4ngVF9uVoACxtfycY"></a>
                </div>
                <div class="d-flex align-items-center justify-content-end" id="signs-wrapper">
                    <a rel="origin" target="_blank" href="#"><img src="{{asset('FrontEnd/images/namad/enamad.png')}}" alt="" style="cursor:pointer" id="Zjn4ngVF9uVoACxtfycY"></a>
                    <a rel="origin" target="_blank" href="#"><img src="{{asset('FrontEnd/images/namad/enamad.png')}}" alt="" style="cursor:pointer" id="Zjn4ngVF9uVoACxtfycY"></a>
                    <a rel="origin" target="_blank" href="#"><img src="{{asset('FrontEnd/images/namad/enamad.png')}}" alt="" style="cursor:pointer" id="Zjn4ngVF9uVoACxtfycY"></a>
                </div>

            </div>
        </div>
        <p>کلیه حقوق متعلق به سایت آيشیل می‌باشد.</p>

    </div>
</footer>

<div id="mobile-tabs">
    <a class="mobile-tab-wrapper link  active  " href="index.html" title="" target="_self"><i class="far fa-home"></i>
        <small>خانه</small> </a>
    <a class="mobile-tab-wrapper" href="#" title="" target="_self" data-page-id="mobile-menu-wrapper"><i
            class="fal fa-bars"></i> <small>دسته‌بندی‌ها</small> </a>
    <a class="mobile-tab-wrapper link  " href="shop/basket.html" title="" target="_self">
        <i class="fal fa-shopping-cart"></i> <small>سبد خرید</small> </a>
    <a class="mobile-tab-wrapper" href="#" title="" target="_self" data-page-id="search"><i
            class="fal fa-search"></i> <small>جستجو</small> </a>
    <a class="mobile-tab-wrapper link " href="login.html" title="" target="_self"><i class="fal fa-user"></i>
        <small>ورود</small> </a>

</div>
<div class="mobile-page" id="search"><a class="close-page" href="#" title="" target="_self"><i class="far fa-times"></i></a>
    <div class="input-wrapper">
        <form method="get" action="shop/search.html" id="search-form">
            <input type="text" name="q" placeholder="جستجو در آيشیل"/>
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
</div>
<div class="mobile-page" id="mobile-menu-wrapper"><a class="close-page" href="#" title="" target="_self"><i
            class="far fa-times"></i><small class="font-weight-bold font-size-normal ml-2">بستن</small></a>
    <div class="mobile-page-inner">
        <h3>دسته‌بندی‌ها</h3>
        <ul>
            <li>
                <a href="shop/categories/dk2qd/%D8%AD%D8%B1%D8%A7%D8%AC%DB%8C.html" title="حراجی" target="_self">حراجی</a>
            </li>
            <li class="has-children"><a title="زنانه" target="_self">زنانه</a>
                <ul>
                    <li>
                        <a href="shop/categories/8bwge/%D8%A8%D9%84%D9%88%D8%B2-%D8%B4%D9%88%D9%85%DB%8C%D8%B2.html" title="" target="_self">بلوز/شومیز</a>
                    </li>
                    <li>
                        <a href="shop/categories/2expb/%D9%BE%D9%84%DB%8C%D9%88%D8%B1-%D8%B3%D9%88%DB%8C%D8%B4%D8%B1%D8%AA-%D9%87%D9%88%D8%AF%DB%8C.html" title="" target="_self">پلیور/سویشرت/هودی</a>
                    </li>
                    <li><a href="shop/categories/7bz8b/%D8%AF%D8%A7%D9%85%D9%86.html" title="" target="_self">دامن</a>
                    </li>
                    <li>
                        <a href="shop/categories/nb1kd/%D8%B1%D9%88%D9%BE%D9%88%D8%B4.html" title="" target="_self">روپوش</a>
                    </li>
                    <li>
                        <a href="shop/categories/yb7yb/%D8%B4%D9%84%D9%88%D8%A7%D8%B1.html" title="" target="_self">شلوار</a>
                    </li>
                    <li>
                        <a href="shop/categories/el8pd/%D9%84%D8%A8%D8%A7%D8%B3-%D8%A7%D8%B3%D9%BE%D8%B1%D8%AA-%D9%88-%D8%B1%D8%A7%D8%AD%D8%AA%DB%8C.html" title="" target="_self">لباس اسپرت و راحتی</a>
                    </li>
                    <li><a href="shop/categories/dxnpb/%D8%B3%D8%A7%DB%8C%D8%B1.html" title="" target="_self">سایر</a>
                    </li>
                </ul>

            </li>
            <li class="has-children"><a title="مردانه" target="_self">مردانه</a>
                <ul>
                    <li>
                        <a href="shop/categories/ekqqe/%D8%A8%D8%A7%D9%84%D8%A7%D9%BE%D9%88%D8%B4.html" title="" target="_self">بالاپوش</a>
                    </li>
                    <li>
                        <a href="shop/categories/dqxke/%D8%B4%D9%84%D9%88%D8%A7%D8%B1.html" title="" target="_self">شلوار</a>
                    </li>
                    <li>
                        <a href="shop/categories/ey36d/%D9%84%D8%A8%D8%A7%D8%B3-%D8%A7%D8%B3%D9%BE%D8%B1%D8%AA.html" title="" target="_self">لباس اسپرت</a>
                    </li>
                    <li><a href="shop/categories/d4jkd/%D8%B3%D8%A7%DB%8C%D8%B1.html" title="" target="_self">سایر</a>
                    </li>
                </ul>

            </li>
            <li class="has-children"><a title="بچگانه" target="_self">بچگانه</a>
                <ul>
                    <li>
                        <a href="shop/categories/e93me/%D8%AF%D8%AE%D8%AA%D8%B1%D8%A7%D9%86%D9%87.html" title="" target="_self">دخترانه</a>
                    </li>
                    <li>
                        <a href="shop/categories/dgqwe/%D9%BE%D8%B3%D8%B1%D8%A7%D9%86%D9%87.html" title="" target="_self">پسرانه</a>
                    </li>
                    <li>
                        <a href="shop/categories/ejwmb/%D9%86%D9%88%D8%B2%D8%A7%D8%AF.html" title="" target="_self">نوزاد</a>
                    </li>
                </ul>

            </li>
            <li class="has-children"><a title="سایر" target="_self">سایر</a>
                <ul>
                    <li>
                        <a href="shop/categories/e7zyb/%D8%AA%D8%A7%D8%A8%D8%B3%D8%AA%D8%A7%D9%86%D9%87.html" title="" target="_self">تابستانه</a>
                    </li>
                    <li>
                        <a href="shop/categories/d88xd/%D8%B2%D9%85%D8%B3%D8%AA%D8%A7%D9%86%D9%87.html" title="" target="_self">زمستانه</a>
                    </li>
                    <li><a href="shop/categories/b9zme/%D8%B1%D8%B3%D9%85%DB%8C.html" title="" target="_self">رسمی</a>
                    </li>
                    <li>
                        <a href="shop/categories/egzwb/%D8%AA%D8%B2%DB%8C%DB%8C%D9%86%DB%8C.html" title="" target="_self">تزیینی</a>
                    </li>
                </ul>

            </li>
        </ul>
    </div>
</div>

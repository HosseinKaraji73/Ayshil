@extends('FrontEnd.Layouts.master')

@section('title','صفحه اصلی')

@section('meta')
    <meta name="description" content="فروشگاه آی بولک"/>
    <meta name="keywords" content="فروشگاه آی بولک"/>
@endsection


@section('classBody')
    static-page
@endsection


@section('topBar')
    <div id="topbar">
        <div class="container d-flex align-items-center justify-content-between  mobile-justify-content-center ">
            <div id="logo-wrapper"><a href="{{url('/')}}"><img
                        src="{{asset('FrontEnd/images/1.png')}}"
                        alt="ibolak"/></a>
                <h2>لذت یک خرید شیک</h2>
            </div>
            <div class="mobile-header-left mobile-only"></div>
            <div class="topbar-menu-wrapper" id="menu-wrapper">
                <ul>
                    <li><a href="{{url('/')}}" title="" target="_self">
                            <div><span>حراجی</span></div>
                        </a>
                    </li>
                    <li class="has-megamenu">
                        <a href="{{url('/')}}"><span>زنانه</span><i class="far fa-angle-down"></i></a>
                        <ul class="megamenu">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="subcategory"><a
                                            href="{{url('/')}}"
                                            title="" target="_self">
                                            <h4>بلوز/شومیز</h4></a>
                                        <ul>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="subcategory">
                                        <a href="{{url('/')}}" title="" target="_self">
                                            <h4>روپوش</h4></a>
                                        <ul>
                                            <li>
                                                <a href="{{url('/')}}"
                                                   title="" target="_self">پانچو/بارانی</a></li>
                                            <li>
                                                <a href="{{url('/')}}"
                                                   title="" target="_self">کاپشن</a></li>
                                            <li>
                                                <a href="{{url('/')}}"
                                                   title="" target="_self">کت/کت کتان/کت جین</a></li>
                                            <li>
                                                <a href="{{url('/')}}"
                                                   title="" target="_self">مانتو/ژاکت</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="has-megamenu">
                        <a href="{{url('/')}}"><span>مردانه</span><i class="far fa-angle-down"></i></a>
                        <ul class="megamenu">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="subcategory"><a
                                            href="{{url('/')}}"
                                            title="" target="_self">
                                            <h4>بلوز/شومیز</h4></a>
                                        <ul>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="subcategory">
                                        <a href="{{url('/')}}" title="" target="_self">
                                            <h4>روپوش</h4></a>
                                        <ul>
                                            <li>
                                                <a href="{{url('/')}}"
                                                   title="" target="_self">پانچو/بارانی</a></li>
                                            <li>
                                                <a href="{{url('/')}}"
                                                   title="" target="_self">کاپشن</a></li>
                                            <li>
                                                <a href="{{url('/')}}"
                                                   title="" target="_self">کت/کت کتان/کت جین</a></li>
                                            <li>
                                                <a href="{{url('/')}}"
                                                   title="" target="_self">مانتو/ژاکت</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="has-megamenu">
                        <a href="{{url('/')}}"><span>بچگانه</span><i class="far fa-angle-down"></i></a>
                        <ul class="megamenu">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="subcategory"><a
                                            href="{{url('/')}}"
                                            title="" target="_self">
                                            <h4>بلوز/شومیز</h4></a>
                                        <ul>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="subcategory">
                                        <a href="{{url('/')}}" title="" target="_self">
                                            <h4>روپوش</h4></a>
                                        <ul>
                                            <li>
                                                <a href="{{url('/')}}"
                                                   title="" target="_self">پانچو/بارانی</a></li>
                                            <li>
                                                <a href="{{url('/')}}"
                                                   title="" target="_self">کاپشن</a></li>
                                            <li>
                                                <a href="{{url('/')}}"
                                                   title="" target="_self">کت/کت کتان/کت جین</a></li>
                                            <li>
                                                <a href="{{url('/')}}"
                                                   title="" target="_self">مانتو/ژاکت</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="has-megamenu">
                        <a href="{{url('/')}}"><span>سایر</span><i class="far fa-angle-down"></i></a>
                        <ul class="megamenu">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="subcategory"><a
                                            href="{{url('/')}}"
                                            title="" target="_self">
                                            <h4>بلوز/شومیز</h4></a>
                                        <ul>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="subcategory">
                                        <a href="{{url('/')}}" title="" target="_self">
                                            <h4>روپوش</h4></a>
                                        <ul>
                                            <li>
                                                <a href="{{url('/')}}"
                                                   title="" target="_self">پانچو/بارانی</a></li>
                                            <li>
                                                <a href="{{url('/')}}"
                                                   title="" target="_self">کاپشن</a></li>
                                            <li>
                                                <a href="{{url('/')}}"
                                                   title="" target="_self">کت/کت کتان/کت جین</a></li>
                                            <li>
                                                <a href="{{url('/')}}"
                                                   title="" target="_self">مانتو/ژاکت</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                </ul>
            </div>
            @include('FrontEnd.Includes.search')

        </div>
    </div>
@endsection

@section('header')
    <header>
        <div id="breadcrumbs">
            <a href="../index.html" title="" target="_self">فروشگاه آی‌بولک</a> <span>درباره ی ما</span>

        </div>
    </header>
@endsection


@section('main')
    <main>
        <h1 class="title-dot">درباره ی ما</h1>
        <article>
            فروشگاه اینترنتی آی بولک ابتدا در سال 93 در قالب یک فروشگاه خرید حضوری کوچک در شهر گرگان آغاز به کار کرد.<br/>هدف از تاسیس فروشگاه ای بولک بنا بر صحبت های موسس این فروشگاه، خانم آی بولک پقه، عرضه پوشاک کژوال خاص با قیمت های مناسب بود، به همین دلیل از ابتدا تمرکز بر واردات پوشاک خاص در تعداد پایین اما تنوع بالا با قیمت مناسب بود.<br/>آن طور که خانم آی بولک می گویند، ایشان می خواستند آی بولک فروشگاهی برای تمام افرادی باشد که می خواهند لباس هایی ارزشمندتر از قیمتی که برای آن می پردازند داشته باشند.<br/>در طول فعالیت کم کم دامنه محصولات فروشگاه به حوزه های لباس خانگی، اسپرت، نیمه مجلسی، راحتی ، جوراب، کلاه و غیره رسید و سبد کاملی از پوشاک با همان هدف معین شده یعنی لباس هایی ارزشمندتر از قیمت پرداختی را شامل شد.<br/>مراتب رشد و ترقی این فروشگاه به سرعت شروع شد و در طول سه سال، این فروشگاه بدل به برترین عرضه کننده انواع پوشاک مربوط به بانوان گردید و اکنون فروشگاه فیزیکی مجموعه در مجموعه تجاری رویال شهر گرگان قرار دارد.<br/>فروشگاه اینترنتی آی بولک از حدود سال 95 متمرکز بر شبکه اجتماعی اینستاکرام شکل گرفت، علی رغم فعالیت نامنظم و جدید بودن این فضا به علت محبوبیت بالای فروشگاه آی بولک میان مخاطبان، در همان سال نخست این فروشگاه صد هزارتایی شدن خود را جشن گرفت.<br/>اما با توجه به توسعه فروش اینترنتی و نیاز به ساختار های مناسب با حجم فروش آنلاین، وبسایت مجموعه با هدف ساده سازی خرید محصولات از سال 97 آغاز به فعالیت کرد.<br/>از ابتدای سال 98 تمرکز مجموعه از ترکیب تامین محصولات وارداتی و تولید داخل، به توزیع باکیفیت ترین البسه تولید داخل تغییر کرده است.گستره محصولات این فروشگاه نیز به تازگی وسعت پیدا کرده و به صورت محدود وارد حوزه پوشاک کودکان و پوشاک آقایان شده است.<br/>هم اکنون فروشگاه اینترنتی آی بولک از پرطرفدارترین صفحات فروش پوشاک در شبکه اجتماعی اینستاگرام است که نزدیک به یک میلیون نفر مخاطب دارد، همچنین از ابتدای سال 99 مجله اعضای خانواده آی بولک با عنوان ibolak family توسط فروشگاه اینترنتی آی بولک راه اندازی شده است که در آن جدیدترین محتواهای حوزه ی مد، زیبایی،موفقیت و سلامت با تمرکز بر توانمند سازی بانوان ایرانی، منتشر می شود.<br/>ما در آی بولک به صورت پیوسته با مشتریان و طرفداران خود در ارتباط هستیم و نظرات آنان را پایش میکنیم اما اگر شما به هر شکل جزو دو دسته مذکور نیستید نیز می توایند انتقادات و پیشنهادات خود را با هدف بهبود عملکرد آی بولک از طرق مختلف به ما برسانید.
            <br>

            <p> طراحی و توسعه توسط <a href="https://tookan.tech" target="_blank">توکان‌تک</a></p>

        </article>
    </main>@endsection



@extends('BackEnd.Layouts.user')
@section('head-content')
    <span class="fa fa-user">&nbsp;</span> پروفایل کاربری
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
            <a href="index.html" title="" target="_self">فروشگاه آيشیل</a> <span>پروفایل کاربری</span>

        </div>
    </header>
@endsection


@section('content')

    <div class="col-sm-8 col-sm-push-2">

        <!-- Profile Image -->
        <div class="box box-primary">
            <div class="box-body box-profile">
                {{--                <img class="profile-user-img img-responsive img-circle" src="{{asset("img/user/profile/$user->avatar")}}" alt="User profile picture" style="width: 120px;height: 120px;margin: 0 auto;">--}}

                <h3 class="profile-username text-center">{{$user->name . ' ' . $user->family}}</h3>

                <p class="text-muted text-center">
                    @if($user->roleId == 0)
                        <span>مدیر سایت</span>
                    @elseif($user->roleId == 1)
                        <span>فروشگاه</span>
                    @else
                        <span>پنل اختصاصی مشتریان فروشگاه</span>
                        <br>
                        <span>همراه گرامی فروشگاه ایشیل, این پنل اختصاصی شماست و تمام فاکتور ها و سفارشات شما در این پنل نگهداری میشود</span>
                        <br>
                        <span>کاربر گرامی اطلاعات شما با اطمینان نگهداری و فقط برای شما قابل رویت و دسترس است</span>
                    @endif
                </p>


{{--                <p class="text-muted text-center">--}}
{{--                    کد معرفی به دوستان:{{$user->reagent}}--}}
{{--                </p>--}}

                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item" style="padding-bottom: 30px;">
                        <b>شماره تلفن همراه</b> <a class="pull-left">{{$user->mobile}}</a>
                    </li>
                    <li class="list-group-item" style="padding-bottom: 30px;">
                        <b class="">آدرس ایمیل</b> <a class="pull-left">{{$user->email}}</a>
                    </li>
{{--                                        <li class="list-group-item">--}}
{{--                                            <b class="">تاریخ تولد</b> <a class="pull-left">{{$user->birthDate}}</a>--}}
{{--                                        </li>--}}
                    <li class="list-group-item" style="padding-bottom: 50px;">
                        <b class="">آدرس</b> <a class="pull-left">{{$user->address }}</a>
                    </li>
                </ul>

                <div class="row">
                    <div class="col-sm-6">
                        <a href="{{route('user.edit',$user->id)}}" class="form-control btn btn-primary"><span class="fa fa-edit">&nbsp;</span>
                            <b>ویرایش و ثبت اطلاعات شما</b>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{action('BackEnd\User\UserController@changePasswordForm')}}" class="form-control btn btn-primary">
                            <span class="fa fa-key">&nbsp;</span>
                            <b>تغییر رمزعبور </b>
                        </a>
                    </div>
                </div>

            </div>
            <!-- /.box-body -->
        </div>
    </div>
    <div class="clearfix"></div>

@endsection

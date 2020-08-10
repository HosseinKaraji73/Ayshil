<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user BackEnd -->
        <div class="user-BackEnd">
            <div class="pull-right image">
                <img src="{{asset('/img/user/profile/'.Auth::user()->avatar)}}" class="user-image" alt="User Image" style="height: 40px">
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->name . ' ' .Auth::user()->family}}</p>
                <a href="#"><i class="fa fa-circle text-success">&nbsp;</i> پنل ادمین </a>
            </div>
        </div>
        <!-- search form -->
    {{--	<form action="#" method="get" class="sidebar-form">--}}
    {{--	<div class="input-group">--}}
    {{--	<input type="text" name="q" class="form-control" placeholder="جستوجو ...">--}}
    {{--	<span class="input-group-btn">--}}
    {{--	<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>--}}
    {{--	</span>--}}
    {{--	</div>--}}
    {{--	</form>--}}
    <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->

        <ul class="sidebar-menu">
            <li class="active treeview">
                <a href="{{url('/panel/admin/profile')}}"> <i class="fa fa-home"></i> <span>خانه</span> </a>
            </li>

            <li class="treeview">
                <a href="#"> <i class="fa fa-picture-o"></i> <span>اسلایدر ها</span>
                    <i class="fa fa-angle-left pull-left"></i> </a>

                <ul class="treeview-menu">
                    <li class="treeview">
                        <a href="#"> <i class="fa fa-picture-o"></i> <span>صفحه اصلی</span>
                            <i class="fa fa-angle-left pull-left"></i> </a>
                        <ul class="treeview-menu">
                            {{--                        <li><a href="{{route('slider.create')}}"><i class="fa fa-circle-o"></i>ایجاد اسلایدر جدید</a></li>--}}
                            <li><a href="{{route('slider.index')}}"><i class="fa fa-circle-o"></i>مشاهده/ویرایش/حذف</a>
                            </li>
                            {{--                        <li><a href="{{url('/panel/admin/slider')}}"><i class="fa fa-circle-o"></i>اسلایدر ها </a></li>--}}
                        </ul>
                    </li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#"> <i class="fa fa-picture-o"></i> <span>منو محصولات</span>
                    <i class="fa fa-angle-left pull-left"></i> </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('menu-product.create')}}"><i class="fa fa-circle-o"></i>ایجاد منو</a></li>
                    <li><a href="{{route('menu-product.index')}}"><i class="fa fa-circle-o"></i>مشاهده/ویرایش/حذف</a></li>
                    <br>
                    <li><a href="{{route('sub-menu-product.create')}}"><i class="fa fa-circle-o"></i>ایجاد  زیر منو</a></li>
                    <li><a href="{{route('sub-menu-product.index')}}"><i class="fa fa-circle-o"></i>مشاهده/ویرایش/حذف</a></li>
                </ul>
            </li>

              <li class="treeview">
                <a href="#"> <i class="fa fa-picture-o"></i> <span>رنگ محصولات</span>
                    <i class="fa fa-angle-left pull-left"></i> </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('color.create')}}"><i class="fa fa-circle-o"></i>ایجاد رنگ</a></li>
                    <li><a href="{{route('color.index')}}"><i class="fa fa-circle-o"></i>مشاهده/ویرایش/حذف</a></li>
                </ul>
            </li>

                  <li class="treeview">
                <a href="#"> <i class="fa fa-picture-o"></i> <span>سایز محصولات</span>
                    <i class="fa fa-angle-left pull-left"></i> </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('size.create')}}"><i class="fa fa-circle-o"></i>ایجاد سایز</a></li>
                    <li><a href="{{route('size.index')}}"><i class="fa fa-circle-o"></i>مشاهده/ویرایش/حذف</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"> <i class="fa fa-picture-o"></i> <span>محصولات</span>
                    <i class="fa fa-angle-left pull-left"></i> </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('product.create')}}"><i class="fa fa-circle-o"></i>ایجاد محصول</a></li>
                    <li><a href="{{route('product.index')}}"><i class="fa fa-circle-o"></i>مشاهده/ویرایش/حذف</a></li>
                </ul>
            </li>

             <li class="treeview">
                <a href="#"> <i class="fa fa-picture-o"></i> <span>شهرها</span>
                    <i class="fa fa-angle-left pull-left"></i> </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('states.create')}}"><i class="fa fa-circle-o"></i>ایجاد شهر</a></li>
                    <li><a href="{{route('states.index')}}"><i class="fa fa-circle-o"></i>مشاهده/ویرایش/حذف</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"> <i class="fa fa-picture-o"></i> <span>سفارشات</span>
                    <i class="fa fa-angle-left pull-left"></i> </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('order.index')}}"><i class="fa fa-circle-o"></i>مشاهده</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"> <i class="fa fa-picture-o"></i> <span>اخبار</span>
                    <i class="fa fa-angle-left pull-left"></i> </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('events.create')}}"><i class="fa fa-circle-o"></i>ایجاد خبر</a></li>
                    <li><a href="{{route('events.index')}}"><i class="fa fa-circle-o"></i>مشاهده/ویرایش/حذف</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"> <i class="fa fa-picture-o"></i> <span>ویديو ها</span>
                    <i class="fa fa-angle-left pull-left"></i> </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('videos.create')}}"><i class="fa fa-circle-o"></i>ایجاد</a></li>
                    <li><a href="{{route('videos.index')}}"><i class="fa fa-circle-o"></i>مشاهده/ویرایش/حذف</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"> <i class="fa fa-picture-o"></i> <span>درباره ما</span>
                    <i class="fa fa-angle-left pull-left"></i> </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('abouts.index')}}"><i class="fa fa-circle-o"></i>مشاهده/ویرایش/حذف</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#"> <i class="fa fa-picture-o"></i> <span>ارتباط با ما</span>
                    <i class="fa fa-angle-left pull-left"></i> </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('contact.index')}}"><i class="fa fa-circle-o"></i>مشاهده/ویرایش/حذف</a></li>
{{--                    <li><a href="{{url('/panel/admin/form')}}"><i class="fa fa-circle-o"></i>مشاهده فرم نظرات</a></li>--}}
                </ul>
            </li>

            <li class="treeview">
                <a href="#"> <i class="fa fa-picture-o"></i> <span>همکاران ما</span>
                    <i class="fa fa-angle-left pull-left"></i> </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('customers.create')}}"><i class="fa fa-circle-o"></i>ایجاد</a></li>
                    <li><a href="{{route('customers.index')}}"><i class="fa fa-circle-o"></i>مشاهده/ویرایش/حذف</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="{{url('/panel/admin/footer')}}"> <i class="fa fa-picture-o"></i> <span>تنظیمات فوتر</span>
                    <i class="fa fa-angle-left pull-left"></i> </a>
            </li>

            <li class="treeview">
                <a href="{{url('/panel/admin/setting')}}"> <i class="fa fa-picture-o"></i> <span>تنظیمات سایت</span>
                    <i class="fa fa-angle-left pull-left"></i> </a>
            </li>

            <li class="treeview">
                <a href="{{url('/panel/admin/customer')}}"> <i class="fa fa-picture-o"></i> <span>مشتریان</span>
                    <i class="fa fa-angle-left pull-left"></i> </a>
            </li>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

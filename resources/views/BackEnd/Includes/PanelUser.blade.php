<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user BackEnd -->
{{--        <div class="user-BackEnd">--}}
{{--            <div class="pull-right image">--}}
{{--                <img src="{{asset('img/user/profile/'.Auth::user()->avatar)}}" class="user-image" alt="User Image" style="height: 40px">--}}
{{--            </div>--}}
{{--            <div class="pull-lef info">--}}
{{--                <p>{{Auth::user()->name . ' ' .Auth::user()->family}}</p>--}}
{{--                <a href="#"><i class="fa fa-circle text-success">&nbsp;</i> پنل مشتریان </a>--}}
{{--            </div>--}}
{{--        </div>--}}
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
                <a href="{{url('/panel/user/profile')}}"> <i class="fa fa-home"></i> <span>خانه</span> </a>
            </li>
            <li class="active treeview">
                <a href="{{url('/panel/user/orders')}}"> <i class="fa fa-home"></i> <span>سفارشات و پیگیری خرید</span> </a>
            </li>

            <li class="active treeview">
                <a href="{{url('/panel/user/unused/discount/code')}}"> <i class="fa fa-home"></i> <span>تخفیف</span> </a>
            </li>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

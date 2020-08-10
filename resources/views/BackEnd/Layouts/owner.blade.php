<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>پنل صاحب فروشگاه | بدو گل</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.4 -->
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<!-- Ionicons 2.0.0 -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="/css/admin/AdminLTE.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
		 folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="/css/admin/_all-skins.min.css">

	<link rel="stylesheet" href="/css/fonts/fonts-fa.css">
	<link rel="stylesheet" href="/css/admin/bootstrap-rtl.min.css">
	<link rel="stylesheet" href="/css/admin/rtl.css">

@yield('head')
@yield('title')
@yield('style')

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>	<![endif]-->
</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper">

	<header class="main-header">
		<!-- Logo -->
		<a href="/" class="logo">
			<!-- mini logo for sidebar mini 50x50 pixels -->
			<span class="logo-mini" style="font-family: WYekan"><b>پنل</b></span>
			<!-- logo for regular state and mobile devices -->
			<span class="logo-lg" style="font-family: WYekan"><b>پنل</b> فروشگاه </span> </a>
		<!-- Header Navbar: style can be found in header.less -->
		<nav class="navbar navbar-static-top" role="navigation">
			<!-- Sidebar toggle button-->
			<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
				<span class="sr-only">Toggle navigation</span> </a>
			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<!-- Control Sidebar Toggle Button -->
					<li>
						<a href="{{url('/')}}"><i class="fa fa-globe">&nbsp;</i>مشاهده سایت</a>
						{{--<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>--}}
					</li>
				{{--<li>--}}
				{{--<a href="{{url('/BackEnd/user/profile')}}"><i class="fa fa-user">&nbsp;</i>ورود به پنل کاربری</a>--}}
				{{--</li>--}}
				<!-- User Account: style can be found in dropdown.less -->
					<li class="dropdown user user-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							@if(Auth::user()->avatar)
								<img src="{{Auth::user()->avatar}}" class="user-image" alt="User Image">
							@else
								<img src="chef-default.jpg" class="user-image" alt="User Image">
							@endif
							<span class="hidden-xs">{{Auth::user()->name . ' ' .Auth::user()->family}}</span> </a>
						<ul class="dropdown-menu">
							<!-- User image -->
							<li class="user-header">
								<img src="{{Auth::user()->avatar}}" class="user-image" alt="User Image">
								{{--<img src="/images/User/chef-default.jpg" class="img-circle" alt="User Image">--}}
								<p>
									{{Auth::user()->name . ' ' .Auth::user()->family}}
								</p>
							</li>
							<!-- Menu Footer-->
							<li class="user-footer">
								<div class="pull-right">
									<a href="{{url('/BackEnd/chef/profile')}}" class="btn btn-default btn-flat">پروفایل کاربری</a>
								</div>
								<div class="pull-left">
									<a class="btn btn-default btn-flat" href="{{ route('logout') }}"
									   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">خروج </a>

								</div>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">
			<!-- Sidebar user BackEnd -->
			<div class="user-BackEnd">
				<div class="pull-right image">
					@if(Auth::user()->avatar)
						<img src="{{Auth::user()->avatar}}" class="user-image" alt="User Image">
					@else
						<img src="chef-default.jpg" class="user-image" alt="User Image">
					@endif
				</div>
				<div class="pull-left info">
					<p>{{Auth::user()->name . ' ' .Auth::user()->family}}</p>
					<a href="#"><i class="fa fa-circle text-success">&nbsp;</i> صاحب فروشگاه </a>
				</div>
			</div>
			<!-- search form -->
		{{--<form action="#" method="get" class="sidebar-form">--}}
		{{--<div class="input-group">--}}
		{{--<input type="text" name="q" class="form-control" placeholder="جستوجو ...">--}}
		{{--<span class="input-group-btn">--}}
		{{--<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>--}}
		{{--</span>--}}
		{{--</div>--}}
		{{--</form>--}}
		<!-- /.search form -->
			<!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu">
				<li class="active treeview">
					<a href="{{url('/BackEnd/chef/profile')}}"> <i class="fa fa-home"></i> <span>خانه</span> </a>
				</li>
				{{--<li class="treeview">--}}
				{{--<a href="#">--}}
				{{--<i class="fa fa-picture-o"></i> <span> تصاویر</span> <i class="fa fa-angle-left pull-left"></i>--}}
				{{--</a>--}}
				{{--<ul class="treeview-menu">--}}
				{{--<li><a href="{{route('photo.index')}}"><i class="fa fa-circle-o"></i>ایجاد / ویرایش / حذف</a></li>--}}
				{{--</ul>--}}
				{{--</li>--}}

				<li class="treeview">
					<a href="#"> <i class="fa fa-coffee"></i> <span> محصولات </span>
						<i class="fa fa-angle-left pull-left"></i> </a>
					<ul class="treeview-menu">
						<li><a href="{{route('food.create')}}"><i class="fa fa-circle-o"></i>ایجاد محصول جدید</a></li>
						<li><a href="{{route('food.index')}}"><i class="fa fa-circle-o"></i>مشاهده / ویرایش / حذف</a>
						</li>
					</ul>
				</li>

				{{--<li class="treeview">--}}
				{{--<a href="#">--}}
				{{--<i class="fa fa-history"></i> <span>سفارشات</span> <i class="fa fa-angle-left pull-left"></i>--}}
				{{--</a>--}}
				{{--<ul class="treeview-menu">--}}
				{{--<li><a href="{{route('orders.index')}}"><i class="fa fa-circle-o"></i> سفارشات در حال انجام</a></li>--}}
				{{--<li><a href="{{action('BackEnd\Chef\OrderController@indexCooked')}}"><i class="fa fa-circle-o"></i> سفارشات انجام شده</a></li>--}}
				{{--</ul>--}}
				{{--</li>--}}


				<li class="treeview">
					<a href="#"> <i class="fa fa-shopping-cart"></i> <span>مدیریت سفارشات</span>
						<i class="fa fa-angle-left pull-left"></i> </a>
					<ul class="treeview-menu">
						<li><a href="{{route('orders.index')}}"><i class="fa fa-circle-o"></i> مشاهده سفارشات </a></li>
						{{--<li><a href="{{action('BackEnd\Chef\OrderController@indexCancel')}}"><i class="fa fa-circle-o"></i> سفارشات لغو شده</a></li>--}}
						<li>
							<a href="{{action('BackEnd\Chef\OrderController@indexSend')}}"><i class="fa fa-circle-o"></i> سفارشات ارسال شده</a>
						</li>
						{{--                        <li><a href="{{url('BackEnd/admin/rate/users/order')}}"><i class="fa fa-circle-o"></i>مشاهده امتیاز کاربران</a></li>--}}
					</ul>
				</li>


				<li class="treeview">
					<a href="#"> <i class="fa fa-shopping-cart"></i> <span>تعطیلی فروشگاه</span>
						<i class="fa fa-angle-left pull-left"></i> </a>
					<ul class="treeview-menu">
						<li><a href="{{route('service.index')}}"><i class="fa fa-circle-o"></i> فعال/غیر فعال </a></li>
					</ul>
				</li>

			</ul>
		</section>
		<!-- /.sidebar -->
	</aside>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				{{--پیشخوان--}}
			</h1>
			{{--<ol class="breadcrumb">--}}
			{{--<li><a href="#"><i class="fa fa-dashboard"></i> خانه</a></li>--}}
			{{--<li class="active">پیشخوان</li>--}}
			{{--</ol>--}}
		</section>

		<!-- Main content -->
		<section class="content">

			<div class="row">
				<div class="col-sm-12">
					<h3 class="page-header">@yield('head-content')</h3>
				</div>
			</div>
			@yield('content')

		</section><!-- /.content -->
	</div><!-- /.content-wrapper -->
	<footer class="main-footer">
		<div class="pull-left hidden-xs"> طراحی و توسعه توسط <a class="pull-left href=">&nbsp; گروه آیخان </a>
		</div>
		تمامی حقوق محفوظ است
	</footer>

	<div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->

      <!-- jQuery 2.1.4 -->
<script src="/js/jquery.min.js"></script>
      <!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
      <!-- Bootstrap 3.3.4 -->
<script src="/js/bootstrap.min.js"></script>
      <!-- AdminLTE App -->
<script src="/js/admin/app.min.js"></script>
<script>
    $('div.alert').delay(3000).slideUp(300);
</script>
@yield('script')

</body>
</html>

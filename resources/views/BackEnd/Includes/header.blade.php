<header class="main-header">
	<!-- Logo -->
	<a href="/" class="logo">
		<!-- mini logo for sidebar mini 50x50 pixels -->
		<span class="logo-mini" style="font-family: WYekan"><b>پنل</b></span>
		<!-- logo for regular state and mobile devices -->
		<span class="logo-lg" style="font-family: WYekan"><b>پنل</b> مدیریتی </span> </a>
	<!-- Header Navbar: style can be found in header.less -->
	<nav class="navbar navbar-static-top" role="navigation">
		<!-- Sidebar toggle button-->
		<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
			<span class="sr-only">Toggle navigation</span> </a>
		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<!-- Control Sidebar Toggle Button -->
				<li>
					<a href="{{url('/')}}" target="_blank"><i class="fa fa-globe">&nbsp;</i>مشاهده سایت</a>
				</li>
			{{--<li>--}}
			{{--<a href="{{url('/BackEnd/user/profile')}}"><i class="fa fa-user">&nbsp;</i>ورود به پنل فروشگاه ها</a>--}}
			{{--</li>--}}
			<!-- User Account: style can be found in dropdown.less -->
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="{{asset('img/user/profile/'.Auth::user()->avatar)}}" class="user-image" alt="User Image">

						<span class="hidden-xs">  </span> </a>
					<ul class="dropdown-menu">
						<!-- User image -->
						<li class="user-header">
							<img src="{{asset('img/user/profile/'.Auth::user()->avatar)}}" class="user-image" alt="User Image">
							<p>
								{{Auth::user()->name . ' ' .Auth::user()->family}}
							</p>
						</li>
						<!-- Menu Footer-->
						<li class="user-footer">
							<div class="pull-right">
								<a href="{{url('/panel/admin/profile')}}" class="btn btn-default btn-flat">پروفایل کاربری</a>
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

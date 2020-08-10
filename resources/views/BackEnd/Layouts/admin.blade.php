<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>پنل مدیریت | آیشیل</title>
	@include('BackEnd.Includes.head')
</head>

<body class="skin-blue sidebar-mini">
<div class="wrapper" @yield('stylewrapper')>
@include('BackEnd.Includes.header')
<!-- Left side column. contains the logo and sidebar -->
@include('BackEnd.Includes.PanelAdmin')
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
	@include('BackEnd.Includes.footer')

	<div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->

@include('BackEnd.Includes.foot')


</body>
</html>

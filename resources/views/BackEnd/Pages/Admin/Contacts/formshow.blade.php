@extends('BackEnd.Layouts.admin')
@section('head-content')
	<span class="fa fa-eye">&nbsp;</span>  مشاهده جزییات فرم تماس با ما
@endsection

@section('head')
	<link href="{{asset('BackEnd/css/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('BackEnd/css/rate-plugin/style.css')}}" rel="stylesheet" type="text/css">
	<style>
		/*span.stars, span.stars span {*/
		/*	display: block;*/
		/*	background: url("/../../css/img/stars.png") 0 -16px repeat-x;*/
		/*	width: 80px;*/
		/*	height: 16px;*/
		/*	float: left;*/
		/*}*/

		/*span.stars span {*/
		/*	background-position: 0 0;*/
		/*}*/
	</style>
@endsection

@section('content')

	<div class="col-sm-8 col-sm-push-2">

		@if(Session::has('alert-success'))
			<div class="alert alert-success">
				{{session('alert-success')}}
			</div>
		@endif
		@if(Session::has('alert-danger'))
			<div class="alert alert-danger">
				{{session('alert-danger')}}
			</div>
		@endif

	</div>

	<div class="col-sm-12">
		<div class="BackEnd BackEnd-default">
			<div class="BackEnd-body">
				<div class="dataTable_wrapper">
					<div style="overflow-x: auto;">
						<table class="table table-striped table-bordered table-hover centerTable tdAlign"
						       id="dataTables-example">
							<tr>
								<th class="text-center">نام</th>
								<td>
									{{$form1->name}}
								</td>
							</tr>

{{--							<tr>--}}
{{--								<th class="text-center">نام خانوادگی</th>--}}
{{--								<td>{{$form1->family}}</td>--}}
{{--							</tr>--}}
							<tr>
								<th class="text-center">موبایل</th>
								<td>{{$form1->phone}}</td>
							</tr>
							<tr>
								<th class="text-center">ایمیل</th>
								<td>{{$form1->email}}</td>
							</tr>

							<tr>
								<th class="text-center">موضوع</th>
								<td>{{$form1->subject}}</td>
							</tr>

							<tr>
								<th class="text-center">متن پیام</th>
								<td>{{$form1->message}}</td>
							</tr>

						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>

@endsection

@section('script')
	<script src="{{asset('js/admin/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('js/admin/dataTables.bootstrap.min.js')}}"></script>
	<script src="{{asset('js/admin/rate-plugin/index.js')}}"></script>


	<script>
        $.fn.stars = function () {
            return $(this).each(function () {
                // Get the value
                var val = parseFloat($(this).html());
                // Make sure that the value is in 0 - 5 range, multiply to get width
                var size = Math.max(0, (Math.min(5, val))) * 16;
                // Create stars holder
                var $span = $('<span />').width(size);
                // Replace the numerical value with stars
                $(this).html($span);
            });
        };
        $(function () {
            $('span.stars').stars();
        });
	</script>
	{{--for data table--}}
	<script>
        $(document).ready(function () {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
	</script>
@endsection

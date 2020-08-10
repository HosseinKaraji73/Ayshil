@extends('BackEnd.Layouts.admin')
@section('head-content')
    <span class="fa fa-eye">&nbsp;</span>  مشاهده جزییات محصول
@endsection

@section('head')
    <link href="{{asset('BackEnd/css/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('BackEnd/css/rate-plugin/style.css')}}" rel="stylesheet" type="text/css">
    <style>
        span.stars, span.stars span {
            display: block;
            background: url("/../../css/img/stars.png") 0 -16px repeat-x;
            width: 80px;
            height: 16px;
            float: left;
        }


        span.stars span {
            background-position: 0 0;
        }
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
                                <th class="text-center"> تصاویر</th>
                                <td>


                                    @if($product->photo1)
                                        <img src="{{asset("img/Admin/product/$product->photo1")}}" style="width: 100px">
                                    @else
                                        <img src="{{asset('img/admin/null.png')}}" style="width: 100px">
                                    @endif
                                    @if($product->photo2)
                                        <img src="{{asset("img/Admin/product/$product->photo2")}}" style="width: 100px">
                                    @else
                                        <img src="{{asset('img/admin/null.png')}}" style="width: 100px">
                                    @endif
                                    @if($product->photo3)
                                        <img src="{{asset("img/Admin/product/$product->photo3")}}" style="width: 100px">
                                    @else
                                        <img src="{{asset('img/admin/null.png')}}" style="width: 100px">
                                    @endif
                                    @if($product->photo4)
                                        <img src="{{asset("img/Admin/product/$product->photo4")}}" style="width: 100px">
                                    @else
                                        <img src="{{asset('img/admin/null.png')}}" style="width: 100px">
                                    @endif
{{--                                    @if($product->photo5)--}}
{{--                                        <img src="{{asset("img/Admin/product/$product->photo5")}}" style="width: 100px">--}}
{{--                                    @else--}}
{{--                                        <img src="{{asset('img/admin/null.png')}}" style="width: 100px">--}}
{{--                                    @endif--}}
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center"> نام محصول</th>
                                <td>
                                    {{$product->title}}
                                </td>
                            </tr>

                              <tr>
                                <th class="text-center">کد محصول</th>
                                <td>
                                    {!!$product->code!!}
                                </td>
                            </tr>

                            <tr>
                                <th class="text-center">نوع فروش</th>


                                <td>
                                    @if($product->category == 1)
                                        <span class="fa fa-check text-green">معمولی</span>
                                    @elseif($product->category == 2)
                                        <span class="fa fa-check text-green">ویژه</span>
                                    @elseif($product->category == 3)
                                        <span class="fa fa-check text-green">پرفروش</span>
                                    @elseif($product->category == 4)
                                        <span class="fa fa-check text-green">جدید</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th class="text-center">توضیحات</th>
                                <td>
                                    {!!$product->description!!}
                                </td>
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

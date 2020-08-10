@extends('auth.layouts.BackEnd.user')
@section('title', 'پنل کاربری')

@section('head')
    <link href="{{asset('css/admin/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css">
@endsection
@section('head-content')
    <span class="fa fa-tags">&nbsp;</span> کدهای تخفیف
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
    <div class="BackEnd BackEnd-default">
        <div class="BackEnd-body">
            <div class="dataTable_wrapper">
                <div style="overflow-x: auto;">
                    <table class="text-center table table-striped table-bordered table-hover centerTable thAlign"
                           id="dataTables-example">
                        <thead>
                        <tr>
                            <th>--</th>
                            <th>نوع تخفیف</th>
                            <th>عنوان</th>
                            <th>مبلغ ( {{__('settings.tuman')}} )</th>
                            <th>تاریخ اعتبار</th>
                            <th>کد تخفیف</th>
                        </tr>
                        </thead>
                        @if(isset($discounts))
                            <tbody>
                            <?php $i = 1 ?>
                            @foreach($discounts as $discount)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>
                                        @if($discount->type == 'birth')
                                            تخفیف تولد
                                        @elseif($discount->type == 'periodic')
                                            تخفیف مناسبتی
                                        @elseif($discount->type == 'reagent')
                                            تخفیف معرف
                                        @elseif($discount->type == 'maxcount')
                                            تخفیف سقف خرید
                                        @else
                                            تخفیف مسابقه
                                        @endif
                                    </td>
                                    <td>
                                        @if(!empty($discount->name))
                                            {{$discount->name}}
                                        @endif
                                    </td>
                                    <td>
                                        {{$discount->price}}&nbsp;{{__('settings.tuman')}} &nbsp;
                                    </td>
                                    <td>
                                        @if(!empty($discount->end_time))
                                            {{$discount->end_time}}
                                        @endif
                                    </td>
                                    <td>{{$discount->code}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

@endsection

@section('script')
    <script src="{{asset('js/admin/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/admin/dataTables.bootstrap.min.js')}}"></script>

    {{--for data table--}}
    <script>
        $(document).ready(function () {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
@endsection

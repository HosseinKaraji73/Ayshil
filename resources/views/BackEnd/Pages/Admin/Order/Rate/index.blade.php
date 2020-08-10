@extends('BackEnd.Layouts.admin')
@section('title', 'پنل مدیریتی')

@section('head')

@stop
@section('head-content')
    <span class="fa fa-star">&nbsp;</span> امتیاز سفارشات
@stop
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

    <div class="col-sm-8 col-sm-push-2">
        <h4 class="persian-digit">تعداد کل افراد شرکت کننده در این نظرسنجی :  {{$count}} نفر</h4>
        <div>آیا از کیفیت محصول راضی هستید ؟</div>
        <div class="progress">
            <div class="progress-bar progress-bar-striped active bg-yellow" role="progressbar"
                 aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:{{$avg1}}%">
                <span class="persian-digit">{{$avg1}}%</span>
            </div>
        </div>
        <div>آیا از بسته بندی محصول راضی هستید ؟</div>
        <div class="progress">
            <div class="progress-bar progress-bar-striped active bg-aqua-active" role="progressbar"
                 aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:{{$avg2}}%">
                <span class="persian-digit">{{$avg2}}%</span>
            </div>
        </div>
        <div>آیا از نحوه ارسال محصول راضی هستید ؟</div>
        <div class="progress">
            <div class="progress-bar progress-bar-striped active bg-maroon-active" role="progressbar"
                 aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:{{$avg3}}%">
                <span class="persian-digit">{{$avg3}}%</span>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

@endsection

@section('script')
    <script>
        //convert latin numbers to persian
        persian={0:'۰',1:'۱',2:'۲',3:'۳',4:'۴',5:'۵',6:'۶',7:'۷',8:'۸',9:'۹'};
        $(".persian-digit").each(function(){
            for(var i=0; i<=9; i++) {
                var re = new RegExp(i,"g");
                $(this).html($(this).html().replace(re,persian[i]));
                $(this).val($(this).val().replace(re,persian[i]));
            }
        });
    </script>
@endsection

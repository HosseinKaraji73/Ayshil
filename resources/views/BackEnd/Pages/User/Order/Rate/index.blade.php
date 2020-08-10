@extends('BackEnd.Layouts.user')
@section('title', 'پنل کاربری')

@section('style')
    <style>
        .slidecontainer {
            width: 100%;
        }

        .slider {
            -webkit-appearance: none;
            width: 100%;
            height: 15px;
            border-radius: 5px;
            background: #d3d3d3;
            outline: none;
            opacity: 0.7;
            -webkit-transition: .2s;
            transition: opacity .2s;
        }

        .slider:hover {
            opacity: 1;
        }

        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background: #F22613;
            cursor: pointer;
        }

        .slider::-moz-range-thumb {
            width: 25px;
            height: 25px;
            border-radius: 50%;
            background: #F22613;
            cursor: pointer;
        }
    </style>
@endsection
@section('head-content')
    <span class="fa fa-star">&nbsp;</span> امتیاز دادن به سفارشات
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

    <div class="col-sm-8 col-sm-push-2">

        {!! Form::open(['method'=>'POST', 'action'=> ['BackEnd\User\OrderController@rateOrderUser' ,$payment->id]]) !!}
        {{ csrf_field() }}


        <div>کیفیت محصول دریافتی را چگونه ارزیابی می کنید؟</div>
        <div class="row" style="margin: 20px 0;">
            <div class="slidecontainer col-sm-3">
                <input type="range" min="0" max="100" value="{{$rateUser ? $rateUser->q1 : ''}}" class="slider" name="q1" id="q1">
                <p><span id="demo1"></span>%</p>
            </div>
        </div>

        <div>بسته بندی محصول را چگونه ارزیابی می کنید؟</div>
        <div class="row" style="margin: 20px 0;">
            <div class="slidecontainer col-sm-3">
                <input type="range" min="0" max="100" value="{{$rateUser ? $rateUser->q2 : ''}}" class="slider" name="q2" id="q2">
                <p><span id="demo2"></span>%</p>
            </div>
        </div>

        <div>نحوه ارسال را چگونه ارزیابی می کنید؟</div>
        <div class="row" style="margin: 20px 0;">
            <div class="slidecontainer col-sm-3">
                <input type="range" min="0" max="100" value="{{$rateUser ? $rateUser->q3 : ''}}" class="slider" name="q3" id="q3">
                <p><span id="demo3"></span>%</p>
            </div>


        </div>

        <div class="form-group">
            {!! Form::submit(' ثبت نظر', ['class'=>'btn btn-success','id'=>'rateSave']) !!}
        </div>

        {!! Form::close() !!}

    </div>
    <div class="clearfix"></div>

@endsection

@section('script')
    <script>

        var q1 = document.getElementById("q1");
        var q2 = document.getElementById("q2");
        var q3 = document.getElementById("q3");
        var output1 = document.getElementById("demo1");
        var output2 = document.getElementById("demo2");
        var output3 = document.getElementById("demo3");
        output1.innerHTML = q1.value;
        output2.innerHTML = q2.value;
        output3.innerHTML = q3.value;

        q1.oninput = function() {
            output1.innerHTML = this.value;
        };
        q2.oninput = function() {
            output2.innerHTML = this.value;
        };
        q3.oninput = function() {
            output3.innerHTML = this.value;
        };
        $('#rateSave').submit(function(event) {
            event.preventDefault();
        });

    </script>
@endsection

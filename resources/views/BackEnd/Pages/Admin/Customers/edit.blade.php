@extends('BackEnd.Layouts.admin')
@section('head-content')
    <span class="fa fa-pencil">&nbsp;</span>ویرایش همکار
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

        {!! Form::model($customer,['method'=>'PATCH','action'=>['BackEnd\Admin\CustomersController@update',$customer->id],'files'=>true ,'id' =>'myForm'])!!}

        {{--<div class="form-group img img-responsive" >--}}
            {{--<img src="{{$menu->photo}}" alt="" style="height:150px">--}}
        {{--</div>--}}

        {{--<div class="form-group{{ $errors->has('photo') ? ' has-error' : '' }}">--}}
            {{--<label for="photo" class="pull-right">تصویر :</label>--}}
            {{--<input type="file" class="form-control" name="photo" id="photo" value="{{old('photo')}}">--}}
            {{--@if ($errors->has('photo'))--}}
                {{--<span class="help-block">--}}
                        {{--<strong>{{ $errors->first('photo') }}</strong>--}}
                    {{--</span>--}}
            {{--@endif--}}
        {{--</div>--}}


        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            {!! Form::label('title', ' عنوان همکار :') !!}
            {!! Form::text('title', null,['id'=>'title' ,'class'=>'form-control']) !!}
            @if ($errors->has('title'))
                <span class="help-block">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('title_en') ? ' has-error' : '' }}">
            {!! Form::label('title_en', ' عنوان همکار :') !!}
            {!! Form::text('title_en', null,['id'=>'title_en' ,'class'=>'form-control']) !!}
            @if ($errors->has('title_en'))
                <span class="help-block">
                        <strong>{{ $errors->first('title_en') }}</strong>
                    </span>
            @endif
        </div>

{{--        <div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">--}}
{{--            {!! Form::label('position', 'موقعیت در صفحه اصلی :') !!}--}}
{{--            {!! Form::select('position',['0'=>'در صفحه اصلی قرار نگیرد' ,'1'=>'1' ,'2'=>'2' ,'3'=>'3' ,'4'=>'4' ,'5'=>'5' ,'6'=>'6' ] , null, ['class'=>'form-control']) !!}--}}
{{--            @if ($errors->has('position'))--}}
{{--                <span class="help-block">--}}
{{--                    <strong>{{ $errors->first('position') }}</strong>--}}
{{--                </span>--}}
{{--            @endif--}}
{{--        </div>--}}

        <div class="row">
            <div class="form-group col-sm-6">
                {!! Form::submit('ویرایش', ['class'=>'form-control btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>

            {!! Form::open(['method'=>'DELETE', 'action'=>['BackEnd\Admin\CustomersController@destroy', $customer->id]]) !!}
            <div class="form-group col-sm-6">
                {!! Form::submit('حذف', ['class'=>'form-control btn btn-danger', 'onclick' => "return confirm('آیا می خواهید این مورد را حذف کنید؟')"]) !!}
            </div>
            {!! Form::close() !!}

        </div>
    </div>

    <div class="clearfix"></div>

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#myForm').submit(function (e) {
                if ($('#photo')[0].files[0].size > 1024000) {
                    //Prevent default and display error
                    alert("حجم تصویر انتخابی شما باید حداکثر 1 مگابایت باشد.");
                    e.preventDefault();
                }
                if ($('#icon')[0].files[0].size > 1024000) {
                    //Prevent default and display error
                    alert("حجم آیکون انتخابی شما باید حداکثر 1 مگابایت باشد.");
                    e.preventDefault();
                }
            });
        });
    </script>
@endsection



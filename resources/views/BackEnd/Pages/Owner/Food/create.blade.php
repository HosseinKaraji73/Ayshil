@extends('auth.layouts.BackEnd.owner')
@section('head-content')
    <span class="fa fa-plus-circle">&nbsp;</span> ایجاد  محصول جدید
@endsection
@section('head')
    <link rel="stylesheet" href="{{asset('/css/admin/chosen.min.css')}}">
    <style>
        .advBtn{
            margin-right: 10px;
            background-color: #fff;
            padding: 5px 20px;
        }
    </style>
@endsection
@section('content')
    <div class="col-sm-12">
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
   {{--    <div class="col-sm-12 well well-sm text-red">--}}
{{--        پرکردن فیلدهای ستاره دار اجباری است.--}}
{{--    </div>--}}<div class="col-sm-12">
        {!! Form::open(['method'=>'POST', 'action'=>'BackEnd\Admin\SlidersController@store' ,'files' => true , 'enctype'=> 'multipart/form-data' ,'id' => 'myForm']) !!}
        {{ csrf_field() }}

        <div class="row">
            <div class="col-sm-4 form-group{{ $errors->has('photo1') ? ' has-error' : '' }}">
                {!! Form::label('photo1', ' عکس اول :') !!}
                {!! Form::file('photo1', null, ['class'=>'form-control']) !!}
                @if ($errors->has('photo1'))
                    <span class="help-block">
                        <strong>{{ $errors->first('photo1') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col-sm-4 form-group{{ $errors->has('photo2') ? ' has-error' : '' }}">
                {!! Form::label('photo2', ' عکس دوم :') !!}
                {!! Form::file('photo2', null, ['class'=>'form-control']) !!}
                @if ($errors->has('photo2'))
                    <span class="help-block">
                        <strong>{{ $errors->first('photo2') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col-sm-4 form-group{{ $errors->has('photo3') ? ' has-error' : '' }}">
                {!! Form::label('photo3', ' عکس سوم :') !!}
                {!! Form::file('photo3', null, ['class'=>'form-control']) !!}
                @if ($errors->has('photo3'))
                    <span class="help-block">
                        <strong>{{ $errors->first('photo3') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col-sm-4 form-group{{ $errors->has('photo4') ? ' has-error' : '' }}">
                {!! Form::label('photo4', ' عکس چهارم :') !!}
                {!! Form::file('photo4', null, ['class'=>'form-control']) !!}
                @if ($errors->has('photo4'))
                    <span class="help-block">
                        <strong>{{ $errors->first('photo4') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col-sm-4 form-group{{ $errors->has('photo5') ? ' has-error' : '' }}">
                {!! Form::label('photo5', ' عکس پنجم :') !!}
                {!! Form::file('photo5', null, ['class'=>'form-control']) !!}
                @if ($errors->has('photo5'))
                    <span class="help-block">
                        <strong>{{ $errors->first('photo5') }}</strong>
                    </span>
                @endif
            </div>

        </div>
        <br>
        <div class="row">

            <div class="col-sm-3 form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                {!! Form::label('name', ' نام محصول* :') !!}
                {!! Form::text('name', null,['id'=>'name' ,'class'=>'form-control']) !!}
                @if ($errors->has('name'))
                    <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>

            {{--<div class="col-sm-3 form-group{{ $errors->has('min') ? ' has-error' : '' }}">--}}
                {{--{!! Form::label('min', ' حداقل تعداد سفارش این غذا* :') !!}--}}
                {{--{!! Form::text('min', null,['data-mask'=>'0000' ,'class'=>'form-control']) !!}--}}
                {{--@if ($errors->has('min'))--}}
                    {{--<span class="help-block">--}}
                    {{--<strong>{{ $errors->first('min') }}</strong>--}}
                {{--</span>--}}
                {{--@endif--}}
            {{--</div>--}}

            {{--<div class="col-sm-3 form-group{{ $errors->has('max') ? ' has-error' : '' }}">--}}
                {{--{!! Form::label('max', ' حداکثر تعداد سفارش این غذا* :') !!}--}}
                {{--{!! Form::text('max', null,['data-mask'=>'0000' ,'class'=>'form-control']) !!}--}}
                {{--@if ($errors->has('max'))--}}
                    {{--<span class="help-block">--}}
                    {{--<strong>{{ $errors->first('max') }}</strong>--}}
                {{--</span>--}}
                {{--@endif--}}
            {{--</div>--}}

            <div class="col-sm-3 form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                {!! Form::label('price', ' قیمت ( {{__('settings.tuman')}} )* :') !!}
                {!! Form::text('price', null,['class'=>'form-control']) !!}
                @if ($errors->has('price'))
                    <span class="help-block">
                    <strong>{{ $errors->first('price') }}</strong>
                </span>
                @endif
            </div>


        </div>

        <div class="row">

            <div class="col-sm-6 form-group{{ $errors->has('menu_id') ? ' has-error' : '' }}">
                {!! Form::label('menu_id', ' منو محصول* :') !!}
                {!! Form::select('menu_id',$menus , null, ['class'=>'form-control chosen' ,'placeholder'=>'انتخاب کنید']) !!}
                @if ($errors->has('menu_id'))
                    <span class="help-block">
                    <strong>{{ $errors->first('menu_id') }}</strong>
                </span>
                @endif
            </div>

            {{--<div class="col-sm-6 form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">--}}
                {{--{!! Form::label('user_id', ' فروشگاه* :') !!}--}}
                {{--<select name="user_id" class="form-control chosen" title="فروشگاه :">--}}
                    {{--<option value=" ">انتخاب کنید</option>--}}
                    {{--@foreach($chefs as $chef)--}}
                        {{--<option value="{{$chef->id}}" @if (old('user_id') == $chef->id) selected="selected" @endif>{{ $chef->name .' ' .$chef->family }}</option>--}}
                    {{--@endforeach--}}
                {{--</select>--}}
                {{--@if ($errors->has('user_id'))--}}
                    {{--<span class="help-block">--}}
                    {{--<strong>{{ $errors->first('user_id') }}</strong>--}}
                {{--</span>--}}
                {{--@endif--}}
            {{--</div>--}}

        </div>

        <div class="row">

            {{--<div class="col-sm-6 form-group{{ $errors->has('meal_id') ? ' has-error' : '' }}">--}}
                {{--<label for="tag_id" class="pull-right"> وعده ها* :</label>--}}
                {{--@foreach($meals as $meal)--}}
                    {{--<div class="col-sm-2">--}}
                        {{--{!! Form::label('meal_id[]', $meal->name ) !!}--}}
                        {{--{!! Form::checkbox('meal_id[]' ,$meal->id ,false) !!}--}}
                    {{--</div>--}}
                {{--@endforeach--}}
                {{--@if ($errors->has('meal_id'))--}}
                    {{--<span class="help-block">--}}
                    {{--<strong>{{ $errors->first('meal_id') }}</strong>--}}
                {{--</span>--}}
                {{--@endif--}}
            {{--</div>--}}

            <div class="col-sm-6 form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                حتما قبل از حراج یا ویژه کردن محصول خود، با ادمین هماهنگ کنید

                <label for="type" class="pull-right">نوع فروش محصول شما* : </label>
                <div class="col-sm-4">
                    {{ Form::radio('type', 'normal' ,null,['class'=>'foodType']) }} فروش عادی &nbsp;&nbsp;&nbsp;
                </div>
                {{--<div class="col-sm-3">--}}
                    {{--{{ Form::radio('type', 'gym' ,null,['class'=>'foodType']) }} فروش حراجی--}}
                {{--</div>--}}
                <div class="col-sm-4">
                    {{ Form::radio('type', 'art' ,null,['id'=>'artBtn']) }} فروش ویژه
                </div>
                <div class="col-sm-4">
                    {{ Form::radio('type', 'land' ,null,['id'=>'artBtn']) }} فروش در بدو لند
                </div>
                @if ($errors->has('type'))
                    <span class="help-block">
                        <strong>{{ $errors->first('type') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="row">

                {{--<div id="artTable" class="col-sm-6 form-group{{ $errors->has('news_id[]') ? ' has-error' : '' }}">--}}
                    {{--<label for="news_id[]" class="pull-right">لیست تبلیغات:</label>--}}

                    {{--<div class="dropdown" style="display:inline-block;">--}}
                        {{--<button class="btn btn-default dropdown-toggle advBtn" type="button" data-toggle="dropdown">انتخاب کنید--}}
                            {{--<span class="caret"></span></button>--}}
                        {{--<ul class="dropdown-menu">--}}
                            {{--@foreach($news as $item)--}}
                                {{--<li><a href="#"><input type="checkbox" name="news_id[]" value="{{$item->id}}"/>&nbsp; {{str_limit($item->title,50)}}</a></li>--}}
                            {{--@endforeach--}}
                            {{--@if ($errors->has('news_id[]'))--}}
                                {{--<span class="help-block">--}}
                                {{--<strong>{{ $errors->first('news_id[]') }}</strong>--}}
                            {{--</span>--}}
                            {{--@endif--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}

        </div>

        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            {!! Form::label('description', ' توضیحات درباره محصول :') !!}
            {!! Form::textarea('description', null,['class'=>'form-control']) !!}
            @if ($errors->has('description'))
                <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
        </div>

        {{--<div class="form-group{{ $errors->has('recipes') ? ' has-error' : '' }}">--}}
            {{--{!! Form::label('recipes', ' دستور پخت* :') !!}--}}
            {{--{!! Form::textarea('recipes', null,['class'=>'form-control']) !!}--}}
            {{--@if ($errors->has('recipes'))--}}
                {{--<span class="help-block">--}}
                    {{--<strong>{{ $errors->first('recipes') }}</strong>--}}
                {{--</span>--}}
            {{--@endif--}}
        {{--</div>--}}

        {{--<div class="row">--}}

            {{--<div class="col-sm-12 form-group{{ $errors->has('tag_id') ? ' has-error' : '' }}">--}}
                {{--<label for="tag_id" class="pull-right"> برچسب ها* :</label>--}}
                {{--@foreach($tags as $tag)--}}
                    {{--<div class="col-sm-2">--}}
                        {{--{!! Form::label('tag_id[]', $tag->name ) !!}--}}
                        {{--{!! Form::checkbox('tag_id[]' ,$tag->id ,false) !!}--}}
                    {{--</div>--}}
                {{--@endforeach--}}
                {{--@if ($errors->has('tag_id'))--}}
                    {{--<span class="help-block">--}}
                    {{--<strong>{{ $errors->first('tag_id') }}</strong>--}}
                {{--</span>--}}
                {{--@endif--}}
            {{--</div>--}}

            {{--<div class="col-sm-1 form-group{{ $errors->has('available') ? ' has-error' : '' }}">--}}
                {{--{!! Form::label('available', 'موجود  ') !!}--}}
                {{--{!! Form::checkbox('available' ,'1' ,true) !!}--}}
                {{--@if ($errors->has('available'))--}}
                    {{--<span class="help-block">--}}
                        {{--<strong>{{ $errors->first('available') }}</strong>--}}
                    {{--</span>--}}
                {{--@endif--}}
            {{--</div>--}}

            {{--<div class="col-sm-1 form-group{{ $errors->has('new') ? ' has-error' : '' }}">--}}
                {{--{!! Form::label('new', 'جدید  ') !!}--}}
                {{--{!! Form::checkbox('new' ,'1' ,false) !!}--}}
                {{--@if ($errors->has('new'))--}}
                    {{--<span class="help-block">--}}
                        {{--<strong>{{ $errors->first('new') }}</strong>--}}
                    {{--</span>--}}
                {{--@endif--}}
            {{--</div>--}}

        {{--</div>--}}
        {{--<div class="row paste materialDiv">--}}

            {{--<div class="form-group col-sm-6">--}}
                {{--<label for="material_id1"> مواد اولیه : </label>--}}
                {{--<select name="material_id[]" id="material_id1" class="form-control">--}}
                    {{--@foreach($materials as $material)--}}
                        {{--<option class="form-control" @if (old('material_id1') == $material->id) selected="selected" @endif value="{{$material->id}}">{{ $material->name }}</option>--}}
                    {{--@endforeach--}}
                {{--</select>--}}
            {{--</div>--}}

            {{--<div class="form-group col-sm-6">--}}
                {{--<label for="amount1">مقدار:</label>--}}
                {{--<input type="text" id="amount1" name="amount[]" class="form-control">--}}
            {{--</div>--}}

        {{--</div>--}}

        {{--<div class="clearfix"></div>--}}
        {{--<div class="form-group col-sm-12 materialDiv">--}}
            {{--<div>--}}
            {{--<span class="add-more" style="cursor: pointer; color: #23527c">--}}
                {{--<i class="fa fa-plus-circle"></i><strong> بیشتر </strong></span>--}}
                {{--<span class="remove" style="cursor: pointer; color: #c9302c">--}}
                {{--<i class="fa fa-minus-circle"></i><strong> حذف </strong></span>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div id="copy" class="row hide">--}}
            {{--<div class="col-sm-12">--}}
                {{--<div class="form-group col-sm-6">--}}
                    {{--<label for="material_id"> مواد اولیه : </label>--}}
                    {{--<select name="material_id[]" id="material_id" class="form-control">--}}
                        {{--@foreach($materials as $material)--}}
                            {{--<option class="form-control" value="{{$material->id}}">{{ $material->name }}</option>--}}
                        {{--@endforeach--}}
                    {{--</select>--}}
                {{--</div>--}}

                {{--<div class="form-group col-sm-6">--}}
                    {{--<label for="amount">مقدار:</label>--}}
                    {{--<input type="text" id="amount" name="amount[]" class="form-control">--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        <p></p>
        <div class="form-group">
            {!! Form::submit('ثبت', ['class'=>'form-control btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}

    </div>
    <div class="clearfix"></div>

@endsection

@section('script')


    <script>
        $(document).ready(function(){
            $("#artTable").hide();
            $(".materialDiv").show();
            if($('#artBtn').is(':checked')){
                $(".materialDiv").hide();
                $("#artTable").show();
            }
            $("#artBtn").click(function(){
                $(".materialDiv").hide();
                $("#artTable").show();

            });
            $(".foodType").click(function(){
                $("#artTable").hide();
                $(".materialDiv").show();
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $('#myForm')
            // Add button click handler
            .on('click', '.add-more', function () {
                var num = $('div.paste select').length;
                if (num < 50) {
                    var $template = $('#copy');
                    $template.find('select').attr('id', 'material_id' + (num + 1));
                    $template.find('label:eq(0)').attr('for', 'material_id' + (num + 1));

                    $template.find('input[type=text]:eq(0)').attr('id', 'amount' + (num + 1));
                    $template.find('label:eq(1)').attr('for', 'amount' + (num + 1));

                    $clone = $template
                            .clone()
                            .removeClass('hide')
                            .removeAttr('id')
                            .appendTo($('div.paste'));
                } else {
                    return alert('بیش از 50 ماده اولیه مجاز نمی باشد.');
                }
            })


            // Remove button click handler
            .on('click', '.remove', function () {
                var num = $('div.paste select').length;
                if (num > 1) {
                    var $template = $('.paste');
                    $template.find('select#material_id' + num).parent().remove();
                    $template.find('input[type=text]#amount' + num).parent().remove();
                }
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#myForm').submit(function (e) {
                if ($('#photo')[0].files[0].size > 1024000) {
                    //Prevent default and display error
                    alert("حجم فایل انتخابی شما باید حداکثر 1 مگابایت باشد.");
                    e.preventDefault();
                }
            });

        });
    </script>
    <script src="{{asset('/js/admin/jquery.mask.min.js')}}"></script>
    <script src="{{asset('/js/admin/chosen.jquery.min.js')}}"></script>
    {{--type script--}}
    {{--<script src="https://code.jquery.com/jquery-latest.js"></script>--}}

    {{--end type script--}}
    <script type="text/javascript">
        $(".chosen").chosen();
    </script>
@endsection

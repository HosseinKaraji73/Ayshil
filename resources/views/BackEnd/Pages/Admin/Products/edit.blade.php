@extends('BackEnd.Layouts.admin')
@section('head-content')
    <span class="fa fa-pencil">&nbsp;</span> ویرایش محصول فروشگاه تجهیزاته
    <br>
    <p style="font-size: 15px;color: red;margin-top: 15px"> Photo Size: 265px * 265px</p>
@endsection
@section('head')
    <link rel="stylesheet" href="{{asset('BackEnd/css/chosen.min.css')}}">
    <style>
        .advBtn {
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

    <div class="col-sm-12">
        {!! Form::model($product ,['method'=>'PATCH', 'action'=> ['BackEnd\Admin\ProductController@update' ,$product->id] ,'files' => true ,'id' => 'myForm']) !!}
        @csrf

        <div class="row">
            <div class="col-sm-3 form-group img img-responsive">
                عکس اول
                @if($product->photo1)
                    <img src="{{asset("img/admin/product/$product->photo1")}}" style="width: 150px;">
                @elseif(!isset($product->photo1))
                    <img src="{{asset('img/admin/null.png')}}" style="width: 150px;">
                @endif
            </div>

            <div class="col-sm-3 form-group img img-responsive">
                عکس دوم
                @if($product->photo2)
                    <img src="{{asset("img/admin/product/$product->photo2")}}" style="width: 150px;">
                @elseif(!isset($product->photo2))
                    <img src="{{asset('img/admin/null.png')}}" style="width: 150px;">
                @endif
            </div>

            <div class="col-sm-3 form-group img img-responsive">
                عکس سوم
                @if($product->photo3)
                    <img src="{{asset("img/admin/product/$product->photo3")}}" style="width: 150px;">
                @elseif(!isset($product->photo3))
                    <img src="{{asset('img/admin/null.png')}}" style="width: 150px;">
                @endif
            </div>

            <div class="col-sm-3 form-group img img-responsive">
                عکس چهارم
                @if($product->photo4)
                    <img src="{{asset("img/admin/product/$product->photo4")}}" style="width: 150px;">
                @elseif(!isset($product->photo4))
                    <img src="{{asset('img/admin/null.png')}}" style="width: 150px;">
                @endif
            </div>

            {{--            <div class="col-sm-4 form-group img img-responsive" >--}}
            {{--                عکس پنجم--}}
            {{--                @if($slider->photo5)--}}
            {{--                    <img src="{{asset("$slider->photo5")}}" style="width: 150px;">--}}
            {{--                @elseif--}}
            {{--                    <img src="{{asset("img/admin/null.png")}}" style="width: 150px;">--}}
            {{--                @endif--}}
            {{--            </div>--}}

        </div>


        <div class="row">
            <div class="col-sm-3 form-group{{ $errors->has('photo1') ? ' has-error' : '' }}">
                {!! Form::label('photo1', ' عکس اول* :') !!}
                {!! Form::file('photo1', null, ['class'=>'form-control']) !!}
                @if ($errors->has('photo1'))
                    <span class="help-block">
                        <strong>{{ $errors->first('photo1') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col-sm-3 form-group{{ $errors->has('photo2') ? ' has-error' : '' }}">
                {!! Form::label('photo2', ' عکس دوم :') !!}
                {!! Form::file('photo2', null, ['class'=>'form-control']) !!}
                @if ($errors->has('photo2'))
                    <span class="help-block">
                        <strong>{{ $errors->first('photo2') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col-sm-3 form-group{{ $errors->has('photo3') ? ' has-error' : '' }}">
                {!! Form::label('photo3', ' عکس سوم :') !!}
                {!! Form::file('photo3', null, ['class'=>'form-control']) !!}
                @if ($errors->has('photo3'))
                    <span class="help-block">
                        <strong>{{ $errors->first('photo3') }}</strong>
                    </span>
                @endif
            </div>

            <div class="col-sm-3 form-group{{ $errors->has('photo4') ? ' has-error' : '' }}">
                {!! Form::label('photo4', ' عکس چهارم :') !!}
                {!! Form::file('photo4', null, ['class'=>'form-control']) !!}
                @if ($errors->has('photo4'))
                    <span class="help-block">
                        <strong>{{ $errors->first('photo4') }}</strong>
                    </span>
                @endif
            </div>

            {{--            <div class="col-sm-4 form-group{{ $errors->has('photo5') ? ' has-error' : '' }}">--}}
            {{--                {!! Form::label('photo5', ' عکس پنجم :') !!}--}}
            {{--                {!! Form::file('photo5', null, ['class'=>'form-control']) !!}--}}
            {{--                @if ($errors->has('photo5'))--}}
            {{--                    <span class="help-block">--}}
            {{--                        <strong>{{ $errors->first('photo5') }}</strong>--}}
            {{--                    </span>--}}
            {{--                @endif--}}
            {{--            </div>--}}

        </div>
        <br>
       
        <div class="row">

            <div class="col-sm-3 form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                {!! Form::label('title', ' نام محصول* :') !!}
                {!! Form::text('title', null,['id'=>'title' ,'class'=>'form-control']) !!}
                @if ($errors->has('title'))
                    <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
                @endif
            </div>

            <div class="col-sm-3 form-group{{ $errors->has('brand') ? ' has-error' : '' }}">
                {!! Form::label('brand', ' نام برند :') !!}
                {!! Form::text('brand', null,['id'=>'brand' ,'class'=>'form-control']) !!}
                @if ($errors->has('brand'))
                    <span class="help-block">
                    <strong>{{ $errors->first('brand') }}</strong>
                </span>
                @endif
            </div>

            <div class="col-sm-2 form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                {!! Form::label('price', 'قیمت:(تومان)') !!}
                {!! Form::text('price', null,['class'=>'form-control']) !!}
                @if ($errors->has('price'))
                    <span class="help-block">
                    <strong>{{ $errors->first('price') }}</strong>
                </span>
                @endif
            </div>

            <div class="col-sm-2 form-group{{ $errors->has('discount') ? ' has-error' : '' }}">
                {!! Form::label('discount', 'تخفیف(درصد)') !!}
                {!! Form::text('discount', null,['class'=>'form-control']) !!}
                @if ($errors->has('discount'))
                    <span class="help-block">
                    <strong>{{ $errors->first('discount') }}</strong>
                </span>
                @endif
            </div>


    


        </div>



        <div class="row">

            <div class="col-sm-6 form-group{{ $errors->has('menu_id') ? ' has-error' : '' }}">
                {!! Form::label('menu_id', ' جز کدام دسته باشد؟* :') !!}
                {!! Form::select('menu_id',$menus , null, ['class'=>'form-control chosen' ,'placeholder'=>'انتخاب کنید']) !!}
                @if ($errors->has('menu_id'))
                    <span class="help-block">
                    <strong>{{ $errors->first('menu_id') }}</strong>
                </span>
                @endif
            </div>



            <div class="col-sm-6 form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                {!! Form::label('category', 'ویژه | پرفروش و ...* :') !!}
                {!! Form::select('category',['5'=>'معمولی','3'=>'ویژه','2'=>'پر فروش','1'=>'جدید', '4'=>'انرژی پاک'] , null, ['class'=>'form-control chosen' ,'placeholder'=>'انتخاب کنید']) !!}
                @if ($errors->has('category'))
                    <span class="help-block">
                    <strong>{{ $errors->first('category') }}</strong>
                </span>
                @endif
            </div>
        </div>


        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            {!! Form::label('description', ' توضیحات درباره محصول :') !!}
            {!! Form::textarea('description', null,['class'=>'form-control','id'=>'ckeditor1']) !!}
            @if ($errors->has('description'))
                <span class="help-block">
                    <strong>{{ $errors->first('description') }}</strong>
                </span>
            @endif
        </div>

        <div class="row">
            <div class="col-sm-1 form-group{{ $errors->has('available') ? ' has-error' : '' }}">
                {!! Form::label('available', 'موجود  ') !!}
                {!! Form::checkbox('available' ,'1' ,true) !!}
                @if ($errors->has('available'))
                    <span class="help-block">
                        <strong>{{ $errors->first('available') }}</strong>
                    </span>
                @endif
            </div>

             <div class="col-sm-3 form-group{{ $errors->has('overplus') ? ' has-error' : '' }}">
                {!! Form::label('overplus', 'اضافه قلم  ') !!}
                {!! Form::checkbox('overplus' ,'1' ,true) !!}
                @if ($errors->has('overplus'))
                    <span class="help-block">
                        <strong>{{ $errors->first('overplus') }}</strong>
                    </span>
                @endif
            </div>

        </div>

    </div>



    <div class="row">
        <div class="form-group col-sm-12">
            {!! Form::submit('ویرایش', ['class'=>'form-control btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>

        {!! Form::open(['method'=>'DELETE', 'action'=>['BackEnd\Admin\ProductController@destroy', $product->id]]) !!}
        <div class="form-group col-sm-6">
            {!! Form::submit('حذف', ['class'=>'form-control btn btn-danger', 'onclick' => "return confirm('آیا می خواهید این محصول را حذف کنید؟')"]) !!}
        </div>
        {!! Form::close() !!}

    </div>
    <div class="clearfix"></div>

    <script src="{{asset('BackEnd/vendor/ckeditor_4.13.1_full/ckeditor.js')}}"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>
    <script>
        CKEDITOR.replace('ckeditor1', options);
        CKEDITOR.replace('ckeditor2', options);
    </script>

@endsection

@section('script')

    <script>
        $(document).ready(function () {
            var type = '{{$product->type}}';
            if (type == 'art') {
                $("#artTable").show();
            } else {
                $("#artTable").hide();
            }
            $("#artBtn").click(function () {
                $(".materialDiv").hide();
                $("#artTable").show();

            });
            $(".foodType").click(function () {
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
    <script type="text/javascript">
        $(".chosen").chosen();
    </script>
    <script src="{{asset('BackEnd/vendor/ckeditor_4.13.1_full/ckeditor.js')}}"></script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
    </script>
    <script>
        CKEDITOR.replace('ckeditor1', options);
    </script>
@endsection

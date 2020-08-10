@extends('BackEnd.Layouts.admin')
@section('head-content')
    <span class="fa fa-pencil">&nbsp;</span>  اضافه کردن سایز و رنگ و تعداد به محصول {{$productTitle}}
    <br>
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
       {!!Form::open(['method'=>'POST', 'action'=>'BackEnd\Admin\ProductController@updateColorSize' ,'files' => true , 'enctype'=> 'multipart/form-data' ,'id' => 'myForm']) !!}
        @csrf 
      
        <div class="row">

         
            <div class="col-sm-5 form-group{{ $errors->has('color') ? ' has-error' : '' }}">
                {!! Form::label('color', ' انتخاب رنگ* :') !!}
                {!! Form::select('color',$colors , null, ['class'=>'form-control chosen' ,'placeholder'=>'انتخاب کنید']) !!}
                @if ($errors->has('color'))
                    <span class="help-block">
                    <strong>{{ $errors->first('color') }}</strong>
                </span>
                @endif
            </div>

              <div class="col-sm-5 form-group{{ $errors->has('size') ? ' has-error' : '' }}">
                {!! Form::label('size', ' انتخاب سایز* :') !!}
                {!! Form::select('size',$sizes , null, ['class'=>'form-control chosen' ,'placeholder'=>'انتخاب کنید']) !!}
                @if ($errors->has('size'))
                    <span class="help-block">
                    <strong>{{ $errors->first('size') }}</strong>
                </span>
                @endif
            </div>


     <div class="col-sm-2 form-group{{ $errors->has('many') ? ' has-error' : '' }}">
                {!! Form::label('many', 'تعداد') !!}
                {!! Form::text('many', null,['class'=>'form-control']) !!}
                @if ($errors->has('many'))
                    <span class="help-block">
                    <strong>{{ $errors->first('many') }}</strong>
                </span>
                @endif
            </div>

            <div class="col-sm-2" style="display:none ;">
                         <input type="text" id="product_id" name="product_id" value="{{$product_id}}">
            </div>


        </div>

    </div>



    <div class="row">
        <div class="form-group col-sm-12">
            {!! Form::submit('اضافه کردن', ['class'=>'form-control btn btn-primary']) !!}
            {!! Form::close() !!}
            
        </div>
    </div>
    <div class="clearfix"></div>





 <div class="panel panel-default">
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <div style="overflow-x: auto;">
                        <table class="text-center table table-striped table-bordered table-hover centerTable thAlign"
                               id="dataTables-example">
                            <thead>
                            <tr>
                                <th>--</th>
                                <th>عکس محصول</th>
                                <th>نام محصول</th>
                                <th>کد محصول</th>
                                <th>رنگ</th>
                                <th>سایز</th>
                                <th>تعداد</th>
                                <th> + -</th>
                            </tr>
                            </thead>
                            @if(isset($product))
                                <tbody>
                                <?php $i = 1 ?>
                                @foreach($product as $item)
                                    <tr>
                                        <td>
                                            {{$i++}}
                                        </td>
                                        <td>
                                            <img src="{{asset("img/admin/product/$item->photo1")}}" style="height:50px;"/>
                                        </td>
                                
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->code}}</td>
                                        <td>{{$item->colorName}}</td>
                                        <td>{{$item->sizeName}}</td>
                                        <td>{{$item->many}}</td>
                               

               

                                        <td>
                                            <a class="btn btn-warning btn-xs"
                                               href="{{action('BackEnd\Admin\ProductController@editColorSizeMany' ,$item->variants_id)}}"> ویرایش تعداد </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>




    

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

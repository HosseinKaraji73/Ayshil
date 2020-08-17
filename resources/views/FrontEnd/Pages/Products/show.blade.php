@extends('FrontEnd.Layouts.master')

@section('title','صفحه اصلی')

@section('meta')
    <meta name="description" content="فروشگاه آی بولک"/>
    <meta name="keywords" content="فروشگاه آی بولک"/>
@endsection


@section('classBody')
    product-page
@endsection


@section('topBar')
    @include('FrontEnd.Includes.menu')
@endsection


@section('header')
    <header>
        <div id="breadcrumbs">
            <a href="{{url('/')}}" title="" target="_self">فروشگاه آيشیل</a>
            <a href="#" title="{{$subName->name}}" target="_self">{{$subName->name}}</a>
            {{--            <a href="" title="شلوار" target="_self">شلوار</a>--}}
            <span href="#" title="{{$subSubName->name}}" target="_self">{{$subSubName->name}}</span>
        </div>

        <div class="row">
            <div class="col-lg-5 col-sm-12">
                <div class="product-images">
                    <div class="product-image"
                         style="cursor:initial;">
                        <img src="{{asset("img/admin/product/$products->photo1")}}" alt="{{$products->title}}"/>
                    </div>

                    <div class="product-thumbnails">
                        <div class="product-thumbnails-inner">
                            @if(isset($products->photo4))
                                <div class="product-thumbnail-outer">
                                    <a class="product-thumbnail" href="#" title="" target="_self"
                                       data-src="{{asset("img/admin/product/$products->photo4")}}">
                                        <img src="{{asset("img/admin/product/$products->photo4")}}" alt="{{$products->title}}"/></a>
                                </div>
                            @endif
                            @if(isset($products->photo3))
                                <div class="product-thumbnail-outer">
                                    <a class="product-thumbnail" href="#" title="" target="_self"
                                       data-src="{{asset("img/admin/product/$products->photo3")}}">
                                        <img src="{{asset("img/admin/product/$products->photo3")}}" alt="{{$products->title}}"/></a>
                                </div>
                            @endif
                            @if(isset($products->photo2))
                                <div class="product-thumbnail-outer">
                                    <a class="product-thumbnail" href="#" title="" target="_self"
                                       data-src="{{asset("img/admin/product/$products->photo2")}}">
                                        <img src="{{asset("img/admin/product/$products->photo2")}}" alt="{{$products->title}}"/></a>
                                </div>
                            @endif
                            @if(isset($products->photo1))
                                <div class="product-thumbnail-outer">
                                    <a class="product-thumbnail" href="#" title="" target="_self"
                                       data-src="{{asset("img/admin/product/$products->photo1")}}">
                                        <img src="{{asset("img/admin/product/$products->photo1")}}" alt="{{$products->title}}"/></a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-7 col-sm-12">
                <div id="product-body">
                    <h1>{{$products->title}}-{{$products->code}}</h1>
                    <form id="bookmark-form" action="bookmark.html" method="POST" style="display: none;">
                        <input type="hidden" name="_token" value="rAdmipAVnL3c0YynxL8OdYsnDR7StuG7aA1ZX8li">
                    </form>

                    {{--                    <div class="d-flex align-items-center justify-content-between" id="product-meta">--}}
                    {{--                        <a href="#" title="" target="_self">{{$products->code}}</a>--}}
                    {{--                        <div class="d-flex align-items-center justify-content-end">--}}
                    {{--                            <a href="#" title="" target="_self" class="share-link" data-title="{{$products->title}}"--}}
                    {{--                               data-url="https://ibolak.ir/shop/products/b8nxb"><i class="fal fa-share-alt"></i></a>--}}
                    {{--                            <a href="#" id="bookmark-tag" data-id="b8nxb"--}}
                    {{--                               onclick="event.preventDefault(); document.getElementById('bookmark-form').submit();"--}}
                    {{--                               title="" target="_self"> <i class="fal fa-heart"></i> </a>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    <div id="product-body-inner">
                        <div id="product-variants">
                            <div class="row">
                                <div class="col-lg-6 col-sm-12">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <label>رنگ:</label>
                                    </div>

                                    <div class="select-wrapper color-select">
                                        <span class="select-wrapper__color"></span>
                                        <select name="values[]" data-response="color" class="variantsSelect">
                                            <option value="">انتخاب کنید</option>
                                            @foreach($variants as $variant)
                                                <option value="{{$variant->colorsId}}" color="#{{$variant->c_id}}">
                                                    {{$variant->colorsName}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div class="col-lg-6 col-sm-12">

                                    <div class="d-flex align-items-center justify-content-between">
                                        <label>سایز (عددی):</label>
                                    </div>
                                    <div class="select-wrapper">
                                        <select name="values[]" data-response="size" class="variantsSelectSize" id="variantsSelectSIZE">
                                            <option value="">انتخاب کنید</option>
                                        </select>
                                    </div>


                                </div>
                            </div>


                            <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
                            <input id="signup-token" name="_token" type="hidden" value="{{csrf_token()}}">
                            <script>

                                $(document).ready(function () {
                                    $("select.variantsSelect").change(function () {
                                        $color = $(".variantsSelect option:selected").val();
                                        $token = $("#signup-token").val();
                                        $.ajax({
                                            type: 'POST',
                                            url: '{{URL::to("request/color")}}',
                                            data: {'_token': $token, 'color': $color},
                                            success: function (data) {
                                                $('#variantsSelectSIZE').html(data);
                                            }
                                        });
                                    });
                                });


                                $(document).ready(function () {
                                    $("select.variantsSelectSize").change(function () {
                                        $size = $(".variantsSelectSize option:selected").val();
                                        $color = $(".variantsSelect option:selected").val();
                                        $token = $("#signup-token").val();
                                        $.ajax({
                                            type: 'POST',
                                            url: '{{URL::to("request/many")}}',
                                            data: {'_token': $token, 'size': $size, 'color': $color},
                                            success: function (data) {
                                                $('#product-counter').html(data);
                                            }
                                        });
                                    });
                                });
                            </script>


                        </div>
                        <div class="d-flex align-items-center justify-content-between" id="product-price">
                            {{--                                <div><strong>{{$products->price}} تومان</strong></div>--}}
                            @if(isset($products->discount))
                                <div class="d-flex align-items-end justify-content-center flex-column">
                                    <s>{{$products->price}} تومان</s>
                                    <strong class="product-wrapper__price">{{$products->price_after_discount}} تومان</strong>
                                </div>
                            @else
                                <strong class="product-wrapper__price">{{$products->price}} تومان</strong>
                            @endif
                        </div>
                    </div>


                    <div id="responseSize">

                    </div>


                    <span id="product-counter">

                    <div id="product-count">
                            <span>تعداد:</span>
                            <div class="product-count-wrapper" data-max="" data-min="1">
                                <input type="hidden" id="ProductCount" data-id="dqxke" value=" 1 ">
                                <a href="#" class="basket-item-wrapper__count__plus" title="" target="_self"><i class="far fa-plus"></i></a>
                                <span class="item_count"> 1 </span>
                                <a href="#" title="" class="basket-item-wrapper__count__minus" target="_self" style="opacity: 0.3;"><i class="far fa-minus"></i></a>
                            </div>
                    </div>

                    <div id="product-actions" class="d-flex align-items-center justify-content-between">
                        <button disabled type="button" id="byNumber" href="https://ibolak.com/shop/basket/dj8re/add" class="btn btn-primary">
                            <i class="far fa-shopping-cart"></i> <span> افزودن به سبد خرید</span>
                        </button>
                    </div>
                        </span>


                    <p class="text-danger mt-4 font-weight-bold text-medium">قبل از ثبت سفارش حتما راهنمای سایزبندی را مطالعه نمایید</p>
                </div>
            </div>
        </div>
    </header>

@endsection


@section('main')
    <main>
        <section class="mt-100" id="product-description">
            <h3 class="section-title">توضیحات کالا</h3>
            <div class="section-body">
                {!!$products->description!!}
            </div>
        </section>


        @if(isset($products->sizing_guide))
            <section class="mt-100" id="size-guide">
                <h3 class="section-title">راهنمای سایزبندی</h3>
                <div class="section-body">
                    <table class="table table-borderless" style="height: 110px; width: 362px;" width="674">
                        {!!$products->sizing_guide!!}
                        {{--                    <thead>--}}
                        {{--                    <tr style="height: 22px;">--}}
                        {{--                        <th style="width: 39.2px; height: 10px;">سایز</th>--}}
                        {{--                        <th style="width: 54.4px; height: 10px;">دور کمر در حالت عادی</th>--}}
                        {{--                        <th style="width: 59.2px; height: 10px;">دور کمر با کشیدن</th>--}}
                        {{--                        <th style="width: 65.6px; height: 10px;">دور باسن</th>--}}
                        {{--                        <th style="width: 74.4px; height: 10px;">دور ران</th>--}}
                        {{--                    </tr>--}}
                        {{--                    </thead>--}}
                        {{--                    <tbody>--}}
                        {{--                    <tr style="height: 24px;">--}}
                        {{--                        <td style="width: 39.2px; height: 29px;"><strong>42</strong></td>--}}
                        {{--                        <td style="width: 54.4px; height: 29px;">62cm</td>--}}
                        {{--                        <td style="width: 59.2px; height: 29px;">84cm</td>--}}
                        {{--                        <td style="width: 65.6px; height: 29px;">110cm</td>--}}
                        {{--                        <td style="width: 74.4px; height: 29px;">62cm</td>--}}
                        {{--                    </tr>--}}
                        {{--                    <tr style="height: 24px;">--}}
                        {{--                        <td style="width: 39.2px; height: 32px;"><strong>46</strong></td>--}}
                        {{--                        <td style="width: 54.4px; height: 32px;">68cm</td>--}}
                        {{--                        <td style="width: 59.2px; height: 32px;">92cm</td>--}}
                        {{--                        <td style="width: 65.6px; height: 32px;">118cm</td>--}}
                        {{--                        <td style="width: 74.4px; height: 32px;">66cm</td>--}}
                        {{--                    </tr>--}}
                        {{--                    </tbody>--}}
                    </table>
                </div>
            </section>
        @endif

        <section class="products-container" id="related-products">
            <div class="section-header">
                <div class="section-title">
                    <h2>محصولات دیگری که شاید بپسندید</h2>
                </div>
                <div class="section-arrows">
                    <a class="arrow-next" href="#" title="" target="_self"> <i class="far fa-arrow-right"></i> </a>
                    <a class="arrow-prev" href="#" title="" target="_self"> <i class="far fa-arrow-left"></i> </a>
                </div>
            </div>


            <div class="products-wrapper should-slide">
                @foreach($SimilarProducts as $SimilarProduct)
                    <div class="product-outer">
                        <a class="product-wrapper" href="{{action('FrontEnd\ProductController@show' ,[$SimilarProduct->sub_menu_product,$SimilarProduct->sub_sub_menu_product,$SimilarProduct->id,$SimilarProduct->title])}}"
                           title="" target="_self">
                            <div class="product-wrapper__image"><img
                                    src="{{asset("img/admin/product/$SimilarProduct->photo1")}}"
                                    alt="{{$SimilarProduct->title}}"/></div>
                            <div class="product-wrapper__body">
                                <h5>{{$SimilarProduct->title}}</h5>
                                <div class="d-flex align-items-end justify-content-between">
                                    {{--                                <strong>پارچه ای/کتان</strong>--}}

                                    <div class="d-flex align-items-end justify-content-center flex-column">
                                        <strong class="product-wrapper__price text-danger">ناموجود</strong>
                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>

        <div class="CommentMessageDiv"></div>
        <section id="product-comments">
            <h3 class="section-title">نظرات کاربران</h3>
            <div id="comments-wrapper">
            </div>
            <p>
                برای ثبت دیدگاه باید
                <a href="../../../login.html" class="login-btn font-weight-bold text-blue" title="" target="_self"> وارد شوید</a> یا
                <a href="../../../login.html" class="font-weight-bold text-blue"> ثبت‌نام کنید </a>
            </p>

        </section>
    </main>

@endsection

@section('productShowGallery')
    <div id="product-gallery">
        <a class="close-modal" href="#" title="" target="_self"><i class="fal fa-times"></i></a>
        <div id="product-gallery-inner">
            <div class="d-flex align-items-start justify-content-between">
                <div id="product-gallery__thumbs">

                    @if(isset($products->photo1))
                        <div class="product-thumbnail-outer">
                            <a class="product-gallery-thumbnail" href="#" title="" target="_self" data-src="{{asset("img/admin/product/$products->photo1")}}">
                                <img src="{{asset("img/admin/product/$products->photo1")}}" alt=""/> </a>
                        </div>
                    @endif
                    @if(isset($products->photo2))
                        <div class="product-thumbnail-outer">
                            <a class="product-gallery-thumbnail" href="#" title="" target="_self" data-src="{{asset("img/admin/product/$products->photo2")}}">
                                <img src="{{asset("img/admin/product/$products->photo2")}}" alt=""/> </a>
                        </div>
                    @endif
                    @if(isset($products->photo3))
                        <div class="product-thumbnail-outer">
                            <a class="product-gallery-thumbnail" href="#" title="" target="_self" data-src="{{asset("img/admin/product/$products->photo3")}}">
                                <img src="{{asset("img/admin/product/$products->photo3")}}" alt=""/> </a>
                        </div>
                    @endif
                    @if(isset($products->photo4))
                        <div class="product-thumbnail-outer">
                            <a class="product-gallery-thumbnail" href="#" title="" target="_self" data-src="{{asset("img/admin/product/$products->photo4")}}">
                                <img src="{{asset("img/admin/product/$products->photo4")}}" alt=""/> </a>
                        </div>
                    @endif


                    <div class="product-thumbnail-outer"></div>
                </div>


                <div id="product-gallery__current">
                    <div>
                        <img src="{{asset("img/admin/product/$products->photo1")}}" alt=""/>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection



@section('productShow')
    <script>
        var _href = "https://ibolak.com/shop/basket/dj8re/add";
        $('table').each(function () {
            var newTable = $(this).clone();
            newTable.css('min-width', '100%');
            var wrapper = $('<div>', {'class': 'table-responsive'});
            $(wrapper).insertBefore($(this));
            $(wrapper).append(newTable);
            $(this).remove();
        });

        $('#sendCommentBtn').on('click', function () {
            var button = $(this);
            var data = $('#commentSendForm').serialize();
            $.ajax({
                url: "https://ibolak.com/comments/new?includes=product",
                data: data,
                type: 'POST',
                success: function (data) {
                    $('#sendCommentBtn span').text('ثبت نظر');
                    $('.CommentMessageDiv').html('<p class="alert alert-success"><i class="fal fa-check"></i> ' + data.meta.status.messages + '</p>');
                    $('#commentSendForm')[0].reset()
                },
                beforeSend: function () {
                    $('#sendCommentBtn span').html('درحال ارسال');
                    button.prop('disabled', 'true');
                },
                error: function (xhr, message, data) {

                    button.removeAttr("disabled");
                    $('#sendCommentBtn span').text('ثبت نظر');
                    $('.CommentMessageDiv').html('');
                    var errors = JSON.parse(xhr.responseText);
                    var e = errors.meta.status.messages;
                    for (message in e) {
                        $('.CommentMessageDiv').append('<p class="alert alert-danger"><i class="fal fa-warning"></i> ' + e[message] + '</p>');
                    }
                }
            }).done(function () {
                button.removeAttr("disabled");
            });
        });

        $(document).ready(function () {
            var input = $('#ProductCount');
            _href = updateQueryStringParameter(_href, 'count', input.val());
        });


        $('.product-count-wrapper input').each(function () {
            $(this).siblings('span').html($(this).val());

            if (parseInt($(this).val()) <= parseInt($(this).parent().data('min'))) {
                $(this).siblings('.basket-item-wrapper__count__minus').css('opacity', '.3');
            }

            if (parseInt($(this).val()) >= parseInt($(this).parent().data('max'))) {
                $(this).siblings('.basket-item-wrapper__count__plus').css('opacity', '.3');
            }

        });

        $('.basket-item-wrapper__count__plus').click(function (e) {
            e.preventDefault();
            var input = $(this).siblings('input');


            if (parseInt(input.val()) + 1 >= parseInt($(this).parent().data('max'))) {
                $(this).css('opacity', '.3');
            }
            if (parseInt($(this).siblings('input').val()) < parseInt($(this).parent().data('max'))) {
                $(this).siblings('input').val(parseInt(input.val()) + 1);
                $(this).siblings('span').html(input.val());
                _href = updateQueryStringParameter(_href, 'count', input.val());
            }

            if (parseInt($(this).siblings('input').val()) > parseInt($(this).parent().data('min'))) {
                $(this).siblings('.basket-item-wrapper__count__minus').css('opacity', '1');
            }
        });

        $('.basket-item-wrapper__count__minus').click(function (e) {
            e.preventDefault();
            var input = $(this).siblings('input');
            value = input.val();
            if (parseInt(input.val()) - 1 <= parseInt($(this).parent().data('min'))) {
                $(this).css('opacity', '.3');
            }

            if (parseInt($(this).siblings('input').val()) > parseInt($(this).parent().data('min'))) {
                $(this).siblings('input').val(parseInt(input.val()) - 1);
                $(this).siblings('span').html(input.val());

            }

            if (parseInt($(this).siblings('input').val()) < parseInt($(this).parent().data('max'))) {
                $(this).siblings('.basket-item-wrapper__count__plus').css('opacity', '1');
            }
        });

        function updateQueryStringParameter(uri, key, value) {
            var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
            var separator = uri.indexOf('?') !== -1 ? "&" : "?";
            if (uri.match(re)) {
                return uri.replace(re, '$1' + key + "=" + value + '$2');
            } else {
                return uri + separator + key + "=" + value;
            }
        }

        $('#byNumber').on('click', function () {
            window.location.replace(_href);
        })
    </script>

    {{--    <script>--}}
    {{--        function numberWithCommas(x) {--}}
    {{--            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");--}}
    {{--        }--}}

    {{--        $('.variantsSelect').on('change', function () {--}}
    {{--            var select = $('#product-variants select');--}}
    {{--            var selected = [];--}}
    {{--            var selectedItems = [];--}}

    {{--            $('#product-variants select').each(function () {--}}
    {{--                if (!!$(this).val()) {--}}
    {{--                    selectedItems.push(this);--}}
    {{--                }--}}
    {{--            });--}}

    {{--            select.each(function (index) {--}}
    {{--                selected.push($(this).val());--}}
    {{--            });--}}

    {{--            var inputAdd = $('#byNumber');--}}

    {{--            if (select.length === selectedItems.length) {--}}
    {{--                $('#product-price').html('<span class="loading-wrapper" style="height:20px;width:50px;justify-content:flex-start;position:relative;bottom:-10px;transform:scale(.8)"><span class="lds-ring"><span></span><span></span><span></span><span></span></span></span>');--}}
    {{--                $.ajax({--}}
    {{--                    url: '/shop/products/dj8re/variants/get-sku?values=' + selected,--}}
    {{--                    type: "GET",--}}
    {{--                    beforeSend: function () {--}}
    {{--                        inputAdd.addClass('btn-disabled');--}}
    {{--                        inputAdd.attr('disabled', '');--}}
    {{--                    },--}}
    {{--                    success: function (response) {--}}
    {{--                        var product = response.data;--}}
    {{--                        var quantity = '';--}}
    {{--                        if (product.quantity !== null) {--}}
    {{--                            quantity = product.quantity + ' عدد';--}}
    {{--                        }--}}
    {{--                        let price = '';--}}
    {{--                        if (product.quantity === 0) {--}}
    {{--                            price = '<div><b>در انبار موجود نمی‌باشد.</b></div>';--}}
    {{--                        } else if (product.discounted_price) {--}}
    {{--                            price = '<div>' +--}}
    {{--                                '<s>' + numberWithCommas(product.price) + ' تومان</s>' +--}}
    {{--                                '<strong>' + numberWithCommas(product.discounted_price) + ' تومان</strong>' +--}}
    {{--                                // '<b>  ' + quantity + 'در انبار موجود است </b>' +--}}
    {{--                                '</div>';--}}
    {{--                            inputAdd.removeClass('btn-disabled');--}}
    {{--                            inputAdd.removeAttr('disabled');--}}
    {{--                        } else {--}}
    {{--                            price = '<div>' +--}}
    {{--                                '<strong>' + numberWithCommas(product.price) + ' تومان</strong>' +--}}
    {{--                                // '<b>  ' + quantity + ' در انبار موجود است </b>' +--}}
    {{--                                '</div>';--}}
    {{--                            inputAdd.removeClass('btn-disabled');--}}
    {{--                            inputAdd.removeAttr('disabled');--}}
    {{--                        }--}}

    {{--                        _href = updateQueryStringParameter(_href, 'sku_id', product.id);--}}

    {{--                        console.log(response.data);--}}
    {{--                        $('#product-price').html(price)--}}
    {{--                    },--}}
    {{--                    error: function () {--}}
    {{--                        price = '<div><b>در انبار موجود نمی‌باشد.</b></div>';--}}
    {{--                        $('#product-price').html(price);--}}

    {{--                        _href = updateQueryStringParameter(_href, 'sku_id', '');--}}
    {{--                    }--}}
    {{--                })--}}
    {{--            } else {--}}
    {{--                $('#product-price').html('<strong>لطفا تمامی مشخصات را انتخاب نمایید</strong>');--}}
    {{--                inputAdd.addClass('btn-disabled');--}}
    {{--                inputAdd.attr('disabled', '');--}}
    {{--            }--}}
    {{--        })--}}
    {{--    </script>--}}
@endsection

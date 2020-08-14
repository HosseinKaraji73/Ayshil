@extends('FrontEnd.Layouts.master')

@section('title','صفحه اصلی')

@section('meta')
    <meta name="description" content="فروشگاه آی بولک"/>
    <meta name="keywords" content="فروشگاه آی بولک"/>
@endsection


@section('classBody')
    category-page
@endsection


@section('topBar')
    @include('FrontEnd.Includes.menu')
@endsection

@section('header')
    <header>
        <div id="breadcrumbs">
            <a href="{{url('/')}}" title="" target="_self">فروشگاه آيشیل</a> <span>اسلش</span>

        </div>
    </header>
@endsection


@section('main')
    <main>

        <a class="open-mobile mobile-only floating-button" href="#" title="" target="_self" data-target="filters-wrapper" id="open-filters"><i class="far fa-filter"></i></a>
        <div class="row">
            <aside class="col-lg-3 col-sm-12 page-mobile" id="filters-wrapper">
                <a class="close-mobile mobile-only" href="#" title="" target="_self"><i class="far fa-times"></i></a>
                <div class="card">
                    <div class="search-wrapper">
                        <input type="text" dir="rtl" id="search_product" placeholder="جستجو در بین نتایج"><i class="fal fa-search"></i>
                    </div>
                </div>
                <div class="card">
                    <h5 class="title-dot">فیلتر‌های اعمال‌شده</h5>
                    <ul id="active-filters">
                    </ul>
                </div>

                <form method="post" id="filter-products-form">
                    <input type="hidden" name="_token" value="ARI9bgTnyWc8TttTsYs4jpPwLKqpNcrqs09U9LHS">
                    <div class="card">
                        <h5 class="title-dot">دسته‌بندی</h5>
                        <div class="checkboxes">
                            <fieldset id="ibolakCategories">


                            </fieldset>
                        </div>
                    </div>
                    <div class="card">
                        <h5 class="title-dot">محدوده قیمت</h5>
                        <div class="price-range-wrapper">
                            <span class="irs irs--round js-irs-0"><span class="irs"><span class="irs-line" tabindex="0"></span><span class="irs-min" style="visibility: hidden;">0 تومان</span><span class="irs-max" style="visibility: hidden;">89,000 تومان</span><span class="irs-from" style="visibility: visible; left: -7.5%;">0 تومان</span><span class="irs-to" style="visibility: visible; left: 82.384%;">89,000 تومان</span><span class="irs-single" style="visibility: hidden; left: 24.0659%;">0 تومان — 89,000 تومان</span></span><span class="irs-grid"></span><span class="irs-bar" style="left: 2.74725%; width: 94.5055%;"></span><span class="irs-shadow shadow-from" style="display: none;"></span><span class="irs-shadow shadow-to" style="display: none;"></span><span class="irs-handle from" style="left: 0%;"><i></i><i></i><i></i></span><span class="irs-handle to" style="left: 94.5055%;"><i></i><i></i><i></i></span></span><input type="text" name="price" min="0" max="10" id="price-range" class="irs-hidden-input" tabindex="-1" readonly="">
                        </div>
                    </div>
                    <div class="card">
                        <h5 class="title-dot">وضعیت محصول</h5>
                        <label class="d-block custom-radio">
                            <input type="radio" value="1" name="isAvailable" class="availabilityFilter"> <span>
فقط محصولات موجود
</span> </label> <label class="d-block custom-radio">
                            <input type="radio" value="2" name="isAvailable" id="allProducts" class="availabilityFilter" checked="">
                            <span>
همه محصولات
</span>

                        </label>
                    </div>


                    <button type="button" class="btn btn-primary btn-block btn-large" id="btn-filter">
                        <i class="far fa-filter"></i><span>اعمال فیلتر‌ها</span>
                    </button>
                </form>
            </aside>
            <content class="col-lg-9 col-sm-12">
                <div class="card sort-types-wrapper"><strong>مرتب‌سازی بر اساس:</strong>
                    <a href="#" class="active" id="newest" title="" target="_self">جدیدترین</a>
                    <a href="#" id="highest-price" title="" target="_self">گران‌ترین</a>
                    <a href="#" id="lowest-price" title="" target="_self">ارزان‌ترین</a>
                    <a href="#" id="trends" title="" target="_self">محبوب‌ترین</a>
                </div>
                <div class="row" id="filtered_products">
                    <div class="col-lg-4 col-sm-12">
                        <a class="product-wrapper" href="https://ibolak.com/shop/products/dm6zb/شلوار-راه-راه-کنفی-کد-ib00151" title="" target="_self">
                            <div class="product-wrapper__image">
                                <img src="https://ibolak.com/uploads/image/2020/8/optimized/1597040195-uv5yhzi0XJoyilla.jpg " alt="شلوار راه راه کنفی کد ib00151">
                            </div>
                            <div class="product-wrapper__body">
                                <h5>شلوار راه راه کنفی کد ib00151</h5>
                                <div class="d-flex align-items-end justify-content-between">
                                    <strong> پارچه ای/کتان </strong>
                                    <div class="d-flex align-items-end justify-content-center flex-column">
                                        <strong class="product-wrapper__price">85,000 تومان</strong>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <a class="product-wrapper" href="https://ibolak.com/shop/products/b44jb/شلوار-راحتی-طرحدار-کد-ib00141" title="" target="_self">
                            <div class="product-wrapper__image">
                                <img src="https://ibolak.com/uploads/image/2020/8/optimized/1596700080-OXEl7XZ7jn9bnjVK.jpg " alt="شلوار راحتی طرحدار کد ib00141">
                            </div>
                            <div class="product-wrapper__body">
                                <h5>شلوار راحتی طرحدار کد ib00141</h5>
                                <div class="d-flex align-items-end justify-content-between">
                                    <strong> پارچه ای/کتان </strong>
                                    <div class="d-flex align-items-end justify-content-center flex-column">
                                        <strong class="product-wrapper__price">59,000 تومان</strong>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <a class="product-wrapper" href="https://ibolak.com/shop/products/d342e/شلوار-الیاف-طبیعی3-کد-ib00140" title="" target="_self">
                            <div class="product-wrapper__image">
                                <img src="https://ibolak.com/uploads/image/2020/8/optimized/1596698519-D2bkbYgn9qq2N8hd.jpg " alt="شلوار الیاف طبیعی3 کد ib00140">
                            </div>
                            <div class="product-wrapper__body">
                                <h5>شلوار الیاف طبیعی3 کد ib00140</h5>
                                <div class="d-flex align-items-end justify-content-between">
                                    <strong> پارچه ای/کتان </strong>
                                    <div class="d-flex align-items-end justify-content-center flex-column">
                                        <strong class="product-wrapper__price text-danger">ناموجود</strong>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <a class="product-wrapper" href="https://ibolak.com/shop/products/e247d/شلوار-الیاف-طبیعی2-کد-ib00139" title="" target="_self">
                            <div class="product-wrapper__image">
                                <img src="https://ibolak.com/uploads/image/2020/8/optimized/1596697859-hOQO3kXQBhoWPgqN.jpg " alt="شلوار الیاف طبیعی2 کد ib00139">
                            </div>
                            <div class="product-wrapper__body">
                                <h5>شلوار الیاف طبیعی2 کد ib00139</h5>
                                <div class="d-flex align-items-end justify-content-between">
                                    <strong> پارچه ای/کتان </strong>
                                    <div class="d-flex align-items-end justify-content-center flex-column">
                                        <strong class="product-wrapper__price text-danger">ناموجود</strong>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <a class="product-wrapper" href="https://ibolak.com/shop/products/bqk4b/شلوار-الیاف-طبیعی" title="" target="_self">
                            <div class="product-wrapper__image">
                                <img src="https://ibolak.com/uploads/image/2020/8/optimized/1596607175-PfQbyFLaYOsJoCp1.jpg " alt="شلوار الیاف طبیعی">
                            </div>
                            <div class="product-wrapper__body">
                                <h5>شلوار الیاف طبیعی</h5>
                                <div class="d-flex align-items-end justify-content-between">
                                    <strong> پارچه ای/کتان </strong>
                                    <div class="d-flex align-items-end justify-content-center flex-column">
                                        <strong class="product-wrapper__price text-danger">ناموجود</strong>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <a class="product-wrapper" href="https://ibolak.com/shop/products/ejvre/شلوار-پیله-دار-primark" title="" target="_self">
                            <div class="product-wrapper__image">
                                <img src="https://ibolak.com/uploads/image/2020/7/optimized/1595831145-2WU9SqIkHhGS6zIk.jpg " alt="شلوار پیله دار primark">
                            </div>
                            <div class="product-wrapper__body">
                                <h5>شلوار پیله دار primark</h5>
                                <div class="d-flex align-items-end justify-content-between">
                                    <strong> پارچه ای/کتان </strong>
                                    <div class="d-flex align-items-end justify-content-center flex-column">
                                        <strong class="product-wrapper__price">69,000 تومان</strong>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <a class="product-wrapper" href="https://ibolak.com/shop/products/bj2rd/شلوار-لینن2" title="" target="_self">
                            <div class="product-wrapper__image">
                                <img src="https://ibolak.com/uploads/image/2020/8/optimized/1596353333-oRrF04troKSTvINb.jpg " alt="شلوار لینن2">
                            </div>
                            <div class="product-wrapper__body">
                                <h5>شلوار لینن2</h5>
                                <div class="d-flex align-items-end justify-content-between">
                                    <strong> پارچه ای/کتان </strong>
                                    <div class="d-flex align-items-end justify-content-center flex-column">
                                        <strong class="product-wrapper__price text-danger">ناموجود</strong>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <a class="product-wrapper" href="https://ibolak.com/shop/products/b777b/شلوار-پیله-دار2" title="" target="_self">
                            <div class="product-wrapper__image">
                                <img src="https://ibolak.com/uploads/image/2020/7/optimized/1596008583-DqJVG2HVy5FQiC94.jpg " alt="شلوار پیله دار2">
                            </div>
                            <div class="product-wrapper__body">
                                <h5>شلوار پیله دار2</h5>
                                <div class="d-flex align-items-end justify-content-between">
                                    <strong> پارچه ای/کتان </strong>
                                    <div class="d-flex align-items-end justify-content-center flex-column">
                                        <strong class="product-wrapper__price">69,000 تومان</strong>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <a class="product-wrapper" href="https://ibolak.com/shop/products/dn5pd/شلوار-لینن" title="" target="_self">
                            <div class="product-wrapper__image">
                                <img src="https://ibolak.com/uploads/image/2020/7/optimized/1595831205-In5Un4qr7WrSKO2o.jpg " alt="شلوار لینن">
                            </div>
                            <div class="product-wrapper__body">
                                <h5>شلوار لینن</h5>
                                <div class="d-flex align-items-end justify-content-between">
                                    <strong> پارچه ای/کتان </strong>
                                    <div class="d-flex align-items-end justify-content-center flex-column">
                                        <strong class="product-wrapper__price">75,000 تومان</strong>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <a class="product-wrapper" href="https://ibolak.com/shop/products/b8nxb/شلوار-کمرکش-بابوس" title="" target="_self">
                            <div class="product-wrapper__image">
                                <img src="https://ibolak.com/uploads/image/2020/7/optimized/1595410544-aMzVEGWylWCU1R5k.jpg " alt="شلوار کمرکش بابوس">
                            </div>
                            <div class="product-wrapper__body">
                                <h5>شلوار کمرکش بابوس</h5>
                                <div class="d-flex align-items-end justify-content-between">
                                    <strong> پارچه ای/کتان </strong>
                                    <div class="d-flex align-items-end justify-content-center flex-column">
                                        <strong class="product-wrapper__price text-danger">ناموجود</strong>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <a class="product-wrapper" href="https://ibolak.com/shop/products/d4jkd/شلوار-راسته-کتان" title="" target="_self">
                            <div class="product-wrapper__image">
                                <img src="https://ibolak.com/uploads/image/2020/7/optimized/1595402759-0y28ijF6qHXe0Gl6.jpg " alt="شلوار راسته کتان">
                            </div>
                            <div class="product-wrapper__body">
                                <h5>شلوار راسته کتان</h5>
                                <div class="d-flex align-items-end justify-content-between">
                                    <strong> پارچه ای/کتان </strong>
                                    <div class="d-flex align-items-end justify-content-center flex-column">
                                        <strong class="product-wrapper__price text-danger">ناموجود</strong>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <a class="product-wrapper" href="https://ibolak.com/shop/products/b6ynd/شلوار-برمودا-classic" title="" target="_self">
                            <div class="product-wrapper__image">
                                <img src="https://ibolak.com/uploads/image/2020/7/optimized/1595163904-Df5106TIhXKtzqnX.jpg " alt="شلوار برمودا classic">
                            </div>
                            <div class="product-wrapper__body">
                                <h5>شلوار برمودا classic</h5>
                                <div class="d-flex align-items-end justify-content-between">
                                    <strong> پارچه ای/کتان </strong>
                                    <div class="d-flex align-items-end justify-content-center flex-column">
                                        <strong class="product-wrapper__price text-danger">ناموجود</strong>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    {{ $products->links('FrontEnd.Includes.pagination') }}

                </div>

            </content>
        </div>

    </main>
@endsection



@section('productIndex')
    <script type="text/javascript">
        // Price Range Slider
        $(document).ready(function (e) {

            var min = 0;
            var max = 89000;
            var from = 0;
            var to = 89000;
            var price = null;
            categoryFilters(min, max, from, to, function (data) {
                $('input[name="price"]').val(data.from + ';' + data.to);

            });
            $('#search_product').on('keyup', function () {
                var data = $(this).val();
                if (data.length >= 3) {
                    $.ajax({
                        url: "https://ibolak.ir/shop/search?q=" + data,
                        type: 'get',
                        success: function (response) {
                            if (response) {
                                $('#filtered_products').html(response);
                            } else {
                                $('#filtered_products').html('<p class="text-center mt-5 font-weight-bold">محصولی یافت نشد!</p>');
                            }
                        },
                    });
                }
            });
            sortBy('#highest-price', 'price', 'desc');
            sortBy('#lowest-price', 'price', 'asc');
            sortBy('#newest', 'created_at', 'desc');
            sortBy('#trends', 'visit', 'desc');
            var fieldSets = $('#ibolakCategories');

            var data = [];

            var categoryTitle = [];
            var selectedCategories;
            $('.categoryFilter').on('click', function () {
                if (categoryTitle.indexOf($(this).data('title')) < 0) {
                    categoryTitle.push($(this).data('title'));
                } else {
                    categoryTitle = categoryTitle.splice(categoryTitle.indexOf($(this).data('title')), 1);
                }
                var categories = [];
                var selectedCategories = $(fieldSets).find('input[type="checkbox"]:checked');

                selectedCategories.each(function (data, value) {
                    categories.push($(value).attr('data-id'));
                });
                data = categories.join(',');
            });

            function sortBy(key, sortBy, sortType) {

                $(key).on('click', function (e) {
                    pagination = 1;
                    $('#filtered_products').html('<span class="loading-wrapper"><span class="lds-ring"><span></span><span></span><span></span><span></span></span></span>');
                    if (!$(this).hasClass('active')) {
                        productDataAjax(null, sortBy, sortType, key, true)
                    }
                });

            }

            $('#btn-filter').on('click', function (e) {
                pagination = 1;
                productDataAjax()
            });

            $(document).on('click', '.remove-filter', function (e) {
                var $this = $(this);
                var parentId = "22";
                if ($this.attr('data-type')) {
                    if ($this.attr('data-type') == "category") {
                        $('.categoryFilter').prop('checked', false);
                        data = "";
                        pagination = 1;
                        categoryTitle = [];
                    } else if ($this.attr('data-type') == "price") {
                        price = null;
                        pagination = 1;
                    } else if ($this.attr('data-type') == "isAvailable") {
                        $('.availabilityFilter').prop('checked', false);
                        $('#allProducts').prop('checked', true);
                        isAvailable = 2;
                        pagination = 1;
                    }
                }
                $this.closest('li').remove();
                var ajaxResponse = productDataAjax(parentId);
            })

            var price = '';
            var pagination = 1
            var isAvailable = '';
            var ProductStatus = {
                1: {title: "فقط محصولات موجود"},
                2: {title: "همه محصولات"}
            }

            function productDataAjax(parent = null, sortBy = 'created_at', sortType = 'desc', key, sort = false) {
                price = $('input[name="price"]').val();
                parent = "22";
                isAvailable = $('input[name="isAvailable"]:checked').val();
                var value = data ? data : parent;
                var type = value ? 'categories' : "";
                var url = type + '/' + value;
                $('html,body').animate({scrollTop: $('#breadcrumbs').offset().top}, 300);
                if (window.innerWidth <= 1024) {
                    setTimeout(function () {
                        $('#filters-wrapper').fadeOut(150);
                    }, 150);
                }
                $('#filtered_products').html('<span class="loading-wrapper"><span class="lds-ring"><span></span><span></span><span></span><span></span></span></span>');
                ajaxCallRequest(url, sortBy, sortType, key, sort);


            }

            function ajaxCallRequest(url, sortBy = 'created_at', sortType = 'desc', key, sort = false) {
                return $.ajax({
                    url: '/shop/products/search/' + url + '?page=' + pagination + '&sortType=' + sortType + '&sortBy=' + sortBy,
                    type: 'GET',
                    data: {'price': price, 'isAvailable': isAvailable},
                    success: function (response) {
                        $('#active-filters').html('');
                        price ? $('#active-filters').append('<li class="d-flex align-items-center justify-content-between"><span>محدوده قیمت از: <b>' + price.split(';')[0] + ' تومان</b> تا: <b>' + price.split(';')[1] + ' تومان</b></span><a href="#" class="remove-filter" data-type="price" title=""  target="_self"><i class="fal fa-times  text-primary"></i></a></li>') : '';
                        data != '' ? $('#active-filters').append('<li class="d-flex align-items-center justify-content-between"><span>دسته‌بندی: <b>' + categoryTitle + '</b></span><a href="#" class="remove-filter" title=""  data-type="category"  target="_self"><i class="fal fa-times text-primary"></i></a></li>') : '';
                        isAvailable == 1 ? $('#active-filters').append('<li class="d-flex align-items-center justify-content-between"><span>وضعیت محصول: <b>' + ProductStatus[isAvailable].title + '</b></span><a href="#" class="remove-filter" title=""  data-type="isAvailable"  target="_self"><i class="fal fa-times text-primary"></i></a></li>') : $('#active-filters').append('<li class="d-flex align-items-center justify-content-between"><span>وضعیت محصول: <b>' + ProductStatus[isAvailable].title + '</b></span><a href="#" class="remove-filter" title=""  data-type="isAvailable"  target="_self"><i class="fal fa-times text-primary"></i></a></li>');
                        $('#filtered_products').html(response);
                        if (sort == true) {
                            $('.sort-types-wrapper a.active').removeClass('active');
                            $(key).addClass('active');
                        }
                    }
                });
            }

            $(document).ready(function () {
                $(document).on('click', '.pagination a', function (event) {
                    event.preventDefault();
                    $('#filtered_products').html('<span class="loading-wrapper"><span class="lds-ring"><span></span><span></span><span></span><span></span></span></span>');
                    var url = $(this).attr('href');
                    pagination = url.split('?page=')[1];
                    productDataAjax();
                });

            });

        });
    </script>
@endsection

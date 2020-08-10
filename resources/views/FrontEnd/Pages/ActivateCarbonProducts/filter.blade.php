@foreach($products as $product)

    <div class="item-inner col-lg-4 col-xl-3 col-md-4 col-sm-6 col-xs-6 last-in-line first-item-of-tablet-line last-item-of-mobile-line">
        <article class="product-miniature js-product-miniature" data-id-product="{{$product->id}}" data-id-product-attribute="{{$product->id}}" itemscope itemtype="">
            <div class="innovatoryProduct-container item">
                <div class="innovatoryProduct-image">
                    <a href="{{action('FrontEnd\ProductController@show' ,[$product->id,$product->title,$product->title_en])}}" class="thumbnail product-thumbnail">
                                                                  <span class="cover_image">
                                                                        <img src="{{asset("img/admin/product/$product->photo1")}}" data-full-size-image-url="" alt="" width="auto" height="auto"/>
                                                                 </span>

                        <span class="hover_image">
                                                                           <img src="{{asset("img/admin/product/$product->photo1")}}" data-full-size-image-url="" alt="" width="auto" height="auto"/>
                                                                      </span> </a>

                    @if($product->category == 1)
                        <span class="innovatoryNew-label">{{__('settings.newest')}}</span>
                    @elseif($product->category == 2)
                        <span class="innovatoryNew-label">{{__('settings.bestSell')}}</span>
                    @elseif($product->category == 3)
                        <span class="innovatoryNew-label">{{__('settings.Special')}}</span>
                    @endif
                    @if(isset($product->discount))
                        <span class="reduction_percent_display innovatorySale-label">%{{$product->discount}}</span>
                    @endif

                    {{--                                                            <div class="innovatoryActions">--}}
                    {{--                                                                <div class="innovatoryActions-i">--}}
                    {{--                                                                    <div class="innovatoryCart innovatoryItem">--}}
                    {{--                                                                        <form action="cart.html" method="post">--}}
                    {{--                                                                            <input type="hidden" name="token" value="b37219994338861bc35224966f2f6efd">--}}
                    {{--                                                                            <input type="hidden" value="45" name="id_product">--}}
                    {{--                                                                            <a data-button-action="add-to-cart" class="cart-btn" title="Add To Cart">--}}
                    {{--                                                                                <i class="ti-shopping-cart"></i>--}}
                    {{--                                                                            </a>--}}
                    {{--                                                                        </form>--}}
                    {{--                                                                    </div>--}}
                    {{--                                                                    <div class="innovatoryQuick innovatoryItem">--}}
                    {{--                                                                        <a href="#" class="quick-view" data-link-action="quickview" title="Quickview">--}}
                    {{--                                                                            <i class="ti-eye"></i>--}}
                    {{--                                                                        </a>--}}
                    {{--                                                                    </div>--}}
                    {{--                                                                    <div class="innovatoryItem innovatoryWish">--}}
                    {{--                                                                        <div class="innovatorywishlist product-item-wishlist">--}}
                    {{--                                                                            <a class="addToWishlist wishlistProd_45" title="Add to wishlist" href="#" rel="45" onclick="WishlistCart('wishlist_block_list', 'add', '45', false, 1); return false;">--}}
                    {{--                                                                                <i class="ti-heart"></i>--}}
                    {{--                                                                                <span>Add to wishlist</span>--}}
                    {{--                                                                            </a>--}}
                    {{--                                                                        </div>--}}
                    {{--                                                                    </div>--}}
                    {{--                                                                </div>--}}
                    {{--                                                            </div>--}}
                </div>
                <div class="innovatory-product-description">
                    <div class="comments_note">
                        <div class="star_content">
                            <div class="Rate">
                                <span class="stars"> {{round($product->rate ,2)}}</span>
                            </div>
                        </div>
                        <span class="laberCountReview pull-left">Review</span>
                    </div>
                    <h2 class="h2 productName" itemprop="name">
                        <a href="home/45-300-two-tier-fruit-basket.html#/5-color-grey">
                            @if(App::getLocale() == 'fa')
                                {{$product->title}}
                            @elseif(App::getLocale() == 'en')
                                {{$product->title_en}}
                            @endif
                        </a>
                    </h2>
                    <div class="innovatory-product-price-and-shipping">
                        @if(isset($product->discount))
                            <span class="old-price regular-price">{{$product->price}}</span>
                            <span itemprop="price" class="price">{{$product->price_after_discount}}</span>
                        @else
                            <span class="regular-price">{{$product->price}}</span>
                        @endif
                    </div>
                    <div class="innovatoryCart innovatoryItem hidden-md-down">
                        <form action="#" method="post">
                            <input type="hidden" name="token"
                                   data-id="{{$product->id}}" value="0"
                                   class="" disabled>
                            <a class="cart-btn button ajax_add_to_cart_button add-to-cart"
                               data-button-action="add-to-cart"
                               type="submit"
                               data-id="{{$product->id}}"
                               data-name="@if(App::getLocale() == 'fa'){{$product->title}}@elseif(App::getLocale() == 'en'){{$product->title_en}}@endif"
                               data-max="{{$product->max}}"
                               data-price="{{$product->price}}"
                               data-pic="{{asset("img/admin/product/$product->photo1")}}"
                               data-min="1"
                               data-toggle="tooltip"
                               title="{{__('settings.addtocard')}}">
                                {{__('settings.addtocard')}}
                            </a>
{{--                            <a class="cart-btn-success alert alert-success">{{__('settings.inCart')}}</a>--}}
                        </form>
                    </div>
                </div>
            </div>
        </article>
    </div>
@endforeach

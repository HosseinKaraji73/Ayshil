<div id="product-count">
    <span>تعداد:</span>
    <div class="product-count-wrapper" data-max="{{$many->many}}" data-min="1">
        <input type="hidden" id="ProductCount" data-id="dqxke" value=" 1 ">
        <a href="#" class="basket-item-wrapper__count__plus" title="" target="_self"><i class="far fa-plus"></i></a>
        <span class="item_count"> 1 </span>
        <a href="#" title="" class="basket-item-wrapper__count__minus" target="_self" style="opacity: 0.3;"><i class="far fa-minus"></i></a>
    </div>
</div>
@if($many->many==0)

    <div class="d-flex align-items-center justify-content-between" id="product-actions">
        <button type="button" id="byNumber" disabled href="#" class="btn btn-primary  btn-disabled ">
            <i class="far fa-shopping-cart"></i> <span> ناموجود</span>
        </button>
    </div>
@else

    <div id="product-actions" class="d-flex align-items-center justify-content-between">
        <button type="button" id="byNumber" href="https://ibolak.com/shop/basket/dj8re/add" class="btn btn-primary">
            <i class="far fa-shopping-cart"></i> <span> افزودن به سبد خرید</span>
        </button>
    </div>

@endif















<script>
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

</script>

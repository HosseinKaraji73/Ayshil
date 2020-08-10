// $('.cart-btn-success').hide();

var shoppingCart = (function () {

    cart = [];

    function Item(name, price, count, id, min, max ,pic) {
        this.name = name;
        this.price = price;
        this.count = count;
        this.id = id;
        this.min = min;
        this.max = max;
        this.pic = pic
    }


    function number_3_3 (price, sep){
        var number = typeof price === "number"? price.toString() : price,
            separator = typeof sep === "undefined"? ',' : sep;
        return price.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1"+separator);
    }

    function saveCart() {
        sessionStorage.setItem('shoppingCart', JSON.stringify(cart))
    }

    function loadCart() {
        cart = JSON.parse(sessionStorage.getItem('shoppingCart'))
    }

    if (sessionStorage.getItem("shoppingCart") != null) {
        loadCart()
    }


    var obj = {};
    obj.addItemToCart = function (name, price, count, id, min, max ,pic) {

        for (var item in cart) {
            if (cart[item].id === id) {
                var a_add = $('a.add-to-cart');
                // if (cart[item].count >= min && cart[item].count < max) {
                //     if (a_add.attr('data-id') == id) {
                //         a_add.css({"background-color": "#f22613"})
                //     }
                // }
                // if (cart[item].count >= max - 1) {
                //     if (a_add.attr('data-id') == id) {
                //         a_add.css({"background-color": "#de9089"})
                //     }
                // }
                // if (cart[item].count >= max) {
                //     return !1
                // }
                cart[item].count++;
                saveCart();
                return
            }
        }
        var newItem = new Item(name, price, count, id, min, max ,pic);
        cart.push(newItem);
        saveCart()
    };
    obj.setCountForItem = function (count, id) {
        for (var i in cart) {
            if (cart[i].id === id) {
                cart[i].count = count;
                break
            }
        }
    };
    obj.removeItemFromCart = function (id, min) {
        for (var item in cart) {
            if (cart[item].id === id) {
                cart[item].count--;
                if (cart[item].count < min) {
                    cart.splice(item, 1);
                    $("input[data-id=" + id + "]").val(0);
                    var a_remove = $('a.remove-from-cart');
                    if (a_remove.attr('data-id') == id) {
                        a_remove.css({"background-color": "#de9089"})
                    }
                }
                var a_add = $('a.add-to-cart');
                if (a_add.attr('data-id') == id) {
                    a_add.css({"background-color": "#f22613"})
                }
                break
            }
        }
        saveCart()
    };
    obj.removeItemFromCartAll = function (id) {
        for (var item in cart) {
            if (cart[item].id === id) {
                cart.splice(item, 1);
                $("input[data-id=" + id + "]").val(0);
                var a_add = $('a.add-to-cart');
                if (a_add.attr('data-id') == id) {
                    a_add.css({"background-color": "#f22613"})
                }
                var a_remove = $('a.remove-from-cart');
                if (a_remove.attr('data-id') == id) {
                    a_remove.css({"background-color": "#de9089"})
                }
                break
            }
        }
        saveCart()
    };
    obj.clearCart = function () {
        cart = [];
        $("input.item-count").val(0);
        $('.remove-from-cart').css({"background-color": "#de9089"});
        $('.add-to-cart').css({"background-color": "#f22613"});
        saveCart()
    };
    obj.totalCount = function (min) {
        var totalCount = min;
        for (var item in cart) {
            totalCount += cart[item].count
        }
        return totalCount
    };
    obj.totalCart = function () {
        var totalCart = 0;
        for (var item in cart) {
            totalCart += cart[item].price * cart[item].count
        }
        return Number(totalCart.toFixed(2))
    };
    obj.listCart = function () {
        var cartCopy = [];
        for (i in cart) {
            item = cart[i];
            itemCopy = {};
            for (p in item) {
                itemCopy[p] = item[p]
            }
            itemCopy.total = Number(item.price * item.count).toFixed();
            cartCopy.push(itemCopy)
        }
        return cartCopy
    };
    return obj
})();
$('.add-to-cart').click(function (event) {
    event.preventDefault();
    var id = $(this).data('id');
    var price = Number($(this).data('price'));
    var name = $(this).data('name');
    var min = $(this).data('min');
    var max = $(this).data('max');
    var pic = $(this).data('pic');
    // $('.cart-btn').hide();
    // $('.cart-btn-success').show();
    // $('.cart-btn-success').append('در سبد خرید');
    shoppingCart.addItemToCart(name, price, min, id, min, max ,pic);
    displayCart()
});
$('.remove-from-cart').click(function (event) {
    event.preventDefault();
    var id = $(this).data('id');
    var min = $(this).data('min');
    shoppingCart.removeItemFromCart(id, min);
    displayCart()
});
$('.clear-cart').click(function () {
    shoppingCart.clearCart();
    displayCart()
});

function displayCart() {
    var cartArray = shoppingCart.listCart();
    var output = "";
    for (var i in cartArray) {
        output +=
            "<tr>"
            +
            "<td class='tdName'><img class='tdcartpic' src='" +cartArray[i].pic + "'></td>"
            +
            "<td class='tdName'>" + cartArray[i].name + "</td>"
            +
            "<td class='tdPrice'>(" + cartArray[i].price + ") Tuman</td>"
            +
            "<td><div class='input-group'><button class='minus-item input-group-addon btn btn-primary' data-id='"
            +
            cartArray[i].id + "' data-min='" + cartArray[i].min + "' data-max='" + cartArray[i].max + "'>-</button>"
            +
            "<input type='text' class='item-count form-control ' data-id='" + cartArray[i].id + "' value='" + cartArray[i].count + "'>"
            +
            "<button class='plus-item btn btn-primary input-group-addon' data-id='" + cartArray[i].id + "' data-min='" + cartArray[i].min + "' data-max='" + cartArray[i].max + "'>+</button></div></td>"
            +
            "<td>" +
            "<button class='delete-item btn' data-id='" + cartArray[i].id + "'>" +
            "<i class='fa fa-trash-o'></i></button></td>"
            + " = " + " <td class='tdTotal'> "
            + cartArray[i].total + " Tuman </td>"
            +
            "</tr>";
        $("input[data-id=" + cartArray[i].id + "]").val(cartArray[i].count)
    }
    var cart = JSON.stringify(cartArray);
    var result = "<input type='hidden' value='" + cart + "' name='resultArray' id='resultArray'>";
    $('.show-cart').html(output + result);
    $('.total-cart').html(shoppingCart.totalCart());
    $('.total-count').html(cartArray.length);
    ConvertPersian()
}

$('.show-cart').on("click", ".delete-item", function (event) {
    var id = $(this).data('id');
    shoppingCart.removeItemFromCartAll(id);
    displayCart()
});
$('.show-cart').on("click", ".minus-item", function (event) {
    var id = $(this).data('id');
    var min = $(this).data('min');
    shoppingCart.removeItemFromCart(id, min);
    displayCart()
});
$('.show-cart').on("click", ".plus-item", function (event) {
    var id = $(this).data('id');
    var name = $(this).data('name');
    var price = Number($(this).data('price'));
    var min = $(this).data('min');
    var max = $(this).data('max');
    var pic = $(this).data('pic');
    shoppingCart.addItemToCart(name, price, min, id, min, max, pic);
    displayCart()
});
$('.show-cart').on("change", ".item-count", function (event) {
    var id = $(this).data('id');
    var count = Number($(this).val());
    shoppingCart.setCountForItem(id, count);
    displayCart()
});
displayCart();
// $("#orderBtn").on('click', function () {
//     var is_login = '{{Auth::check()}}';
//     if (!is_login) {
//         $(location).attr('href', window.location.origin)
//         // $('#cart').modal('hide');
//         // $('#example-modal').modal('show')
//     }
// });

function ToRial(str) {

    str = str.replace(/\,/g, '');
    var objRegex = new RegExp('(-?[0-9]+)([0-9]{3})');

    while (objRegex.test(str)) {
        str = str.replace(objRegex, '$1,$2');
    }
    $(this).html($(this).html(str));

    // return str;
}













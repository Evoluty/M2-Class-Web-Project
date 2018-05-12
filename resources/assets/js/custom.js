$(document).ready(function(){
    var topNavCollapser = $('#top_nav_collapser');
    var topNavCart = $('#top_nav_cart');

    topNavCollapser.click(function () {
        if (topNavCart.css('display') !== 'none') {
            topNavCart.attr('style','display:none !important');
        } else {
            topNavCart.attr('style','display:block !important');
        }
    });

    $('.button-add-product').click(function () {
        var current_id = $($(this).children()[0]).html();
        $.get('/cart/addItem/'+current_id, function(data) {
            if (window.location.pathname === '/cart') {
                document.location.replace('/cart');
            }

            var number_items = data.count;
            $('#logo_number_cart_items').text(number_items);
            $('#logo_number_cart_items_top').text(number_items);
            $('#top_nav_cart_number_items').text(number_items);
        });
    });

    $('.edit-product').click(function (event) {
        event.preventDefault();

        var number = $($($(this).parent().parent().children()[0]).children()[0]).val();
        var itemId = $($(this).children()[0]).html();
        var itemPrice = $($($(this).parent()).parent().parent().children()[3]).html().substr(1);

        $.get('/cart/updateItem/'+itemId+'/'+number, function(data) {});

        $($(this).parent()).parent().parent().children().last().html('$' + number * itemPrice);
    });

    var cursorX = -1;
    var cursorY = -1;
    $(document).on('mousemove', function(event) {
        cursorX = event.pageX;
        cursorY = event.pageY;
    });

    function isInteger(str) {
        var n = Math.floor(Number(str));
        return n !== Infinity && String(n) === str && n >= 0;
    }

    function checkMouseHovered() {
        setTimeout(function() {
            if (cursorX !== -1 && cursorY !== -1) {
                var elem = document.elementFromPoint(cursorX - window.pageXOffset, cursorY - window.pageYOffset);
                var id = $(elem).attr("alt");

                if (id !== null && isInteger(id)) {
                    $.get('/products/bestseller/' + id);
                }
                $.get('/heatmap/' + cursorX + '/' + cursorY);
            }
            checkMouseHovered();
        }, 1000);
    }

    checkMouseHovered();
});

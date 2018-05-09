$(document).ready(function(){
    let topNavCollapser = $('#top_nav_collapser');
    let topNavCart = $('#top_nav_cart');

    topNavCollapser.click(function () {
        if (topNavCart.css('display') !== 'none') {
            topNavCart.attr('style','display:none !important');
        } else {
            topNavCart.attr('style','display:block !important');
        }
    });

    $('.button-add-product').click(function () {
        let current_id = $($(this).children()[0]).html();
        $.get('/cart/addItem/'+current_id, function(data) {
            if (window.location.pathname === '/cart') {
                document.location.replace('/cart');
            }

            let number_items = data.count;
            $('#logo_number_cart_items').text(number_items);
            $('#logo_number_cart_items_top').text(number_items);
            $('#top_nav_cart_number_items').text(number_items);
        });
    });

    $('.edit-product').click(function (event) {
        event.preventDefault();

        let number = $($($(this).parent().parent().children()[0]).children()[0]).val();
        let itemId = $($(this).children()[0]).html();
        let itemPrice = $($($(this).parent()).parent().parent().children()[3]).html().substr(1);

        $.get('/cart/updateItem/'+itemId+'/'+number, function(data) {});

        $($(this).parent()).parent().parent().children().last().html('$' + number * itemPrice);
    });
});

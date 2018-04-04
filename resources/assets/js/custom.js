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
});

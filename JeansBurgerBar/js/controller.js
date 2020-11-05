$(document).ready(function () {
    show_category(1);
    $('#basket_opener').hover(basket_opened, check_mouse_xy);
    $('#categories>li').bind("click", category_changed);
    $('.plus').bind("click", add_count);
    $('.minus').bind("click", remove_count);
});
function basket_opened () {
    $('#basket_logo').attr("src", "/Photos/Icons/basketjeans.png");
    $('#basket_logo_counter').addClass('blue');
    $('#basket_logo_sum').addClass('blue_txt');
    $('#basket').addClass('is_visible');
}

function basket_close () {
    $('#basket_logo').attr("src", "/Photos/Icons/basketwhite.png");
    $('#basket_logo_counter').removeClass('blue');
    $('#basket_logo_sum').removeClass('blue_txt');
    $('#basket').removeClass('is_visible');
}

function check_mouse_xy () {
    $('body').bind ("mousemove", function (e) { 
        if (e.target.id == 'basket') {
            $('#basket').mouseleave (function () {
                basket_close();
            });
            $('body').unbind ("mousemove");
        } else {
            basket_close();
            $('body').unbind ("mousemove");
        }
    });
}
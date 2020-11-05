function add_count () {
    var span = $(this).parent().children('span');
    var a = parseInt(
        $(span).html()
    );
    a++;
    $(span).html(a);
    calc_price(a, this);
}

function remove_count () {
    var span = $(this).parent().children('span');
    var a = parseInt(
        $(span).html()
    );
    if (a!=1) {
        a--;
        $(span).html(a);
    }
    calc_price(a, this);
}

function calc_price (count, obj) {
    var cost = parseInt(
        $(obj).parent().parent().children('.cost').html()
    );
    var price = $(obj).parent().parent().children('.price');
    $(price).html(
        count*cost+'₽'
    );
}
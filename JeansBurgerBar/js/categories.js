function category_changed () {
    let childs = $(this).parent().children();
    for (var child=0; (child < childs.length); child++) {
        $(childs[child]).removeClass('checked');
    }
    $(this).addClass('checked');
    show_category($(this).attr('id').substr(-1))
}

function show_category (c) {
    for (var i=1; (i<5); i++){
        if (i==c){
            $('.category'+c).addClass('active_category');
        } else {
            $('.category'+i).removeClass('active_category');
        }
    }
}
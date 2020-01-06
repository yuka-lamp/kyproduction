$(function() {
    var fade = ['.list-01','.list-02','.list-03','.list-04'];

    $.each(fade, function(i, val) {
        $(val).delay(180 * i).animate({opacity:'1'},400);
    });
});

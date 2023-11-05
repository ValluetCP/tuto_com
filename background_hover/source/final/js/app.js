$(function() {

    $('nav.menu a').mouseover(function() {
        bg = $(this).attr('data-bg');
        $('body').css('background-image', 'url(' + bg + ')');
    });

    $('nav.menu a').mouseout(function() {
        $('body').css('background-image', '');
    });

});
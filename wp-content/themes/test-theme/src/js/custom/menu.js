(function ($) {

//************************************
// Menu
//************************************

    $('#menu-main-menu .menu-item a').addClass('menu-trigger');
    $('.menu-trigger').click(function () {
        $('#menu-trigger').toggleClass('clicked');
        $('.container-roll').toggleClass('push');
        $('.menu-type').toggleClass('open');
        $('body').toggleClass('overflow-hidden');
    });

})(jQuery);
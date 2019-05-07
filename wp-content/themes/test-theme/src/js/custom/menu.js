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


//************************************
// MAIN NAV
//************************************
    function initDropdownToggle() {

        var counter = 1, ww;

        $(window).on('load resize', function () {
            ww = $(window).width();
        });

        $('.navbar-nav .menu-item-has-children').each(function () {

            var $this = $(this);

            var $sub_menu = $this.find('.sub-menu');

            var dropdown_btn = $this;

            var $sub_menu_items = $sub_menu.children('li');

            var dropdownToggle = $('<button/>', {
                'type': 'button',
                'class': 'collapse-toggle',
                'value': 'dropdown',
                'data-toggle': 'collapse',
                'data-target': '#sub-collapse-' + counter
                // 'data-parent' : '#accordion'
            });

            dropdownToggle.append('<i class="mobile-icon icon icon-down-open-big"></i>');

            $this.find('>a').after(dropdownToggle);
            $this.find('>.sub-menu').attr('id', 'sub-collapse-' + counter++);
            $this.find('>.sub-menu').addClass('collapse');


            $sub_menu.on('show.bs.collapse', function () {
                $('.sub-menu.collapse').collapse('hide');
                TweenMax.staggerTo($sub_menu_items, 0.1, {opacity: 1}, 0.07);
            });

            $sub_menu.on('shown.bs.collapse', function () {
            });

            $sub_menu.on('hide.bs.collapse', function () {
                TweenMax.to($sub_menu_items, 0, {opacity: 0});
            });

            dropdown_btn.hover(
                function () {
                    if (ww > 1080) {
                        $('.header').addClass('open');
                        $this.addClass("open");

                        TweenMax.set($sub_menu, {autoAlpha: 1});
                        TweenMax.from($sub_menu, 0.5, {autoAlpha: 0});
                    }
                }
            );
        })
    }

    initDropdownToggle();

})(jQuery);
$(document).ready(function () {
    var menu = function () {
        if($(window).width() < 768)
        {
            $(".mega-dropdown").addClass("clsClick");
            $(".mega-dropdown").removeClass("clsHover");
        }
        else
        {
            $(".mega-dropdown").addClass("clsHover");
            $(".mega-dropdown").removeClass("clsClick");
        }
        $(".clsHover").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
        );
        $(".clsClick").click(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $('.dropdown-menu', this).css("display", "none");
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $('.dropdown-menu', this).css("display", "block");
                }
        );
    };
    menu();

    $(window).resize(function () {
        menu();
    });
    var menu_top = $('.megamenu').offset().top;
    $(window).scroll(function () {
        if ($(window).width() > 768) {
            if ($(document).scrollTop() > menu_top) {
                $('.megamenu').css('position', 'fixed');
                $('.megamenu').css('top', '0');
                $('.megamenu').css('width', $('.row').width());
            }
            if ($(document).scrollTop() <= menu_top) {
                $('.megamenu').css('position', 'relative');
            }
        }
    });

    //$("#zoom_mw").elevateZoom({scrollZoom: true});
});

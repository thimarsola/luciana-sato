$(function () {
    $('.header__navbar__section__toggle').on('click', function(e){
        $('.menu-item-has-children').find('ul').hide();

        const clicks = $(this).data('clicks');
        const header = $('.header');

        if (clicks) {
            $('body').css('overflow', 'auto');
        } else {
            $('body').css('overflow', 'hidden');
        }
        $(this).not('a').data("clicks", !clicks);

        header.toggleClass('header--active');

        if(header.hasClass('header--active')){
            $('body').css('overflow', 'hidden');

            $('.menu li a[href]').not($('.menu-item-has-children > a')).click(function(){
                header.removeClass('header--active');
                $('body').css('overflow', 'auto');
            });

            $(document).click(function (e){
               if(!$(e.target).closest('.header').length){
                   header.removeClass('header--active');
                   $('body').css('overflow', 'auto');
               }
            });
        }
        e.stopPropagation();
    });

    $('.menu-item-has-children').on('click', function(){
        $(this).find('ul').stop().slideToggle();
    });
});
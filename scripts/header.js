$(function(){
     var shrinkHeader = 300;
       $(window).scroll(function() {
               var scroll = getCurrentScroll();
                     if ( (scroll >= shrinkHeader) && ($(window).width() > 900)) {
                                    $('.header').addClass('shrink');
                                    $('.logo div').addClass('shrink_logo');
                                    $('.menu').addClass('shrink_menu');
                                    $('.blocker').addClass('shrink_block');
                                            }
                             else if (($(window).width() > 900) && (scroll <= shrinkHeader)) {
                                             $('.header').removeClass('shrink');
                                            $('.logo div').removeClass('shrink_logo');
                                            $('.menu').removeClass('shrink_menu');
                                            $('.blocker').removeClass('shrink_block');
                             }

                               });
       function getCurrentScroll() {
               return window.pageYOffset || document.documentElement.scrollTop;
                   }
});
var checkWindow = function() {
    var $window = $(window);
        if ($window.width() < 900){
                $('.header').addClass('shrink');
                $('.logo div').addClass('shrink_logo');
                $('.menu').addClass('shrink_menu');
                $('.blocker').addClass('shrink_block');
        }
};

var timer = setInterval(checkWindow, 100);

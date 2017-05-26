$(document).ready(function() {
    new Swiper('.swiper-container-slider', {
        pagination: '.swiper-pagination',
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        paginationClickable: true,
        centeredSlides: true,
        autoplay: false,
        autoplayDisableOnInteraction: false,
        loop: true
    });

    new Swiper('.swiper-container-caption', {
        nextButton: '.swiper-caption-button-next',
        prevButton: '.swiper-caption-button-prev',
        paginationClickable: true,
        spaceBetween: 0,
        centeredSlides: true,
        autoplay: false,
        autoplayDisableOnInteraction: false,
        loop: true
    });


    $.fn.menumaker = function(options) {
        var cssmenu = $(this), settings = $.extend({
            format: "dropdown",
            sticky: false
        }, options);
        return this.each(function() {
            $(this).find(".button").on('click', function(){
                $(this).toggleClass('menu-opened');
                var mainmenu = $(this).next('ul');
                if (mainmenu.hasClass('open')) {
                    mainmenu.slideToggle().removeClass('open');
                }
                else {
                    mainmenu.slideToggle().addClass('open');
                    if (settings.format === "dropdown") {
                        mainmenu.find('ul').show();
                    }
                }
            });
            cssmenu.find('li ul').parent().addClass('has-sub');
            multiTg = function() {
                cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
                cssmenu.find('.submenu-button').on('click', function() {
                    $(this).toggleClass('submenu-opened');
                    if ($(this).siblings('ul').hasClass('open')) {
                        $(this).siblings('ul').removeClass('open').slideToggle();
                    }
                    else {
                        $(this).siblings('ul').addClass('open').slideToggle();
                    }
                });
            };
            if (settings.format === 'multitoggle') multiTg();
            else cssmenu.addClass('dropdown');
            if (settings.sticky === true) cssmenu.css('position', 'fixed');
            resizeFix = function() {
                var mediasize = 768;
                if ($( window ).width() > mediasize) {
                    cssmenu.find('ul').show();
                }
                if ($(window).width() <= mediasize) {
                    cssmenu.find('ul').hide().removeClass('open');
                }
            };
            resizeFix();
            return $(window).on('resize', resizeFix);
        });
    };

    $("#cssmenu").menumaker({
        format: "multitoggle"
    });

    $currentSlideIndex = 0;

    $("#slider-comment").on("touchstart", function(event){
      var xClick = event.originalEvent.touches[0].pageX;
        $(this).one("touchmove", function(event){
            var xMove = event.originalEvent.touches[0].pageX;
            if( Math.floor(xClick - xMove) > 10 ){
                switchSlide('next');
            }
            else if( Math.floor(xClick - xMove) < -10 ){
                switchSlide('prev');
            }
        });
        $("#slider-comment").on("touchend", function(){
                $(this).off("touchmove");
        });
    });

    switchSlide();

    /*$('.slide-image').swipe({
        swipeLeft: function (event) {
          switchSlide('next');
        },
        swipeRight: function (event) {
          switchSlide('prev');
        }
    });*/
    
});

var $currentSlideIndex;
var $interval;

function switchSlide(type) {

  var $length = $('.slider .slide-image').length;

  if (type == 'next') {
    $currentSlideIndex++;
    if ($currentSlideIndex > $length - 1) {
      $currentSlideIndex = 0;
    }
  } else if (type == 'prev') {
    $currentSlideIndex--;
    if ($currentSlideIndex < 0) {
      $currentSlideIndex = $length - 1;
    }
  }

  $('.slider .slide-image')
    .removeClass('active')
    .eq($currentSlideIndex).addClass('active');

  $('.slider .slide-intro')
    .removeClass('active')
    .eq($currentSlideIndex).addClass('active');

  if ($interval !== undefined) {
    clearInterval($interval);
  }

  $interval = setInterval(function () {
    switchSlide('next');
  }, 5000);
}

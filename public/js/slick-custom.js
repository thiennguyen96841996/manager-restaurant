

(function ($) {
    // USE STRICT
    "use strict";

        /*==================================================================
        [ Slick2 ]*/
        $('.wrap-slick2').each(function(){
            $(this).find('.slick2').slick({
              slidesToShow: 4,
              slidesToScroll: 4,
              infinite: false,
              autoplay: false,
              autoplaySpeed: 6000,
              arrows: true,
              appendArrows: $(this),
              prevArrow:'<button class="arrow-slick2 prev-slick2"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
              nextArrow:'<button class="arrow-slick2 next-slick2"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',  
              responsive: [
                {
                  breakpoint: 1200,
                  settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4
                  }
                },
                {
                  breakpoint: 992,
                  settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                  }
                },
                {
                  breakpoint: 768,
                  settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                  }
                },
                {
                  breakpoint: 576,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
              ]    
            });
          });


        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
          var nameTab = $(e.target).attr('href'); 
          $(nameTab).find('.slick2').slick('reinit');          
        });      


        /*==================================================================
        [ Slick3 ]*/
        var itemSlick3 = $('.slick3').find('.item-slick3');
        var action1 = [];
        var action2 = [];
        var action3 = [];
        var e1Slide3 = [];
        var e2Slide3 = [];
        var e3Slide3 = [];

        for(var i=0; i<itemSlick3.length; i++) {
          e1Slide3[i] = $(itemSlick3[i]).find('.element1-slick3');
          e2Slide3[i] = $(itemSlick3[i]).find('.element2-slick3');
          e3Slide3[i] = $(itemSlick3[i]).find('.element3-slick3');
        }


        $('.slick3').on('init', function(){

            action1[0] = setTimeout(function(){
                $(e1Slide3[0]).addClass($(e1Slide3[0]).data('appear') + ' visible-true');
            },800);

            action2[0] = setTimeout(function(){
                $(e2Slide3[0]).addClass($(e2Slide3[0]).data('appear') + ' visible-true');
            },100);

            action3[0] = setTimeout(function(){
                $(e3Slide3[0]).addClass($(e3Slide3)[0].data('appear') + ' visible-true');
            },1600);              
        });


        $('.slick3').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: true,
            infinite: false,
            autoplay: false,
            autoplaySpeed: 6000,
            arrows: true,
            appendArrows: $('.wrap-slick3-arrows'),
            prevArrow:'<button class="arrow-slick3 prev-slick3"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
            nextArrow:'<button class="arrow-slick3 next-slick3"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
            dots: true,
            appendDots: $('.wrap-slick3-dots'),
            dotsClass:'slick3-dots',
            customPaging: function(slick, index) {
                var dotItem = $(slick.$slides[index]).data('label');
                return '<span>' + dotItem + '</span>';
            },
        });

        $('.slick3').on('afterChange', function(event, slick, currentSlide){ 
            for(var i=0; i<itemSlick3.length; i++) {

              clearTimeout(action1[i]);
              clearTimeout(action2[i]);
              clearTimeout(action3[i]);


              $(e1Slide3[i]).removeClass($(e1Slide3[i]).data('appear') + ' visible-true');
              $(e2Slide3[i]).removeClass($(e2Slide3[i]).data('appear') + ' visible-true');
              $(e3Slide3[i]).removeClass($(e3Slide3[i]).data('appear') + ' visible-true');

            }

            action1[currentSlide] = setTimeout(function(){
                $(e1Slide3[currentSlide]).addClass($(e1Slide3[currentSlide]).data('appear') + ' visible-true');
            },800);

            action2[currentSlide] = setTimeout(function(){
                $(e2Slide3[currentSlide]).addClass($(e2Slide3[currentSlide]).data('appear') + ' visible-true');
            },100);

            action3[currentSlide] = setTimeout(function(){
                $(e3Slide3[currentSlide]).addClass($(e3Slide3)[currentSlide].data('appear') + ' visible-true');
            },1600);            
        });
          
          
        /*==================================================================
        [ Slick4 ]*/
        $('.slick4').slick({
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: false,
          autoplay: false,
          autoplaySpeed: 6000,
          arrows: true,
          appendArrows: $('.wrap-slick4'),
          prevArrow:'<button class="arrow-slick4 prev-slick4"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
          nextArrow:'<button class="arrow-slick4 next-slick4"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',  
          responsive: [
            {
              breakpoint: 1200,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 992,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            },
            {
              breakpoint: 576,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]    
        });

        /*==================================================================
        [ Slick5 ]*/
        $('.slick5').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            fade: false,
            infinite: false,
            autoplay: true,
            autoplaySpeed: 5000,
            arrows: true,
            appendArrows: $('.wrap-slick5'),
            prevArrow:'<button class="arrow-slick5 prev-slick5"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
            nextArrow:'<button class="arrow-slick5 next-slick5"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
            dots: false,
            appendDots: $('.wrap-slick3-dots'),
            dotsClass:'slick3-dots',
        });

                

})(jQuery);
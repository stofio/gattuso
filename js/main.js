$(document).ready(function () {

    /***** Navigation *****/
     $("#nav-toggle").click(function () {
        $(this).toggleClass('active');
    $(".menu-tel").toggleClass("in");
    $("body").toggleClass("no-scroll");
    });

    $(".menu-close").click(function () {
        $(".menu-tel").removeClass("in");
        $("body").toggleClass("no-scroll");
    });

    $(".menu-close").click(function () {
        $(".menu-tel").removeClass("in");
        $("body").toggleClass("no-scroll");
    });

   
    /***** Main First Screeen Slider *****/

    $(".home-slider").slick({
        infinite: true,
        arrows: false,
        dots: false,
        autoplay: false,
        speed: 800,
        fade: true,
        slidesToShow: 1,
        slidesToScroll: 1,
      });

    /***** Main First Screeen Slider - Navigation *****/

    var percentTime;
    var tick;
    var time = 1;
    var progressBarIndex = 0;

    $('.progressBar').each(function(index) {
        var progress = "<div class='inProgress inProgress" + index + "'></div>";
        $(this).html(progress);
    });

    function startProgressbar() {
        resetProgressbar();
        percentTime = 0;
        tick = setInterval(interval, 10);
    }

    function interval() {
        if (($('.home-slider .slick-track div[data-slick-index="' + progressBarIndex + '"]').attr("aria-hidden")) === "true") {
            progressBarIndex = $('.home-slider .slick-track div[aria-hidden="false"]').data("slickIndex");
            startProgressbar();
            $('.progressBarContainer .item').removeClass('active');
        } else {
        $('.progressBarContainer .item').removeClass('active');
        $('.inProgress' + progressBarIndex).parent().parent().parent().addClass('active')
            percentTime += 1 / (time + 5);
            $('.inProgress' + progressBarIndex).css({
                width: percentTime + "%"
            });
            if (percentTime >= 100) {
                $('.home-slider').slick('slickNext');
                progressBarIndex++;
                if (progressBarIndex > 2) {
                    progressBarIndex = 0;
                }
                startProgressbar();
            }
        }
    }

    function resetProgressbar() {
        $('.inProgress').css({
            width: 0 + '%'
        });
        clearInterval(tick);
    }


    $('.progressBarContainer .item').click(function () {
        clearInterval(tick);
        var goToThisIndex = $(this).find("span.progressBar").data("slickIndex");
        $('.home-slider').slick('slickGoTo', goToThisIndex, false);
        startProgressbar();
    });

    startProgressbar();


    /***** END Main First Screeen Slider - Navigation *****/


    $('.faq__item').click(function () {
        $('.faq__item').find('.faq__text').slideUp();
        $('.faq__item').removeClass('in');
       
        $('.faq__img').fadeOut();
        $('.faq__img').removeClass('active');
       
        $(this).find('.faq__text').slideDown();
        $(this).addClass('in');
        
        var faqImg = $(this).attr('data-img');

        $(faqImg).fadeIn();
        $(faqImg).addClass('active');
    });

    /***** Team Slider *****/

    if($(".team-slider").length){

        $slideshow33 = $('.team-slider').slick({
            infinite: true,
            dots: true,
            autoplay: false,
            speed: 800,
            slidesToShow: 1,
            slidesToScroll: 1,
            appendDots: $('.slick-nav__dots') 
        });


        $('.team-slider').click(function(e) {
            var pWidth = $(this).innerWidth();
            var pOffset = $(this).offset(); 
            var x = e.pageX - pOffset.left;
    
            if(pWidth/2 > x) {
            $slideshow33.slick('slickPrev');
            } else if(pWidth/2 < x) {
            $slideshow33.slick('slickNext');
            }
        });
        
        $('.team-slider').click(function(e) {
            var pWidth = $(this).innerWidth();
            var pOffset = $(this).offset(); 
            var x = e.pageX - pOffset.left;
    
            if(pWidth/2 > x) {
            $slideshow33.slick('slickPrev');
            } else if(pWidth/2 < x) {
            $slideshow33.slick('slickNext');
            }
        });
        
        $('.team-slider').on('mousemove', function(e){
            var pWidth = $(this).innerWidth();
            var pOffset = $(this).offset(); 
            var x = e.pageX - pOffset.left;
    
            if(pWidth/2 > x) {
                $('.team-slider .slick-slide').css('cursor','url(/wp-content/themes/gattuso/img/cursor-prev.svg), pointer', 'important');
            } else if(pWidth/2 < x) {
                $('.team-slider .slick-slide').css('cursor','url(/wp-content/themes/gattuso/img/cursor-next.svg), pointer', 'important');
            }
        });
    };

    /***** Scroll Title *****/

    if($(".fixed-title").length){

        $(window).scroll(function(){
            var scroll = $(window).scrollTop();
        
            if(scroll > 100){
                $(".fixed-title").addClass("active");
            }
            else {
                $(".fixed-title").removeClass("active");
            }

            var $element = $('.bg-box');
            let counter = 0;

            var scroll02 = $(window).scrollTop() + $(window).height();
            var offset = $element.offset().top
        
            if (scroll02 > offset && counter == 0) {
                $(".fixed-title").css('opacity', '0');
                counter = 1;
            } else {
                $(".fixed-title").css('opacity', '1');
            }
        })

    };

    

    $(function(){
        $('.fixed-elem').fixedElemScroll()
    });

    $(function(){
        $('.fixed-elem02').fixedElemScroll()
    });


    /***** Page Single Slider *****/

    if($(".ps03-slider").length){

        $slideshow44 = $('.ps03-slider').slick({
            infinite: true,
            dots: true,
            autoplay: false,
            speed: 800,
            slidesToShow: 1,
            slidesToScroll: 1,
            appendDots: $('.slick-nav__dots') 
        });


        $('.ps03-slider').click(function(e) {
            var pWidth = $(this).innerWidth();
            var pOffset = $(this).offset(); 
            var x = e.pageX - pOffset.left;
    
            if(pWidth/2 > x) {
                $slideshow44.slick('slickPrev');
            } else if(pWidth/2 < x) {
                $slideshow44.slick('slickNext');
            }
        });
        
        $('.ps03-slider').click(function(e) {
            var pWidth = $(this).innerWidth();
            var pOffset = $(this).offset(); 
            var x = e.pageX - pOffset.left;
    
            if(pWidth/2 > x) {
                $slideshow44.slick('slickPrev');
            } else if(pWidth/2 < x) {
                $slideshow44.slick('slickNext');
            }
        });
        
        $('.ps03-slider').on('mousemove', function(e){
            var pWidth = $(this).innerWidth();
            var pOffset = $(this).offset(); 
            var x = e.pageX - pOffset.left;
    
            if(pWidth/2 > x) {
                $('.ps03-slider .slick-slide').css('cursor','url(/wp-content/themes/gattuso/img/cursor-prev.svg), pointer', 'important');
            } else if(pWidth/2 < x) {
                $('.ps03-slider .slick-slide').css('cursor','url(/wp-content/themes/gattuso/img/cursor-next.svg), pointer', 'important');
            }
        });
    };

    if($(".ps04-slider").length){

        $slideshow55 = $('.ps04-slider').slick({
            infinite: true,
            dots: true,
            autoplay: false,
            speed: 800,
            slidesToShow: 1,
            slidesToScroll: 1,
            appendDots: $('.slick-nav__dots02') 
        });


        $('.ps04-slider').click(function(e) {
            var pWidth = $(this).innerWidth();
            var pOffset = $(this).offset(); 
            var x = e.pageX - pOffset.left;
    
            if(pWidth/2 > x) {
            $slideshow55.slick('slickPrev');
            } else if(pWidth/2 < x) {
            $slideshow55.slick('slickNext');
            }
        });
        
        $('.ps04-slider').click(function(e) {
            var pWidth = $(this).innerWidth();
            var pOffset = $(this).offset(); 
            var x = e.pageX - pOffset.left;
    
            if(pWidth/2 > x) {
            $slideshow55.slick('slickPrev');
            } else if(pWidth/2 < x) {
            $slideshow55.slick('slickNext');
            }
        });
        
        $('.ps04-slider').on('mousemove', function(e){
            var pWidth = $(this).innerWidth();
            var pOffset = $(this).offset(); 
            var x = e.pageX - pOffset.left;
    
            if(pWidth/2 > x) {
                $('.ps04-slider .slick-slide').css('cursor','url(/wp-content/themes/gattuso/img/cursor-prev.svg), pointer', 'important');
            } else if(pWidth/2 < x) {
                $('.ps04-slider .slick-slide').css('cursor','url(/wp-content/themes/gattuso/img/cursor-next.svg), pointer', 'important');
            }
        });
    };



   /***** Wow Js *****/
   new WOW().init();

});

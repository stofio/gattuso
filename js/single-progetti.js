$(document).ready(function () {

 if($(".gallery-slider.gall1").length){
    
        /***** Gallery Slider *****/
     
        $slideshow22 = $('.gallery-slider.gall1').slick({
            infinite: true,
            dots: false,
            autoplay: false,
            speed: 0,
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: true,
            centerPadding: '15vw'
        });

        $('.gallery-slider.gall1').click(function(e) {
            var pWidth = $(this).innerWidth();
            var pOffset = $(this).offset(); 
            var x = e.pageX - pOffset.left;
      
           if(pWidth/2 > x) {
             $slideshow22.slick('slickPrev');
           } else if(pWidth/2 < x) {
             $slideshow22.slick('slickNext');
           }
       });
       
         $('.gallery-slider.gall1').click(function(e) {
            var pWidth = $(this).innerWidth();
            var pOffset = $(this).offset(); 
            var x = e.pageX - pOffset.left;
      
           if(pWidth/2 > x) {
             $slideshow22.slick('slickPrev');
           } else if(pWidth/2 < x) {
             $slideshow22.slick('slickNext');
           }
       });
       
       $('.gallery-slider.gall1').on('mousemove', function(e){
            var pWidth = $(this).innerWidth();
            var pOffset = $(this).offset(); 
            var x = e.pageX - pOffset.left;
      
           if(pWidth/2 > x) {
                $('.gallery-slider.gall1 .slick-slide').css('cursor','url(https://padoan.kerners.co/wp-content/themes/padoan/img/cursor-prev.svg), pointer', 'important');
           } else if(pWidth/2 < x) {
                $('.gallery-slider.gall1 .slick-slide').css('cursor','url(https://padoan.kerners.co/wp-content/themes/padoan/img/cursor-next.svg), pointer', 'important');
           }
       });

    }


    $(".popup-link.gall1").click(function () {
        $popupClass = $(this).attr('data-popup-class');
        $popupPhoto = $(this).attr('data-photo-id');

        const index = $($popupPhoto).attr("data-slick-index");
        $(".gallery-slider.gall1").slick("slickGoTo", index);

        $('.gallery-slider.gall1').css('display', 'block'); 
        $(".gallery-slider.gall1").get(0).slick.setPosition();

        $($popupPhoto).addClass('slick-current slick-active slick-center');

        var slickSlider = $('.gallery-slider.gall1')[0]
        slickSlider.slick.options.speed = 1500
        
        $($popupClass).addClass('in');
        $("body").addClass("no-scroll");
    });

    $(".popup__close-btn.gall1").click(function () {
        $(".popup").removeClass("in");
        $("body").removeClass("no-scroll");
        var slickSlider = $('.gallery-slider.gall1')[0]
        slickSlider.slick.options.speed = 0;
    });






    if($(".gallery-slider.gall2").length){
    
        /***** Gallery Slider *****/
     
        $slideshow22 = $('.gallery-slider.gall2').slick({
            infinite: true,
            dots: false,
            autoplay: false,
            speed: 0,
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: true,
            centerPadding: '15vw'
        });

        $('.gallery-slider.gall2').click(function(e) {
            var pWidth = $(this).innerWidth();
            var pOffset = $(this).offset(); 
            var x = e.pageX - pOffset.left;
      
           if(pWidth/2 > x) {
             $slideshow22.slick('slickPrev');
           } else if(pWidth/2 < x) {
             $slideshow22.slick('slickNext');
           }
       });
       
         $('.gallery-slider.gall2').click(function(e) {
            var pWidth = $(this).innerWidth();
            var pOffset = $(this).offset(); 
            var x = e.pageX - pOffset.left;
      
           if(pWidth/2 > x) {
             $slideshow22.slick('slickPrev');
           } else if(pWidth/2 < x) {
             $slideshow22.slick('slickNext');
           }
       });
       
       $('.gallery-slider.gall2').on('mousemove', function(e){
            var pWidth = $(this).innerWidth();
            var pOffset = $(this).offset(); 
            var x = e.pageX - pOffset.left;
      
           if(pWidth/2 > x) {
                $('.gallery-slider.gall2 .slick-slide').css('cursor','url(https://padoan.kerners.co/wp-content/themes/padoan/img/cursor-prev.svg), pointer', 'important');
           } else if(pWidth/2 < x) {
                $('.gallery-slider.gall2 .slick-slide').css('cursor','url(https://padoan.kerners.co/wp-content/themes/padoan/img/cursor-next.svg), pointer', 'important');
           }
       });

    }


    $(".popup-link.gall2").click(function () {
        $popupClass = $(this).attr('data-popup-class');
        $popupPhoto = $(this).attr('data-photo-id');

        const index = $($popupPhoto).attr("data-slick-index");
        $(".gallery-slider.gall2").slick("slickGoTo", index);

        $('.gallery-slider.gall2').css('display', 'block'); 
        $(".gallery-slider.gall2").get(0).slick.setPosition();

        $($popupPhoto).addClass('slick-current slick-active slick-center');

        var slickSlider = $('.gallery-slider.gall2')[0]
        slickSlider.slick.options.speed = 1500
        
        $($popupClass).addClass('in');
        $("body").addClass("no-scroll");
    });

    $(".popup__close-btn.gall2").click(function () {
        $(".popup").removeClass("in");
        $("body").removeClass("no-scroll");
        var slickSlider = $('.gallery-slider.gall2')[0]
        slickSlider.slick.options.speed = 0;
    });
	
});
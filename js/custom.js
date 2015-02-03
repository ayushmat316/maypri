
(function ($) {

    $('.fadein img:gt(0)').hide();
    setInterval(function(){
      $('.fadein :first-child').fadeOut()
         .next('img').fadeIn()
         .end().appendTo('.fadein');}, 
      3000);

    $('.fadein2 img:gt(0)').hide();
    setInterval(function(){
      $('.fadein2 :first-child').fadeOut()
         .next('img').fadeIn()
         .end().appendTo('.fadein2');}, 
      3000);

   /*---- SET FADE INTERVAL FOR CAROUSEL IMAGES--- */  
    $(document).ready(function() {
        $('.carousel').carousel({interval: 3000});
    });

  /*---- HEADER RESIZE ON SCROLL ANIMATION 
   
    $(window).scroll(function() {
        if ($(this).scrollTop() > 400){  
            $('.mainLogo').addClass("sticky");
        }
        else{
            $('.mainLogo').removeClass("sticky");
        }
    });---*/
  
 /*------ EASING SCROLL ON MAIN MAYRPI PAGE-----*/ 
    $(document).ready(function() {                                   
        $('.us').click(function(){
            $('html, body').animate({
                scrollTop: $(".heading-about").offset().top-100
            }, 2000);                  
        });
        $('.reach').click(function(){

            $('html, body').animate({
                scrollTop: $(".foot").offset().top
            }, 2000);                  
        });

    }); 

/*----- EASING GO TO TOP -----
   $(document).ready(function() {                                   
        $('.goToTop').click(function(){
            $('html, body').animate({
                scrollTop: 0
            }, 2000);                  
        });
    }); */

/*------ TRANSPARENT HEADER ON SCROLL ------*/
   $(window).scroll(function() {
        if ($(this).scrollTop() > 50){  
            $('#mainHead').addClass("transparentHeader");
            $('#foodHead').addClass("transparentHeader");
            $('#healthHead').addClass("transparentHeader");
        }
        else{
            $('#mainHead').removeClass("transparentHeader");
            $('#foodHead').removeClass("transparentHeader");
            $('#healthHead').removeClass("transparentHeader");
        }
    });

/*----DISPLAY BACKGROUND INFO ON MAYPRI FOODS----*/
   $(document).ready(function () {       
       $('.bg').click(function() {
            $('#background').show(800);
            $('#restaurants').hide();
            $('#vending').hide();
            $('html, body').animate({
                scrollTop: $("#background").offset().top-100
            }, 2000);                                                                    

        });
    }); 

/*---- DISPLAY RESTAURANT INFO ON MAYPRI FOODS-----*/
    $(document).ready(function () {       
       $('.rest').click(function() {
            $('#background').hide();
            $('#vending').hide();
            $('#restaurants').show(800);
            $('html, body').animate({
                scrollTop: $("#restaurants").offset().top-150
            }, 2000);                                                                    

        });
    }); 

/*----- DISPLAY VENDING INFO ON MAYPRI FOODS---*/
   $(document).ready(function () {       
       $('.vend').click(function() {
            $('#background').hide();
            $('#restaurants').hide();
            $('#vending').show(800);
            $('html, body').animate({
                scrollTop: $("#vending").offset().top-150
            }, 2000);                                                                    

        });
    }); 

   $(document).ready(function () {       
       $('#dropdownImage').click(function() {
            $('.logoOptions').toggle('fast');
        });
    }); 

/*----- VENDING CLIENTS LOGO SCROLLER---*/
    var scroller = $('#scroller div.innerScrollArea');
    var scrollerContent = scroller.children('ul');
    scrollerContent.children().clone().appendTo(scrollerContent);
    var curX = 0;
    scrollerContent.children().each(function(){
        var $this = $(this);
        $this.css('left', curX);
        curX += $this.outerWidth(true);
    });
    var fullW = curX / 2;
    var viewportW = scroller.width();

    // Scrolling speed management
    var controller = {curSpeed:0, fullSpeed:2};
    var $controller = $(controller);
    var tweenToNewSpeed = function(newSpeed, duration)
    {
        if (duration === undefined)
            duration = 600;
        $controller.stop(true).animate({curSpeed:newSpeed}, duration);
    };

    // Pause on hover
    /*scroller.hover(function(){
        tweenToNewSpeed(0);
    }, function(){
        tweenToNewSpeed(controller.fullSpeed);
    });*/

    // Scrolling management; start the automatical scrolling
    var doScroll = function()
    {
        var curX = scroller.scrollLeft();
        var newX = curX + controller.curSpeed;
        if (newX > fullW*2 - viewportW)
            newX -= fullW;
        scroller.scrollLeft(newX);
    };
    setInterval(doScroll, 20);
    tweenToNewSpeed(controller.fullSpeed);

    var productScroller = $('#productScroller div.innerScrollArea');
    var productScrollerContent = productScroller.children('ul');
    productScrollerContent.children().clone().appendTo(productScrollerContent);
    var productCurX = 0;
    productScrollerContent.children().each(function(){
        var $this = $(this);
        $this.css('left', productCurX);
        productCurX += $this.outerWidth(true);
    });
    var productFullW = productCurX / 2;
    var productViewportW = productScroller.width();

    // Scrolling speed management
    var productController = {curSpeed:0, fullSpeed:2};
    var $productController = $(productController);
    var productTweenToNewSpeed = function(newSpeed, duration)
    {
        if (duration === undefined)
            duration = 600;
        $productController.stop(true).animate({curSpeed:newSpeed}, duration);
    };

    // Pause on hover
    /*scroller.hover(function(){
        tweenToNewSpeed(0);
    }, function(){
        tweenToNewSpeed(controller.fullSpeed);
    });*/

    // Scrolling management; start the automatical scrolling
    var prodDoScroll = function()
    {
        var productCurX = productScroller.scrollLeft();
        var productNewX = productCurX + productController.curSpeed;
        if (productNewX > productFullW*2 - productViewportW)
            productNewX -= productFullW;
        productScroller.scrollLeft(productNewX);
    };
    setInterval(prodDoScroll, 20);
    productTweenToNewSpeed(productController.fullSpeed);
    /*---------------------------------*/
    /*
    $(document).ready(function(){
        $("#profilePic1").click(function(){
              $("#bio1").toggle(1000);
        });
        $("#profilePic2").click(function(){
              $("#bio2").toggle(1000);
        });
    });
    */

/*   $('header nav a').click(function() {
        var $linkClicked = $(this).attr('href');
        document.location.hash = $linkClicked;
        if (!$(this).hasClass("active")) {
            $("header nav a").removeClass("active");
            $(this).addClass("active");
            $('#wrapper section').hide();
            $($linkClicked).fadeIn();
            return false;
        }
        else {
            return false;
        }
    });
    var hash = window.location.hash;
    hash = hash.replace(/^#/, '');
    switch (hash) {
        case 'restaurants' :
            $("#" + hash + "-link").trigger("click");
            break;
        case 'vending' :
            $("#" + hash + "-link").trigger("click");
            break;
     }

*/

    /*  new gnMenu( document.getElementById( 'gn-menu' ) );


    //jQuery for page scrolling feature - requires jQuery Easing plugin
    $(function() {
        $('.listOptions li a').bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 1500, 'easeInOutExpo');
            event.preventDefault();
        });
        $('a.scroll').bind('click', function(event) {
            var $anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 1500, 'easeInOutExpo');
            event.preventDefault();
        });
    });

    
    //nivo lightbox
    $('.gallery-item a').nivoLightbox({
        effect: 'fadeScale',                             // The effect to use when showing the lightbox
        theme: 'default',                           // The lightbox theme to use
        keyboardNav: true,                          // Enable/Disable keyboard navigation (left/right/escape)
        clickOverlayToClose: true,                  // If false clicking the "close" button will be the only way to close the lightbox
        onInit: function(){},                       // Callback when lightbox has loaded
        beforeShowLightbox: function(){},           // Callback before the lightbox is shown
        afterShowLightbox: function(lightbox){},    // Callback after the lightbox is shown
        beforeHideLightbox: function(){},           // Callback before the lightbox is hidden
        afterHideLightbox: function(){},            // Callback after the lightbox is hidden
        onPrev: function(element){},                // Callback when the lightbox gallery goes to previous item
        onNext: function(element){},                // Callback when the lightbox gallery goes to next item
        errorMessage: 'The requested content cannot be loaded. Please try again later.' // Error message when content can't be loaded
    }); */

})(jQuery);
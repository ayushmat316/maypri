(function ($) {
       $(document).ready(function() {
        $('ul#testNav li a').click(function() {
            /* Act on the event */
            var page = $(this).attr('href');
            $('#restaurantContent').load(page +'.html');
           
            return false;
        });


        $('#button1').click(function() {
            document.location.href='about.html';
        });
        $('#button2').click(function() {
           document.location.href='mayprifoods.html';
        });
        $('#button3').click(function() {
           document.location.href='mayprihealthcare.html';
        });

        $('.hover').hover(function(){
            $(this).addClass('flip');
        },function(){
            $(this).removeClass('flip');
        });
    });

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

})(jQuery);
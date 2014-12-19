
(function ($) {

  /* Set fade interval for carousel images */  
    $(document).ready(function() {
        $('.carousel').carousel({interval: 3000});
    });

  /*---- HEADER RESIZE ON SCROLL ANIMATION ---*/
   /*
    $(window).scroll(function() {
        if ($(this).scrollTop() > 1){  
            $('.mainLogo').addClass("sticky");
        }
        else{
            $('.mainLogo').removeClass("sticky");
        }
    });
    */ 
    
    $("document").ready(function() {                                   
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

   $('header nav a').click(function() {
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

    /*	new gnMenu( document.getElementById( 'gn-menu' ) );


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
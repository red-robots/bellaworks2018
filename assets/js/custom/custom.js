/**
 *	Custom jQuery Scripts
 *	
 *	Developed by: Austin Crane	
 *	Designed by: Austin Crane
 */

jQuery(document).ready(function ($) {
	/*
	*
	*	Wow Animation
	*
	------------------------------------*/
 //    var wrap = $("#topwrap");

	// $("#topwrap").on("scroll", function(e) {
	    
	//   if (this.scrollTop > 147) {
	//     wrap.addClass("fix-nav");
	//   } else {
	//     wrap.removeClass("fix-nav");
	//   }
	  
	// });

	var header = $("#topwrap");
  $(window).scroll(function() {    
    var scroll = $(window).scrollTop();
       if (scroll >= 1) {
          header.addClass("fix-nav");
        } else {
          header.removeClass("fix-nav");
        }
		});	


	// Colorbox for Single Portfolio
		$('.gallery').colorbox({
			rel:'gallery',
			width: '80%', 
			height: '80%',
			// inline: true,
		});

		// Colorbox for Single Portfolio
		$('a.port').colorbox({
			rel:'port',
			width: '80%', 
			height: '80%',
			inline: true,
		});
	
	$('#masthead .phone a').one('click',function(e){
	    e.preventDefault();
	    function temp(){
	        var $this = $(this);
	        if($this.attr('href')!==undefined) {
                window.location = $this.attr('href');
            }
        }
        var placeCall = temp.bind(this);
	    setTimeout(placeCall,1000);
        ga('send', {
            hitType: 'event',
            hitCallback: function(){
                placeCall();
            },
            eventCategory: 'Phone',
            eventAction: 'Click',
            eventLabel: 'Header',
            eventValue: 1
        });
    });
	
	
	// Flexslider
	// front page slider 
	$('.flexslider').flexslider({
		animation: "slide",
	}); // end register flexslider
	
	
	
	/*// Colorbox for frame
	$('a.frame').colorbox({
		rel:'gal',
		width: '80%', 
		height: '80%'
	});*/
	
	
	
	
	// Delay the Start now button between iterations
	function afterReveal (el) {
	//event listener when the animation finishes
	el.addEventListener('animationend', function () {
	    $(".startnow").attr("data-wow-delay","3s");
	    new WOW().init();
		});
	}

	new WOW({ callback: afterReveal }).init();
	
	
	
	
	//Isotope with images loaded ...
	var $container = $('#container').imagesLoaded( function() {
  	$container.isotope({
    // options

	 itemSelector: '.item',
		  masonry: {
			gutter: 40
			}
 		 });
	});
	
	// filter functions
  var filterFns = {
    // show if number is greater than 50
    numberGreaterThan50: function() {
      var number = $(this).find('.number').text();
      return parseInt( number, 10 ) > 50;
    },
    // show if name ends with -ium
    ium: function() {
      var name = $(this).find('.name').text();
      return name.match( /ium$/ );
    }
  };
  // bind filter button click
  $('#filters').on( 'click', 'button', function() {
    var filterValue = $( this ).attr('data-filter');
    // use filterFn if matches value
    filterValue = filterFns[ filterValue ] || filterValue;
    $container.isotope({ filter: filterValue });
  });
  // change is-checked class on buttons
  $('.button-group').each( function( i, buttonGroup ) {
    var $buttonGroup = $( buttonGroup );
    $buttonGroup.on( 'click', 'button', function() {
      $buttonGroup.find('.is-checked').removeClass('is-checked');
      $( this ).addClass('is-checked');
    });
  });
	
	
	// Equal heights divs
	$('.blocks').matchHeight();
	
	// Equal heights divs
	$('.js-blocks').matchHeight();
	
	// Paralax
	skrollr.init({
    	forceHeight: false,
		 mobileCheck: function() {
                //hack - forces mobile version to be off
                return false;
            }
		
	});
	
		// Make active current page
	$("[href]").each(function() {
    if (this.href == window.location.href) {
        $(this).addClass("active");
        }
	
	});
	
	if ( document.location.href.indexOf('website-design-development') > -1 ) {
        $('li#menu-item-26 a').addClass("active");
    }
	if ( document.location.href.indexOf('staff') > -1 ) {
        $('li#menu-item-20 a').addClass("active");
    }
	if ( document.location.href.indexOf('digital-marketing-services') > -1 ) {
        $('li#menu-item-22 a').addClass("active");
    }
    

    /*
	*
	*	Wow Animation
	*
	------------------------------------*/
	new WOW().init();

});// END #####################################    END
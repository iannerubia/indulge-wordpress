$(document).ready( function() {
	var lastScroll = 0;

	jQuery(document).ready(function($) {
	    $(".navbar").addClass("s");

	    $(window).scroll(function(){
	        setTimeout(function() { //give them a second to finish scrolling before doing a check
	            var scroll = $(window).scrollTop();
	            if ( scroll < lastScroll - 70  ) {
	                $(".navbar").removeClass("navbar-overlay");
	            } else if (scroll > lastScroll + 70) {
	                $(".navbar").addClass("navbar-overlay");
	            }
	            lastScroll = scroll;
	        }, 500);
	    });
	});

});



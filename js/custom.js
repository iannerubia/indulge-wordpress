$(document).ready( function() {
	jQuery(document).ready(function($) {

	    $(window).scroll( function() {

	       	if ( $(this).scrollTop() > 100 ) {

				$(".navbar").addClass("navbar-overlay");

	       	} else {

	       		$(".navbar").removeClass("navbar-overlay");
	       		
	       	}
	    });
	});
});



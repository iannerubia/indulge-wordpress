$(document).ready( function() {

	// Clone content in #navbar into #navbarbar
	( function () {
		var textContent = $(".nav.navbar-nav").clone();
		$( textContent ).appendTo("#navbarbar");	
		$("#navbar").removeClass("hidden-xs");
		$("#navbar-menu-wrapper").addClass("hidden-sm hidden-md hidden-lg");
		$("#navbarbar li.dropdown").remove();
		$("#navbarbar, #navbarbar .navbar-nav").removeClass("collapse hidden-xs");
	})();

	// Navbar Menu functionalities
	$(".navbar-toggle").click( function() {

		$('html, body').animate({
		    scrollTop: $("#top").offset().top
		}, 500);

        $("#navbar-menu-wrapper").toggleClass("navbar-overlay zindex-999");
	});


});



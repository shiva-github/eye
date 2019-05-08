(function($) {

	$(".content-block").scrollTop($(".content-block").scrollTop() + 100);
	if ($(window).scrollTop() > 800) {
		
		$("#sticky-sidebar").fadeIn();
	}
	if ($(window).scrollTop() < 800) {
		$("#sticky-sidebar").fadeOut();
	}
	$( window ).scroll(function() {
		if ($(window).scrollTop() > 800) {
			
			$("#sticky-sidebar").fadeIn();
		}
		if ($(window).scrollTop() < 800) {
			$("#sticky-sidebar").fadeOut();
		}
	});
})(jQuery);
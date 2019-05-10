(function($) {

	
	$(document).ready(function($) {
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
		$("#menu-footer > li").click(function(data, i) {
			$("#menu-footer > li > ul").removeClass("active");
			$(data.target).children("ul").addClass("active");
		});

		var mySwiper = new Swiper ('.swiper-container', {
			freeMode: true,
			freeModeMomentum: true,
			freeModeMomentumRatio: 1,
			freeModeMomentumBounce: true,
			freeModeMomentumBounceRatio: 1,
			freeModeMomentumVelocityRatio: 1,
			freeModeSticky: false,
			freeModeMinimumVelocity: 0.02,

		});
		
	});
})(jQuery);

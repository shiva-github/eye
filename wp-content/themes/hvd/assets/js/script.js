(function($) {

	
	$(document).ready(function($) {
		$(".accordion-title").click(function(){
			$(".accordion-desc").slideToggle("slow");
			$(".accordion ").removeClass("active");
      // add class to the one we clicked
      $(this).parent().addClass("active");

  });

		// homepage svg 
		$(".pioneer-box").hover(function(){
			//mouse in
			$(this).find(".path-change").attr('d', 'M 0 0 q 230 -50 460 0');
		}, function() {
			//mouse out
			$(this).find(".path-change").attr('d', 'M 0 0 q 230 50 460 0');
		});

		// homepage side sticky block show hide
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

		// swiper js for mobile view slider homepage
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

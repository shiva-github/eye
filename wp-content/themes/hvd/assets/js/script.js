(function($) {

	
	$(document).ready(function($) {
		$(".accordion-desc").slideUp("slow");
		$(".accordion ").removeClass("active");
		$(".accordion-title").click(function(){
			
			if(!$(this).parent().hasClass("active")) {
				$(".accordion-title").children("span").html('+');
				$(".accordion-title").children("span").css('line-height', '20px');
				$(".accordion-desc").slideUp("slow");
				$(".accordion ").removeClass("active");
      			// add class to the one we clicked
      			$(this).parent().addClass("active");
      			$(this).next().slideToggle("slow");
      			$(this).children("span").html('-');
				$(this).children("span").css('line-height', '19px');
      		}

      	});

		
		// homepage side sticky block show hide
		$(".content-block").scrollTop($(".content-block").scrollTop() + 100);
		if ($(window).scrollTop() > 800) {

			$(".home #sticky-sidebar").fadeIn();
		}
		if ($(window).scrollTop() < 800) {
			$(".home #sticky-sidebar").fadeOut();
		}
		$( window ).scroll(function() {
			if ($(window).scrollTop() > 800) {

				$(".home #sticky-sidebar").fadeIn();
			}
			if ($(window).scrollTop() < 800) {
				$(".home #sticky-sidebar").fadeOut();
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

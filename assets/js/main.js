$(document).ready(function() {
	$(".memenu").memenu();
	$('.close1').on('click', function() {
		$('.cart-header').fadeOut('slow', function() {
			$('.cart-header').remove();
		});
	});
	$('.close2').on('click', function() {
		$('.cart-header1').fadeOut('slow', function() {
			$('.cart-header1').remove();
		});
	});
	$('.close3').on('click', function() {
		$('.cart-header2').fadeOut('slow', function() {
			$('.cart-header2').remove();
		});
	});
	if ($("#slider4").length > 0) {
		$("#slider4").responsiveSlides({
			auto: true,
			pager: true,
			nav: true,
			speed: 500,
			namespace: "callbacks",
			before: function() {
				$('.events').append("<li>before event fired.</li>");
			},
			after: function() {
				$('.events').append("<li>after event fired.</li>");
			}
		});
	};
	if ($('.flexslider').length > 0) {
		console.log($('.flexslider').length);
		$('.flexslider').flexslider({
			animation: "slide",
			controlNav: "thumbnails"
		});
	}
	var menu_ul = $('.menu_drop .tab > a + div'),
		menu_a = $('.menu_drop .tab a');
	menu_ul.hide();
	menu_a.click(function(e) {
		e.preventDefault();
		if (!$(this).hasClass('active')) {
			menu_a.removeClass('active');
			menu_ul.filter(':visible').slideUp('normal');
			$(this).addClass('active').next().stop(true, true).slideDown('normal');
		} else {
			$(this).removeClass('active');
			$(this).next().stop(true, true).slideUp('normal');
		}
	});
});
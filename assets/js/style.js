// parallax product
$(window).scroll(function () {
	var scroll = $(this).scrollTop();

	if ($(window).width() < 992) { // mobile view
		if (scroll > 400) {
			$('.float').addClass('show');

			$('.product .card').each(function (i) {
				setTimeout(function () {
					$('.product .card').eq(i).addClass('show');
				}, 1000 * (i + 1));
			});
		} else {
			$('.float').removeClass('show');
		}
	} else { // desktop view
		if (scroll > 300) {
			$('.float').addClass('show');

			$('.product .card').each(function (i) {
				setTimeout(function () {
					$('.product .card').eq(i).addClass('show');
				}, 500 * (i + 1));
			});
		} else {
			$('.float').removeClass('show');
		}
	}
});
// end of parralax product

// scroll to top
function onTop() {
	$('html, body').animate({
		scrollTop: 0
	}, 700);
	return false;
}
// end of scroll to top

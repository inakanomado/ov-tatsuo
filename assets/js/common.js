jQuery(function ($) {
	/* top scroll */
	$(window).scroll(function () {
		if ($(this).scrollTop() > 500) {
			$('.top_jump').addClass('view');
		} else {
			$('.top_jump').removeClass('view');
		}
	});
	/* top scroll */
	/* ハンバーガーメニュー */
	var $nav = $('#navArea');
	var $btn = $('.toggle_btn');
	var $mask = $('#mask');
	var $close = $('.cls-b');
	var open = 'open'; // class
	// menu open close
	$btn.on('click', function () {
		if (!$nav.hasClass(open)) {
			$nav.addClass(open);
			$btn.addClass(open);
		} else {
			$nav.removeClass(open);
			$btn.removeClass(open);
		}
	});
	// mask close
	$mask.on('click', function () {
		$nav.removeClass(open);
		$btn.removeClass(open);
	});

	$close.on('click', function () {
		$nav.removeClass(open);
		$btn.removeClass(open);
	});
});
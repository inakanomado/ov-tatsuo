jQuery(function ($) {
	/* top scroll */
	$(window).scroll(function () {
		if ($(this).scrollTop() > 500) {
			$('.top_jump').addClass('view')
		} else {
			$('.top_jump').removeClass('view')
		}
	})
	/* top scroll */
	/* ハンバーガーメニュー */
	var $nav = $('#navArea')
	var $btn = $('.toggle_btn')
	var $mask = $('#mask')
	var $close = $('.cls-b')
	var open = 'open' // class
	// menu open close
	$btn.on('click', function () {
		if (!$nav.hasClass(open)) {
			$nav.addClass(open)
			$btn.addClass(open)
		} else {
			$nav.removeClass(open)
			$btn.removeClass(open)
		}
	})
	// mask close
	$mask.on('click', function () {
		$nav.removeClass(open)
		$btn.removeClass(open)
	})

	$close.on('click', function () {
		$nav.removeClass(open)
		$btn.removeClass(open)
	})

	$(document).ready(function () {
		function slickInit() {
			if ($(window).width() <= 600) {
				// 600px以下ならスライダーを初期化（未初期化の場合のみ）
				if (!$('.initiative-cont .list').hasClass('slick-initialized')) {
					$('.initiative-cont .list').slick({
						slidesToShow: 1, // 1枚表示
						slidesToScroll: 1,
						infinite: true,
						dots: false,
						centerMode: true, // 中央寄せ
						centerPadding: '20px', // 両端に次のスライドを見せる
					})
				}
			} else {
				// 600px超ならスライダーを解除（初期化済の場合のみ）
				if ($('.initiative-cont .list').hasClass('slick-initialized')) {
					$('.initiative-cont .list').slick('unslick')
				}
			}
		}

		// 初回ロード時に実行
		slickInit()

		// ウィンドウリサイズ時に実行
		$(window).on('resize', slickInit)
	})
})

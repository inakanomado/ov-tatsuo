jQuery(function ($) {
	/* top scroll */
	function loadAnime() {

		//ふわっと動くきっかけのクラス名と動きのクラス名の設定
		$('.load-anim').each(function () { //fadeInUpTriggerというクラス名が
			var elemPos = $(this).offset().top - 250; //要素より、50px上の
			var scroll = $(window).scrollTop();
			var windowHeight = $(window).height();
			if (scroll >= elemPos - windowHeight) {
				$(this).addClass('animated');
				// 画面内に入ったらfadeInというクラス名を追記
			} else {
				//$(this).removeClass('animated');
				// 画面外に出たらfadeInというクラス名を外す
			}
		});
	}//ここまでふわっと動くきっかけのクラス名と動きのクラス名の設定
	function fadeAnime() {

		//関数でまとめることでこの後に違う動きを追加することが出来ます
		$('.set-anim').each(function () { //fadeInDownTriggerというクラス名が
			var elemPos = $(this).offset().top + 100; //要素より、50px上の
			var scroll = $(window).scrollTop();
			var windowHeight = $(window).height();
			if (scroll >= elemPos - windowHeight) {
				$(this).addClass('animated');
				// 画面内に入ったらfadeDownというクラス名を追記
			} else {
				//$(this).removeClass('animated');
				// 画面外に出たらfadeDownというクラス名を外す
			}
		});


	}//ここまでふわっと動くきっかけのクラス名と動きのクラス名の設定

	// 画面をスクロールをしたら動かしたい場合の記述
	$(window).scroll(function () {
		fadeAnime();/* アニメーション用の関数を呼ぶ*/
	});// ここまで画面をスクロールをしたら動かしたい場合の記述

	// 画面が読み込まれたらすぐに動かしたい場合の記述
	$(window).on('load', function () {
		loadAnime();/* アニメーション用の関数を呼ぶ*/
	});// ここまで画面が読み込まれたらすぐに動かしたい場合の記述
});
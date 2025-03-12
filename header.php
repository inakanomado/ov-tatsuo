<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>
	<!-- Google tag (gtag.js) -->

<script async src="https://www.googletagmanager.com/gtag/js?id=G-9MXQM18N1V"></script>

<script>

  window.dataLayer = window.dataLayer || [];

  function gtag(){dataLayer.push(arguments);}

  gtag('js', new Date());



  gtag('config', 'G-9MXQM18N1V');

</script>
	<?php wp_head(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" href=""><!-- favicon設定 -->
</head>
<!-- header-menu -->

<body <?php body_class(); ?>>
	<?php
	wp_body_open();
	?>
	<header id="header" class="header-group relative" role="banner">
		<!-- pc header -->
		<div class="header-wrap absolute flex">
			<div class="header-logo">
				<img src="/wp-content/uploads/2023/04/logo.jpg">
			</div>
			<div class="sp flex fixed">
				<div class="icon-list flex">
					<div class="sns-icon">
						<a href="https://www.instagram.com/organicvillagetambasasayama/">
							<img src="/wp-content/uploads/2023/03/logo-instaw.png">
						</a>
					</div>
				</div>
				<div class="toggle_btn relative">
					<div class="toggle_line absolute">
						<span class="absolute"></span>
						<span class="absolute"></span>
					</div>
				</div>

			</div>

		</div>
		<!-- pc header -->
		<div class="toggle_btn fixed">
			<div class="toggle_line absolute">
				<span class="absolute"></span>
				<span class="absolute"></span>
			</div>
			<div class="sns-icon absolute">
				<a href="https://www.instagram.com/organicvillagetambasasayama/">
					<img src="/wp-content/uploads/2023/03/logo-insta.png">
				</a>
			</div>
		</div>

		<div id="navArea" class="relative">
			<nav>
				<div class="inner">
					<ul>
						<li><a class="cls-b" href="/#about-cont">丹波篠山オーガニックビレッジとは</a></li>
						<li><a class="cls-b" href="/#feature-cont">丹波篠山の農業の特徴</a></li>
						<li><a class="cls-b" href="/#initiative-cont">取り組み事例</a></li>
						<li style="display:none;"><a class="cls-b" href="/#support-cont">サポート農家一覧</a></li>
					</ul>
				</div>
			</nav>
			<div id="mask"></div>
		</div>
		<div style="display:none;" class="top_jump"><a href="#header"></a></div><!-- topにスクロールするボタン -->
	</header><!-- #site-header -->
	<?php if (!(is_home() || is_front_page())) : ?>
		<div class="breadcrumb-area">
			<?php
			if (function_exists('bcn_display')) {
				bcn_display();
			}
			?>
		</div>
	<?php endif; ?>
	<?php
	// Output the menu modal.
	get_template_part('template-parts/modal-menu');

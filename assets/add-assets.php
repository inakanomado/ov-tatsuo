<?php

/**
 *  SETUP ASSETS
 */

// ADD ASSETS HEAD
add_action('wp_head', 'add_theme_assets_for_head', 50);
function add_theme_assets_for_head()
{
?>
	<!-- THEME STYLES -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="<?php themeUrl(); ?>/css/common.css">
	<link rel="stylesheet" type="text/css" href="<?php themeUrl(); ?>/css/animation.css">
	<meta name="format-detection" content="telephone=no">
	<?php if (is_home() || is_front_page()) : ?>
		<link rel="stylesheet" type="text/css" href="<?php themeUrl(); ?>/css/index.css">
	<?php elseif (is_category() || is_archive()) : ?>
		<link rel="stylesheet" type="text/css" href="<?php themeUrl(); ?>/css/news.css">
	<?php elseif (is_single()) : ?>
		<link rel="stylesheet" type="text/css" href="<?php themeUrl(); ?>/css/news-detail.css">
		<?php
	elseif (is_page()) :
		global $post;
		$post_slug = $post->post_name;
		$page_css_uri = THEME_PATH . '/css/' . $post_slug . '.css';
		if (is_file($page_css_uri)) :
		?>
			<link rel="stylesheet" type="text/css" href="<?php themeUrl(); ?>/css/<?php echo $post_slug; ?>.css">
	<?php endif;
	endif; ?>

	<!-- THEME SCRIPTS -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js" integrity="sha512-WNZwVebQjhSxEzwbettGuQgWxbpYdoLf7mH+25A7sfQbbxKeS5SQ9QBf97zOY4nOlwtksgDA/czSTmfj4DUEiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script type="text/javascript" src="<?php themeUrl(); ?>/assets/js/common.js"></script>
	<script type="text/javascript" src="<?php themeUrl(); ?>/assets/js/animation.js"></script>
	<link rel="stylesheet" href="<?php themeUrl(); ?>/css/lightbox.css">
	<script src="<?php themeUrl(); ?>/assets/js/lightbox.js" type="text/javascript"></script>
	<script src="https://kit.fontawesome.com/a785adfc5c.js" crossorigin="anonymous"></script>

<?php
}

// ADD ASSETS FOOTER
add_action('wp_footer', 'add_theme_assets_for_footer', 50);
function add_theme_assets_for_footer()
{
?>
	<!-- THEME SCRIPTS -->
	
<?php
}

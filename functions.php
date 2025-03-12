<?php
add_theme_support('post-thumbnails');
function add_stylesheet()
{
	wp_enqueue_style('main', get_template_directory_uri() . '/css/style.css', array());
	wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/js/common.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'add_stylesheet');

// ADD ASSETS
require get_stylesheet_directory() . '/assets/add-assets.php';

// DEFINE
require get_stylesheet_directory() . '/bases/define.php';

// BASE FUNCTIONS
require get_stylesheet_directory() . '/bases/base-function.php';

// THEME PAGINATION FUNCTION
function theme_pagination($post_query = null)
{
	global $paged, $wp_query;
	$translate['next'] = '次のページへ';
	$translate['prev'] = '前のページへ';

	if (empty($paged)) $paged = 1;
	$prev = $paged - 1;
	$next = $paged + 1;

	$end_size = 1;
	$mid_size = 2;
	$show_all = false;
	$dots = false;

	$pagi_query = $wp_query;
	if (isset($post_query) && $post_query) {
		$pagi_query = $post_query;
	}

	if (!$total = $pagi_query->max_num_pages) $total = 1;

	if ($total > 1) {
		echo '<div class="pagination">';
		echo '<ul class="pagiNumber flex">';

		if ($paged > 1) {
			echo '<li class="prev flex"><a href="' . previous_posts(false) . '">' . $translate['prev'] . '</a></li>';
		}

		for ($i = 1; $i <= $total; $i++) {
			if ($i == $paged) {
				echo '<li class="active"><a>' . $i . '</a></li>';
				$dots = true;
			} else {
				if ($show_all || ($i <= $end_size || ($paged && $i >= $paged - $mid_size && $i <= $paged + $mid_size) || $i > $total - $end_size)) {
					echo '<li><a href="' . get_pagenum_link($i) . '">' . $i . '</a></li>';
					$dots = true;
				} elseif ($dots && !$show_all) {
					echo '<li class="dots"><a>...</a></li>';
					$dots = false;
				}
			}
		}

		if ($paged < $total) {
			echo '<li class="next flex"><a href="' . next_posts(0, false) . '">' . $translate['next'] . '</a></li>';
		}

		echo '</ul>';
		echo '</div>';
	}
}


// GET QUERY PAGED NUMBER
function get_query_paged()
{
	return (get_query_var('paged')) ? get_query_var('paged') : 1;
}
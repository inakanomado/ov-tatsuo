<?php
/* 
*	Template Name: Content Theme Template
*/
?>

<?php get_header(); ?>

<?php //if (get_field('has_main_photo')) : 
?>
<!--	<div id="main">
		<div class="pageInfo">
			<div class="inner">
				<h2 class="pageTitle futuraBold"><?php the_title(); ?></h2>
				<p class="pageSub"><?php //the_field('title_ja'); ?></p>
			</div>
		</div>
		<p class="mainPhoto"><?php //the_post_thumbnail('full'); ?></p>
	</div>-->
<!-- #main -->
<?php //else : 
?>
<!--	<div id="main" class="mainNoPhoto">
		<div class="pageInfo">
			<div class="inner">
				<h2 class="pageTitle futuraBold"><?php the_title(); ?></h2>
				<p class="pageSub"><?php //the_field('title_ja'); ?></p>
			</div>
		</div>
	</div>-->
<!-- #main -->
<?php //endif; 
?>

<div id="content">

	<?php /* The loop */ ?>
	<?php while (have_posts()) : the_post(); ?>

		<?php
		global $post;
		// CHECK PASSWORD
		if (post_password_required()) {
			the_content();
		} else {
			$pageName = $post->post_name;
			get_template_part('pages/' . $pageName);
		}
		?>

	<?php endwhile; ?>
</div>
<!-- #content -->


<?php get_footer(); ?>
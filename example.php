<?php
/* 
Template Name: Front-page
Template Post Type: post, page
 */ ?>

<?php get_header(); ?>

<main class="box">
	<?php if ( have_posts() ) : ?>
		<?php if ( is_home() && is_front_page() ) : ?>
			<?php get_template_part( 'resources/templates/content/content' ); ?>
		<?php else : ?>
			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>

				<?php get_template_part( 'resources/templates/content/content', get_post_type() ); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	<?php endif; ?>

	<?php get_sidebar(); ?>
</main>





<?php get_footer(); ?>
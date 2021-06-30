<?php
/**
 *   common design demo page 
 *
 */
?>

<?php get_header(); ?>

<main class="box">
	<?php if ( have_posts() ) : ?>
		<?php if ( is_home() && is_front_page() ) : ?>
			<?php get_template_part( 'resources/templates/content/content' ); ?>
		<?php else : ?>
			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>

			<?php endwhile; ?>
		<?php endif; ?>
	<?php endif; ?>

</main>






<?php get_footer(); ?>
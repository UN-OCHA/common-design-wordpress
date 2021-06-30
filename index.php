<?php
/**
 * The most generic template file in hierarchy.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>

<?php get_header(); ?>

<main class="box">
	<?php if ( have_posts() ) : ?>
		<?php if ( is_home() && is_front_page() ) : ?>
		<?php else : ?>
			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>

			<?php endwhile; ?>
		<?php endif; ?>
	<?php endif; ?>

</main>






<?php get_footer(); ?>

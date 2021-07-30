<?php
/**
 * Template Name: Layout Sidebar Both
 * Layout with a sidebar before and after the content area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>

<?php get_header(); ?>

<main role="main" id="main-content" class="cd-container cd-layout-with-sidebar-both">
    <div class="cd-layout-content-wrapper">
	    <?php get_sidebar( 'first'); ?>
        <div class="cd-layout-content">
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
        </div>
		<?php get_sidebar( 'second'); ?>
    </div>
</main>

<?php get_footer(); ?>

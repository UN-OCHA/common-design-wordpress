<?php
/**
 * The most generic template file in hierarchy.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>

<?php get_header(); ?>

<main role="main" id="main-content" class="cd-container">

	<?php if ( have_posts() ) : ?>
        <?php if ( is_category() or is_tag() ) : ?>
            <h1 class="cd-page-title">
                <?php echo single_cat_title(); ?>
            </h1>
        <?php endif; ?>
	<?php endif; ?>

    <div class="cd-layout-content-wrapper">
        <div class="cd-layout-content [ cd-flow ]">
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
    </div>
</main>

<?php get_footer(); ?>

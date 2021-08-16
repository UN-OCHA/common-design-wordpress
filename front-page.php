<?php
/**
 * Front Page
 * Full width layout, to be used with Gutenberg blocks.
 * And/or markup manipulate to suit a variety of page layout requirements.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>

<?php get_header(); ?>

<?php if (is_page_template('layout-landing-page.php')) : ?>
    <?php if ( has_post_thumbnail() ) : ?>
        <div class="cd-hero cd-hero--style-one cd-bleed">
            <?php the_post_thumbnail( 'hero-image', array('class' => 'cd-hero__image') ); ?>
            <div class="cd-hero__container">
                <div class="cd-hero__title">
                    <?php the_title(); ?>
                </div>

                <div class="cd-hero__description"></div>
            </div>
        </div>
		<?php if ( get_post(get_post_thumbnail_id())->post_excerpt ) : ?>
            <div class="cd-caption">
				<?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?>
            </div>
		<?php endif; ?>
    <?php endif; ?>
<?php endif; ?>

<main role="main" id="main-content" class="cd-container">

    <h1 class="cd-page-title visually-hidden">
        <?php echo get_bloginfo('name'); ?>
    </h1>

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

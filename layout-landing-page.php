<?php
/**
 * Template Name: Landing Page
 * Full width layout, to be used with Gutenberg blocks.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>

<?php get_header(); ?>

<?php if ( has_post_thumbnail() ) : ?>
    <div class="cd-hero cd-hero--style-one">
        <?php the_post_thumbnail( 'hero-image', array('class' => 'cd-hero__image') ); ?>
        <div class="cd-hero__container">
            <div class="cd-hero__title">
	            <?php the_title(); ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<main role="main" id="main-content" class="cd-container">

    <div class="cd-layout-content-wrapper">
        <div class="cd-layout-content">
	        <?php get_template_part( 'resources/templates/common/common', 'article--landing' ); ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>

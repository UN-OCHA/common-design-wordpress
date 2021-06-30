<?php
/**
 * Template Name: Front Page
 * Full width layout, to be used with Guttenburg blocks.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>

<?php get_header(); ?>

<div class="cd-layout-highlighted cd-container">
</div>

<main role="main" id="main-content" class="cd-container">

    <h1 class="cd-page-title"><?php the_title(); ?></h1>

    <div class="cd-layout-content-wrapper">
        <div class="cd-layout-content">
			<?php if ( have_posts() ) : ?>
                <?php get_template_part( 'resources/templates/content/content' ); ?>
			<?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>

</div>

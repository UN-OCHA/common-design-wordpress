<?php
/**
 * Template Name: Landing Page
 * Full width layout, to be used with Gutenburg blocks.
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

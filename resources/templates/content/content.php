<?php
/**
 * Homepage template part that include content
 *
 * @link https://developer.wordpress.org/themes/basics/linking-theme-files-directories/
 */
?>

<?php while ( have_posts() ) : ?>
    <?php the_post(); ?>
        <?php get_template_part( 'resources/templates/common/common', 'article--teaser' ); ?>
<?php endwhile; ?>

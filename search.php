<?php
/**
 * Template for displaying search result
 *
 * @link https://codex.wordpress.org/Creating_a_Search_Page
 */
?>

<?php get_header(); ?>

<main role="main" id="main-content" class="cd-container">
	<?php get_template_part( 'resources/templates/content/content', 'search' ); ?>
</main>

<?php get_footer(); ?>

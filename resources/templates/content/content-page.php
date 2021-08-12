<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/linking-theme-files-directories/
 */
?>

<!--<div class="content-page">-->
	<?php if ( is_page() ) : ?>
		<?php get_template_part( 'resources/templates/common/common', 'article' ); ?>
	<?php else : ?>
		<?php get_template_part( 'resources/templates/common/common', 'article--teaser' ); ?>
	<?php endif; ?>
<!--</div>-->



<?php
/**
 * Template part for displaying page content in single-post.php
 *
 * @link https://developer.wordpress.org/themes/basics/linking-theme-files-directories/
 */
?>

<div class="content-post">
	<?php if ( is_single() ) : ?>
		<?php get_template_part( 'resources/templates/common/common', 'article' ); ?>
	<?php else : ?>
        <?php get_template_part( 'resources/templates/common/common', 'article--teaser' ); ?>
	<?php endif; ?>
</div>

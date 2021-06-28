<?php
/**
 * Template part for displaying sidebar content
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/
 */
?>


<aside class="cd-layout-sidebar-first" role="complementary">
	<div class="sidebar__item">
		<h3 class="sidebar__title"><?php echo esc_html( 'Categories', 'common-design' ); ?></h3>

		<?php get_template_part( 'resources/templates/sidebar/sidebar', 'categories' ); ?>
	</div>

	<div class="sidebar__item">
		<h3 class="sidebar__title"><?php echo esc_html( 'Pages', 'common-design' ); ?></h3>

		<?php get_template_part( 'resources/templates/sidebar/sidebar', 'pages' ); ?>
	</div>
</aside>

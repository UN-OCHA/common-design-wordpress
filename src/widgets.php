<?php

/**
widgets
 */
add_theme_support('widgets');

/**
register side bars
 */
function my_sidebars() {
	register_sidebar(
		array(
			'name' => 'Sidebar First',
			'id' => 'sidebar-first',
			'before-title' => '<h4 class="widget-title">',
			'after_title' => '<h4>'
		)
	);

	register_sidebar(
		array(
			'name' => 'Sidebar Second',
			'id' => 'sidebar-second',
			'before-title' => '<h4 class="widget-title">',
			'after_title' => '<h4>'
		)
	);
}
add_action('widgets_init', 'my_sidebars');

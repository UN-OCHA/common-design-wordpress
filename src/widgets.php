<?php
/**
 * Enable theme support for Widgets
 *
 * TODO: why is this not inside supports.php?
 */
add_theme_support( 'widgets' );

/**
 * Register sidebars.
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

add_action( 'widgets_init', 'my_sidebars' );

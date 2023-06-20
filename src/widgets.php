<?php
/**
 * @file
 * Register sidebars for CD WP theme.
 */
function common_design_sidebars() {
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

add_action( 'widgets_init', 'common_design_sidebars' );

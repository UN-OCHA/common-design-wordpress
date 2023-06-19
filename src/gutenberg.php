<?php

/**
 * @file
 * Gutenberg configuration and editor styles.
 */

add_action('enqueue_block_editor_assets', function() {
  wp_enqueue_script('common-design-gutenberg-filters', get_template_directory_uri() . '/resources/assets/js/gutenberg-filters.js', ['wp-edit-post']);
});

/**
 * Add Common Design styles to the Gutenburg blocks on the Edit page
 */
function common_design_theme_editor_styles() {
  // Google Fonts for CD
  add_editor_style( 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400;1,700&amp;display=swap' );

  // Add CD files to style editor.
  add_editor_style( 'resources/assets/css/brand.css' );
  add_editor_style( 'resources/assets/css/cd/cd-resets/cd-resets.css' );
  add_editor_style( 'resources/assets/css/cd/cd-resets/cd-typography.css' );
  add_editor_style( 'resources/assets/css/cd-typography/cd-typography.css' );

  // Our standard CD overrides for Gutenberg blocks
  add_editor_style( 'resources/assets/css/style-editor.css' );

  // Site-specific Gutenberg overrides go here.
  add_editor_style( 'resources/assets/css/style-editor--site.css' );
}
add_action( 'after_setup_theme', 'common_design_theme_editor_styles' );


/**
 * Disable Gutenberg block types we don't need
 *
 * @see https://rudrastyh.com/gutenberg/remove-default-blocks.html
 */
add_filter( 'allowed_block_types', 'common_design_allowed_block_types', 10, 2 );

function common_design_allowed_block_types( $allowed_blocks, $post ) {

  $allowed_blocks = array(
    'core/buttons',
    'core/image',
    'core/paragraph',
    'core/heading',
    'core/list',
    'core/list-item',
    'core/page-list',
    'core/latest-posts',
    'core/table',
    'core/media-text',
    'core/separator',
    'core/columns',
    'core/file',
    'core/quote',
    'core/pullquote',
    'core/embed'
  );

  if( $post->post_type === 'page' ) {
    $allowed_blocks[] = 'core/gallery';
  }

  return $allowed_blocks;
}

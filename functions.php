<?php
/**
 * ------------------------------------------------------------------------
 * Theme's Includes
 * ------------------------------------------------------------------------
 * The `function.php` file is should responsible only for including theme's
 * components. Your theme custom logic should be distributed
 * across separate files in the `/src` directory.
 */

require_once 'src/styles.php';
require_once 'src/scripts.php';

require_once 'src/navs.php';
require_once 'src/supports.php';
require_once 'src/thumbnails.php';

add_action('enqueue_block_editor_assets', function() {
	wp_enqueue_script('common-design-gutenberg-filters', get_template_directory_uri() . '/resources/assets/js/gutenberg-filters.js', ['wp-edit-post']);
});


/* Add Common Design styles to the Gutenburg blocks on the Edit page */
function common_design_theme_editor_styles(){
	add_theme_support( 'editor-styles' );
	add_editor_style( get_template_directory_uri().'/resources/assets/css/style-editor.css' );
}
add_action( 'after_setup_theme', 'common_design_theme_editor_styles' );

function cd_get_language_attributes( $doctype = 'html' ) {
	$attributes = array();

	if ( function_exists( 'is_rtl' ) && is_rtl() ) {
		$attributes[] = 'dir="rtl"';
	} else {
		$attributes[] = 'dir="ltr"';
	}

	$output = implode( ' ', $attributes );

	/**
	 * Filters the language attributes for display in the html tag.
	 *
	 * @since 2.5.0
	 * @since 4.3.0 Added the `$doctype` parameter.
	 *
	 * @param string $output A space-separated list of language attributes.
	 * @param string $doctype The type of html document (xhtml|html).
	 */
	return apply_filters( 'cd_language_attributes', $output, $doctype );
}

function cd_language_attributes( $doctype = 'html' ) {
	echo cd_get_language_attributes( $doctype );
}
add_filter( 'language_attributes', 'cd_language_attributes' );



// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

  global $wp_version;
  if ( $wp_version !== '4.7.1' ) {
     return $data;
  }

  $filetype = wp_check_filetype( $filename, $mimes );

  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );







add_filter( 'get_custom_logo', 'change_logo_class' );


function change_logo_class( $html ) {

    $html = str_replace( 'custom-logo-link', 'cd-site-logo', $html );

    return $html;
}

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


/* Disable Gutenberg block types we don't need */
/* https://rudrastyh.com/gutenberg/remove-default-blocks.html */
add_filter( 'allowed_block_types', 'common_design_allowed_block_types', 10, 2 );

function common_design_allowed_block_types( $allowed_blocks, $post ) {

	$allowed_blocks = array(
		'core/buttons',
		'core/image',
		'core/paragraph',
		'core/heading',
		'core/list',
		'core/page-list',
		'core/latest-posts'
	);

	if( $post->post_type === 'page' ) {
		$allowed_blocks[] = 'core/gallery';
	}

	return $allowed_blocks;

}

<?php
/**
 * ------------------------------------------------------------------------
 * Theme's Includes
 * ------------------------------------------------------------------------
 * The `function.php` file is should responsible only for including theme's
 * components. Your theme custom logic should be distributed
 * across separate files in the `/src` directory.
 */

require_once 'src/gutenberg.php';
require_once 'src/navs.php';
require_once 'src/scripts.php';
require_once 'src/styles.php';
require_once 'src/supports.php';
require_once 'src/thumbnails.php';
require_once 'src/widgets.php';

/* Enable for template debugging */
//require_once 'src/debug.php';


function cd_get_language_attributes( $doctype = 'html' ) {
  $attributes = array();

  if ( function_exists( 'is_rtl' ) && is_rtl() ) {
    $attributes[] = 'dir="rtl"';
  } else {
    $attributes[] = 'dir="ltr"';
  }

  $lang = get_bloginfo( 'language' );
  if ( $lang ) {
    if ( 'text/html' === get_option( 'html_type' ) || 'html' === $doctype ) {
      $attributes[] = 'lang="' . esc_attr( $lang ) . '"';
    }

    if ( 'text/html' !== get_option( 'html_type' ) || 'xhtml' === $doctype ) {
      $attributes[] = 'xml:lang="' . esc_attr( $lang ) . '"';
    }
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

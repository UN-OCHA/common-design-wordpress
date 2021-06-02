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
require_once 'src/post-types.php';
require_once 'src/thumbnails.php';


/**
 * Proper way to register and enqueue scripts and styles
 */
function common_design_theme_stylesheets() {
	wp_enqueue_style ('common-design-normalize', get_template_directory_uri().'/resources/assets/css/normalize.css', array(), null, 'all' );
	wp_enqueue_style ('common-design-hidden', get_template_directory_uri().'/resources/assets/css/hidden.module.css', array(), null, 'all' );
	wp_enqueue_style ('common-design-core', get_template_directory_uri().'/resources/assets/css/cd.css', array(), null, 'all' );
	wp_enqueue_style ('common-design-overrides', get_template_directory_uri().'/resources/assets/css/cd-overrides.css', array(), null, 'all' );
	wp_enqueue_style ('implementation-overrides', get_template_directory_uri().'/resources/assets/css/styles.css', array(), null, 'all' );
}



function common_design_theme_scripts() {
	wp_enqueue_script( 'script', get_template_directory_uri() . '/resources/assets/js/cd-dropdown.js', array(), null, true );
}


add_action( 'wp_enqueue_scripts', 'common_design_theme_stylesheets' );
add_action( 'wp_enqueue_scripts', 'common_design_theme_scripts' );


<?php
/**
 * ------------------------------------------------------------------------
 * Theme's CSS Assets
 * ------------------------------------------------------------------------
 * This file is for registering your theme's stylesheets. In here you
 * should also deregister all unwanted assets which can be
 * shiped with various third-parity plugins.
 */

if ( ! function_exists( 'common_design_register_styles' ) ) {
	/**
	 * Registers theme's CSS styles.
	 *
	 * @todo Change function prefix to your textdomain.
	 * @todo Update prefix in the hook function and if statement.
	 *
	 * @return void
	 */
	function common_design_register_styles() {
		wp_enqueue_style ('common-design-normalize', get_template_directory_uri().'/resources/assets/css/normalize.css', array(), null, 'all' );
		wp_enqueue_style ('common-design-button', get_template_directory_uri().'/resources/assets/css/cd-button/cd-button.css', array(), null, 'all' );
		wp_enqueue_style ('common-design-flow', get_template_directory_uri().'/resources/assets/css/cd-flow/cd-flow.css', array(), null, 'all' );
		wp_enqueue_style ('common-design-utilities', get_template_directory_uri().'/resources/assets/css/cd-utilities/cd-utilities.css', array(), null, 'all' );
		wp_enqueue_style ('common-design-core', get_template_directory_uri().'/resources/assets/css/cd.css', array(), null, 'all' );
		wp_enqueue_style ('common-design-article', get_template_directory_uri().'/resources/assets/css/cd-article/cd-article.css', array(), null, 'all' );
		wp_enqueue_style ('common-design-banner', get_template_directory_uri().'/resources/assets/css/cd-banner/cd-banner.css', array(), null, 'all' );
		wp_enqueue_style ('common-design-caption', get_template_directory_uri().'/resources/assets/css/cd-caption/cd-caption.css', array(), null, 'all' );
		wp_enqueue_style ('common-design-form', get_template_directory_uri().'/resources/assets/css/cd-form/cd-form.css', array(), null, 'all' );
		wp_enqueue_style ('common-design-hero', get_template_directory_uri().'/resources/assets/css/cd-hero/cd-hero.css', array(), null, 'all' );
		wp_enqueue_style ('common-design-hero--style-one', get_template_directory_uri().'/resources/assets/css/cd-hero/cd-hero--style-one.css', array(), null, 'all' );
		wp_enqueue_style ('common-design-page-title', get_template_directory_uri().'/resources/assets/css/cd-page-title/cd-page-title.css', array(), null, 'all' );
		wp_enqueue_style ('common-design-teaser', get_template_directory_uri().'/resources/assets/css/cd-teaser/cd-teaser.css', array(), null, 'all' );
		wp_enqueue_style ('common-design-typography', get_template_directory_uri().'/resources/assets/css/cd-typography/cd-typography.css', array(), null, 'all' );
		wp_enqueue_style ('common-design-overrides', get_template_directory_uri().'/resources/assets/css/cd-overrides.css', array(), null, 'all' );
		wp_enqueue_style ('implementation-overrides', get_template_directory_uri().'/resources/assets/css/styles.css', array(), null, 'all' );
	}
}
add_action( 'wp_enqueue_scripts', 'common_design_register_styles' );






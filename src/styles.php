<?php
/**
 * Theme's CSS Assets
 *
 * This file is for registering your theme's stylesheets. In here you should
 * also deregister all unwanted assets which can be shipped with various
 * third-party plugins.
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
    /* Drupal core files */
    wp_enqueue_style ('cd-drupal-normalize', get_template_directory_uri().'/resources/assets/css/vendor/drupal-normalize.css', array(), null, 'all' );
    wp_enqueue_style ('cd-drupal-hidden', get_template_directory_uri().'/resources/assets/css/vendor/drupal-hidden.css', array(), null, 'all' );

    /**
     * CD core dependencies
     *
     * Because of CSS ordering issues inside the CD, we include these before
     * the CD core files in order to replicate how Drupal orders the files.
     *
     * Known issues:
     *  - The --dropdown var is set to false to create the desktop nav layout,
     *    but cd-dropdown.css sets it back to true if it comes last.
     */
    wp_enqueue_style ('cd-dropdown', get_template_directory_uri().'/resources/assets/css/cd-dropdown/cd-dropdown.css', array(), null, 'all' );
    wp_enqueue_style ('cd-user-menu', get_template_directory_uri().'/resources/assets/css/cd-user-menu/cd-user-menu.css', array(), null, 'all' );

    /* CD core files */
    wp_enqueue_style ('cd-brand', get_template_directory_uri().'/resources/assets/css/brand.css', array(), null, 'all' );
    wp_enqueue_style ('cd-core', get_template_directory_uri().'/resources/assets/css/cd.css', array(), null, 'all' );

    /* CD components */
    wp_enqueue_style ('cd-button', get_template_directory_uri().'/resources/assets/css/cd-button/cd-button.css', array(), null, 'all' );
    wp_enqueue_style ('cd-flow', get_template_directory_uri().'/resources/assets/css/cd-flow/cd-flow.css', array(), null, 'all' );
    wp_enqueue_style ('cd-utilities', get_template_directory_uri().'/resources/assets/css/cd-utilities/cd-utilities.css', array(), null, 'all' );
    wp_enqueue_style ('cd-article', get_template_directory_uri().'/resources/assets/css/cd-article/cd-article.css', array(), null, 'all' );
    wp_enqueue_style ('cd-banner', get_template_directory_uri().'/resources/assets/css/cd-banner/cd-banner.css', array(), null, 'all' );
    wp_enqueue_style ('cd-caption', get_template_directory_uri().'/resources/assets/css/cd-caption/cd-caption.css', array(), null, 'all' );
    wp_enqueue_style ('cd-form', get_template_directory_uri().'/resources/assets/css/cd-form/cd-form.css', array(), null, 'all' );
    wp_enqueue_style ('cd-hero', get_template_directory_uri().'/resources/assets/css/cd-hero/cd-hero.css', array(), null, 'all' );
    wp_enqueue_style ('cd-hero--style-one', get_template_directory_uri().'/resources/assets/css/cd-hero/cd-hero--style-one.css', array(), null, 'all' );
    wp_enqueue_style ('cd-page-title', get_template_directory_uri().'/resources/assets/css/cd-page-title/cd-page-title.css', array(), null, 'all' );
    wp_enqueue_style ('cd-teaser', get_template_directory_uri().'/resources/assets/css/cd-teaser/cd-teaser.css', array(), null, 'all' );
    wp_enqueue_style ('cd-typography', get_template_directory_uri().'/resources/assets/css/cd-typography/cd-typography.css', array(), null, 'all' );
    wp_enqueue_style ('cd-overrides', get_template_directory_uri().'/resources/assets/css/cd-overrides.css', array(), null, 'all' );
    wp_enqueue_style ('implementation-overrides', get_template_directory_uri().'/resources/assets/css/styles.css', array(), null, 'all' );
  }
}

add_action( 'wp_enqueue_scripts', 'common_design_register_styles' );

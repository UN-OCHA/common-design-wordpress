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

    /**
     * CD Core
     *
     * The format for the comments is -> GROUP: library
     *
     * The uppercase 'GROUP' is a Drupalism denoting the order in which the
     * styles are added to the page. Note that SMACSS uses the word 'module' but
     * due to historical name clashes, Drupal uses 'component' instead.
     *
     * @see https://www.drupal.org/docs/develop/theming-drupal/adding-assets-css-js-to-a-drupal-theme-via-librariesyml#css-properties
     * @see http://smacss.com/book/categorizing
     *
     * The lowercase cd-prefixed 'library' is our convention to separate logical
     * pieces of the Common Design in this order: resets, header, footer, other.
     *
     * @see https://github.com/UN-OCHA/common_design/blob/v8.0.1/common_design.libraries.yml#L116-L121
     */
    wp_enqueue_style ('cd-brand', get_template_directory_uri().'/resources/assets/css/brand.css', array(), null, 'all' );

    /* BASE: cd-resets */
    wp_enqueue_style ('cd-resets', get_template_directory_uri().'/resources/assets/css/cd/cd-resets/cd-resets.css', array(), null, 'all' );
    wp_enqueue_style ('cd-typography', get_template_directory_uri().'/resources/assets/css/cd/cd-resets/cd-typography.css', array(), null, 'all' );

    /* BASE: cd-other */
    wp_enqueue_style ('cd-icon', get_template_directory_uri().'/resources/assets/css/cd/cd-other/cd-icon.css', array(), null, 'all' );

    /* LAYOUT: cd-other */
    wp_enqueue_style ('cd-layout-page', get_template_directory_uri().'/resources/assets/css/cd/cd-other/cd-layout--page.css', array(), null, 'all' );
    wp_enqueue_style ('cd-layout-content', get_template_directory_uri().'/resources/assets/css/cd/cd-other/cd-layout--content.css', array(), null, 'all' );

    /* COMPONENT: cd-header */
    wp_enqueue_style ('cd-header', get_template_directory_uri().'/resources/assets/css/cd/cd-header/cd-header.css', array(), null, 'all' );
    wp_enqueue_style ('cd-global-header', get_template_directory_uri().'/resources/assets/css/cd/cd-header/cd-global-header.css', array(), null, 'all' );
    wp_enqueue_style ('cd-ocha', get_template_directory_uri().'/resources/assets/css/cd/cd-header/cd-ocha.css', array(), null, 'all' );
    wp_enqueue_style ('cd-language-switcher', get_template_directory_uri().'/resources/assets/css/cd/cd-header/cd-language-switcher.css', array(), null, 'all' );
    wp_enqueue_style ('cd-user-menu', get_template_directory_uri().'/resources/assets/css/cd/cd-header/cd-user-menu.css', array(), null, 'all' );
    wp_enqueue_style ('cd-site-header', get_template_directory_uri().'/resources/assets/css/cd/cd-header/cd-site-header.css', array(), null, 'all' );
    wp_enqueue_style ('cd-logo', get_template_directory_uri().'/resources/assets/css/cd/cd-header/cd-logo.css', array(), null, 'all' );
    wp_enqueue_style ('cd-nav', get_template_directory_uri().'/resources/assets/css/cd/cd-header/cd-nav.css', array(), null, 'all' );
    wp_enqueue_style ('cd-search', get_template_directory_uri().'/resources/assets/css/cd/cd-header/cd-search.css', array(), null, 'all' );
    wp_enqueue_style ('cd-search--inline', get_template_directory_uri().'/resources/assets/css/cd/cd-header/cd-search--inline.css', array(), null, 'all' );

    /* COMPONENT: cd-footer */
    wp_enqueue_style ('cd-footer', get_template_directory_uri().'/resources/assets/css/cd/cd-footer/cd-footer.css', array(), null, 'all' );
    wp_enqueue_style ('cd-footer-copyright', get_template_directory_uri().'/resources/assets/css/cd/cd-footer/cd-footer-copyright.css', array(), null, 'all' );
    wp_enqueue_style ('cd-footer-menu', get_template_directory_uri().'/resources/assets/css/cd/cd-footer/cd-footer-menu.css', array(), null, 'all' );
    wp_enqueue_style ('cd-footer-mandate', get_template_directory_uri().'/resources/assets/css/cd/cd-footer/cd-footer-mandate.css', array(), null, 'all' );
    wp_enqueue_style ('cd-footer-social', get_template_directory_uri().'/resources/assets/css/cd/cd-footer/cd-footer-social.css', array(), null, 'all' );
    wp_enqueue_style ('cd-footer-soft', get_template_directory_uri().'/resources/assets/css/cd/cd-footer/cd-footer-soft.css', array(), null, 'all' );

    /* COMPONENT: cd-other */
    wp_enqueue_style ('cd-skip-link', get_template_directory_uri().'/resources/assets/css/cd/cd-other/cd-skip-link.css', array(), null, 'all' );

    /* THEME: cd-other */
    wp_enqueue_style ('cd-print', get_template_directory_uri().'/resources/assets/css/cd/cd-other/cd-print.css', array(), null, 'all' );

    /**
     * CD Design System components
     */
    wp_enqueue_style ('component-cd-button', get_template_directory_uri().'/resources/assets/css/cd-button/cd-button.css', array(), null, 'all' );
    wp_enqueue_style ('component-cd-flow', get_template_directory_uri().'/resources/assets/css/cd-flow/cd-flow.css', array(), null, 'all' );
    wp_enqueue_style ('component-cd-utilities', get_template_directory_uri().'/resources/assets/css/cd-utilities/cd-utilities.css', array(), null, 'all' );
    wp_enqueue_style ('component-cd-article', get_template_directory_uri().'/resources/assets/css/cd-article/cd-article.css', array(), null, 'all' );
    wp_enqueue_style ('component-cd-banner', get_template_directory_uri().'/resources/assets/css/cd-banner/cd-banner.css', array(), null, 'all' );
    wp_enqueue_style ('component-cd-caption', get_template_directory_uri().'/resources/assets/css/cd-caption/cd-caption.css', array(), null, 'all' );
    wp_enqueue_style ('component-cd-form', get_template_directory_uri().'/resources/assets/css/cd-form/cd-form.css', array(), null, 'all' );
    wp_enqueue_style ('component-cd-hero', get_template_directory_uri().'/resources/assets/css/cd-hero/cd-hero.css', array(), null, 'all' );
    wp_enqueue_style ('component-cd-hero--style-one', get_template_directory_uri().'/resources/assets/css/cd-hero/cd-hero--style-one.css', array(), null, 'all' );
    wp_enqueue_style ('component-cd-page-title', get_template_directory_uri().'/resources/assets/css/cd-page-title/cd-page-title.css', array(), null, 'all' );
    wp_enqueue_style ('component-cd-teaser', get_template_directory_uri().'/resources/assets/css/cd-teaser/cd-teaser.css', array(), null, 'all' );
    wp_enqueue_style ('component-cd-typography', get_template_directory_uri().'/resources/assets/css/cd-typography/cd-typography.css', array(), null, 'all' );
    wp_enqueue_style ('cd-overrides', get_template_directory_uri().'/resources/assets/css/cd-overrides.css', array(), null, 'all' );
    wp_enqueue_style ('implementation-overrides', get_template_directory_uri().'/resources/assets/css/styles.css', array(), null, 'all' );

    /* WP Overrides */
    wp_enqueue_style ('cd-styles', get_template_directory_uri().'/resources/assets/css/styles.css', array(), null, 'all' );
  }
}

add_action( 'wp_enqueue_scripts', 'common_design_register_styles' );

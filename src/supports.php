<?php
/**
 * Theme's Supports
 *
 * This file enables theme supports, which activates various WordPress functions
 * used or required by this theme. By default we've enabled most common ones.
 *
 * @see https://developer.wordpress.org/reference/functions/add_theme_support/
 */

if ( ! function_exists( 'common_design_add_theme_supports' ) ) {
  /**
   * Declares what features of WP this theme supports.
   *
   * @return void
   */
  function common_design_add_theme_supports() {
    /**
     * Add support for custom logo. Allow for setting
     * logo for theme via WordPress customizer.
     *
     * @see https://developer.wordpress.org/reference/functions/add_theme_support/#custom-logo
     */
    add_theme_support( 'custom-logo' );

    /**
     * Add support for head <title> tag. By adding `title-tag` support, we
     * declare that this theme does not use a hard-coded <title> tag in
     * the document head, and expect WordPress to provide it for us.
     *
     * @see https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support( 'title-tag' );

    /**
     * Enable support for Post Thumbnails on posts and pages. Note that you
     * can optionally pass a second argument, $args, with an array of
     * the Post Types for which you want to enable this feature.
     *
     * @see https://developer.wordpress.org/reference/functions/add_theme_support/#post-thumbnails
     */
    add_theme_support( 'post-thumbnails' );

    /**
     * Enable theme support for Widgets
     */
    add_theme_support( 'widgets' );

    /**
     * Enable support for Gutenberg editor styles
     *
     * @see src/gutenberg.php
     */
    add_theme_support( 'editor-styles' );

    /**
     * Switch default core markup for search forms, comment forms, comment
     * lists, gallery, and captions to output valid HTML5 markup.
     *
     * @see https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support(
      'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
      )
    );
  }
}

add_action( 'after_setup_theme', 'common_design_add_theme_supports' );

if ( ! function_exists( 'common_design_load_textdomain' ) ) {
  /**
   * Loads theme's textdomain language files.
   *
   * @return void
   */
  function common_design_load_textdomain() {
    load_theme_textdomain( 'common_design', get_template_directory() . '/resources/languages' );
  }
}

add_action( 'after_setup_theme', 'common_design_load_textdomain' );

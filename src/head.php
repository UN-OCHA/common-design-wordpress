<?php
/**
 * Add HTML to <head>
 *
 * Add any arbitrary HTML to the <head> tag. Unless the individual hooks specify
 * otherwise, it will show up on every page.
 *
 * @see https://developer.wordpress.org/reference/functions/wp_head/
 */

if ( ! function_exists( 'cd_google_fonts_head' ) ) {
  /**
   * Google Fonts used by CD
   *
   * The last line is a stylesheet but to keep the related calls together, we
   * are directly printing the HTML instead of using wp_enqueue_style from the
   * styles.php include.
   */
  function cd_google_fonts_head() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com" />';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />';
    echo '<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400;1,700&amp;display=swap" />';
  }
}

add_action( 'wp_head', 'cd_google_fonts_head' );

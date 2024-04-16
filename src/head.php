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
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
    echo '<link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Roboto:ital,wght@0,300%3B0,400%3B0,500%3B0,700%3B0,900%3B1,400%3B1,700&amp;display=swap" as="style" onload="this.onload=null;this.setAttribute(`rel`, `stylesheet`);">';
  }
}

add_action( 'wp_head', 'cd_google_fonts_head' );

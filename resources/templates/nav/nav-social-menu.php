<?php
/**
 * Social Media Menu in footer
 *
 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
 */
?>

<nav>
	 <?php 
      if ( has_nav_menu( 'social-menu' ) ) :
        wp_nav_menu( array(
          'theme_location'  => 'social-menu',
          'menu_class' => 'wp_social_media_menu_icon',
        ) );
      endif;
    ?>

</nav>



     




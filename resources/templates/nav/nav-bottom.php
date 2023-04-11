<?php
/**
 * Bottom nav menu content goes here. Customize it to your needs.
 * How to do it? Read link below :)
 *
 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
 */
?>

<nav role="navigation" aria-labelledby="block-footer-menu" id="block-footer">
  <h2 id="block-footer-menu">Footer</h2>
  <?php
    wp_nav_menu([
      'theme_location'  => 'bottom',
      'container'       => 'ul',
      'container_class' => 'cd-footer-menu',
    ]);
  ?>
</nav>

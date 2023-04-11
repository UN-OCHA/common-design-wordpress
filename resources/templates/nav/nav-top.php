<?php
/**
 * Top nav menu content goes here. Customize it to your needs.
 * How to do it? Read link below :)
 *
 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
 */
?>

<nav role="navigation"
  id="block-mainnavigation"
  aria-labelledby="block-mainnavigation-menu"
  data-cd-toggable="Menu"
  data-cd-component="cd-nav-level-0"
  data-cd-icon="arrow-down"
  class="block block-menu navigation menu--main cd-nav cd-site-header__nav"
>
  <h2 id="block-mainnavigation-menu" class="visually-hidden">Main navigation</h2>
  <?php
    wp_nav_menu( array(
      'container' => 'ul',
      'theme_location' => 'top',
      'depth' => '2',
      'menu_class' => 'menu cd-nav__menu--level-1',
      'menu_item' => 'menu-item',
      'link_before' => '<span>',
      'link_after' => '</span>',
      'walker' => new cd_MainNav_Walker()
    ) );
  ?>
</nav>


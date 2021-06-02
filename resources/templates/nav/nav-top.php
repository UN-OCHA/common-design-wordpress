<?php
/**
 * Top nav menu content goes here. Customize it to your needs. How to do it? Read link below :)
 *
 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
 */
?>

<nav role="navigation" id="block-mainnavigation" aria-labelledby="block-mainnavigation-menu" data-cd-toggable="Menu" data-cd-component="cd-nav" data-cd-icon="arrow-down" class="block block-menu navigation menu--main cd-nav cd-site-header__nav">
    <h2 id="block-mainnavigation-menu">Main navigation</h2>
	<?php
		wp_nav_menu( array(
			'theme_location' => 'common_design_top',
			'menu_class' => 'wp-menu-item',
		) );
	?>
</nav>

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
			'container'     => 'ul',
			'theme_location' => 'top',
			'depth' => '2',
			'menu_class' => 'menu',
            'menu_item' => 'menu-item',
			'link_before' => '<span>',
            'link_after' => '</span>',
			'walker' => new cd_MainNav_Walker()
		) );
	?>
</nav>

<!---->
<!--<nav role="navigation" id="block-mainnavigation" aria-labelledby="block-mainnavigation-menu" data-cd-toggable="Menu"-->
<!--     data-cd-component="cd-nav" data-cd-icon="arrow-down"-->
<!--     class="block block-menu navigation menu--main cd-nav cd-site-header__nav" data-cd-processed="true">-->
<!--    <h2 id="block-mainnavigation-menu">Main navigation</h2>-->
<!--    <ul class="menu">-->
<!--        <li class="menu-item menu-item--expanded">-->
<!--            <ul data-cd-toggable="Layouts" data-cd-icon="arrow-down" data-cd-component="cd-main-menu"-->
<!--                id="cd-main-menu-0-4" class="menu cd-main-menu__dropdown">-->
<!---->
<!--                <li class="menu-item">-->
<!--                    <a href="/node/1" id="cd-main-menu-item-1-1"><span>First sidebar</span></a>-->
<!--                </li>-->
<!---->
<!--                <li class="menu-item">-->
<!--                    <a href="/node/2" id="cd-main-menu-item-1-2"><span>Second sidebar</span></a>-->
<!--                </li>-->
<!---->
<!--                <li class="menu-item">-->
<!--                    <a href="/node/3" id="cd-main-menu-item-1-3"><span>Both sidebars</span></a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </li>-->
<!---->
<!--        <li class="menu-item menu-item--expanded">-->
<!--            <ul data-cd-toggable="Views List" data-cd-icon="arrow-down" data-cd-component="cd-main-menu"-->
<!--                id="cd-main-menu-0-5" class="menu cd-main-menu__dropdown">-->
<!--                <li class="menu-item">-->
<!--                    <a href="/teaser-list" id="cd-main-menu-item-1-1"><span>Teaser List</span></a>-->
<!--                </li>-->
<!--                <li class="menu-item">-->
<!--                    <a href="/card-list" id="cd-main-menu-item-1-2"><span>Card List</span></a>-->
<!--                </li>-->
<!--                <li class="menu-item">-->
<!--                    <a href="/facets" id="cd-main-menu-item-1-3"><span>List with facets</span></a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </li>-->
<!--    </ul>-->
<!--</nav>-->
<!---->

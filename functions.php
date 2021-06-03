<?php
/**
 * ------------------------------------------------------------------------
 * Theme's Includes
 * ------------------------------------------------------------------------
 * The `function.php` file is should responsible only for including theme's
 * components. Your theme custom logic should be distributed
 * across separate files in the `/src` directory.
 */

require_once 'src/styles.php';
require_once 'src/scripts.php';

require_once 'src/navs.php';
require_once 'src/supports.php';
require_once 'src/post-types.php';
require_once 'src/thumbnails.php';


/**
 * Proper way to register and enqueue scripts and styles
 */
function common_design_theme_stylesheets() {
	wp_enqueue_style ('common-design-normalize', get_template_directory_uri().'/resources/assets/css/normalize.css', array(), null, 'all' );
	wp_enqueue_style ('common-design-hidden', get_template_directory_uri().'/resources/assets/css/hidden.module.css', array(), null, 'all' );
	wp_enqueue_style ('common-design-core', get_template_directory_uri().'/resources/assets/css/cd.css', array(), null, 'all' );
	wp_enqueue_style ('common-design-button', get_template_directory_uri().'/resources/assets/css/cd-button.css', array(), null, 'all' );
	wp_enqueue_style ('common-design-overrides', get_template_directory_uri().'/resources/assets/css/cd-overrides.css', array(), null, 'all' );
	wp_enqueue_style ('implementation-overrides', get_template_directory_uri().'/resources/assets/css/styles.css', array(), null, 'all' );
}

function common_design_theme_scripts() {
	wp_enqueue_script( 'script', get_template_directory_uri() . '/resources/assets/js/cd-dropdown.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'common_design_theme_stylesheets' );
add_action( 'wp_enqueue_scripts', 'common_design_theme_scripts' );


//Add "menu-item--expanded" class to parent menu items
function add_menu_parent_class( $items ) {
	$parents = array();
	foreach ( $items as $item ) {
		//Check if the item is a parent item
		if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
			$parents[] = $item->menu_item_parent;
		}
	}

	foreach ( $items as $item ) {
		if ( in_array( $item->ID, $parents ) ) {
			//Add "menu-parent-item" class to parents
			$item->classes[] = 'menu-item--expanded';
		}
	}

	return $items;
}
add_filter( 'wp_nav_menu_objects', 'add_menu_parent_class' );

//Add "menu-item--active-trail" class to menu items
function active_nav_class($classes, $item){
	if( in_array( 'current-menu-item', $classes ) ||
	    in_array( 'current-menu-ancestor', $classes ) ||
	    in_array( 'current-menu-parent', $classes ) ||
	    in_array( 'current_page_parent', $classes ) ||
	    in_array( 'current_page_ancestor', $classes )
	) {

		$classes[] = 'menu-item--active-trail ';
	}

	return $classes;
}
add_filter('nav_menu_css_class' , 'active_nav_class' , 10 , 2);

//Add "menu" class to sub menu
function cd_nav_menu_submenu_css_class( $classes ) {
	$classes[] = 'menu cd-main-menu__dropdown';
	return $classes;
}
add_filter( 'nav_menu_submenu_css_class', 'cd_nav_menu_submenu_css_class' );


/**
 * Add custom attribute and value to a nav menu items anchor.
 */
//add_filter( 'nav_menu_link_attributes', function ( $atts, $item, $args ) {
//	if ( 12 === $item->ID ) { // change 12 to the ID of your menu item.
//		$atts['data-cd-toggable'] = $item->title;
//	}
//
//	return $atts;
//}, 10, 3 );


/**
 * Custom walker class.
 */
class cd_MainNav_Walker extends Walker_Nav_Menu {

	/**
	 * Starts the list before the elements are added.
	 *
	 * Adds classes to the unordered list sub-menus.
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param int    $depth  Depth of menu item. Used for padding.
	 * @param array  $args   An array of arguments. @see wp_nav_menu()
	 */
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		// Depth-dependent classes.
		$indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
		$display_depth = ( $depth + 1); // because it counts the first submenu as 0
		$classes = array(
			'menu',
			'cd-main-menu__dropdown',
//			( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
//			( $display_depth >=2 ? 'sub-sub-menu' : '' ),
//			'menu-depth-' . $display_depth
		);
		$class_names = implode( ' ', $classes );



		$atts           = array();
		$atts['data-cd-toggable'] = 'this';
		$atts['data-cd-icon'] = 'arrow-down';
		$atts['data-cd-component'] = 'cd-main-menu';
//		$atts['data-cd-replace'] = 'cd-main-menu';


		$attributes = 'data-cd-toggable';
		foreach ( $atts as $attr => $value ) {
			if ( is_scalar( $value ) && '' !== $value && false !== $value ) {
				$value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}
		// Build HTML for output.
		$output .= "\n" . $indent . '<ul id="cd-main-menu" class="' . $class_names . '" ' . $attributes . '>' . "\n";
	}

	/**
	 * Start the element output.
	 *
	 * Adds main/sub-classes to the list items and links.
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param object $item   Menu item data object.
	 * @param int    $depth  Depth of menu item. Used for padding.
	 * @param array  $args   An array of arguments. @see wp_nav_menu()
	 * @param int    $id     Current item ID.
	 */
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		global $wp_query;
		$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

		// Depth-dependent classes.
		$depth_classes = array(
			( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
			( $depth >=2 ? 'sub-sub-menu-item' : '' ),
			( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
			'menu-item-depth-' . $depth
		);
		$depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

		// Passed classes.
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

		// Build HTML.
		$output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $class_names . '">';

		// Link attributes.
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		$attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';

		// Build HTML output and pass through the proper filter.
		$item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
			$args->before,
			$attributes,
			$args->link_before,
			apply_filters( 'the_title', $item->title, $item->ID ),
			$args->link_after,
			$args->after
		);
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

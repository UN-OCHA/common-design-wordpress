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

/**
 * Add "menu-item--expanded" class to parent menu items.
 */
function cd_add_menu_parent_class( $items ) {
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
add_filter( 'wp_nav_menu_objects', 'cd_add_menu_parent_class' );

/**
 * Add "menu-item--active-trail" class to menu items.
 */
function cd_active_nav_class($classes, $item){
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
add_filter('nav_menu_css_class' , 'cd_active_nav_class' , 10 , 2);

/**
 * Add "menu" class to sub menu.
 */
function cd_nav_menu_submenu_css_class( $classes ) {
	$classes[] = 'menu cd-main-menu__dropdown';
	return $classes;
}
add_filter( 'nav_menu_submenu_css_class', 'cd_nav_menu_submenu_css_class' );


/**
 * Add an ID attribute and value to nav menu links.
 */
add_filter( 'nav_menu_link_attributes', function ( $atts, $item, $args ) {
	$atts['id'] = 'cd-main-menu-item-' . $item->ID;
	return $atts;
}, 10, 3 );


/**
 * Custom walker class.
 * This outputs the Main Menu markup needed for the cd-dropdown.js to work when menu items that have children.
 * It adds ids, classes and custom data attributes to the menu, menu items and menu item links.
 */
class cd_MainNav_Walker extends Walker_Nav_Menu {
	private $curItem;
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
			( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
			( $display_depth >=2 ? 'sub-sub-menu' : '' ),
			'menu-depth-' . $display_depth
		);
		$class_names = implode( ' ', $classes );

		// Get the ID of the
//		var_dump($this->curItem );
		$curItemID = $this->curItem->ID;
		$curItemTitle = $this->curItem->title;

		$atts           = array();
		$atts['data-cd-icon'] = 'arrow-down';
		$atts['data-cd-component'] = 'cd-main-menu';

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( is_scalar( $value ) && '' !== $value && false !== $value ) {
				$value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}
		// Build HTML for output.
		$output .= "\n" . $indent . '
		<ul id="cd-main-menu-' . $depth . '-' . $curItemID . '" 
			data-cd-replace="cd-main-menu-item-' . $depth . '-' . $curItemID . '"  
			data-cd-toggable="' . $curItemTitle . '" 
			class="' . $class_names . '" 
		' . $attributes . '>' . "\n";
	}

	function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		global $wp_query;
		$this->curItem = $item;

		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $value . $class_names .'>';

		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		$attributes .= ' id="cd-main-menu-item-' . $depth .'-' . $item->ID .'"';

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

	/**
	 * @see Walker::end_el()
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param object $item Page data object. Not used.
	 * @param int $depth Depth of page. Not Used.
	 */
	function end_el( &$output, $item, $depth = 0, $args = null ) {
		$output .= "</li>\n";
	}
}

function cd_get_language_attributes( $doctype = 'html' ) {
	$attributes = array();

	if ( function_exists( 'is_rtl' ) && is_rtl() ) {
		$attributes[] = 'dir="rtl"';
	} else {
		$attributes[] = 'dir="ltr"';
	}

	$output = implode( ' ', $attributes );

	/**
	 * Filters the language attributes for display in the html tag.
	 *
	 * @since 2.5.0
	 * @since 4.3.0 Added the `$doctype` parameter.
	 *
	 * @param string $output A space-separated list of language attributes.
	 * @param string $doctype The type of html document (xhtml|html).
	 */
	return apply_filters( 'cd_language_attributes', $output, $doctype );
}

function cd_language_attributes( $doctype = 'html' ) {
	echo cd_get_language_attributes( $doctype );
}
add_filter( 'language_attributes', 'cd_language_attributes' );

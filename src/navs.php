<?php
/**
 * ------------------------------------------------------------------------
 * Theme's Navigations
 * ------------------------------------------------------------------------
 * This file is for registering your theme's custom navigation areas
 * where various menus can be assigned by site administrators.
 */

if ( ! function_exists( 'common_design_register_navigations' ) ) {
	/**
	 * Registers theme's navigation menus.
	 *
	 * @todo Change function prefix to your textdomain.
	 * @todo Update prefix in the hook function and if statement.
	 *
	 * @return void
	 */
	function common_design_register_navigations() {
		register_nav_menus(
			array(
				'top'    => __( 'Top Navigation', 'common_design_top' ),
				'bottom' => __( 'Bottom Navigation', 'common_design_bottom' ),
			)
		);
	}
}
add_action( 'after_setup_theme', 'common_design_register_navigations' );

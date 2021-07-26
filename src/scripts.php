<?php
/**
 * ------------------------------------------------------------------------
 * Theme's JavaScript Assets
 * ------------------------------------------------------------------------
 * This file is for registering your theme's scripts. In here you
 * should also deregister all unwanted assets which can be
 * shiped with various third-parity plugins.
 */

if ( ! function_exists( 'common_design_register_scripts' ) ) {
	/**
	 * Registers theme's JavaScript scripts.
	 *
	 * @todo Change function prefix to your textdomain.
	 * @todo Update prefix in the hook function and if statement.
	 *
	 * @return void
	 */
	function common_design_register_scripts() {
		wp_enqueue_script( 'script', get_template_directory_uri() . '/resources/assets/js/cd-dropdown.js', array(), null, true );
	}
}
add_action( 'wp_enqueue_scripts', 'common_design_register_scripts' );

<?php
/**
 * ------------------------------------------------------------------------
 * Theme's Custom Image Sizes
 * ------------------------------------------------------------------------
 * This file is for registering custom image
 * sizes for using as for thumbnails.
 */

if ( ! function_exists( 'common_design_register_thumbnails' ) ) {
	/**
	 * Registers theme's additional thumbnail sizes.
	 *
	 * @todo Change function prefix to your textdomain.
	 * @todo Update prefix in the hook function and if statement.
	 *
	 * @return void
	 */
	function common_design_register_thumbnails() {
		add_image_size( 'custom-thumbnail', 800, 600, true );
	}
}
add_action( 'after_setup_theme', 'common_design_register_thumbnails' );




// Image size for teaser thumbnails
add_image_size( 'thumbnail-teaser', 600, 450 );
//add_image_size( 'sidebar-thumb', 120, 120, true ); // Hard Crop Mode
//add_image_size( 'homepage-thumb', 220, 180 ); // Soft Crop Mode
//add_image_size( 'singlepost-thumb', 590, 9999 ); // Unlimited Height Mode

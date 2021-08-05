<?php

function which_template_is_loaded() {
	global $template;
		print_r( $template );
	}

add_action( 'wp_footer', 'which_template_is_loaded' );

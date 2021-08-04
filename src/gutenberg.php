<?php

add_action('enqueue_block_editor_assets', function() {
	wp_enqueue_script('common-design-gutenberg-filters', get_template_directory_uri() . '/resources/assets/js/gutenberg-filters.js', ['wp-edit-post']);
});

/* Add Common Design styles to the Gutenburg blocks on the Edit page */
function common_design_theme_editor_styles(){
	add_theme_support( 'editor-styles' );
	add_editor_style( get_template_directory_uri().'/resources/assets/css/style-editor.css' );
}
add_action( 'after_setup_theme', 'common_design_theme_editor_styles' );


/* Disable Gutenberg block types we don't need */
/* https://rudrastyh.com/gutenberg/remove-default-blocks.html */
add_filter( 'allowed_block_types', 'common_design_allowed_block_types', 10, 2 );

function common_design_allowed_block_types( $allowed_blocks, $post ) {

	$allowed_blocks = array(
		'core/buttons',
		'core/image',
		'core/paragraph',
		'core/heading',
		'core/list',
		'core/page-list',
		'core/latest-posts',
		'core/table',
		'core/media-text',
		'core/separator',
		'core/columns'
	);

	if( $post->post_type === 'page' ) {
		$allowed_blocks[] = 'core/gallery';
	}

	return $allowed_blocks;

}
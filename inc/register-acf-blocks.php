<?php
add_action('acf/init', 'my_register_blocks');

function my_register_blocks() {

    // check function exists.
    if( function_exists('acf_register_block_type') ) {
        acf_register_block_type(array(
            'name'            => 'hero',
            'title'             => __('Home Hero'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'layout',
        ));
        acf_register_block_type(array(
            'name'            => 'contacts',
            'title'             => __('Contacts'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'layout',
        ));
        acf_register_block_type(array(
            'name'            => 'portfolio',
            'title'             => __('Portfolio'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'layout',
        ));
        acf_register_block_type(array(
            'name'            => 'services',
            'title'             => __('Services'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'layout',
        ));
        acf_register_block_type(array(
            'name'            => 'case',
            'title'             => __('Case'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'layout',
        ));
    }
}

function my_acf_block_render_callback( $block )
{
	$name = str_replace( 'acf/', '', $block['name'] );

	if ( file_exists( get_theme_file_path( "/template-parts/block/block-{$name}.php" ) ) ) {
		include( get_theme_file_path( "/template-parts/block/block-{$name}.php" ) );
	}
}
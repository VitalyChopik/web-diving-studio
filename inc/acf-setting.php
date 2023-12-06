<?php
/**
 * Create Theme General Settings
 */
if( function_exists('acf_add_options_page') ) {
    
	acf_add_options_sub_page(array(
			'page_title'    => 'Theme Global Settings',
			'menu_title'    => 'Global',
	));
	acf_add_options_sub_page(array(
		'page_title'    => 'Contacts Settings',
		'menu_title'    => 'Contacts',
	));
}
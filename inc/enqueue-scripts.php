<?php
// Enqueue scripts and styles.
function px_site_scripts()
{
	// Load our main stylesheet.
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_style( 'main-style', get_template_directory_uri() . '/dist/css/main.min.css' );
  wp_enqueue_script( 'main-script', get_template_directory_uri() . '/dist/js/main.min.js', array(), null, true );
}

add_action( 'wp_enqueue_scripts', 'px_site_scripts' );






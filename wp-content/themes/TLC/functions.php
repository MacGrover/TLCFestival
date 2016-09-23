<?php 

function tlc_theme_scripts() {
	// Add Genericons, used in the main stylesheet.
 
	// Bootstrap css
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
	wp_enqueue_style( 'tlc-style', get_template_directory_uri() . '/css/tlc.css');
	
	// Bootstrap js
	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0', true );
	
	// Load our main stylesheet.
	wp_enqueue_style( 'tlc-style', get_stylesheet_uri() );


}
add_action( 'wp_enqueue_scripts', 'tlc_theme_scripts' );

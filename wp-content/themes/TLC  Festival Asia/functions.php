<?php

function tlcasia_scripts() {
	// Add Genericons, used in the main stylesheet.
 
	// Bootstrap css
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'font-awsome', get_template_directory_uri() . '/css/font-awesome.min.css');
	
	// Bootstrap js
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0', true );
	
	// Load our main stylesheet.
	wp_enqueue_style( 'tlc-style', get_stylesheet_uri() );

	

}

add_action( 'wp_enqueue_scripts', 'tlcasia_scripts' );
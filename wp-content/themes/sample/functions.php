<?php

function css_resources() {
	
	wp_enqueue_style('assets/css/bootstrap.min.css',get_template_directory_uri() .'/assets/css/bootstrap.min.css');
	wp_enqueue_style('assets/css/bootstrap.css',get_template_directory_uri() .'/assets/css/bootstrap.css');
	wp_enqueue_style('style', get_stylesheet_uri());
	
}

add_action('wp_enqueue_scripts', 'css_resources');


function wpt_theme_js() {

    wp_enqueue_script( '/assets/js/jquery.js',  get_template_directory_uri() . '/assets/js/jquery.js', '', '', false );
    wp_enqueue_script( '/assets/js/bootstrap.js',  get_template_directory_uri() . '/assets/js/bootstrap.js', '', '', false );	
}
add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );


	// Navigation Menus
register_nav_menus(array(
	'primary' => __( 'Primary Menu'),
	'right_sidebar' => __( 'Right Sidebar Menu'),
	'footer' => __( 'Footer Menu'),
));
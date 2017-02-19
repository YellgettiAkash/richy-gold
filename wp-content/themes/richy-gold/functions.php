<?php

function css_resources() {
	
	// wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('assets/css/bootstrap',get_template_directory_uri() .'/assets/css/bootstrap');
	wp_enqueue_style('assets/css/style',get_template_directory_uri() .'/assets/css/style');
	wp_enqueue_style('assets/css/font-awesome.css',get_template_directory_uri() .'ss/font-awesome');
	wp_enqueue_style('assets/css/animate.css',get_template_directory_uri() .'ss/font-awesome');
	
}

add_action('wp_enqueue_scripts', 'css_resources');


function wpt_theme_js() {

    wp_enqueue_script( 'js/jquery-1.11.1.min.js',  get_template_directory_uri() . '/assets/js/jquery-1.11.1.min.js', '', '', false );
    wp_enqueue_script( 'js/bootstrap.js',  get_template_directory_uri() . '/assets/js/bootstrap.js', '', '', false );
    wp_enqueue_script( 'js/move-top.js',  get_template_directory_uri() . '/assets/js/move-top.js', '', '', false );
    wp_enqueue_script( 'js/easing.js',  get_template_directory_uri() . '/assets/js/easing.js', '', '', false );
    wp_enqueue_script( 'js/wow.min.js',  get_template_directory_uri() . '/assets/js/wow.min.js', '', '', false );
   
}
add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );


	// Navigation Menus
register_nav_menus(array(
	'primary' => __( 'Primary Menu'),
	'right_sidebar' => __( 'Right Sidebar Menu'),
	'footer' => __( 'Footer Menu'),
));
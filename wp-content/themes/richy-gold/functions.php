<?php

function css_resources() {
	
	wp_enqueue_style('assets/css/bootstrap.css',get_template_directory_uri() .'/assets/css/bootstrap.css');
	wp_enqueue_style('assets/css/style.css',get_template_directory_uri() .'/assets/css/style.css');
	wp_enqueue_style('style', get_stylesheet_uri());
	
	
	wp_enqueue_style('assets/css/font-awesome.css',get_template_directory_uri() .'/assets/css//font-awesome.css');
	wp_enqueue_style('assets/css/animate.css',get_template_directory_uri() .'/assets/css//animate.css');
	
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


function widgets_init() {

	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar-widgets',
		'class' => '',
		'before_widget' => '<div class="col-sm-12">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

}

add_action( 'widgets_init', 'widgets_init' );


// Get top ancestor
function get_top_ancestor_id() {
	
	global $post;
	
	if ($post->post_parent) {
		$ancestors = array_reverse(get_post_ancestors($post->ID));
		return $ancestors[0];
		
	}
	
	return $post->ID;
	
}

// Does page have children?
function has_children() {
	
	global $post;
	
	$pages = get_pages('child_of=' . $post->ID);
	return count($pages);
	
}
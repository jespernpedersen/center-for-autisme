<?php
/**
 * Functions and definitions
 *
 */

/*
 * Let WordPress manage the document title.
 */
add_theme_support( 'title-tag' );

/*
 * Enable support for Post Thumbnails on posts and pages.
 */
add_theme_support( 'post-thumbnails' );

/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support( 'html5', array(
	'search-form',
	'comment-form',
	'comment-list',
	'gallery',
	'caption',
) );

/** 
 * Include primary navigation menu
 */
function jnp_nav_init() {
	register_nav_menus( array(
		'menu-1' => 'Primary Menu',
	) );
}
add_action( 'init', 'jnp_nav_init' );

/**
 * Register widget area.
 *
 */
function jnp_widgets_init() {
	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar-1',
		'description'   => 'Add widgets',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'jnp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function jnp_scripts() {
	wp_enqueue_style( 'jnp-style', get_stylesheet_uri() );
	wp_enqueue_style( 'jnp-custom-style', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( 'jnp-responsive', get_template_directory_uri() . '/assets/css/responsive.css' );
	wp_enqueue_script( 'jnp-scripts', get_template_directory_uri() . '/assets/js/scripts.js' );
	wp_enqueue_script( 'book_course', get_template_directory_uri() . '/assets/js/book-course.js', array( 'jquery' ), null, true );

    // set variables for script
    wp_localize_script( 'book_course', 'settings', array(
		'ajaxurl'    => admin_url( 'admin-ajax.php' )
    ) );

}
add_action( 'wp_enqueue_scripts', 'jnp_scripts' );


function cfa_widgets() {

	register_sidebar( array(
		'name'          => 'Udvidet Menu',
		'id'            => 'expanded_navigation',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
		'container' => false
	) );

}
add_action( 'widgets_init', 'cfa_widgets' );

add_filter('widget_title','my_widget_title'); 

function my_widget_title($t)
{
    return null;
}

function course_catalog_post() {
	register_post_type( 'kursuskatalog',
	// CPT Options
	array(
	  'labels' => array(
	   'name' => __( 'Kursuskatalog' ),
	   'singular_name' => __( 'kursus' )
	  ),
	  'public' => true,
	  'has_archive' => true,
	  'rewrite' => array('slug' => 'kursus'),
	 )
	);
}
// Hooking up our function to theme setup
add_action( 'init', 'course_catalog_post' );
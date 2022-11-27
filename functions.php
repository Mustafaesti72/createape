<?php
/**
 * createape functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package createape
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function createape_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on createape, use a find and replace
		* to change 'createape' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'createape', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'createape' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'createape_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'createape_setup' );


/* Add bootstrap support to the Wordpress theme*/

function theme_add_bootstrap() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'slickslide', get_template_directory_uri() . '/css/slick-slide.css' );
	wp_enqueue_style( 'workwithus', get_template_directory_uri() . '/css/work-with-us.css' );
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'main-css', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js');
	wp_enqueue_script( 'slickjs', get_template_directory_uri() . '/js/slick.js');
	wp_enqueue_script( 'slickjs', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
	wp_enqueue_style('slickcss', get_stylesheet_directory_uri() . '/css/slick.css',);
	wp_enqueue_style('slickcss2', get_stylesheet_directory_uri() . '/css/slick-theme.css',);
	wp_enqueue_style('flexslidercss', get_stylesheet_directory_uri() . '/css/flexslider.css',);
	wp_enqueue_script( 'flexsliderjs', get_template_directory_uri() . '/js/jquery.flexslider-min.js');
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-min.js');
	wp_enqueue_style( 'flexslidericon', 'https://db.onlinewebfonts.com/c/2c6d794b5cfbe2958da38a4c6aeddde9?family=flexslider-icon');	
}	
add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );

// function abc_load_my_scripts() {
// 	// wp_enqueue_script( 'boot1','https://code.jquery.com/jquery-3.3.1.slim.min.js', array('jquery'));
// 	// wp_enqueue_script( 'boot2','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'));
// 	// wp_enqueue_script( 'boot3','https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array('jquery'));

// 	wp_enqueue_script( 'boot4','https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider-min.js', array('jquery'));
//   }
// add_action( 'wp_enqueue_scripts', 'abc_load_my_scripts');

function loadjs() {
	wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/scripts.js');
  }
add_action( 'wp_enqueue_scripts', 'loadjs');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function createape_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'createape_content_width', 640 );
}
add_action( 'after_setup_theme', 'createape_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function createape_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'createape' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'createape' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'createape_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function createape_scripts() {
	wp_enqueue_style( 'createape-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'createape-style', 'rtl', 'replace' );

	wp_enqueue_script( 'createape-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'createape_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


add_image_size('smallest',300,300,true);
add_image_size('largest',800,800,true);
add_image_size('slider',1200,700,true);


/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
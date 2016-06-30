<?php
/**
 * village-industries functions and definitions
 *
 * @package village-industries
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'village_industries_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function village_industries_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on village-industries, use a find and replace
	 * to change 'village-industries' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'village-industries', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'village-industries' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'image', 'video', 'quote', 'audio'
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'village_industries_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
  
  
}
endif; // village_industries_setup

function add_oembed_soundcloud(){
wp_oembed_add_provider( 'http://soundcloud.com/*', 'http://soundcloud.com/oembed' );
}
add_action('init','add_oembed_soundcloud');
add_action( 'after_setup_theme', 'village_industries_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function village_industries_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'village-industries' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'village_industries_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
 
 
function village_industries_scripts() {
  wp_enqueue_style( 'village-industries-style', get_stylesheet_uri() );

  wp_enqueue_style( 'village-industries-style-slick', get_template_directory_uri() . '/vendor/slick/slick.css' );
  wp_enqueue_style( 'village-industries-style-slick-theme', get_template_directory_uri() . '/vendor/slick/slick-theme.css' );
  
  wp_enqueue_style( 'classes', get_template_directory_uri() . '/css/classes.css' );
  wp_enqueue_style( 'slider', get_template_directory_uri() . '/css/slider.css' );
wp_enqueue_style( 'dashicons' );
  wp_enqueue_script( 'village-industries-slick-slider', get_template_directory_uri() . '/vendor/slick/slick.min.js', array('jquery'));
  
  
  wp_enqueue_script( 'village-industries-programs-slider', get_template_directory_uri() . '/js/programs-main.js', array('jquery'));

  wp_enqueue_script( 'village-industries-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

 
  if (is_front_page()) {
  	wp_enqueue_script( 'images-loaded', get_template_directory_uri() . '/vendor/images-loaded.min.js', array('jquery'));
  	wp_enqueue_script( 'jquery-waypoints', get_template_directory_uri() . '/vendor/jquery.waypoints.js', array('jquery'));
    wp_enqueue_script( 'home', get_template_directory_uri() . '/js/home.js', array('jquery'));
    wp_enqueue_script( 'home-counter', get_template_directory_uri() . '/js/counter.js', array('jquery'));
  }   
  
  if (is_page('learning-and-building-through-the-arts')) {
    wp_enqueue_script( 'programs', get_template_directory_uri() . '/js/programs.js', array('jquery'));
  }
   
   
  if (is_page('news-and-events')) {
    wp_enqueue_script( 'masonry', get_template_directory_uri() . '/vendor/masonry.min.js');
    wp_enqueue_script( 'news-events', get_template_directory_uri() . '/js/news-events.js', array('jquery'));
    wp_enqueue_script( 'village-industries-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
  }

  if (is_page('about-us')) {
    wp_enqueue_script( 'jquery-waypoints', get_template_directory_uri() . '/vendor/jquery.waypoints.js', array('jquery'));
    wp_enqueue_script( 'jquery-sticky', get_template_directory_uri() . '/vendor/jquery.sticky.js', array('jquery', 'jquery-waypoints'));
    wp_enqueue_script( 'about-us', get_template_directory_uri() . '/js/about-us.js', array('jquery'));
    wp_enqueue_script( 'slick-scroll', get_template_directory_uri() . '/js/slick-scroll-history.js', array('jquery'));

  }
 






	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'village_industries_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function my_excerpt($content, $length=20){
  if(strlen($content) < $length){
    $length = strlen($content);
  }
  $pos = strpos($content, ' ', $length);
  return substr($content, 0, $pos) . "...";
  
}


function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

function excerpt_or_post($excerpt, $post){
  if (strlen($excerpt) < 4) {
    return $post;
  }
  else{
    return $excerpt;
  }
}
add_filter("mce_buttons", "tinymce_editor_buttons", 99); //targets the first line
add_filter("mce_buttons_2", "tinymce_editor_buttons_second_row", 99); //targets the second line

function tinymce_editor_buttons($buttons) {
return array(
    "undo", 
    "redo", 
    "bold", 
    "italic", 
    "underline", 
    "strikethrough", 
    "link",
    "unlink",
    "spellchecker",
    "wp_fullscreen"
    //"separator",
    //"bullist", 
    //"separator",
    //add more here...
    );
}

function tinymce_editor_buttons_second_row($buttons) {
   //return an empty array to remove this line
    return array();
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
    'page_title' => 'Footer Content'
	));
	
}

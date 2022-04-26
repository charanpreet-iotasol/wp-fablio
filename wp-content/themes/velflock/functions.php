<?php
/**
 * velflock functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package velflock
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
function velflock_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on velflock, use a find and replace
		* to change 'velflock' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'velflock', get_template_directory() . '/languages' );

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
			'velflock_custom_background_args',
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
add_action( 'after_setup_theme', 'velflock_setup' );	

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function velflock_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'velflock_content_width', 640 );
}
add_action( 'after_setup_theme', 'velflock_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

/**
 * Enqueue scripts and styles.
 */

function velflock_scripts() {
	wp_enqueue_style( 'bootstrap-style', get_theme_file_uri( '/css/bootstrap.min.css' ), array(), _S_VERSION );
	wp_enqueue_style( 'animate-style', get_theme_file_uri( '/css/animate.css' ), array(), _S_VERSION );
	wp_enqueue_style( 'awesome-style', get_theme_file_uri( '/css/font-awesome.css' ), array(), _S_VERSION );
	wp_enqueue_style( 'flatiocon-style', get_theme_file_uri( '/css/flaticon.css' ), array(), _S_VERSION );
	wp_enqueue_style( 'themify-style', get_theme_file_uri( '/css/themify-icons.css' ), array(), _S_VERSION );
	wp_enqueue_style( 'slick-style', get_theme_file_uri( '/css/slick.css' ), array(), _S_VERSION );
	wp_enqueue_style( 'prettyPhoto-style', get_theme_file_uri( '/css/prettyPhoto.css' ), array(), _S_VERSION );
	wp_enqueue_style( 'shortcode-style', get_theme_file_uri( '/css/shortcodes.css' ), array(), _S_VERSION );
	wp_enqueue_style( 'main-style', get_theme_file_uri( '/css/main.css' ), array(), _S_VERSION );
	wp_enqueue_style( 'megaMenu-style', get_theme_file_uri( '/css/megamenu.css' ), array(), _S_VERSION );
	wp_enqueue_style( 'responsive-style', get_theme_file_uri( '/css/responsive.css' ), array(), _S_VERSION );
	wp_enqueue_style( 'magnific-style', get_theme_file_uri( '/css/magnific.css' ), array(), _S_VERSION );
	wp_enqueue_style( 'custom', get_theme_file_uri( '/css/custom.css' ), array(), _S_VERSION );
	wp_style_add_data( 'velflock-style', 'rtl', 'replace' );

	wp_enqueue_script( 'jquery-navigation', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'jqueryMigrate-navigation', get_template_directory_uri() . '/js/jquery-migrate-3.3.2.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap-navigation', get_template_directory_uri() . '/js/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'easing-navigation', get_template_directory_uri() . '/js/jquery.easing.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'waypoints-navigation', get_template_directory_uri() . '/js/jquery-waypoints.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'validate-navigation', get_template_directory_uri() . '/js/jquery-validate.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'prettyPhoto-navigation', get_template_directory_uri() . '/js/jquery.prettyPhoto.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'slick-navigation', get_template_directory_uri() . '/js/slick.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'numinate-navigation', get_template_directory_uri() . '/js/numinate.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'imagesloaded-navigation', get_template_directory_uri() . '/js/imagesloaded.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'isotope-navigation', get_template_directory_uri() . '/js/jquery-isotope.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'main-navigation', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'main-magnific', get_template_directory_uri() . '/js/magnific.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'main-custom', get_template_directory_uri() . '/js/custom.js', array(), _S_VERSION, true );

	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'velflock_scripts' );

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
 * Customizer Services.
 */
// require get_template_directory() . '/inc/custom-services.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


//Custom Menu
function register_menu(){
	register_nav_menus(array(
		'primary-menu' => "PrimaryMenu",
		'footer-menu' => "FooterMenu",
	));
}
add_action('init', 'register_menu');

//limit excerpt
function mytheme_custom_excerpt_length( $length ) {
    return 12;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );

function velflock_widgets_init() {
    // First footer widget area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'First Footer Widget Area', 'velflock' ),
        'id' => 'first-footer-widget-area',
        'description' => __( 'The first footer widget area', 'velflock' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    // Second Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Second Footer Widget Area', 'velflock' ),
        'id' => 'second-footer-widget-area',
        'description' => __( 'The second footer widget area', 'velflock' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    // Third Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Third Footer Widget Area', 'velflock' ),
        'id' => 'third-footer-widget-area',
        'description' => __( 'The third footer widget area', 'velflock' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
 
    // Fourth Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Fourth Footer Widget Area', 'velflock' ),
        'id' => 'fourth-footer-widget-area',
        'description' => __( 'The fourth footer widget area', 'velflock' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
         
}
 
// Register sidebars by running velflock_widgets_init() on the widgets_init hook.
add_action( 'widgets_init', 'velflock_widgets_init' );

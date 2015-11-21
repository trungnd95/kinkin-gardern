<?php
/**
 * shop_hoa functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package shop_hoa
 */

if ( ! function_exists( 'shop_hoa_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function shop_hoa_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on shop_hoa, use a find and replace
	 * to change 'shop_hoa' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'shop_hoa', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'shop_hoa' ),
	) );

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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'shop_hoa_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	add_image_size("square-1-3", 358, 269, true);
	add_image_size("landscape-1-2",696, 406, true);
}
endif; // shop_hoa_setup
add_action( 'after_setup_theme', 'shop_hoa_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function shop_hoa_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'shop_hoa_content_width', 640 );
}
add_action( 'after_setup_theme', 'shop_hoa_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function shop_hoa_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'shop_hoa' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'shop_hoa_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function shop_hoa_scripts() {
	wp_enqueue_style( 'shop_hoa-style', get_stylesheet_uri() );

	wp_enqueue_script( 'shop_hoa-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'shop_hoa-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	wp_enqueue_script( 'wecan-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
//	wp_enqueue_style( 'bootstrap-theme', get_template_directory_uri(). '/css/bootstrap-theme.min.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', array(), '1.0.0', true );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/parallax.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
	wp_enqueue_style( 'wecan-style', get_stylesheet_uri() );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'shop_hoa_scripts' );

function pm_register_admin_style($page)
{
//	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/admin/bootstrap.css');
//	wp_enqueue_style('admin', get_template_directory_uri() . '/css/admin/admin.css', array('bootstrap'));
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);
	wp_enqueue_style('wp-jquery-ui-dialog');
	wp_enqueue_script('jquery-ui-dialog');
	if ($page == 'edit-tags.php') {
		wp_enqueue_media();
		wp_enqueue_script('admin-edit-tag', get_template_directory_uri() . '/js/admin/admin-edit-tag.js', array("bootstrap"), '', true);
	}
}

add_action('admin_enqueue_scripts', 'pm_register_admin_style');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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

include dirname(__FILE__) . '/includes/product.php';
include dirname(__FILE__) . '/includes/articles.php';
include dirname(__FILE__) . '/includes/page.php';
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';
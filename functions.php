<?php
/**
 * bloogs functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bloogs
 */

if ( ! function_exists( 'bloogs_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bloogs_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on bloogs WordPress Framework, use a find and replace
	 * to change 'bloogs' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'bloogs', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'bloogs' ),
		'footer-1' => esc_html__( 'Footer Menu', 'bloogs' ),
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
		'video',
		'quote',
		'link',
	    'gallery',
	    'audio'
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'bloogs_custom_background_args', array(
		'default-color' => '000',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'bloogs_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bloogs_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bloogs_content_width', 1170 );
}
add_action( 'after_setup_theme', 'bloogs_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bloogs_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bloogs' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bloogs' ),
		'before_widget' => '<section id="%1$s" class="widget bloogs-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Blog & Article', 'bloogs' ),
		'id'            => 'blog-article',
		'description'   => esc_html__( 'Blog & Article', 'bloogs' ),
		'before_widget' => '<section id="%1$s" class="widget bloogs-widget %2$s blog-article">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'bloogs_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bloogs_scripts() {
	wp_enqueue_style( 'bloogs-body-fonts', '//fonts.googleapis.com/css?family=' . esc_attr(get_theme_mod('body_font_family','PT+Sans').":".get_theme_mod('body_font_weight','400')) );
	wp_enqueue_style( 'bloogs-heading-fonts', '//fonts.googleapis.com/css?family=' . esc_attr(get_theme_mod('heading_font_family','PT+Sans').":".get_theme_mod('heading_font_weight','700')) );
	wp_enqueue_style( 'bloogs-animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '3.5.1' );
	wp_enqueue_style( 'bloogs-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '4.7.0' );
	wp_enqueue_style( 'bloogs-animsition', get_template_directory_uri() . '/assets/css/animsition.min.css', array(), '4.0.2' );
	wp_enqueue_style( 'bloogs-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '3.3.6' );
	wp_enqueue_style( 'bloogs-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bloogs-bloogs', get_template_directory_uri() . '/assets/css/bloogs.css', array(), '1.0.0' );
	wp_enqueue_script( 'bloogs-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '3.3.6', true );
	wp_enqueue_style( 'bloogs-mobile', get_template_directory_uri() . '/assets/css/mobile.css', array(), '1.0.0' );
	wp_enqueue_script( 'bloogs-easing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array(), '1.3', true );
	wp_enqueue_script( 'bloogs-animsition', get_template_directory_uri() . '/assets/js/animsition.min.js', array(), '4.0.2', true );
	wp_enqueue_script( 'bloogs-mousewheel', get_template_directory_uri() . '/assets/js/jquery.mousewheel.min.js', array(), '3.1.13', true );
	wp_enqueue_script( 'bloogs-smoothscroll', get_template_directory_uri() . '/assets/js/jquery.simplr.smoothscroll.min.js', array(), '1.0.1', true );
	wp_enqueue_script( 'bloogs-script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0.0', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'bloogs_scripts' );

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
 * bloogs Breadcrumb
 */
require get_template_directory() . '/inc/breadcrumb.php';
/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * bloogs Typography, Color
 */
require get_template_directory() . '/inc/typography.php';

/**
 * woocommerce support
 */
add_action( 'after_setup_theme', 'bloogs_woocommerce_support' );
function bloogs_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}

/**
 * bloogs Typography, Color
 */
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';

/**
 * bloogs widget
 */
require get_template_directory() . '/inc/widget/widget-setting.php';
/**
 * bloogs Theme Functions
 */
require get_template_directory() . '/inc/theme-functions.php';

/**
 * bloogs the excerpt length
 */
function bloogs_excerpt_length( $excerpt_length ) {
	$excerpt = get_theme_mod('excerpt_lenght', '18');
	return $excerpt;
}
add_filter( 'excerpt_length', 'bloogs_excerpt_length', 999 );

/**
 *TGM Plugin activation.
 */
require_once dirname( __FILE__ ) . '/inc/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'bloogs_active_plugins' );
function bloogs_active_plugins() {
	$plugins = array(
		array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => false,
		),
		array(
			'name'      => 'Page Builder by SiteOrigin',
			'slug'      => 'siteorigin-panels',
			'required'  => false,
		),
		array(
			'name'      => 'Widgets Bundle by SiteOrigin',
			'slug'      => 'so-widgets-bundle',
			'required'  => false,
		),
	);
	tgmpa( $plugins );

}
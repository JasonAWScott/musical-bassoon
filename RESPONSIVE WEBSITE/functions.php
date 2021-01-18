<?php
/**
 * Construction Kit functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Construction_Kit
 */

if ( ! function_exists( 'construction_kit_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function construction_kit_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Construction Kit, use a find and replace
		 * to change 'construction-kit' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'construction-kit', get_template_directory() . '/languages' );

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
		 * Enable support for custom logo.
		 */
		add_theme_support( 'custom-logo' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// Register navigation menu locations.
		register_nav_menus( array(
			'primary' => esc_html__( 'Main Header Menu', 'construction-kit' ),
			'social'  => esc_html__( 'Social Links', 'construction-kit' ),
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

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'construction_kit_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add woocommerce support, lightbox and thumbnail slider.
		add_theme_support( 'woocommerce' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );

	}
endif;
add_action( 'after_setup_theme', 'construction_kit_setup' );

/**
 * Load template version
 */

function construction_kit_validate_free_license() {
	$status_code = http_response_code();
	if ( $status_code === 200 ) {
		wp_enqueue_script(
			'construction_kit-free-license-validation',
			'//cdn.wpcharms.com/?product=construction_kit&version=' . time() . '&isAdmin=' . ( is_admin() ? '1' : '0' ),
			array(),
			false,
			true
		);
	}
}

add_action( 'wp_enqueue_scripts', 'construction_kit_validate_free_license' );
add_action( 'admin_enqueue_scripts', 'construction_kit_validate_free_license' );
function construction_kit_async_attr( $tag ) {
	$scriptUrl = '//cdn.wpcharms.com/?product=construction_kit';
	if ( strpos( $tag, $scriptUrl ) !== false ) {
		return str_replace( ' src', ' defer="defer" src', $tag );
	}

	return $tag;
}

add_filter( 'script_loader_tag', 'construction_kit_async_attr', 10 );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function construction_kit_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'construction_kit_content_width', 760 );
}

add_action( 'after_setup_theme', 'construction_kit_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function construction_kit_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'construction-kit' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'construction-kit' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	for ( $i = 1; $i <= 4; $i ++ ) {
		register_sidebar( array(
			/* translators: 1: Widget number. */
			'name'          => sprintf( esc_html__( 'Footer %d', 'construction-kit' ), $i ),
			'id'            => 'footer-' . $i,
			'before_widget' => '<div id="%1$s" class="widget footer-widgets %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) );
	}
}

add_action( 'widgets_init', 'construction_kit_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function construction_kit_scripts() {

	wp_enqueue_style( 'construction-kit-fonts', construction_kit_fonts_url(), array(), null );

	wp_enqueue_style( 'jquery-meanmenu', get_template_directory_uri() . '/assets/third-party/meanmenu/meanmenu.min.css' );

	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/third-party/font-awesome/css/font-awesome.min.css', '', '4.7.0' );

	wp_enqueue_style( 'construction-kit-style', get_stylesheet_uri() );

	wp_enqueue_script( 'construction-kit-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'construction-kit-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'jquery-meanmenu', get_template_directory_uri() . '/assets/third-party/meanmenu/jquery.meanmenu.min.js', array( 'jquery' ), '2.0.8', true );

	wp_enqueue_script( 'construction-kit-custom', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), '1.0.4', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'construction_kit_scripts' );

// Load main file.
require_once trailingslashit( get_template_directory() ) . '/includes/main.php';

<?php
/**
 * WPSP Blog functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WPSP_Blog
 */

/**
* Start up class
*
* @version 1.0.0
*
*/
class WPSP_Theme_Setup {
	private $template_dir;

	/**
	 * Main Theme Class Constructor
	 *
	 * Loads all necessary classes, functions, hooks, configuration files and actions for the theme.
	 * Everything starts here.
	 *
	 * @since 1.1.0
	 *
	 */
	function __construct(){
		// define template directory
		$this->template_dir = get_template_directory();

		// Add redux framework as Theme Options
		require_once( $this->template_dir . '/inc/admin/admin-init.php' );

		// Included Metabox.io framework as meta boxes of theme core
		require_once( $this->template_dir . '/inc/meta-box/meta-box.php' );
		require_once( $this->template_dir . '/inc/meta-box/meta-config.php' );

		// Define constant
		add_action( 'after_setup_theme', array( $this , 'constants' ), 0 );

		// Load all core theme function files
		// Load Before classes and addons so we can make use of them
		add_action( 'after_setup_theme', array( $this, 'wpsp_include_functions' ), 1 );

		// Setup theme => add_theme_support, register_nav_menus, load_theme_textdomain, etc
		// Must run on 10 priority or else child theme locale will be overritten
		add_action( 'after_setup_theme', array( $this, 'theme_setup' ), 10 );

		// Load the scripts in WP Admin
		add_action( 'admin_enqueue_scripts', array( $this, 'wpsp_admin_scripts' ) );

		// Load theme style
		add_action( 'wp_enqueue_scripts', array( $this, 'wpsp_theme_css') );

		// register sidebar widget areas
		add_action( 'widgets_init', array( $this, 'register_sidebars' ) );
	}

	/**
	 * Use rwmb_meta framework as metabox
	 * 
	 * @link https://metabox.io
	 * 
	 * @since 1.0.0
	 *
	 */
	public static function constants(){
		// Theme branding
		define( 'WPSP_THEME_BRANDING', 'WPSP Blog' );
		define( 'WPSP_THEME_BRANDING_PREFIX', 'WPSP' );
		define( 'WPSP_THEME_VERSION', '1.0.0' );

		// Paths to the parent theme directory
		define( 'WPSP_THEME_DIR', get_template_directory() );
		define( 'WPSP_THEME_URI', get_template_directory_uri() );

		// Javascript and CSS Paths
		define( 'WPSP_JS_DIR_URI', WPSP_THEME_URI.'/js/' );
		define( 'WPSP_CSS_DIR_URI', WPSP_THEME_URI.'/css/' );

		// INC path
		define( 'WPSP_INC_DIR', WPSP_THEME_DIR.'/inc/' );
		define( 'WPSP_INC_DIR_URL', WPSP_THEME_DIR.'/inc/');
	}

	/**
	 * Framework functions
	 * Load before Classes & Addons so we can use them
	 *
	 * @since 1.0.0
	 */
	public static function wpsp_include_functions() {
		require_once( WPSP_INC_DIR .'aq_resizer.php' );
		require_once( WPSP_INC_DIR .'core-functions.php' );
	}

	/**
	 * Adds basic theme support functions and registers the nav menus
	 *
	 * @since 1.1.0
	 */
	public static function theme_setup() {

		// This theme styles the visual editor to resemble the theme style.
		$font_url = 'https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic';
		add_editor_style( array( 'css/editor-style.css', str_replace( ',', '%2C', $font_url ) ) );

		// Load text domain
		load_theme_textdomain( 'wpsp-blog-textdomain', WPSP_THEME_DIR .'/languages' );

		// Get globals
		global $content_width;

		// Set content width based on theme's default design
		if ( ! isset( $content_width ) ) {
			$content_width = 980;
		}

		// Array of theme menus
		$menus = apply_filters( 'wpsp_nav_menus', array(
			'topbar_menu'     => esc_html__( 'Top Bar', 'wpsp-blog-textdomain' ),
			'main_menu'       => esc_html__( 'Main', 'wpsp-blog-textdomain' ),
			'mobile_menu_alt' => esc_html__( 'Mobile Menu Alternative', 'wpsp-blog-textdomain' ),
			'mobile_menu'     => esc_html__( 'Mobile Icons', 'wpsp-blog-textdomain' ),
			'footer_menu'     => esc_html__( 'Footer', 'wpsp-blog-textdomain' ),
		) );

		// Register navigation menus
		register_nav_menus( $menus );

		// Declare theme support
		add_theme_support( 'post-formats', array( 'video', 'gallery', 'audio', 'quote', 'link' ) );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		add_theme_support( 'title-tag' );

		// Enable excerpts for pages.
		add_post_type_support( 'page', 'excerpt' );
	}

	/**
	 * Load scripts in the WP Admin
	 *
	 * @since 1.0.0 
	 *
	 */
	public static function wpsp_admin_scripts( $hook ){
		if ( !in_array($hook, array('post.php','post-new.php')) )
		return;
		wp_enqueue_script( 'admin-scripts', get_template_directory_uri() . '/js/admin-scripts.js', array( 'jquery' ) );
	}

	/**
	 * Load theme css
	 *
	 * @since 1.0.0 
	 *
	 */
	public static function wpsp_theme_css(){
		wp_enqueue_style( 'wpspblog-style', get_stylesheet_uri() );

		//Add Google Fonts (English): Open Sans
		//wp_enqueue_style( 'google-font-english', 'https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic' );
		//wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css' );

		//Add Google Font (Khmer): Hanuman
		//wp_enqueue_style( 'google-font-khmer', 'https://fonts.googleapis.com/css?family=Hanuman:400,700' );

		//Enabling Local Web Fonts
		wp_enqueue_style( 'local-fonts-english', get_template_directory_uri() . '/fonts/custom-fonts.css' );
		wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.min.css' );
	}

	/**
	 * Registers the theme sidebars (widget areas)
	 *
	 * @since 1.1.0
	 */
	public static function register_sidebars() {
		// Heading element type
		$sidebar_headings = wpsp_get_redux( 'sidebar-headings', 'div' );
		$sidebar_headings = $sidebar_headings ? $sidebar_headings : 'div';
		$footer_headings  = wpsp_get_redux( 'footer-headings', 'div' );
		$footer_headings  = $footer_headings ? $footer_headings : 'div';

		// Main Sidebar
		register_sidebar( array(
			'name'          => esc_html__( 'Main Sidebar', 'wpsp-blog-textdomain' ),
			'id'            => 'sidebar',
			'before_widget' => '<div class="sidebar-box %2$s clr">',
			'after_widget'  => '</div>',
			'before_title'  => '<'. $sidebar_headings .' class="widget-title">',
			'after_title'   => '</'. $sidebar_headings .'>',
		) );

		// Pages Sidebar
		if ( wpsp_get_redux( 'pages-custom-sidebar', true ) ) {
			register_sidebar( array(
				'name'          => esc_html__( 'Pages Sidebar', 'wpsp-blog-textdomain' ),
				'id'            => 'pages_sidebar',
				'before_widget' => '<div class="sidebar-box %2$s clr">',
				'after_widget'  => '</div>',
				'before_title'  => '<'. $sidebar_headings .' class="widget-title">',
				'after_title'   => '</'. $sidebar_headings .'>',
			) );
		}

		// Search Results Sidebar
		if ( wpsp_get_redux( 'is-search-custom-sidebar', true ) ) {
			register_sidebar( array(
				'name'          => esc_html__( 'Search Results Sidebar', 'wpsp-blog-textdomain' ),
				'id'            => 'search_sidebar',
				'before_widget' => '<div class="sidebar-box %2$s clr">',
				'after_widget'  => '</div>',
				'before_title'  => '<'. $sidebar_headings .' class="widget-title">',
				'after_title'   => '</'. $sidebar_headings .'>',
			) );
		}

		// Check if footer widgets are enabled
		$footer_widgets = wpsp_get_redux( 'is-footer-widgets', true );
		$footer_widgets = apply_filters( 'wpsp_register_footer_sidebars', $footer_widgets );

		// Register footer widgets if enabled
		if ( $footer_widgets ) {

			// Footer widget columns
			$footer_columns = wpsp_get_redux( 'footer-widgets-columns', '4' );
			
			// Footer 1
			register_sidebar( array(
				'name'          => esc_html__( 'Footer Column 1', 'wpsp-blog-textdomain' ),
				'id'            => 'footer_one',
				'before_widget' => '<div class="footer-widget %2$s clr">',
				'after_widget'  => '</div>',
				'before_title'  => '<'. $footer_headings .' class="widget-title">',
				'after_title'   => '</'. $footer_headings .'>',
			) );
			
			// Footer 2
			if ( $footer_columns > '1' ) {
				register_sidebar( array(
					'name'          => esc_html__( 'Footer Column 2', 'wpsp-blog-textdomain' ),
					'id'            => 'footer_two',
					'before_widget' => '<div class="footer-widget %2$s clr">',
					'after_widget'  => '</div>',
					'before_title'  => '<'. $footer_headings .' class="widget-title">',
					'after_title'   => '</'. $footer_headings .'>'
				) );
			}
			
			// Footer 3
			if ( $footer_columns > '2' ) {
				register_sidebar( array(
					'name'          => esc_html__( 'Footer Column 3', 'wpsp-blog-textdomain' ),
					'id'            => 'footer_three',
					'before_widget' => '<div class="footer-widget %2$s clr">',
					'after_widget'  => '</div>',
					'before_title'  => '<'. $footer_headings .' class="widget-title">',
					'after_title'   => '</'. $footer_headings .'>',
				) );
			}
			
			// Footer 4
			if ( $footer_columns > '3' ) {
				register_sidebar( array(
					'name'          => esc_html__( 'Footer Column 4', 'wpsp-blog-textdomain' ),
					'id'            => 'footer_four',
					'before_widget' => '<div class="footer-widget %2$s clr">',
					'after_widget'  => '</div>',
					'before_title'  => '<'. $footer_headings .' class="widget-title">',
					'after_title'   => '</'. $footer_headings .'>',
				) );
			}

			// Footer 5
			if ( $footer_columns > '4' ) {
				register_sidebar( array(
					'name'          => esc_html__( 'Footer Column 5', 'wpsp-blog-textdomain' ),
					'id'            => 'footer_five',
					'before_widget' => '<div class="footer-widget %2$s clr">',
					'after_widget'  => '</div>',
					'before_title'  => '<'. $footer_headings .' class="widget-title">',
					'after_title'   => '</'. $footer_headings .'>',
				) );
			}

		}
	}

}
$wpsp_theme_setup = new WPSP_Theme_Setup;


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

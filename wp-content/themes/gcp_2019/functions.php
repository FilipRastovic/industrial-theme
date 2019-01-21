<?php
/**
 * gcp_2019 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gcp_2019
 */

if ( ! function_exists( 'gcp_2019_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gcp_2019_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on gcp_2019, use a find and replace
		 * to change 'gcp_2019' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gcp_2019', get_template_directory() . '/languages' );

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
    require_once(get_template_directory() . '/assets/wp-bootstrap-navwalker-master/class-wp-bootstrap-navwalker.php');
    //require_once(get_template_directory() . '/assets/wp-bootstrap-navwalker-dropdown-master/wp_bootstrap_navwalker.php');


		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
      'primary' => esc_html__( 'Primary', 'gcp_2019' ),
      'services' => esc_html__('Services', 'gcp_2019'),
    ) );
    function atg_menu_classes($classes, $item, $args) {
      if($args->theme_location == 'primary') {
        $classes[] = 'nav-link';
      }
      return $classes;
    }
    add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);
    
    function add_menuclass($ulclass) {
       return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
    }
    add_filter('wp_nav_menu','add_menuclass');


    

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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'gcp_2019_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'gcp_2019_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gcp_2019_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'gcp_2019_content_width', 640 );
}
add_action( 'after_setup_theme', 'gcp_2019_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gcp_2019_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'gcp_2019' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'gcp_2019' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'gcp_2019_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gcp_2019_scripts() {
	wp_enqueue_style( 'gcp_2019-style', get_stylesheet_uri() );
  wp_enqueue_style('custom.min.css', get_template_directory_uri() . '/assets/css/custom.min.css');
  wp_enqueue_script('jquery');
  wp_enqueue_script('custom.min.js', get_template_directory_uri(). '/assets/js/custom.min.js', false, '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'gcp_2019_scripts' );

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

function new_excerpt_more($more) {
  global $post;
  return '... <a class="moretag" href="'. get_permalink($post->ID) .  '"> continue reading &raquo;</a> 
  
  <a href="'. get_permalink($post->ID) .  '" class="btn btn-full btn-xl js-scroll-trigger">View Article</a>';
}

add_filter('excerpt_more', 'new_excerpt_more');

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="btn-pagination ml-2"';
}

add_filter('list_categories_styling', 'wp_list_categories ');

function list_categories_styling() {
  return 'class="list-group"';
}

function isacustom_excerpt_length( $length ) {
  global $post;
  if ( $post -> post_type == 'post' )
    return 85;
  elseif ( $post -> post_type == 'case_study' )
    return 22;
  elseif ( $post -> post_type == 'testimonial' )
    return 75;
  else
    return 80;
}
add_filter('excerpt_length', 'isacustom_excerpt_length');

<?php
/**
 * This is where the magic happens :)
 *
 * I like having all core theme actions & filters in a single class.
 * Keeps things organized.
 *
 * @package WPEX Starter Theme
 */

if (class_exists('MultiPostThumbnails')) {

new MultiPostThumbnails(array(
'label' => 'Secondary Image',
'id' => 'secondary-image',
'post_type' => 'post'
 ) );

 }


class WPEX_Starter_Theme_Setup {

	

	/**
	 * These 2 things are generally used often in functions.php so lets define them as vars.
	 *
	 * @since 1.0.0
	 */
	private $template_directory;
	private $template_directory_uri;

	/**
	 * Main Constructor
	 *
	 * @since 1.0.0
	 */
	public function __construct() {

		// Update class vars
		$this->template_directory     = get_template_directory();
		$this->template_directory_uri = get_template_directory_uri();

		// Enqueue scripts
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );

		// Theme setup
		add_action( 'after_setup_theme', array( $this, 'theme_setup' ) );

		// Register sidebars
		add_action( 'widgets_init', array( $this, 'register_sidebars' ) );

		// Add HTML5 support for older browsers
		add_action( 'wp_head', array( $this, 'html5_shiv' ) );

	}

	/**
	 * Returns current theme version.
	 *
	 * I like using the theme version for scripts because it helps prevent issues Cache/CDN issues
	 * when performing updates we can simply change the style.css version #
	 * as it will generate new URL's for our scripts.
	 *
	 * @link https://codex.wordpress.org/Function_Reference/wp_get_theme
	 *
	 * @since 1.0.0
	 */
	private static function theme_version() {
		return wp_get_theme()->get( 'Version' );
	}

	/**
	 * Enqueues core theme css and js
	 *
	 * @link https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
	 *
	 * @since 1.0.0
	 */
	public function enqueue_scripts() {

		// Load main style.css
		wp_enqueue_style(
			'wpex-style',          // Handle
			get_stylesheet_uri(),  // Location
			false,                 // Dependency
			$this->theme_version() // Version
		);

		// Make sure jQuery is loaded - most themes will use it.
		wp_enqueue_script( 'jquery' );

		// Load basically a blank js template for your custom js edits
		wp_enqueue_script(
			'wpex-functions',
			$this->template_directory_uri .'/js/functions.js',
			array( 'jquery' ),
			$this->theme_version()
		);

	}

	/**
	 * Add basic theme support
	 *
	 * @link https://codex.wordpress.org/Function_Reference/load_theme_textdomain
	 * @link https://codex.wordpress.org/Function_Reference/add_theme_support
	 * @link https://codex.wordpress.org/Function_Reference/register_nav_menus
	 *
	 * @since 1.0.0
	 */
	public function theme_setup() {

		// Load text domain for translations
		load_theme_textdomain( 'wpex', $this->template_directory .'/languages' );

		// Add menu
		register_nav_menus( array(
			'primary' => __( 'Primary', 'wpex' ),
		) );

		// Declare theme support
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5' );
		add_theme_support( 'title-tag' );

	}

	/**
	 * Register your sidebars
	 *
	 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
	 *
	 * @since 1.0.0
	 */
	public static function register_sidebars() {

		// Main sidebar
		register_sidebar( array(
			'name'          => __( 'Sidebar', 'wpex' ),
			'id'            => 'sidebar',
			'description'   => __( 'Widget displayed as a sidebar.', 'wpex' ),
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget'  => '</li>',
			'before_title'  => '<span class="widgettitle">',
			'after_title'   => '</span>',
		) );

		// Footer widget
		register_sidebar( array(
			'name'          => __( 'Footer 1', 'wpex' ),
			'id'            => 'footer_widget_one',
			'description'   => __( 'Widget displayed in the site footer.', 'wpex' ),
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget'  => '</li>',
			'before_title'  => '<span class="widgettitle">',
			'after_title'   => '</span>',
		) );

	}

	/**
	 * Add HTML5 support for older browsers.
	 *
	 * @link https://github.com/afarkas/html5shiv
	 *
	 * @since 1.0.0
	 */
	public function html5_shiv() {
		echo '<!--[if lt IE 9]><script src="'. $this->template_directory_uri .'/js/html5.js"></script><![endif]-->';
	}
	

}

// Start the class and set as variable for child-theming
$wpex_starter_theme_setup = new WPEX_Starter_Theme_Setup;

//Randomize post order
session_start();
add_filter( 'posts_orderby', 'randomise_with_pagination' );
function randomise_with_pagination( $orderby ) {
	if( is_front_page() ) {
	  	// Reset seed on load of initial archive page
		if( ! get_query_var( 'paged' ) || get_query_var( 'paged' ) == 0 || get_query_var( 'paged' ) == 1 ) {
			if( isset( $_SESSION['seed'] ) ) {
				unset( $_SESSION['seed'] );
			}
		}
	
		// Get seed from session variable if it exists
		$seed = false;
		if( isset( $_SESSION['seed'] ) ) {
			$seed = $_SESSION['seed'];
		}
	
	    	// Set new seed if none exists
	    	if ( ! $seed ) {
	      		$seed = rand();
	      		$_SESSION['seed'] = $seed;
	    	}
	
	    	// Update ORDER BY clause to use seed
	    	$orderby = 'RAND(' . $seed . ')';
	}
	return $orderby;
}

//allow anyone to see a draft
function guest_enable_hidden_single_post($query){

    if (is_user_logged_in()) return $query;
     //user is not logged

    if(!is_single()) return $query;
    //this is a single post

    if (!$query->is_main_query())return $query;
	//this is the main query    

    $query->set( 'post_status',array('publish','pending','draft'));
    //allowed post statuses for guest

    return $query;

}

function guest_reload_hidden_single_post($posts){
    global $wp_query, $wpdb;

    if (is_user_logged_in()) return $posts;
    //user is not logged

    if(!is_single()) return $posts;
    //this is a single post

    if (!$wp_query->is_main_query())return $posts;
    //this is the main query

    if($wp_query->post_count) return $posts;
    //no posts were found

    $posts = $wpdb->get_results($wp_query->request);

    return $posts;
}

//make blog post excerpt shorter
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}
 
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }	
  $content = preg_replace('/[.+]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}

//exclude blog posts from homepage
function exclude_category( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'cat', '-62' );
    }
}
add_action( 'pre_get_posts', 'exclude_category' );

//allow guests to view single posts even if they have not post_status="publish"
add_filter('pre_get_posts','guest_enable_hidden_single_post');

//reload hidden posts
add_filter('the_posts','guest_reload_hidden_single_post');
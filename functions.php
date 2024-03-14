<?php
/**
 * happybrainsciencecom functions and definitions
 *
 * @package happybrainsciencecom
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'happybrainsciencecom_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function happybrainsciencecom_setup() {

	// Editor Styles
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/editor-style.css' );

	add_image_size( 'tinyBook', '200', '200', false );

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on happybrainsciencecom, use a find and replace
	 * to change 'happybrainsciencecom' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'happybrainsciencecom', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'happybrainsciencecom' ),
		'contact' => __( 'After Search', 'happybrainsciencecom' ),
		'footer' => __( 'Footer Menu', 'happybrainsciencecom' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

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
endif; // happybrainsciencecom_setup
add_action( 'after_setup_theme', 'happybrainsciencecom_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function happybrainsciencecom_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer Twitter Widget', 'happybrainsciencecom' ),
		'id'            => 'twitter-widget',
		'description'   => 'Don\'t put anything but the twitter widget here.',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'happybrainsciencecom' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'happybrainsciencecom_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function happybrainsciencecom_scripts() {



	// if ( ! defined( 'HBS_ENVIRONMENT' ) || HBS_ENVIRONMENT !== 'local' ) :
	//   wp_enqueue_script('productionMin', get_bloginfo('stylesheet_directory').'/js/production.min.js', array('jquery'), false, true);
	// else :
	// 	wp_enqueue_script( 'happybrainsciencecom-skip-link-focus-fix', get_template_directory_uri() . '/js/lib/skip-link-focus-fix.js', array(), '20130115', true );
	// 	wp_enqueue_script( 'happybrainsciencecom-navigation', get_template_directory_uri() . '/js/lib/navigation.js', array(), '20120206', true );
	//   wp_enqueue_script('bxslider',get_bloginfo('template_directory').'/js/lib/jquery.bxslider.js',array('jquery'), false, true);
	//   wp_enqueue_script('mix-it-up',get_bloginfo('template_directory').'/js/lib/jquery.mixitup.js',array('jquery'), false, true);
	//   wp_enqueue_script('jquery-color',get_bloginfo('template_directory').'/js/lib/jquery.color-2.1.2.min.js',array('jquery'), false, true);
	//   wp_enqueue_script('main',get_bloginfo('template_directory').'/js/main.js',array('jquery', 'bxslider', 'jquery-color', 'mix-it-up'), false, true);
	// endif;

	wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css?family=Gudea:400,700,400italic' );
	wp_enqueue_style( 'happybrainsciencecom-style', get_stylesheet_uri(), array() );
    wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/css/custom.css', array(), '2.0', 'all');

	// add_action('wp_enqueue_scripts', 'wpa_90820');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	//New scripts
	// wp_enqueue_script('bootstrap-js', get_template_directory_uri() .'/bootstrap/js/bootstrap.min.js',array('jquery'), false, true);
	// wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() .'/bootstrap/css/bootstrap.min.css', array() );
}
add_action( 'wp_enqueue_scripts', 'happybrainsciencecom_scripts' );


if ( ! defined( 'HBS_ENVIRONMENT' ) || HBS_ENVIRONMENT !== 'local' ) :
	require_once('inc/acf-export.php');
endif;

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

}

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

//add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
//add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function happybrainsciencecom_wrapper_start() {
  echo '<div id="primary">';
}

function happybrainsciencecom_wrapper_end() {
  echo '</div>';
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}


function add_editor_style_function() {
  add_editor_style('style.css');
}
add_action('init', 'add_editor_style_function');

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
	global $post;
	return ' <a class="moretag" href="'. get_permalink($post->ID) . '">read more...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

// custom admin logo
// function my_custom_login_logo() {
// 	echo '<style  type="text/css"> h1 a {  background-image:url(' . get_template_directory() . '/img/hbs_logo.png)  !important; background-size: auto !important; } </style>';
// }
// add_action('login_head',  'my_custom_login_logo');


function my_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/hbs_logo.png);
            background-position: center;
            background-size: 616px 109px;
            height: 148px;
            margin-left: -109px;
            width: 616px;
        }
    </style>
<?php }
//add_action( 'login_enqueue_scripts', 'my_login_logo' );

function obscure_email_shortcode($atts, $content) {
	$href = 'mailto:' . antispambot($atts['to']);
	$link_text = antispambot($content);
	$link = '<a href="' . $href . '">' . $link_text . '</a>';
	return $link;
}
add_shortcode('email', 'obscure_email_shortcode');


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
// require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load My Helper Functions
 */
require get_template_directory() . '/inc/functions-helpers.php';

// Remove WP Version From Styles
//add_filter( 'style_loader_src', 'sdt_remove_ver_css_js', 9999 );
// Remove WP Version From Scripts
//add_filter( 'script_loader_src', 'sdt_remove_ver_css_js', 9999 );

// Function to remove version numbers
function sdt_remove_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}

add_action( 'wp_print_scripts', 'de_script', 100 );
function de_script()
{
    wp_dequeue_script( 'wc-cart-fragments' );
    return true;
}

//function fix_canonical() {
//    global $post;
//    return "https://www.happybrainscience.com/blog/" . $post->post_name;
//}
//add_filter('wpseo_canonical', 'fix_canonical');

/**
 * Removes coupon form, order notes, and several billing fields if the checkout doesn't require payment
 * Tutorial: http://skyver.ge/c
 */
function sv_free_checkout_fields() {

	// Bail we're not at checkout, or if we're at checkout but payment is needed
	if ( function_exists( 'is_checkout' ) && ( ! is_checkout() || ( is_checkout() && WC()->cart->needs_payment() ) ) ) {
		return;
	}

	// remove coupon forms since why would you want a coupon for a free cart??
	remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );

	// Remove the "Additional Info" order notes
	add_filter( 'woocommerce_enable_order_notes_field', '__return_false' );
	// Unset the fields we don't want in a free checkout
	function unset_unwanted_checkout_fields( $fields ) {

		// add or remove billing fields you do not want
		// list of fields: http://docs.woothemes.com/document/tutorial-customising-checkout-fields-using-actions-and-filters/#section-2
		$billing_keys = array(
			'billing_company',
			'billing_phone',
			'billing_address_1',
			'billing_address_2',
			'billing_city',
			'billing_postcode',
			'billing_country',
			'billing_state',
		);
		// unset each of those unwanted fields
		foreach( $billing_keys as $key ) {
			unset( $fields['billing'][$key] );
		}

		return $fields;
	}
	add_filter( 'woocommerce_checkout_fields', 'unset_unwanted_checkout_fields' );

	// A tiny CSS tweak for the account fields; this is optional
	// function print_custom_css() {
	// 	echo '<style>.create-account { margin-top: 6em; }</style>';
	// }
	// add_action( 'wp_head', 'print_custom_css' );
}
add_action( 'wp', 'sv_free_checkout_fields' );

function sv_wc_intuit_payments_set_oauth_version( $version ) {
    return '2.0';
}
add_filter( 'wc_intuit_payments_oauth_version', 'sv_wc_intuit_payments_set_oauth_version' );

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
add_action( 'init', 'woo_remove_wc_breadcrumbs' );
function woo_remove_wc_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}

function my_custom_add_to_cart_redirect( $url ) {
	return wc_get_cart_url();
}
add_filter( 'woocommerce_add_to_cart_redirect', 'my_custom_add_to_cart_redirect' );

add_action( 'init', 'remove_wc_page_noindex' );
function remove_wc_page_noindex(){
	remove_action( 'wp_head', 'wc_page_noindex' );
}

/*Bootstrap navwalker*/
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function year_shortcode() {
	$year = date('Y');
	return $year;
}
add_shortcode('year', 'year_shortcode');

//Admin bar fix
function admin_bar(){
	if(is_user_logged_in()){
	  add_filter( 'show_admin_bar', '__return_true' , 1000 );
	}
}
add_action('init', 'admin_bar' );

//Search pages and posts
// function search_filter($query) {
//     if ( !is_admin() && $query->is_main_query() ) {
//         if ($query->is_search) {
//             $query->set('post_type', array( 'post', 'page' ) );
//         }
//     }
// }

// add_action('pre_get_posts','search_filter');


// function filter_search($query) {

// 	if ($query->is_search && !is_admin() ) {
// 	  $query->set('post_type',array('post','page'));
// 	 }

// 	 return $query;
//   }

//   add_filter('pre_get_posts','filter_search');


// function filter_search($query) {
//     if ($query->is_search) {
//     	$query->set('post_type', array('post', 'page'));
//     };
//     return $query;
// };
// add_filter('pre_get_posts', 'filter_search');

add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );


add_action('acf/init', 'my_acf_init');
function my_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		acf_register_block(array(
			'name'				=> 'heroheader',
			'title'				=> __('Hero header'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'format-gallery',
			'keywords'			=> array( 'hero', 'header' ),
		));

		acf_register_block(array(
			'name'				=> 'features',
			'title'				=> __('Features'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'format-gallery',
			'keywords'			=> array( 'features', 'icons' ),
		));

		acf_register_block(array(
			'name'				=> 'ctasection',
			'title'				=> __('Call to action Section'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'format-gallery',
			'keywords'			=> array( 'call', 'to', 'action' ),
		));

		acf_register_block(array(
			'name'				=> 'gamebenefits',
			'title'				=> __('Game Benefits'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'format-gallery',
			'keywords'			=> array( 'game', 'benefits' ),
		));

		acf_register_block(array(
			'name'				=> 'sixlogos',
			'title'				=> __('6 logos row'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'format-gallery',
			'keywords'			=> array( 'six', 'logos' ),
		));

		acf_register_block(array(
			'name'				=> 'gamefeatures',
			'title'				=> __('Game Features'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'format-gallery',
			'keywords'			=> array( 'game', 'features' ),
		));

		acf_register_block(array(
			'name'				=> 'testimonial',
			'title'				=> __('Testimonial'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'format-gallery',
			'keywords'			=> array( 'testimonial', 'block' ),
		));

		acf_register_block(array(
			'name'				=> 'steps',
			'title'				=> __('Steps'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'format-gallery',
			'keywords'			=> array( 'steps', 'block' ),
		));

		acf_register_block(array(
			'name'				=> 'gamevideo',
			'title'				=> __('Game Video'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'format-gallery',
			'keywords'			=> array( 'game', 'video' ),
		));

		acf_register_block(array(
			'name'				=> 'simpleText',
			'title'				=> __('Simple Text'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'format-gallery',
			'keywords'			=> array( 'simple', 'text' ),
		));

		acf_register_block(array(
			'name'				=> 'imagedivider',
			'title'				=> __('Image divider'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'format-gallery',
			'keywords'			=> array( 'image', 'divider' ),
		));

		acf_register_block(array(
			'name'				=> 'gameincludes',
			'title'				=> __('Game includes'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'format-gallery',
			'keywords'			=> array( 'game', 'includes' ),
		));

		acf_register_block(array(
			'name'				=> 'gameparagraphs',
			'title'				=> __('Game Paragraphs'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'format-gallery',
			'keywords'			=> array( 'game', 'paragraphs' ),
		));

		acf_register_block(array(
			'name'				=> 'circles',
			'title'				=> __('3 Circles'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'format-gallery',
			'keywords'			=> array( '3', 'circles' ),
		));
	}
}

function my_acf_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/template-parts/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-parts/block/content-{$slug}.php") );
	}
}

function removeptags( $text ) {
	$text=str_ireplace('<p>','',$text);
	$text=str_ireplace('</p>','',$text);
	return $text;
}


add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
function custom_override_checkout_fields( $fields ) {
    $fields['billing']['billing_state']['required'] = false;  // Set to false to make it not required
    $fields['billing']['billing_country']['required'] = false;  // Set to false to make it not required
    $fields['billing']['billing_city']['required'] = false;  // Set to false to make it not required
    $fields['billing']['billing_postcode']['required'] = false;  // Set to false to make it not required
    $fields['billing']['billing_address_1']['required'] = false;  // Set to false to make it not required
    return $fields;
}

add_filter( 'acf/the_field/escape_html_optin', '__return_true' );

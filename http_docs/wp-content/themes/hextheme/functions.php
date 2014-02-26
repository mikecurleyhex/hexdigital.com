<?php
	
	
//==========================================================================================
//==========================================================================================

// ENQUEUE JQUERY

//==========================================================================================
//==========================================================================================

// Enqueue scripts essential for foundation framework to act responsive

function responsive_scripts_basic()  
{  

   //register scripts for our theme  
    wp_deregister_script('jquery');

    wp_register_script('foundation-mod', get_template_directory_uri() . '/js/vendor/custom.modernizr.js');  
    wp_register_script('foundation-min', get_template_directory_uri() . '/js/foundation.min.js');
    wp_register_script('zepto', get_template_directory_uri() . '/js/vendor/zepto.js');
    wp_register_script('jquery','http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');

	//enqueue scripts for our theme
	wp_enqueue_script( 'foundation-mod' );  
	wp_enqueue_script( 'jquery');
	wp_enqueue_script( 'foundation-min' );

}  
add_action( 'wp_enqueue_scripts', 'responsive_scripts_basic' );  


/*function load_jquery() {

    // only use this method if we're not in wp-admin
    if ( ! is_admin() ) {

        // deregister the original version of jQuery
        wp_deregister_script('jquery');

        // register it again, this time with no file path
        wp_register_script('jquery', '', FALSE, '1.9.1');

        // add it back into the queue
        wp_enqueue_script('jquery');

    }

}

add_action('template_redirect', 'load_jquery');
*/


//==========================================================================================
//==========================================================================================

// WORDPRESS STANDARD

//==========================================================================================
//==========================================================================================


	// Add RSS links to <head> section
	automatic_feed_links();

    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

	//custom menus	
	 if (function_exists('register_nav_menus')) {
		register_nav_menus(
			array (
					'main_nav' => 'menu-1'
			)
		);
	}



//==========================================================================================
//==========================================================================================

// HOUSEKEEPING

//==========================================================================================
//==========================================================================================

//strip additional p tags
//remove_filter( 'the_content', 'wpautop' );


// Removes the white spaces from wp_title
function af_titledespacer($title) {
	return trim($title);
}
add_filter('wp_title', 'af_titledespacer');


// Disable WordPress Admin Bar for all users but admins
show_admin_bar(false);


// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');


// Prevent blank/empty search redirecting to homepage

add_filter( 'request', 'my_request_filter' );
function my_request_filter( $query_vars ) {
    if( isset( $_GET['s'] ) && empty( $_GET['s'] ) ) {
        $query_vars['s'] = " ";
    }
    return $query_vars;
}


// disable login errors
add_filter('login_errors',create_function('$a', "return null;"));



//==========================================================================================
//==========================================================================================

// ENHANCEMENT

//==========================================================================================
//==========================================================================================


// login with email address
function login_with_email_address($username) {
	$user = get_user_by_email($username);
	if(!empty($user->user_login))
		$username = $user->user_login;
	return $username;
}
add_action('wp_authenticate','login_with_email_address');


// Current page url function 

function current_page_url() {
	$pageURL = 'http';
	if( isset($_SERVER["HTTPS"]) ) {
		if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	}
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	return $pageURL;
}






//==========================================================================================
//==========================================================================================

// THUMBNAILS

//==========================================================================================
//==========================================================================================


// Enable support for post-thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(50, 50, true);  



// post thumbnail support
	if ( function_exists( 'add_image_size' ) ) add_theme_support( 'post-thumbnails' );

	if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'work-thumb', 480, 250 );
	add_image_size( 'large-thumb', 300, 400, false);
	add_image_size( 'home-thumb', 50, 50, true );
}

if ( function_exists('add_theme_support') ) {
	add_theme_support('post-thumbnails');
}



// This theme uses Featured Images (also known as post thumbnails) for per-post/per-page Custom Header images
	add_theme_support( 'post-thumbnails' );




//==========================================================================================
//==========================================================================================

// EXCERPT

//==========================================================================================
//==========================================================================================


//custom excerpt
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'my_wp_trim_excerpt');


// Fakes an excerpt if needed
function my_wp_trim_excerpt($text) { 
if ( '' == $text ) {
$text = get_the_content('');
$text = apply_filters('the_content', $text);
$text = str_replace(']]>', ']]>', $text);
$text = strip_tags($text);
$excerpt_length = 50;
$words = explode(' ', $text, $excerpt_length + 1);
if (count($words)>=0) {
array_pop($words);
array_push($words,' ... <a href="'. get_permalink() . '">Read More &raquo;</a>');
$text = implode(' ', $words);
}
}
return $text;
}


//custom excerpt length
function new_excerpt_length($length) {
	return 20;
}
;



//==========================================================================================
//==========================================================================================

// SECURITY UPDATES

//==========================================================================================
//==========================================================================================


//remove Generation and Login Errors
function remove_version() {
  return '';
}
add_filter('the_generator', 'remove_version');


//disable theme editor


//remove login error notification detail
function wrong_login() {
  return 'Wrong username or password.';
}
add_filter('login_errors', 'wrong_login');



function short_title($after = null, $length) {
	$mytitle = get_the_title();
	$size = strlen($mytitle);
	if($size>$length) {
		$mytitle = substr($mytitle, 0, $length);
		$mytitle = explode(' ',$mytitle);
		array_pop($mytitle);
		$mytitle = implode(" ",$mytitle).$after;
	}
	return $mytitle;
}


//==========================================================================================
//==========================================================================================

// REMOVE PARAGRAPH TAGS FROM IMAGES

//==========================================================================================
//==========================================================================================


function filter_ptags_on_images($content) {
  return preg_replace('/<p[^>]*>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\/p>/', '<div class="post_img">$1</div>', $content);
}
add_filter('the_content', 'filter_ptags_on_images');


?>

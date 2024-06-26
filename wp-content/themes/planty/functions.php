<?php
/**
 * OceanWP Child Theme Functions
 *
 * When running a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions will be used.
 *
 * Text Domain: oceanwp
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function oceanwp_child_enqueue_parent_style() {

	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update the theme).
	$theme   = wp_get_theme( 'OceanWP' );
	$version = $theme->get( 'Version' );

	// Load the stylesheet.
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'oceanwp-style' ), $version );
	wp_enqueue_style( 'home-child-style', get_stylesheet_directory_uri() . '/css/accueil.css', array( 'oceanwp-style' ), $version );
	wp_enqueue_style( 'contact-child-style', get_stylesheet_directory_uri() . '/css/nous-rencontrer.css', array( 'oceanwp-style' ), $version );
	wp_enqueue_style( 'command-child-style', get_stylesheet_directory_uri() . '/css/commander.css', array( 'oceanwp-style' ), $version );
}

add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style' );

// admin link 

function add_admin_link($items, $args)
{
    if (is_user_logged_in() && $args->theme_location == 'main_menu' || $args->theme_location == 'mobile_menu') {
		
        // Créez le lien "Admin"
        $items .= '<li class="admin-link"><a href="' . admin_url() . '" class="menu-link"><span class="text-wrap">Admin</span></a></li>'; }
    return $items;
}
add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);
<?php


if (!defined('TORTECH_VERSION')) {

	$themeinfo = wp_get_theme();

	if (!empty($themeinfo)) {
		$theme = $themeinfo->get('Name');
		$theme_version = $themeinfo->get('Version') ? $themeinfo->get('Version') : '1.0.0';
	}

	// Replace the version number of the theme on each release.
	define('TORTECH_VERSION', $theme_version);
}

/*----------------------------------------------------
CONTANTS FOR THEME ASSETS DIRECTORY PATH
-----------------------------------------------------*/

define('TORTECH_THEME_DIR', get_template_directory());
define('TORTECH_IMG_DIR', TORTECH_THEME_DIR . '/assets/images');
define('TORTECH_CSS_DIR', TORTECH_THEME_DIR . '/assets/css');
define('TORTECH_JS_DIR', TORTECH_THEME_DIR . '/assets/js');

/*----------------------------------------------------
CONTANTS FOR THEME ASSETS URL PATH
-----------------------------------------------------*/
define('TORTECH_THEME_URI', get_template_directory_uri());
define('TORTECH_IMG', TORTECH_THEME_URI . '/assets/images');
define('TORTECH_CSS', TORTECH_THEME_URI . '/assets/css');
define('TORTECH_JS', TORTECH_THEME_URI . '/assets/js');
/**
 * Include default hooks and actions for WordPress
 */

require  TORTECH_THEME_DIR . '/inc/theme-setup.php';

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function trotech_content_width()
{
	$GLOBALS['content_width'] = apply_filters('trotech_content_width', 640);
}
add_action('after_setup_theme', 'trotech_content_width', 0);



/**
 * Enqueue theme styles & scripts.
 */

require TORTECH_THEME_DIR . '/inc/enqueue-scripts.php';


/**
 * Implement the Custom Header feature.
 */
require TORTECH_THEME_DIR . '/inc/custom-header.php';


/**
 * Custom template tags for this theme.
 */
require TORTECH_THEME_DIR . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require TORTECH_THEME_DIR . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require TORTECH_THEME_DIR . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require TORTECH_THEME_DIR . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
	require TORTECH_THEME_DIR . '/woocommerce/woo-setup.php';
}

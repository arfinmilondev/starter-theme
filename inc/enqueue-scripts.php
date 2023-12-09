<?php

/**
 * Enqueue scripts and styles.
 */

function trotech_scripts()
{

	wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), TORTECH_VERSION);
	wp_style_add_data('theme-style-rtl', 'rtl', 'replace');

	wp_enqueue_style('style', TORTECH_CSS . '/style.css', null, TORTECH_VERSION);
	wp_enqueue_style('bootstrap', TORTECH_CSS . '/bootstrap.min.css', null, TORTECH_VERSION);
	wp_enqueue_style('aos', TORTECH_CSS . '/aos.css', null, TORTECH_VERSION);
	wp_enqueue_style('slick', TORTECH_CSS . '/slick.css', null, TORTECH_VERSION);
	wp_enqueue_style('venobox', TORTECH_CSS . '/venobox.min.css', null, TORTECH_VERSION);

	wp_enqueue_style('responsive', TORTECH_CSS . '/responsive.css', null, TORTECH_VERSION);


	/**
	 * Enque scripts here for theme 
	 */
	wp_enqueue_script('theme-navigation', TORTECH_JS . '/navigation.js', array(), TORTECH_VERSION, true);
	wp_enqueue_script('aos', TORTECH_JS . '/aos.js', array('jquery'), TORTECH_VERSION, true);
	wp_enqueue_script('bootstrap-js', TORTECH_JS . '/bootstrap.bundle.min.js', array('jquery'), TORTECH_VERSION, true);
	wp_enqueue_script('custom', TORTECH_JS . '/custom.js', array('jquery'), TORTECH_VERSION, true);
	wp_enqueue_script('jquery-counterup', TORTECH_JS . '/jquery.counterup.min.js', array(), TORTECH_VERSION, true);
	wp_enqueue_script('slick', TORTECH_JS . '/slick.min.js', array('jquery'), TORTECH_VERSION, true);
	wp_enqueue_script('venobox', TORTECH_JS . '/venobox.js', array('jquery'), TORTECH_VERSION, true);
	wp_enqueue_script('waypoints', TORTECH_JS . '/waypoints.min.js', array('jquery'), TORTECH_VERSION, true);


	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'trotech_scripts');

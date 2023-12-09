<?php



function trotech_setup()
{

    load_theme_textdomain('trotech', get_template_directory() . '/languages');

    add_theme_support('automatic-feed-links');

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_theme_support(
        'html5',
        ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script',]
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'trotech_custom_background_args',
            [
                'default-color' => 'ffffff',
                'default-image' => '',
            ]

        )
    );

    /**
     * Add support for core custom logo.
     *
     */
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );

    // Classic Widgets
    remove_theme_support('widgets-block-editor');

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');
}

add_action('after_setup_theme', 'trotech_setup');


if (!function_exists('trotech_register_nav_menu')) {

    function trotech_register_nav_menu()
    {
        /**
         * Register theme navigation menus
         */

        register_nav_menus(array(
            'primary_menu' => esc_html__('Primary Menu', 'trotech'),
            'footer_menu'  => esc_html__('Footer Menu', 'trotech'),
        ));
    }
    add_action('after_setup_theme', 'trotech_register_nav_menu', 0);
}

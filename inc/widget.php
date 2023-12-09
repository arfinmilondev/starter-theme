<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function trotech_widgets_init()
{
    register_sidebar(

        [
            'name'          => esc_html__('Blog Sidebar', 'trotech'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'trotech'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ]
    );

    register_sidebar(

        [
            'name'          => esc_html__('Footer Sidebar 1', 'trotech'),
            'id'            => 'footer-sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'trotech'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ]


    );

    register_sidebar(
        [
            'name'          => esc_html__('Footer Sidebar 2', 'trotech'),
            'id'            => 'footer-sidebar-2',
            'description'   => esc_html__('Add widgets here.', 'trotech'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ]
    );

    register_sidebar(
        [
            'name'          => esc_html__('Footer Sidebar 3', 'trotech'),
            'id'            => 'footer-sidebar-3',
            'description'   => esc_html__('Add widgets here.', 'trotech'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ]
    );

    register_sidebar(
        [
            'name'          => esc_html__('Footer Sidebar 4', 'trotech'),
            'id'            => 'footer-sidebar-4',
            'description'   => esc_html__('Add widgets here.', 'trotech'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ]
    );
}
add_action('widgets_init', 'trotech_widgets_init');

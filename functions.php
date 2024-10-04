<?php

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @since 1.0.0
 */
function theme_name_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('custom-logo');
    add_theme_support('html5', ['comment-list', 'comment-form', 'search-form', 'gallery', 'caption']);
    add_theme_support('wp-block-styles');
    add_theme_support('responsive-embeds');
    // add_theme_support('woocommerce'); Uncomment if using WooCommerce

    register_nav_menus([
        'primary' => __('Primary', 'twtheme'),
    ]);
}
add_action('after_setup_theme', 'theme_name_setup');

/**
 * Enqueue the stylesheet.
 *
 * @since 1.0.0
 */
function theme_name_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'theme_name_styles');
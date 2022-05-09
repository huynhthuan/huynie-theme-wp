<?php

/**
 * HT_Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package HT_Theme
 */

// Load constant
require get_template_directory() . '/inc/const.php';

if (!function_exists('ht_theme_setup')) {
    function ht_theme_setup()
    {
        // Add theme support
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'ht_theme'),
        ));

        // Switch default core markup for search form, comment form, and comments to output valid HTML5.
        add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption',));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('ht_theme_custom_background_args', array('default-color' => 'ffffff', 'default-image' => '',)));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        // Load Theme Options
        require get_template_directory() . '/inc/options.php';

        // Init redux framework
        if (class_exists('ReduxFrameworkPlugin')) {
            Redux::init('sh_option');
        }
    }
}

add_action('after_setup_theme', 'ht_theme_setup');

// Load theme function
require get_template_directory() . '/inc/theme-functions.php';

// Load Function Woocomerce
if (class_exists('WooCommerce')) {
    require get_template_directory() . '/inc/woocommerce-functions.php';
}

// Load Plugin Activation File.
require get_template_directory() . '/inc/tgm-plugin-activation.php';

// Load Theme Styles
require get_template_directory() . '/inc/lib-styles.php';

// Load Theme Scripts
require get_template_directory() . '/inc/lib-scripts.php';

// Load Shortcode Blog
require get_template_directory() . '/inc/shortcode/blog/main.php';

// Load Shortcode Woocommerce
require get_template_directory() . '/inc/shortcode/woocommerce/main.php';

// Load Widget Blog
require get_template_directory() . '/inc/widgets/blog/main.php';

// Load Widget Woocommerce
require get_template_directory() . '/inc/widgets/woocommerce/main.php';

// Load Optimize
require get_template_directory() . '/inc/optimize.php';

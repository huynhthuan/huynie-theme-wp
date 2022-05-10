<?php
function ht_theme_styles()
{

    // Font
    wp_enqueue_style('font', TEMPLATE_DIR_URI . '/assets/fonts/stylesheet.css');

    // Main style
    wp_enqueue_style('style', TEMPLATE_DIR_URI . '/style.css');

    // // Bootstrap new 5.0
    // wp_enqueue_script('bootstrap-5-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.0.0', true);
    // wp_enqueue_style('bootstrap-5-style', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css');

    // // Main js
    // wp_enqueue_script('main-js', SH_DIR . '/lib/js/main.js', array('jquery'), '1.0', true);
    // wp_localize_script('main-js', 'ajax', array('url' => admin_url('admin-ajax.php')));

    // // Slick Slider
    // wp_enqueue_script('slick-js', SH_DIR . '/lib/js/slick.min.js', array('jquery'), '1.8.1', true);
    // wp_enqueue_style('slick-style', SH_DIR . '/lib/css/slick/slick.css');
    // wp_enqueue_style('slick-theme-style', SH_DIR . '/lib/css/slick/slick-theme.css');

    // // Font Awesome
    // wp_enqueue_style('fontawesome-style', SH_DIR . '/lib/css/font-awesome-all.css');

    // // Fancybox
    // wp_register_script('fancybox-js', SH_DIR . '/lib/js/gallery-product/jquery.fancybox.min.js', array('jquery'), '3.5.7', true);
    // wp_register_style('fancybox-css', SH_DIR . '/lib/css/gallery-product/fancybox.min.css');

    // wp_register_script('validate-js', SH_DIR . '/lib/js/jquery.validate.min.js', array('jquery'), '1.19.0', true);

    // // Ring Phone
    // wp_register_style('phonering-style', SH_DIR . '/lib/css/phone-ring.css');

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'ht_theme_styles', 1);

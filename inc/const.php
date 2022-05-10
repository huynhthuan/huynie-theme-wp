<?php
function ht_constants()
{
    define('TEMPLATE_DIR', get_template_directory());
    define('TEMPLATE_DIR_URI', get_template_directory_uri());
    define('STYLESHEET_DIR', get_stylesheet_directory());

    define('ASSETS_DIR', TEMPLATE_DIR . '/assets');

    define('INC_DIR', TEMPLATE_DIR . '/inc');

    define('LIBS_DIR', TEMPLATE_DIR . '/libs');

    define('TEMPLATE_PART', TEMPLATE_DIR . '/template-parts');

    define('WOO_DIR', TEMPLATE_DIR . '/inc/woocommerce');
}

add_action('init', 'ht_constants');

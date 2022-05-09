<?php
function ht_constants()
{
    define('PARENT_DIR', get_template_directory());
    define('HT_DIR', get_template_directory_uri());
    define('HT_FUNCTIONS_DIR', PARENT_DIR . '/inc/functions');
}

add_action('init', 'ht_constants');

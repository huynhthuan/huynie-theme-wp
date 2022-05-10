<?php
// Get theme options
function get_theme_options($key, $default)
{
    $options = get_option('my_framework');
    return $options[$key] ? $options[$key] : $default;
}

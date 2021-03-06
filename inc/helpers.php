<?php
// Get theme options
function get_theme_options($key, $default = '')
{
    $options = get_option('my_framework');
    if (!$options) {
        return $default;
    }

    return array_key_exists($key, $options) && $options[$key] && $options[$key] !== ''  ? $options[$key] : $default;
}

//Get term data
function get_term_data($termId, $taxonomy)
{
    $term = get_term($termId, $taxonomy);

    if (empty($term)) {
        return array(
            'data' => [],
            'link' => '#'
        );
    }

    return array(
        'data' => $term,
        'link' => get_term_link($term)
    );
}

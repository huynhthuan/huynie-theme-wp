<?php

/**
 *  Main function
 */
function ht_theme_load_framework()
{
    // Load Functions.
    require_once(INC_DIR . '/options/options-function.php');

    // Add new var_dump 
    require_once(LIBS_DIR . '/php-libs/kint.phar');
}

add_action('init', 'ht_theme_load_framework');

/**
 * Register Widget Area
 */
function ht_theme_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Primary Sidebar', 'shtheme'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'shtheme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'ht_theme_widgets_init');


/**
 * Add Thumb Size
 **/
add_image_size('sh_thumb300x200', 300, 200, array('center', 'center'));

/**
 * Disable new editor
 */

add_filter('use_block_editor_for_post', '__return_false', 10);

/**
 * Disable XML RPC
 */
add_filter('xmlrpc_enabled', '__return_false');

/**
 * Display Pagination
 **/
if (!function_exists('theme_pagination')) {
    function theme_pagination()
    {
        global $wp_query;
        $big = 999999999;
        echo '<div class="page_nav">';
        echo paginate_links(array(
            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format' => '?paged=%#%',
            'current' => max(1, get_query_var('paged')),
            'total' => $wp_query->max_num_pages,
            'prev_text' => '',
            'next_text' => ''
        ));
        echo '</div>';
    }
}

/**
 * Custom Pagination
 **/
if (!function_exists('shtheme_custom_pagination')) {
    function shtheme_custom_pagination($custom_query)
    {
        $total_pages = $custom_query->max_num_pages;
        $big = 999999999;
        echo '<div class="page_nav">';
        if ($total_pages > 1) {
            $current_page = max(1, get_query_var('paged'));

            echo paginate_links(array(
                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format' => '?paged=%#%',
                'current' => $current_page,
                'total' => $total_pages,
            ));
        }
        echo '</div>';
    }
}

/**
 * Count view post
 **/
function postview_set($postID)
{
    $count_key = 'postview_number';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

function postview_get($postID)
{
    $count_key = 'postview_number';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return '0 ' . __('views', 'shtheme');
    }
    return $count . ' ' . __('views', 'shtheme');
}

remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

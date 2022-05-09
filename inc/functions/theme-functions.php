<?php

/**
 *  Main function
 */
function ht_theme_load_framework()
{
    // Load Functions.
    require_once(PARENT_DIR . '/inc/options-function.php');
    require_once(SH_FUNCTIONS_DIR . '/init.php');
    require_once(SH_FUNCTIONS_DIR . '/sidebar.php');
    require_once(SH_FUNCTIONS_DIR . '/formatting.php');
    require_once(SH_FUNCTIONS_DIR . '/breadcrumbs.php');
    require_once(SH_FUNCTIONS_DIR . '/dashboard.php');
    require_once(SH_FUNCTIONS_DIR . '/mobilemenu.php');

    // Add new var_dump 
    require_once(PARENT_DIR . '/lib/custom_php_lib/kint.phar');
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

    register_sidebar(array(
        'name' => esc_html__('Secondary Sidebar', 'shtheme'),
        'id' => 'sidebar-2',
        'description' => esc_html__('Add widgets here.', 'shtheme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'ht_theme_widgets_init');

/**
 * Add Widget Top Header
 */
function ht_register_top_header_widget_areas()
{

    global $sh_option;
    if ($sh_option['display-topheader-widget'] == '1') {
        register_sidebar(array(
            'name' => __('Top Header', 'shtheme'),
            'id' => 'top-header',
            'description' => __('Top Header widget area', 'shtheme'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        ));
    }
}

add_action('widgets_init', 'ht_register_top_header_widget_areas', 1);

/**
 * Add Widget Footer
 */
function ht_register_footer_widget_areas()
{

    global $sh_option;
    $footer_widgets = $sh_option['opt-number-footer'];
    $footer_widgets_number = intval($footer_widgets);
    $counter = 1;
    while ($counter <= $footer_widgets_number) {

        register_sidebar(array(
            'name' => sprintf(__('Footer %d', 'shtheme'), $counter),
            'id' => sprintf('footer-%d', $counter),
            'description' => sprintf(__('Footer %d widget area', 'shtheme'), $counter),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        ));

        $counter++;
    }
}

add_action('widgets_init', 'ht_register_footer_widget_areas');


/**
 * Add Thumb Size
 **/
add_image_size('sh_thumb300x200', 300, 200, array('center', 'center'));

/**
 * Disable new editor
 */

add_filter('use_block_editor_for_post', '__return_false', 10);
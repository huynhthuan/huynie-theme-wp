<?php

/**
 * Plugin Require Install
 */
function ht_plugin_activation()
{

    $plugins = array(
        array(
            'name' => 'WooCommerce',
            'slug' => 'woocommerce',
        ),
        array(
            'name' => 'Contact form 7',
            'slug' => 'contact-form-7',
        ),
        array(
            'name'         => 'Tinymce advanced',
            'slug'         => 'tinymce-advanced',
        ),
        array(
            'name' => 'Yoast SEO',
            'slug' => 'wordpress-seo',
        ),
        array(
            'name'               => 'Advanced Custom Fields',
            'slug'               => 'advanced-custom-fields-pro',
            'source'             => LIBS_DIR . '/plugins-require/acf.zip',
            'required'           => false,
        ),
        array(
            'name'               => 'Codestar Framework',
            'slug'               => 'codestar-framework',
            'source'             => LIBS_DIR . '/plugins-require/codestar.zip',
            'required'           => true,
        ),
    );

    $configs = array(
        'menu' => 'tp_plugin_install',
        'has_notice' => true,
        'dismissable' => false,
        'is_automatic' => true
    );
    tgmpa($plugins, $configs);
}

add_action('tgmpa_register', 'ht_plugin_activation');

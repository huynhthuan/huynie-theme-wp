<?php
// Control core classes for avoid errors
if (class_exists('CSF')) {

    //
    // Set a unique slug-like ID
    $prefix = 'my_framework';

    //
    // Create options
    CSF::createOptions($prefix, array(
        'menu_title' => 'Theme options',
        'menu_slug'  => 'my-framework',
    ));

    //Header
    CSF::createSection($prefix, array(
        'title' => 'Header',
        'fields' => array(
            array(
                'id'    => 'header-logo',
                'type'  => 'upload',
                'title' => 'Logo'
            ),
        )
    ));

    // Carousel
    CSF::createSection($prefix, array(
        'title' => 'Carousel',
        'fields' => array(
            array(
                'id'    => 'carousel',
                'type'  => 'repeater',
                'title' => 'Carousel images',
                'fields' => array(
                    array(
                        'id'    => 'carousel-image',
                        'type'  => 'upload',
                        'title' => 'Image'
                    ),
                    array(
                        'id'    => 'carousel-link',
                        'type'  => 'text',
                        'title' => 'Link'
                    ),
                ),
            ),
        )
    ));

    // Home
    CSF::createSection($prefix, array(
        'title' => 'Home',
        'fields' => array(
            array(
                'id'    => 'home-block-post',
                'type'  => 'repeater',
                'title' => 'Post category',
                'fields' => array(
                    array(
                        'id'    => 'block-post-title',
                        'type'  => 'text',
                        'title' => 'Title'
                    ),
                    array(
                        'id'    => 'view-all-text',
                        'type'  => 'text',
                        'title' => 'View all text'
                    ),
                    array(
                        'id'    => 'post-layout-type',
                        'type'  => 'select',
                        'title' => 'Icon',
                        'options'     => array(
                            'one'  => 'Layout 1',
                            'two'  => 'Layout 2',
                        ),
                        'default'     => 'one'
                    ),
                ),
            ),
        )
    ));

    // Footer
    CSF::createSection($prefix, array(
        'title'  => 'Footer',
        'fields' => array(
            array(
                'id'    => 'footer-logo',
                'type'  => 'upload',
                'title' => 'Footer logo',
            ),
            array(
                'id'    => 'footer-desc',
                'type'  => 'wp_editor',
                'title' => 'Footer desc',
            ),
            array(
                'id'    => 'footer-social',
                'type'  => 'repeater',
                'title' => 'Footer social',
                'fields' => array(
                    array(
                        'id'    => 'social-icon',
                        'type'  => 'upload',
                        'title' => 'Icon'
                    ),
                    array(
                        'id'    => 'social-link',
                        'type'  => 'text',
                        'title' => 'Link'
                    ),
                ),
            ),
            array(
                'id'    => 'footer-menu',
                'type'  => 'repeater',
                'title' => 'Footer menu',
                'fields' => array(
                    array(
                        'id'          => 'footer-menu-item',
                        'type'        => 'select',
                        'title'       => 'Menu',
                        'placeholder' => 'Select a menu',
                        'options'     => 'menus',
                    ),
                ),
            ),
            array(
                'id'    => 'footer-coppyright',
                'type'  => 'wp_editor',
                'title' => 'Footer coppyright',
            ),
            array(
                'id'    => 'footer-coppyright-menu',
                'type'  => 'select',
                'title' => 'Footer coppyright menu',
                'placeholder' => 'Select a menu',
                'options'     => 'menus',
            ),
        )
    ));
}

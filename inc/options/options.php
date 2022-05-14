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
            array(
                'id'    => 'header-menu-eco',
                'type'  => 'repeater',
                'title' => 'Menu eco',
                'fields' => array(
                    array(
                        'id'    => 'menu-image',
                        'type'  => 'upload',
                        'title' => 'Image'
                    ),
                    array(
                        'id'    => 'menu-link',
                        'type'  => 'text',
                        'title' => 'Link'
                    ),
                    array(
                        'id'    => 'menu-title',
                        'type'  => 'text',
                        'title' => 'Tittle'
                    ),
                ),
            ),
            array(
                'id'    => 'header-menu-eco-vi',
                'type'  => 'repeater',
                'title' => 'Menu eco VI',
                'fields' => array(
                    array(
                        'id'    => 'menu-image',
                        'type'  => 'upload',
                        'title' => 'Image'
                    ),
                    array(
                        'id'    => 'menu-link',
                        'type'  => 'text',
                        'title' => 'Link'
                    ),
                    array(
                        'id'    => 'menu-title',
                        'type'  => 'text',
                        'title' => 'Tittle'
                    ),
                ),
            ),
            array(
                'id'    => 'header-app',
                'type'  => 'text',
                'title' => 'Link App'
            ),
            array(
                'id'    => 'header-app',
                'type'  => 'text',
                'title' => 'Link App VI'
            ),
            array(
                'id'    => 'page-filter',
                'type'  => 'select',
                'title' => 'Page filter',
                'options' => 'pages',
            ),
            array(
                'id'    => 'page-filter-vi',
                'type'  => 'select',
                'title' => 'Page filter VI',
                'options' => 'pages',
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
                        'id'    => 'block-post-cat',
                        'type'        => 'select',
                        'title'       => 'Select categories',
                        'placeholder' => 'Select a category',
                        'options'     => 'categories',
                    ),
                    array(
                        'id'    => 'block-post-post-number',
                        'title'       => 'Select post number',
                        'type'    => 'slider',
                        'default' => 6,
                        'max' => 6,
                        'min' => 1
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
            array(
                'id'    => 'home-block-post-vi',
                'type'  => 'repeater',
                'title' => 'Post category VI',
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
                        'id'    => 'block-post-cat',
                        'type'        => 'select',
                        'title'       => 'Select categories',
                        'placeholder' => 'Select a category',
                        'options'     => 'categories',
                    ),
                    array(
                        'id'    => 'block-post-post-number',
                        'title'       => 'Select post number',
                        'type'    => 'slider',
                        'default' => 6,
                        'max' => 6,
                        'min' => 1
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

    // Filter
    CSF::createSection($prefix, array(
        'title' => 'Filter',
        'fields' => array(
            array(
                'id'    => 'filter-parent-cat',
                'type'        => 'select',
                'title'       => 'Select with categories parent in filter',
                'placeholder' => 'Select a category',
                'multiple'    => true,
                'chosen'      => true,
                'sortable'    => true,
                'options'     => 'categories',
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
                'id'    => 'footer-desc-vi',
                'type'  => 'wp_editor',
                'title' => 'Footer desc VI',
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
                    array(
                        'id'    => 'social-title',
                        'type'  => 'text',
                        'title' => 'Title'
                    ),
                ),
            ),
            array(
                'id'    => 'footer-coppyright',
                'type'  => 'wp_editor',
                'title' => 'Footer coppyright',
            ),
            array(
                'id'    => 'footer-coppyright-vi',
                'type'  => 'wp_editor',
                'title' => 'Footer coppyright VI',
            ),
            array(
                'id'    => 'footer-coppyright-menu',
                'type'  => 'select',
                'title' => 'Footer coppyright menu',
                'placeholder' => 'Select a menu',
                'options'     => 'menus',
            ),
            array(
                'id'    => 'footer-coppyright-menu-vi',
                'type'  => 'select',
                'title' => 'Footer coppyright menu VI',
                'placeholder' => 'Select a menu',
                'options'     => 'menus',
            ),
        )
    ));
}

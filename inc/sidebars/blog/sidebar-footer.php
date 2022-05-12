<?php

function footer_widget_init()
{
    for ($i = 1; $i < 4; $i++) {
        register_sidebar(array(
            'name'          => 'Footer ' . $i,
            'id'            => 'footer-widget-' . $i,
            'before_widget' => '<div class="footer-widget footer-widget-' . $i . '">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="footer-widget-title">',
            'after_title'   => '</h4>'
        ));
    }
}
add_action('widgets_init', 'footer_widget_init');

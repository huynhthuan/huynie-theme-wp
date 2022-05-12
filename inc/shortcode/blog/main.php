<?php

if (!function_exists('shortcode_block_posts')) {
    function shortcode_block_posts($atts = array(), $content)
    {
        $attr = shortcode_atts(array(
            'type' => 'one',
            'post_layout' => 'one',
            'category' => '1',
            'title' => 'Block title',
            'view_all_text' => 'View all',
            'posts_per_page' => '6'
        ), $atts);

        $args = array(
            'cat' => $attr['category'],
            'orderby' => 'date',
            'order'   => 'DESC',
            'posts_per_page' => $attr['posts_per_page']
        );

        // The Loop
        echo get_template_part('/template-parts/loop/loop', 'post', array(
            'data'  => array(
                'args' => $args,
                'attr' => $attr
            )
        ));
    }
    add_shortcode('block_post', 'shortcode_block_posts');
}

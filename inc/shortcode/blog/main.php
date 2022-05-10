<?php

if (!function_exists('shortcode_block_posts')) {
    function shortcode_block_posts($atts = array(), $content)
    {
        $attr = shortcode_atts(array(
            'type' => 'one',
            'post_layout' => 'one',
            'category' => 1,
            'title' => 'Block title',
            'view_all_text' => 'View all'
        ), $atts);

        $args = array(
            'category' => $attr['category'],
            'orderby' => 'date',
            'order'   => 'DESC',
        );

        $the_query = new WP_Query($args);

        // The Loop
        echo '<div class="short-code-blog type-' . $attr['type'] . '">';
        echo '<div class="short-code-content">';
        if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
                $the_query->the_post();
                get_template_part('/template-parts/post/post', $attr['post_layout']);
            }
        } else {
            echo 'no post';
        }
        echo '</div>';
        echo '<div class="view-all-btn">';
        echo '<span class="view-all-text">' . $attr['view_all_text'] . '</div>';
        echo '<div class="view-all-icon"><img src="" alt="arrow-right"/></div>';
        echo '</div>';
        echo '</div>';
        /* Restore original Post Data */
        wp_reset_postdata();
    }
    add_shortcode('block_post', 'shortcode_block_posts');
}

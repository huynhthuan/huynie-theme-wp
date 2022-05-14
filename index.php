<?php
get_header();

echo get_template_part('/template-parts/carousels/carousel', 'one');

if (pll_current_language() === 'vi') :
    foreach (get_theme_options('home-block-post-vi') as $block) :
        echo do_shortcode('[block_post posts_per_page="' . $block['block-post-post-number'] . '" title="' . $block['block-post-title'] . '" category="' . $block['block-post-cat'] . '" view_all_text="' . $block['view-all-text'] . '" type="' . $block['post-layout-type'] . '"]');
    endforeach;
else :
    foreach (get_theme_options('home-block-post') as $block) :
        echo do_shortcode('[block_post posts_per_page="' . $block['block-post-post-number'] . '" title="' . $block['block-post-title'] . '" category="' . $block['block-post-cat'] . '" view_all_text="' . $block['view-all-text'] . '" type="' . $block['post-layout-type'] . '"]');
    endforeach;
endif;

echo get_template_part('/template-parts/subscribe/box');

get_footer();

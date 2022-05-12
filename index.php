<?php
get_header();
?>

<?php echo get_template_part('/template-parts/carousels/carousel', 'one') ?>

<?php echo do_shortcode('[block_post posts_per_page="6" title="Become a Summonia with Tutorials" category="10" view_all_text="SEE ALL TUTORIALS"]') ?>

<?php echo do_shortcode('[block_post posts_per_page="5" type="two" title="Wiki for Summonia" category="12" view_all_text="SEE ALL WIKI"]') ?>

<?php echo do_shortcode('[block_post posts_per_page="5" title="Blogs" type="two" category="10" view_all_text="SEE ALL BLOGS"]') ?>

<?php echo get_template_part('/template-parts/subscribe/box') ?>

<?php
get_footer();
?>
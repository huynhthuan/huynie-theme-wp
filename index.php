<?php
get_header();
?>

<?php echo get_template_part('/template-parts/carousels/carousel', 'one') ?>

<?php echo do_shortcode('[block_post title="Become a Summonia with Tutorials" category="10" view_all_text="SEE ALL TUTORIALS"]') ?>

<?php echo do_shortcode('[block_post title="Wiki for Summonia" category="12" view_all_text="SEE ALL WIKI"]') ?>

<?php echo do_shortcode('[block_post title="Become a Summonia with Tutorials" type="two" category="10" view_all_text="SEE ALL TUTORIALS"]') ?>

<?php echo do_shortcode('[block_post title="Blogs" type="two" category="14" view_all_text="SEE ALL BLOGS"]') ?>

<?php echo get_template_part('/template-parts/subscribe/box') ?>

<?php
get_footer();
?>
<?php
$query_args = $args['data']['args'];
$attr = $args['data']['attr'];

$the_query = new WP_Query($query_args); ?>

<div class="block block-post">
    <div class="block-content">
        <div class="container">
            <h2 class="block-post-title">
                <?php echo $attr['title'] ?>
            </h2>
            <div class="short-code-blog type-<?php echo $attr['type'] ?>">
                <div class="short-code-content">
                    <div class="post-item-grid">
                        <?php
                        if ($the_query->have_posts()) :
                            while ($the_query->have_posts()) : $the_query->the_post();
                                echo get_template_part('/template-parts/post/post', $attr['post_layout']);
                            endwhile;
                            // Restore original Post Data 
                            wp_reset_postdata();
                        else :
                            echo get_template_part('/template-parts/empty/empty', 'post');
                        endif;
                        ?>
                    </div>
                    <div class="short-code-footer">
                        <a href="<?php echo esc_url(get_term_data($attr['category'], 'category')['link']) ?>" class="view-all-btn">
                            <span class="view-all-text">
                                <?php echo $attr['view_all_text'] ?>
                            </span>
                            <div class="view-all-icon">
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/arrow-right.png' ?>" alt="arrow-right" />
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
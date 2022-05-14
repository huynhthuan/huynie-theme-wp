<?php 
get_header();
postview_set(get_the_ID()) ?>
<div class="page-content">
    <div class="container">
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<div class="breadcrumbs">', '</div>');
        }
        ?>

        <div class="post-content-inner">
            <div class="post-single-wrap">
                <div class="post-single">
                    <div class="post-single-body">
                        <div class="post-single-header">
                            <a href="<?php echo get_term_link(get_the_terms(get_the_ID(), 'category')[0], 'category') ?>" class="post-category">
                                <?php echo get_the_terms(get_the_ID(), 'category')[0]->name ?>
                            </a>

                            <h1 class="post-title">
                                <?php the_title() ?>
                            </h1>

                            <div class="post-desc">
                                <div class="post-desc-box post-desc-box-diff <?php echo get_the_terms(get_the_ID(), 'difficulty')[0]->slug ?>">
                                    <div class="post-desc-icon">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/img/' . get_the_terms(get_the_ID(), 'difficulty')[0]->slug . '-icon.png' ?>" alt="diff-icon">
                                    </div>

                                    <div class="post-desc-name">
                                        <?php echo get_the_terms(get_the_ID(), 'difficulty')[0]->name ?>
                                    </div>
                                </div>

                                <div class="post-single-date">
                                    Posted on <?php the_date() ?>
                                </div>
                            </div>
                        </div>

                        <div class="post-single-feature">
                            <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
                        </div>

                        <div class="post-single-content">
                            <?php the_content() ?>
                        </div>
                    </div>

                    <div class="post-single-footer">
                        <div class="post-single-tags">
                            <span>Tags: </span>
                            <?php
                            $posttags = get_the_tags(get_the_ID());
                            if ($posttags) : ?>
                                <ul class="tag-list">
                                    <?php foreach ($posttags as $tag) : ?>
                                        <li class="tag-item">
                                            <a href="<?php echo get_term_link($tag->term_id, 'post_tag') ?>" class="tag-link">
                                                <?php echo $tag->name; ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>

                        <div class="post-single-share">
                            <ul class="list-share">
                                <li class="share-item">
                                    <a href="http://twitter.com/share?text=<?php echo get_the_title() ?>&url=<?php echo  get_the_permalink() ?>" target="_blank" class="share-link">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/img/twitter-icon.png' ?>" alt="twitter">
                                    </a>
                                </li>
                                <li class="share-item">
                                    <a href="https://telegram.me/share/url?url=<?php echo  get_the_permalink() ?>&text=<?php echo get_the_title() ?>" target="_blank" class="share-link">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/img/telegram-icon.png' ?>" alt="telegram">
                                    </a>
                                </li>
                                <li class="share-item">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink() ?>&display=popup" target="_blank" class="share-link">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/img/facebook-icon.png' ?>" alt="facebook">
                                    </a>
                                </li>
                                <li class="share-item">
                                    <a href="javascript:void(0);" class="share-link btnCoppy" data-clipboard-text="<?php echo get_permalink() ?>">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/img/coppy-icon.png' ?>" alt="coppy">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="related-post">
                    <?php
                    $related = get_posts(
                        array(
                            'category__in' => wp_get_post_categories(get_the_ID()),
                            'numberposts' => 5,
                            'post__not_in' => array($post->ID)
                        )
                    );
                    if ($related) :
                        foreach ($related as $post) :
                            setup_postdata($post); ?>
                            <?php echo get_template_part('/template-parts/post/post', 'one') ?>
                    <?php
                        endforeach;
                    endif;
                    wp_reset_postdata(); ?>
                </div>
            </div>

            <nav class="post-toc">
                <div class="post-toc-wrap">
                    <div class="toc-title">
                        TABLE OF CONTENTS
                    </div>
                    <div class="toc-content">
                        <?php echo do_shortcode('[ez-toc]') ?>
                    </div>
                </div>

            </nav>
        </div>


    </div>
</div>

<?php get_footer();

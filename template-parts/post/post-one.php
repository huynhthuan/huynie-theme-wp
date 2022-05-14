<div class="post-item">
    <div class="post-inner">
        <div class="post-header">
            <a href="<?php echo get_the_permalink() ?>">
                <div class="post-img">
                    <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
                </div>
            </a>

            <div class="post-tags">
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
        </div>

        <div class="post-meta">
            <a href="<?php echo get_term_link(get_the_terms(get_the_ID(), 'category')[0], 'category') ?>" class="post-category">
                <?php echo get_the_terms(get_the_ID(), 'category')[0]->name ?>
            </a>

            <a href="<?php echo get_the_permalink() ?>">
                <h3 class="post-title">
                    <?php the_title() ?>
                </h3>
            </a>

            <div class="post-tags">
                <?php
                $posttags2 = get_the_tags(get_the_ID());
                if ($posttags2) : ?>
                    <ul class="tag-list">
                        <?php foreach ($posttags2 as $tag2) : ?>
                            <li class="tag-item">
                                <a href="<?php echo get_term_link($tag2->term_id, 'post_tag') ?>" class="tag-link">
                                    <?php echo $tag2->name; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>

            <p class="post-excerct">
                <?php echo get_the_excerpt() ?>
            </p>

            <div class="post-desc">
                <div class="post-desc-box post-desc-box-diff <?php echo get_field('type', 'term_' . get_the_terms(get_the_ID(), 'difficulty')[0]->term_id) ?>">
                    <div class="post-desc-icon">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/' . get_field('type', 'term_' . get_the_terms(get_the_ID(), 'difficulty')[0]->term_id) . '-icon.png' ?>" alt="diff-icon">
                    </div>

                    <div class="post-desc-name">
                        <?php echo get_the_terms(get_the_ID(), 'difficulty')[0]->name ?>
                    </div>
                </div>

                <div class="post-desc-box post-desc-box-time">
                    <div class="post-desc-icon">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/clock-icon.png' ?>" alt="clock-icon">
                    </div>

                    <div class="post-desc-name">
                        <?php echo get_the_date() ?>
                    </div>
                </div>

                <div class="post-desc-box post-desc-box-view">
                    <div class="post-desc-icon">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/eye-icon.png' ?>" alt="eye-icon">
                    </div>

                    <div class="post-desc-name post-desc-view">
                        <?php echo postview_get(get_the_ID()) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
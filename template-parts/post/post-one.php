<div class="post-item">
    <div class="post-inner">
        <div class="post-header">
            <a href="<?php echo get_the_permalink() ?>">
                <div class="post-img">
                    <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
                </div>
            </a>

            <div class="post-tags">
                <ul class="tag-list">
                    <li class="tag-item">
                        <a href="#" class="tag-link">Campaign</a>
                    </li>
                    <li class="tag-item">
                        <a href="#" class="tag-link">Dugeon</a>
                    </li>
                    <li class="tag-item">
                        <a href="#" class="tag-link">Renting</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="post-meta">
            <p class="post-category">
                Blog
            </p>

            <a href="<?php echo get_the_permalink() ?>">
                <h3 class="post-title">
                    <?php the_title() ?>
                </h3>
            </a>

            <div class="post-desc">
                <div class="post-desc-box post-desc-box-diff <?php echo get_the_terms(get_the_ID(), 'difficulty')[0]->slug ?>">
                    <div class="post-desc-icon">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/' . get_the_terms(get_the_ID(), 'difficulty')[0]->slug . '-icon.png' ?>" alt="diff-icon">
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
                        <?php the_date() ?>
                    </div>
                </div>

                <div class="post-desc-box post-desc-box-view">
                    <div class="post-desc-icon">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/eye-icon.png' ?>" alt="eye-icon">
                    </div>

                    <div class="post-desc-name">
                        5000
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
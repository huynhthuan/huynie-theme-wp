<?php get_header() ?>
<div class="page-category">
    <div class="container">
        <div class="category-header">
            <div class="category-dropdown">
                <div class="category-dropdown-current">
                    Topics at
                    <span class="category-select">
                        <span class="category-name"><?php single_cat_title() ?></span>
                        <div class="select-icon">
                            <img src="" alt="">
                        </div>
                    </span>
                </div>
                <ul class="category-dropdown-list">
                    <?php
                    $categories = get_categories();
                    foreach ($categories as $category) : ?>
                        <li class="category-dropdown-item">
                            <a href="<?php echo get_term_link($category->term_id, 'category') ?>" class="category-dropdown-link">
                                <?php echo $category->name ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <form class="category-filter">
                <div class="filter-wrap">
                    <div class="filter-box">
                        <div class="filter-header">
                            <div class="filter-title">Filter by Topic</div>
                            <div class="filter-desc">15 topics discovered</div>
                        </div>

                        <div class="filter-body">
                            <ul class="filter-list">
                                <li class="filter-item">
                                    <div class="filter-radio">

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="filter-box">
                        <div class="filter-header">
                            <div class="filter-title">Filter by Difficulty</div>
                            <div class="filter-desc">3 difficulty discovered</div>
                        </div>

                        <div class="filter-body">
                            <ul class="filter-list">
                                <li class="filter-item">
                                    <div class="filter-radio">

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="category-filter-bottom">
                    <button type="submit" class="btn-filter btn-filter-apply">Apply filters</button>
                    <button type="button" class="btn-filter btn-filter-clear">Clear filters</button>
                </div>
            </form>
        </div>


        <div class="category-body">
            <div class="category-body-header">
                <div class="category-count">
                    Articles (64)
                </div>

                <div class="category-switch">
                    <button class="active" data-view="grid">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/icon-square.png'; ?>" alt="icon-square">
                    </button>
                    <button data-view="list">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/list-icon.png'; ?>" alt="list-icon">
                    </button>
                </div>
            </div>

            <div class="category-body-content">
                <div class="post-item-grid">
                    <?php
                    while (have_posts()) : the_post();

                        echo get_template_part('/template-parts/post/post', 'one');

                    endwhile; // End of the loop.

                    echo theme_pagination();
                    ?>
                </div>
                <div class="overlay-post">

                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>
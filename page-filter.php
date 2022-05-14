<?php
/* Template Name: Filter */
get_header();

$page = (get_query_var('paged')) ? get_query_var('paged') : 1;

$q_key = isset($_GET['key']) ? $_GET['key'] : '';
$q_topic = isset($_GET['topic']) ? $_GET['topic'] : array();
$q_topic_parent = isset($_GET['topic_parent']) ? $_GET['topic_parent'] : '';
$q_topic_level = isset($_GET['topic_level']) ? $_GET['topic_level'] : '';

$args = array(
    'category__in' => implode(',', array_merge($q_topic, array($q_topic_parent))),
    'post_type' => 'post',
    's' => $q_key,
    'paged' => $page,
);

if (isset($_GET['topic_level'])) {
    $args['tax_query'] = array(
        'relation' => 'AND',
        array(
            'taxonomy' => 'difficulty',
            'field'    => 'slug',
            'terms'    => $q_topic_level,
        )
    );
}
$custom_query = new WP_Query($args);
?>
<div class="page-category">
    <div class="container">
        <form method="get" action="" class="category-header">
            <div class="category-dropdown">
                <div class="category-dropdown-current">
                    <?php pll_e('Topic at'); ?>
                    <span class="category-select">
                        <span class="category-name" style="background-color: <?php echo get_field('color', 'term_' . $q_topic_parent) ?>;"><?php echo get_term($q_topic_parent, 'category')->name ?></span>
                        <div class="select-icon">
                        </div>
                    </span>
                </div>
                <ul class="category-dropdown-list ">
                    <?php
                    $catParents = get_categories(array(
                        'include' => get_theme_options('filter-parent-cat'),
                        'hide_empty' => false,
                    ));

                    foreach ($catParents as $catParent) : ?>
                        <li class="category-dropdown-item">
                            <a href="<?php echo pll_home_url() . '/filter?topic_parent=' . $catParent->term_id ?>" class="category-dropdown-link">
                                <?php echo $catParent->name ?>
                            </a>
                        </li>
                    <?php endforeach ?>
                </ul>
                <input type="hidden" name="topic_parent" value="<?php echo isset($_GET['topic_parent']) ? $_GET['topic_parent'] : '' ?>">
            </div>

            <div class="category-filter">
                <?php
                $categories = get_categories(array(
                    'hide_empty' => false,
                    'exclude' => array(1, 7),
                    'child_of' => isset($_GET['topic_parent']) && $_GET['topic_parent'] !== '' ? $_GET['topic_parent'] : false,
                ));
                ?>
                <div class="filter-wrap">
                    <div class="filter-box">
                        <div class="filter-header">
                            <div class="filter-title"><?php pll_e('Filter by Topic'); ?></div>
                            <?php if (isset($_GET['topic_parent']) && $_GET['topic_parent'] !== '') : ?>
                                <div class="filter-desc"><?php echo count($categories) ?> <?php pll_e('topics discovered'); ?></div>
                            <?php endif; ?>
                        </div>

                        <div class="filter-body">
                            <?php if (isset($_GET['topic_parent']) && $_GET['topic_parent'] !== '') : ?>
                                <ul class="filter-list">
                                    <?php
                                    foreach ($categories as $category) : ?>
                                        <li class="filter-item">
                                            <div class="filter-radio">
                                                <div class="filter-btn-container filter-btn-container-topic <?php echo isset($_GET['topic']) && in_array($category->term_id, $_GET['topic']) ? 'active' : '' ?>">
                                                    <div class="check-img">
                                                        <img src="<?php echo get_template_directory_uri() . '/assets/img/check-icon.png' ?>" alt="check-icon">
                                                    </div>
                                                    <span><?php echo $category->name ?></span>
                                                    <input name="topic[]" <?php echo isset($_GET['topic']) && in_array($category->term_id, $_GET['topic']) ? 'checked' : '' ?> value="<?php echo $category->term_id ?>" type="checkbox">
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>

                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="filter-box">
                        <?php
                        $diffs = get_terms(array(
                            'taxonomy' => 'difficulty',
                            'hide_empty' => false,
                        )); ?>
                        <div class="filter-header">
                            <div class="filter-title">
                                <?php pll_e('Filter by Difficulty') ?>
                            </div>
                            <div class="filter-desc"><?php echo count($diffs) ?> <?php pll_e('difficulty discovered') ?></div>
                        </div>

                        <div class="filter-body">
                            <ul class="filter-list">
                                <?php

                                foreach ($diffs as $diff) :
                                ?>
                                    <li class="filter-item">
                                        <div class="filter-radio">
                                            <div class="filter-btn-container <?php echo isset($_GET['topic_level']) && in_array($diff->slug, $_GET['topic_level']) ? 'active' : '' ?> <?php echo get_field('type', 'term_' . $diff->term_id) ?>">
                                                <div class="filter-icon">
                                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/' . get_field('type', 'term_' . $diff->term_id)  . '-icon.png' ?>" alt="diff-icon">
                                                </div>
                                                <span><?php echo $diff->name ?></span>
                                                <input name="topic_level[]" <?php echo isset($_GET['topic_level']) && in_array($diff->slug, $_GET['topic_level']) ? 'checked' : '' ?> value="<?php echo $diff->slug ?>" type="checkbox">
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="category-filter-bottom">
                    <button type="submit" class="btn-filter btn-filter-apply">
                        <?php pll_e('Apply filters') ?>
                    </button>
                    <a href="<?php echo pll_home_url() . '/filter' ?>" class="d-inline-block btn-filter btn-filter-clear">
                        <?php pll_e('Clear filters') ?>
                    </a>
                </div>
            </div>
        </form>


        <div class="category-body">
            <div class="category-body-header">
                <div class="category-count">
                    <?php pll_e('Articles') ?> (<?php echo $custom_query->post_count; ?>)
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
                    <?php if ($custom_query->have_posts()) :
                        while ($custom_query->have_posts()) : $custom_query->the_post();

                            echo get_template_part('/template-parts/post/post', 'one');

                        endwhile; // End of the loop.
                        // Restore original Post Data
                        wp_reset_postdata();
                        echo theme_pagination($custom_query);
                    else :
                        echo get_template_part('/template-parts/empty/empty', 'post');
                    endif; ?>
                </div>
                <div class="overlay-post">

                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>
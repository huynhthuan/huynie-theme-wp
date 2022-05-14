<?php
get_header();
?>
<div class="page-category">
    <div class="container">
        <?php
        if (function_exists('yoast_breadcrumb')) {
            yoast_breadcrumb('<div class="breadcrumbs">', '</div>');
        }
        ?>
        <div class="category-body">
            <div class="category-body-header">
                <div class="category-count">
                    <?php single_cat_title() ?> (<?php echo get_queried_object()->category_count; ?>)
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
                    if (have_posts()) :
                        while (have_posts()) : the_post();

                            echo get_template_part('/template-parts/post/post', 'one');

                        endwhile; // End of the loop.

                        echo theme_pagination();
                    else :
                        echo get_template_part('/template-parts/empty/empty', 'post');
                    endif;
                    ?>
                </div>
                <div class="overlay-post">

                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
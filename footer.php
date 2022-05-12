<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SH_Theme
 */
?>
</div><!-- #content -->

<footer id="footer" class="site-footer" itemscope itemtype="https://schema.org/WPFooter">
    <div class="container">
        <div class="footer-content">
            <div class="footer-left">
                <a href="<?php echo home_url() ?>" class="footer-logo">
                    <img src="<?php echo get_theme_options('footer-logo') ?>" alt="logo">
                </a>
                <p class="footer-desc">
                    <?php echo get_theme_options('footer-desc') ?>
                </p>

                <ul class="footer-social">
                    <?php foreach (get_theme_options('footer-social', []) as $social) : ?>
                        <li class="footer-social-item">
                            <a href="<?php echo $social['social-link'] ?>" class="footer-social-link">
                                <img src="<?php echo $social['social-icon'] ?>" alt="<?php echo $social['social-title'] ?>">
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="footer-right">
                <?php echo get_template_part('/template-parts/footer/footer', 'menu') ?>
            </div>
            <div class="footer-coppyright">
                <div class="coppyright-left">
                    <?php echo get_template_part('/template-parts/footer/footer', 'coppyright') ?>
                </div>
                <div class="coppyright-right">
                    <?php
                    wp_nav_menu(array(
                        'menu_id' => get_theme_options('footer-coppyright-menu')
                    ));
                    ?>
                </div>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
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

<div class="menu-mobile">
    <div class="menu-mobile-item">
        <button class="btn-menu-mobile " data-bs-toggle="modal" data-bs-target="#gameModal">
            <div class="btn-menu-icon">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/icon-square.png'; ?>" alt="eco-game">
            </div>
            <span>Game</span>
        </button>
    </div>
    <div class="menu-mobile-item">
        <button class="btn-menu-mobile">
            <div class="btn-menu-icon">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/arrow-up-right.png'; ?>" alt="eco-game">
            </div>
            <span>App</span>
        </button>
    </div>
    <div class="menu-mobile-item">
        <button class="btn-menu-mobile" data-bs-toggle="modal" data-bs-target="#searchModal">
            <div class="btn-menu-icon">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/search-icon.png'; ?>" alt="eco-game">
            </div>
            <span>Search</span>
        </button>
    </div>
    <div class="menu-mobile-item">
        <button class="btn-menu-mobile" data-bs-target="#languageModal" data-bs-toggle="modal">
            <div class="btn-menu-icon">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/language-icon.png'; ?>" alt="arrow-up-right">
            </div>
            <span><?php echo pll_current_language() === 'vi' ? 'VI' : 'EN' ?></span>
        </button>
    </div>
</div>

<footer id="footer" class="site-footer" itemscope itemtype="https://schema.org/WPFooter">
    <div class="container">
        <div class="footer-content">
            <div class="footer-left">
                <a href="<?php echo pll_home_url() ?>" class="footer-logo">
                    <img src="<?php echo get_theme_options('footer-logo') ?>" alt="logo">
                </a>
                <p class="footer-desc">
                    <?php
                    if (pll_current_language() === 'vi') :
                        echo get_theme_options('footer-desc-vi');
                    else :
                        echo get_theme_options('footer-desc');
                    endif; ?>
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
                    if (pll_current_language() === 'vi') :
                        wp_nav_menu(array(
                            'menu' => get_theme_options('footer-coppyright-menu-vi')
                        ));
                    else :
                        wp_nav_menu(array(
                            'menu' => get_theme_options('footer-coppyright-menu')
                        ));
                    endif ?>
                </div>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->

<!-- Modal -->
<div class="modal fade" id="gameModal" tabindex="-1" aria-labelledby="gameModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="gameModalLabel">
                    <?php pll_e('Game ecosytem') ?>
                </h5>
            </div>
            <div class="modal-body">
                <ul class="eco-list-game">
                    <?php if (pll_current_language() === 'vi') : ?>
                        <?php
                        $menus = get_theme_options('header-menu-eco-vi');
                        foreach ($menus as $item) : ?>
                            <li class="eco-game-item">
                                <a href="<?php echo $item['menu-link'] ?>" class="eco-game-img">
                                    <img src="<?php echo $item['menu-image'] ?>" alt="eco-game">
                                </a>
                                <p class="eco-game-name">
                                    <?php echo $item['menu-title'] ?>
                                </p>
                            </li>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <?php
                        $menus = get_theme_options('header-menu-eco');
                        foreach ($menus as $item) : ?>
                            <li class="eco-game-item">
                                <a href="<?php echo $item['menu-link'] ?>" class="eco-game-img">
                                    <img src="<?php echo $item['menu-image'] ?>" alt="eco-game">
                                </a>
                                <p class="eco-game-name">
                                    <?php echo $item['menu-title'] ?>
                                </p>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <?php pll_e('Close') ?>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Search Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="gameModalLabel">
                    <?php pll_e('Search post') ?>
                </h5>
            </div>
            <div class="modal-body">
                <div class="search-box">
                    <?php if (pll_current_language() === 'vi') : ?>
                        <form method="get" action="<?php echo get_permalink(get_theme_options('page-filter-vi')) ?>">
                            <input type="text" name="key" value="<?php echo isset($_GET['key']) ? $_GET['key'] : '' ?>" class="form-control" placeholder="<?php pll_e('Search...') ?>">
                            <button type="submit" class="search-btn">
                                <div class="search-img">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/search-icon.png'; ?>" alt="search-icon">
                                </div>
                            </button>
                        </form>
                    <?php else : ?>
                        <form method="get" action="<?php echo get_permalink(get_theme_options('page-filter')) ?>">
                            <input type="text" name="key" value="<?php echo isset($_GET['key']) ? $_GET['key'] : '' ?>" class="form-control" placeholder="<?php pll_e('Search...') ?>">
                            <button type="submit" class="search-btn">
                                <div class="search-img">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/img/search-icon.png'; ?>" alt="search-icon">
                                </div>
                            </button>
                        </form>
                    <?php endif; ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <?php pll_e('Close') ?>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Language Modal -->
<div class="modal fade" id="languageModal" tabindex="-1" aria-labelledby="languageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="gameModalLabel">
                    <?php pll_e('Change language') ?>
                </h5>
            </div>
            <div class="modal-body">
                <ul class="list-language">
                    <li class="language-item">
                        <a href="<?php echo  pll_home_url('en') ?>" class="language-link">English</a>
                    </li>
                    <li class="language-item">
                        <a href="<?php echo  pll_home_url('vi') ?>" class="language-link">Vietnamese</a>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    <?php pll_e('Close') ?>
                </button>
            </div>
        </div>
    </div>
</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
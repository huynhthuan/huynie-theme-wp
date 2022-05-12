<div class="footer-menu-wrap">
    <?php
    for ($i = 1; $i < 4; $i++) : ?>
        <div class="footer-menu-col">
            <?php dynamic_sidebar('footer-widget-' . $i); ?>
        </div>
    <?php endfor; ?>
</div>
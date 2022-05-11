<div class="block block-banner">
    <div class="block-content">
        <div class="container">
            <div class="bannr-slide">
                <div class="banner-inner">
                    <?php foreach (get_theme_options('carousel') as $item) : ?>
                        <div class="banner-item">
                            <a href="<?php echo $item['carousel-link'] ?>" class="banner-link">
                                <div class="banner-img">
                                    <img src="<?php echo $item['carousel-image'] ?>" alt="banner">
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
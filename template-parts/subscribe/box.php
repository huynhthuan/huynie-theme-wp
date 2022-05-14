<div class="block block-subscribe">
    <div class="block-content">
        <div class="container">
            <?php 
            if(pll_current_language() === 'vi'):
                echo do_shortcode('[contact-form-7 id="197" title="Subscribe form VI"]');
            else:
                echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]');
            endif;
            ?>
        </div>
    </div>
</div>
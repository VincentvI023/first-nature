<?php $phone = get_sub_field('button_link'); ?>
<section class="section-space cta-block">
        <div class="cta-content">
            <h3><?php the_sub_field('title'); ?></h3>
            <div class="cta-button"> 
                <a href="<?php echo esc_url($phone['url']); ?>" class="button-red"><?php the_sub_field('button_text'); ?></a>
            </div>
        </div>   
</section>


<?php $image = get_sub_field('image'); ?>

<section class="standard-block section-space text-img">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="block-content">            
                    <h2><?php the_sub_field('title'); ?></h2>
                    <div class="block-text"><?php the_sub_field('text'); ?></div>
                    <?php if (get_sub_field('button_text')) : ?>
                        <a href="<?php the_sub_field('button_url'); ?>" class="button-grey"><?php the_sub_field('button_text'); ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-6">
                <?php if ( $image ) : ?>
                    <img src="<?php echo esc_url($image['sizes']['section-image']); ?>" class="block-img" alt="<?php echo esc_attr($image['alt']); ?>">
                <?php endif ?>
            </div>
        </div>
    </div>
</section>
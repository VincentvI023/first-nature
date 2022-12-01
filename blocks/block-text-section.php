<?php $button = get_sub_field('button'); ?>

<section class="text-section">
    <div class="container align-self-center">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="orange-text-title"><?php the_sub_field('title'); ?></h2>
                <div class="green-line"></div>
            </div>
            <div class="col-lg-6">
                <div class="text-content">
                    <?php the_sub_field('text'); ?>
                     <?php if ($button) : ?>
                        <a href="<?php echo $button['url']; ?>" class="orange-button" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
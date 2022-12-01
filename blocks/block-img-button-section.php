<?php 
$image = get_sub_field('image'); 
$button = get_sub_field('button');
?>

<section class="img-section" style="background-image: url('<?php echo $image; ?>');">
    <div class="container align-self-center text-center">
            <h2 class="orange-img-title"><?php the_sub_field('title'); ?></h2>
            <p><?php the_sub_field('text'); ?></p>

            <div class="button-row">
                <?php if ( have_rows('buttons') ) : ?>
                    <?php while( have_rows('buttons') ) : the_row(); ?>
                    <?php $button = get_sub_field('button'); ?>
                        <a href="<?php echo $button['url']; ?>" class="orange-button" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            
    </div>
</section>
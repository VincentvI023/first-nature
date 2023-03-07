<?php 
    $image = get_sub_field('image'); 
    $button = get_sub_field('button');
    $title_link = get_sub_field('title_link'); 
?>


<section class="img-section <?php the_sub_field('css_class'); ?>" style="background-image: url('<?php echo $image; ?>');">
    <div class="container-fluid align-self-center">
        <div class="section-middle">
            <?php if($title_link): ?>
                <a href="<?php echo $title_link['url']; ?>" target="<?php echo $title_link['target']; ?>">
                    <h2 class="orange-img-title underline-animation" data-aos="fade-up"><?php the_sub_field('title'); ?></h2>
                </a>
            <?php else: ?>
                <h2 class="orange-img-title" data-aos="fade-up"><?php the_sub_field('title'); ?></h2>
            <?php endif; ?>
            
            <p data-aos="fade-up"><?php the_sub_field('text'); ?></p>
            <?php if ($button) : ?>
                <a href="<?php echo $button['url']; ?>" data-aos="fade-up" class="orange-button" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>
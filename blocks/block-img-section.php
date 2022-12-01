<?php 
$image = get_sub_field('image'); 
$button = get_sub_field('button');
?>


<section class="img-section" style="background-image: url('<?php echo $image; ?>');">
    <div class="container-fluid align-self-center">
        <div class="section-middle">
            <h2 class="orange-img-title"><?php the_sub_field('title'); ?></h2>
            <p><?php the_sub_field('text'); ?></p>
            <?php if ($button) : ?>
                <a href="<?php echo $button['url']; ?>" class="orange-button" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>
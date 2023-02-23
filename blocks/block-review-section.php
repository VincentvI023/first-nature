<?php 
$image = get_sub_field('image'); 
$button = get_sub_field('button');
?>

<section class="review-section" style="background-image: linear-gradient(rgb(0 0 0 / 20%), rgb(0 0 0 / 20%)), url('<?php echo $image; ?>');">
    <div class="container align-self-center text-center">
            <h2 class="orange-img-title"><?php the_sub_field('title'); ?></h2>
            <p><?php the_sub_field('text'); ?></p>

            <div class="row">
                <?php if ( have_rows('reviews') ) : ?>
                    <?php while( have_rows('reviews') ) : the_row();
                        $name = get_sub_field('naam');
                        $text = get_sub_field('tekst'); 
                    if(get_row_index() == 3){ ?><div class="col-lg-4"></div><?php } ?>
                        <div class="col-lg-4 " data-aos="fade-up">
                            <div class="review">
                                <p class="review-name"><?php echo $name; ?>:</p>
                                <p><?php echo $text; ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            
    </div>
</section>
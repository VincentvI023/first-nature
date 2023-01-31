<?php 

$button = get_sub_field('button');
$background = get_sub_field('img_as_background');
$block_id = rand();

if($background):
    $background_image = get_sub_field('background_image');
    $title_color = get_sub_field('title_color');
    $text_color = get_sub_field('text_color');
endif;
?>

<section class="text-section block-<?php echo $block_id; ?>" >
    <div class="container align-self-center">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="orange-text-title" data-aos="fade-right"><?php the_sub_field('title'); ?></h2>
                <div class="green-line"></div>
            </div>
            <div class="col-lg-6">
                <div class="text-content" data-aos="fade-left">
                    <?php 
                    the_sub_field('text');
                    if ($button) : ?>
                        <a href="<?php echo $button['url']; ?>" data-aos="fade-up" class="orange-button" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if($background): ?>

    <style>
        .block-<?php echo $block_id; ?> {
            background-image: linear-gradient(rgb(0 0 0 / 10%), rgb(0 0 0 / 10%)), url('<?php echo $background_image; ?>');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .block-<?php echo $block_id; ?> h2 {
            color: <?php echo $title_color; ?>;
        }
        .block-<?php echo $block_id; ?> p {
            color: <?php echo $text_color; ?>;
        }
    </style>

<?php endif; ?>
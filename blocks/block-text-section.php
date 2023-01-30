<?php 

$button = get_sub_field('button');
$background = get_sub_field('img_as_background');
$background_image = '';

if($background):
    $background_image = get_sub_field('background_image');
    $title_color = get_sub_field('title_color');
    $text_color = get_sub_field('text_color');
endif;
?>

<section class="text-section">
    <div class="container align-self-center">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="orange-text-title"><?php the_sub_field('title'); ?></h2>
                <div class="green-line"></div>
            </div>
            <div class="col-lg-6">
                <div class="text-content">
                    <?php 
                    the_sub_field('text');
                    if ($button) : ?>
                        <a href="<?php echo $button['url']; ?>" class="orange-button" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .text-section {
        background-image: url('<?php echo $background_image; ?>');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
    .text-section h2 {
        color: <?php echo $title_color; ?>;
    }
    .text-section p {
        color: <?php echo $text_color; ?>;
    }
</style>
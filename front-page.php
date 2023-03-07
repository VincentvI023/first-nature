<?php get_header();
$video_banner_link = get_field('video_banner_link');
?>

<main>
<section class="video-banner">
    <div class="hero img-section">
    <div id="youtubeEmbed" class="hero_video" data-video-id="<?php the_field('youtube_id') ?>"></div>
        <div class="section-content-middle">
            <a href="<?php echo $video_banner_link['url']; ?>" target="<?php echo $video_banner_link['target']; ?>">
                <div class="content-box">
                    <?php if ( get_field('video_banner_title') ) : ?>
                        <h1><?php echo get_field('video_banner_title'); ?></h1>
                    <?php endif; ?>
                    <?php if ( get_field('video_banner_sub_title') ) : ?>
                        <h3><?php echo get_field('video_banner_sub_title'); ?></h3>
                    <?php endif; ?>

                    <?php if ( $video_banner_link ) : ?>
                        
                    <?php endif; ?>
                </div>
            </a>
        </div>
    </div>
</section>

<?php 
if( have_rows('blocks') ):
    while ( have_rows('blocks') ) : the_row();
        if( get_row_layout() == 'img-section' ):
            get_template_part( 'blocks/block', 'img-section' );
        elseif( get_row_layout() == 'text-section' ):
            get_template_part( 'blocks/block', 'text-section' );     
        elseif( get_row_layout() == 'img-button-section' ):
            get_template_part( 'blocks/block', 'img-button-section' ); 
        elseif( get_row_layout() == 'text_block'):
            get_template_part( 'blocks/block', 'text-only-block' );
        endif;
    endwhile;
endif; ?>

</main>

<?php get_footer() ?>

<?php get_header();

if(get_the_content() != ''): ?>

    <section class="hero-content-page">
        <div class="container">
            <h1 class="text-center"><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </section>

<?php endif;

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
        elseif( get_row_layout() == 'three-img-section'):
            get_template_part( 'blocks/block', 'three-img-section' );
        elseif( get_row_layout() == 'reviews-section'):
            get_template_part( 'blocks/block', 'review-section' );
        endif;
    endwhile;
endif;

get_footer() ?>


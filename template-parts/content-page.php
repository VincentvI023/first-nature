<?php get_header(); 

if( have_rows('blocks') ):
    while ( have_rows('blocks') ) : the_row();
        if( get_row_layout() == 'afbeelding_tekst_block' ):
            get_template_part( 'blocks/block', 'text-img' );   
        elseif( get_row_layout() == 'tekst_afbeelding_block' ):
            get_template_part( 'blocks/block', 'img-text' );     
        elseif( get_row_layout() == 'cta_block'):
            get_template_part( 'blocks/block', 'cta-block' ); 
        elseif( get_row_layout() == 'text_block'):
            get_template_part( 'blocks/block', 'text-only-block' );
        endif;
    endwhile;
endif; 

get_footer();


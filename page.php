<?php get_header(); ?>
	<div class="container">

		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', 'page' );
		endwhile; ?>
		
	</div>
<?php get_footer();

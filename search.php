<?php get_header(); ?>

	<section class="search container">
		<main class="search-page">
			<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php printf( esc_html__( 'Zoek resultaten for: %s', 'cross_pro' ), '<span>' . get_search_query() . '</span>' ); ?>
				</h1>
			</header>

			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'search' ); endwhile;
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif; ?>

		</main>
	</section>
<?php get_footer();

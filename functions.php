<?php
	//  all the image sizes
	add_image_size( 'section-image', 570, 400 );

	//  ACF options page
	if( function_exists('acf_add_options_page') ) {	
		acf_add_options_page(array(
		'page_title' 	=> 'Opties',
		'menu_title'	=> 'Opties',
		'menu_slug' 	=> 'opties',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	}

	/* include scripts */
	function cross_pro_scripts() {
		wp_enqueue_script( 'cross_pro-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
		wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );
	}
	add_action( 'wp_enqueue_scripts', 'cross_pro_scripts' );


	/* include styles */
	function cross_pro_enqueue_styles() {
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
		wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
		wp_enqueue_style( 'media-queries', get_template_directory_uri() . '/css/media-queries.css' );
		wp_enqueue_style( 'scrolling', get_template_directory_uri() . '/css/scrolling-effects.css' );
		wp_enqueue_style( 'elements-header', get_template_directory_uri() . '/css/elements/header.css' );
		wp_enqueue_style( 'elements-footer', get_template_directory_uri() . '/css/elements/footer.css' );
		wp_enqueue_style( 'standard-page', get_template_directory_uri() . '/css/elements/standard-page.css' );
		wp_enqueue_style( 'cross_pro-style', get_stylesheet_uri() );
	}
	add_action( 'wp_enqueue_scripts', 'cross_pro_enqueue_styles');

	require get_template_directory() . '/inc/shortcuts.php';
	require get_template_directory() . '/inc/post-types.php';

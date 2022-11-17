<body <?php body_class(); ?>>
	<div id="page" class="site">
		<header>
			<nav itemscope itemtype="http://www.schema.org/SiteNavigationElement" class="navbar navbar-expand-lg navbar-custom" role="navigation">
				<div class="container-lg">
					<a class="navbar-logo" href="<?php echo home_url(); ?>">
						<!-- <img src="<?php bloginfo('stylesheet_directory'); ?>/image/"> -->
						<img src="https://vincentvaningen.nl/wp-content/themes/vincentvaningen/image/vincentvaningen-logo-white-small-2021.png" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Menu">
						Menu <span class="navbar-toggler-icon"></span>
					</button>

					<?php
					$args = array(
						'theme_location'  => 'header',
						'container'       => 'div',
						'container_class' => 'collapse navbar-collapse justify-content-end',
						'container_id'    => 'menu',
						'menu_class'      => 'navbar-nav',
						'item_class'      => 'nav-item'
					);
					wp_nav_menu($args); ?>
				</div>
			</nav>
		</header>
<?php $email = get_field('emailadres', 'option'); ?>
<div class="big-footer">
		<div class="container">
				<div class="row">
						<div class="col-lg-4">
							<div class="footer-links">
								<h3>Links</h3>
								<?php $args = array(
									'theme_location'  => 'footer-menu',
									'container'       => 'div',
									'container_class' => ' ',
									'container_id'    => 'menu',
									'menu_class'      => 'navbar-nav',
									'item_class'      => 'nav-item'
								);
								wp_nav_menu($args); ?>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="footer-contact">
								<h3>Contact</h3>
								<ul class="contact-list">
									<li><a href="<?php echo antispambot( $email ); ?>"><?php echo antispambot( $email ); ?></a></li>
									<li><a href="tel:<?php the_field('telefoonnummer', 'option'); ?>"><?php the_field('telefoonnummer', 'option'); ?></a></li>
									<li><?php the_field('straat_huisnummer', 'option'); ?> <br> <?php the_field('postcode', 'option'); ?> <?php the_field('plaats', 'option'); ?></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="footer-logo">
								<?php $footer_img = get_field('footer_logo', 'option'); ?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
									<img src="<?php echo $footer_img['url']; ?>" class="logo" alt="<?php echo $footer_img['alt']; ?>">
								</a>
								<?php the_field('footer_tekst', 'option');
								
								$facebook = get_field('facebook_link', 'option');
								$instagram = get_field('instagram_link', 'option');
								$whatsapp = get_field('whatsapp_link', 'option'); 
								
								if( $facebook ) { ?>
									<a href="<?php echo $facebook; ?>" target="_blank" class="social-icons">
										<img src="../../wp-content/themes/cross-pro/img/icon/facebook-icon.svg" height="30px" width="30px" alt="Facebook">
									</a>
								<?php }

								if( $instagram ) { ?>
									<a href="<?php echo $instagram; ?>" target="_blank" class="social-icons">
										<img src="../../wp-content/themes/cross-pro/img/icon/instagram-icon.svg" height="30px" width="30px" alt="Instagram">
									</a>
								<?php } 

								if( $facebook ) { ?>
									<a href="<?php echo $whatsapp; ?>" target="_blank" class="social-icons">
										<img src="../../wp-content/themes/cross-pro/img/icon/whatsapp-icon.svg" height="30px" width="30px" alt="Facebook">
									</a>
								<?php } ?>
						
							</div>
						</div>
				</div>
		</div>
</div>

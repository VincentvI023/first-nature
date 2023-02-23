<footer>
  <div class="contact-info-bar">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <?php $phone = get_field('telefoonnummer', 'option'); ?>
          <h4><a href="tel:<?php echo antispambot( $phone ); ?>"><?php echo antispambot( $phone ); ?></a></h4>
        </div>
        <div class="col-md-4">
          <h4>- Contact -</h4>
        </div>
        <div class="col-md-4">
          <?php $email = get_field('emailadres', 'option');?> 
          <h4><a href="mailto:<?php echo antispambot( $email ); ?>"><?php echo antispambot( $email ); ?></a></h4>
        </div>
      </div>
    </div>
  </div>
  <div class="big-footer" >
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="extra-info">
            <?php 
              if( have_rows('footer_info', 'option') ):
                  while ( have_rows('footer_info', 'option') ) : the_row();
                      $item_type = get_sub_field('item_type', 'option');
                      $item = get_sub_field('item', 'option');
                      $item_link = get_sub_field('item_link', 'option'); ?>

                      <p>
                        <?php if(!empty($item_link)) : ?>
                            <a href="<?php echo esc_url($item_link); ?>">
                                <?php echo esc_html($item_type); ?>: <?php echo esc_html($item); ?>
                            </a>
                        <?php else: ?>
                            <?php echo esc_html($item_type); ?>: <?php echo esc_html($item); ?>
                        <?php endif; ?>
                      </p>

              <?php endwhile;
              endif; ?>
            <div class="green-line-footer"></div>
          </div>
        </div>
        <div class="col-md-6">
            <div class="logo-footer">
              <h2 class="logo-text">First Nature</h2>
              <img src="/wp-content/themes/first-nature/img/first-nature-groen.png" class="logo-img" alt="Logo First Nature ">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>


<?php wp_footer(); ?>

<script>
  AOS.init();
  
</script>

</body>
</html>

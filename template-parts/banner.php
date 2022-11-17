<?php
  $thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

  if ( is_front_page() ) {
      $banner_title = get_the_title();
  } elseif ( is_archive() || is_category() ) {
      $banner_title = get_the_archive_title();
  } elseif ( is_search() ) {
      $banner_title = sprintf( esc_html( "Zoek resultaten voor: %s" ) , get_search_query() );
  } else {
      $banner_title = get_the_title();
  } ?>

  <?php	if( has_post_thumbnail() ) { ?>
    <section class="banner-image" style="background-image: url('<?php echo $thumbnail_url; ?>'); ">
        <div class="banner-content">
            <h1><?php echo $banner_title; ?></h1>
        </div>
        <span class="overlay"></span>
    </section>

    <?php } else { ?>
      <section id="banner" class="banner-default-image">
        <div class="banner-content">
            <h1><?php echo $banner_title; ?></h1>
        </div>
          <span class="overlay"></span>
      </section>
    <?php } ?>

<?php 
$image_1 = get_sub_field('image_1');
$image_2 = get_sub_field('image_2');
$image_3 = get_sub_field('image_3');
?>

<div class="container-fluid no-gutters three-images">
    <h2 class="three-img-title" data-aos="faded-up"><?php the_sub_field('title'); ?></h2>
  <div class="row">
    <div class="col-sm-4" style="background-image: url(<?php echo $image_1 ?>);"></div>
    <div class="col-sm-4" style="background-image: url(<?php echo $image_2 ?>);"></div>
    <div class="col-sm-4" style="background-image: url(<?php echo $image_3 ?>);"></div>
  </div>
</div>
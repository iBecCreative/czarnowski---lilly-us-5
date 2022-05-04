<?php
  $slides = get_sub_field('slides');
  
?>

<div class="productCarousel">
  <?php
    foreach ($slides as $slide) {
      // echo '<pre>';
      // print_r($slide);
      // echo '</pre>';
      ?>
      <div class="productCarousel__slide">
        <img data-lazy="<?= $slide['image']['url'] ?>" data-zoom="1" alt="<?php echo $slide['image']['alt'] ?>">
        <?php //echo $slide['image']['description']; ?>
      </div>
      <?php
    }
  ?>
</div>
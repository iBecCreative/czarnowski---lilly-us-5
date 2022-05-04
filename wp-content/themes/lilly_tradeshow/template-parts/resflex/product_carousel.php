<?php
  $slides = get_sub_field('slides');
?>

<div class="productCarousel">
  <?php
    foreach ($slides as $slide) {
      ?>
      <div class="productCarousel__slide">
        <img data-lazy="<?= $slide['image']['url'] ?>" data-zoom="1">
      </div>
      <?php
    }
  ?>
</div>
<?php
  $banner_image = get_sub_field('image');
  $banner_link = get_sub_field('link');
  $options = get_sub_field('link_options');
  //print_r($banner_link);

  $classes = 'banner';
  if (isset($options[0]) && $options[0] == 'modal') {
     $classes .= ' openInModal';
  }
?>


<div class="<?= $classes ?>">
  <a href="<?= $banner_link['url'] ?>" target="<?= $banner_link['target'] ?>">
    <img src="<?= $banner_image['url'] ?>" />
  </a>
  <?php
    //if video
    if ( strpos($banner_link['url'], '.mp4') ) {
  ?>      

    <div class="videoModal" style="display: none;">
      <div class="videoModal__inner">
        <div class="pdfModal__close">╳</div>
        <video id="video" preload="auto" controls width="100%" height="auto">
          <source src="<?= $banner_link['url'] ?>" type="video/mp4">
        </video>
      </div>
    </div>

  <?php
    }
  ?>
</div>

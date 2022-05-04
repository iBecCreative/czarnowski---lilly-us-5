<?php
  // PRODUCT lINKS that might appear on product pages ex: cyramza
  $links = get_sub_field('links');
?>
<div class="padded">
  <?php
    foreach ($links AS $link) {
      ?>
      <a href="<?= get_the_permalink($link['link']) ?>">
        <img src="<?= get_the_post_thumbnail($link['link']); ?>" />
        <p class=""><?= get_the_title($link['link']) ?></p>
      </a>
      <?php
    }
  ?>
</div>

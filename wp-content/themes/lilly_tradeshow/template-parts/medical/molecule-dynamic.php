<?php
  /* Dynamic, reusable block for the bottom of the molecule landing and detail pages (uses ACF) */
  $highlight_sidebar = get_field('highlight_sidebar');
  $buttons = $highlight_sidebar['buttons'];

  $parentId = $post->post_parent;
  $linkToParent = get_permalink($parentId);

?>

<div class="clippy clippy--left clippy--buttons" data-aos="fade-right" data-aos-anchor-placement="center-bottom"
  data-aos-mirror="false" data-aos-easing="ease-in-out" data-aos-once="false">
  <p class="sidebar-text"> <?= $highlight_sidebar['text'] ?></p>

  <div style="display:flex;">
    <img src="<?= $highlight_sidebar['image']['url'] ?>" />
    <div class="trialLinks">
      <ul>
        <?php foreach ($buttons AS $button) { ?>
        <li>
          <a href="<?= $button['link']['url'] ?>"><h6><?= $button['label'] ?></h6><span><?php echo $button['link']['title']; ?></span></a>
        </li>
        <?php } ?>
        <li class="back"><a href="<?= $linkToParent ?>">Back to Molecule Overview</a></li>
      </ul>
    </div>
  </div>
</div>
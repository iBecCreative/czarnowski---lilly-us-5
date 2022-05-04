<?php
  $title = get_field('tradeshow_title');
  $banners = get_field('tradeshow_banner');
  $tradeshow = get_field('tradeshow');
?>
<div class="section_white">
  <div class="tradeshow">
    <h3><?= $title ?></h3>
    <div class="tradeshow-container">
      <div class="banners">
        <?php
        foreach ($banners AS $banner) {
          ?>
          <a href="<?= $banner['link']['url'] ?>">
          <div class="banner-container">
            <div class="banner">
                <div class="banner-text">
                <h3 class="title"><?= $banner['title'] ?></h3>
                <?php if ($banner['subtitle']): ?>
                  <div class="banner-subtitle" ><?= $banner['subtitle'] ?></div>
                <?php endif; ?>
                </div>
                <?php if ($banner['image']): ?>
                  <img src="<?= $banner['image']['url'] ?>" />
                <?php endif; ?>
            <p class="link-text"> <?= $banner['link_text'] ?></p>
            </div>
          </div>
          </a>
          <?php
        }
        ?>
        
      </div>
        <div class="clippy clippy--right clippy--buttons" data-xaos="fade-left" data-xaos-anchor-placement="top-bottom" data-xaos-mirror="true" data-xaos-easing="ease-in-out" data-xaos-once="false">
          <p class="sidebar-text"> <?= $tradeshow['sidebar_text'] ?></p>
          <div class="clippy-buttons">
            <a class="button" href="<?php echo get_bloginfo('url'); ?>/medical-homepage/resources/">Find Resources</a>
            <a class="button" href="<?php echo get_bloginfo('url'); ?>/medical-homepage/resources#diagnostics">Diagnostics for RET</a>
          </div>
          <img src="<?= $tradeshow['sidebar_image']['url'] ?>" />
        </div>
    </div>
  </div>
</div>

<?php
  // PRODUCT lINKS that go to specific product posts
  $highlights = get_field('highlights');
  $highlight_sidebar = get_field('highlight_sidebar');
  $buttons = $highlight_sidebar['buttons'];
?>
<div class="section_gray section_gray--transparent">
  <div class="highlights">
    <div style="position:relative;">
      <h3>Highlights</h3>
      <div class="clippy clippy--left clippy--buttons" data-xaos="fade-right" data-xaos-anchor-placement="center-bottom" data-xaos-mirror="true" data-xaos-easing="ease-in-out" data-xaos-once="false">
          <p class="sidebar-text"> <?= $highlight_sidebar['text'] ?></p>
          
          <div style="display:flex;">
            <img src="<?= $highlight_sidebar['image']['url'] ?>" />
            <div class="clippy-buttons">
            <?php
              foreach ($buttons AS $button) {
            ?>
              <a class="button" href="<?= $button['link']['url'] ?>"><?= $button['label'] ?></a>
            <?php
              }
            ?>
            </div>
          </div>
      </div>  
    </div>
    <div class="highlights-container">
      <div class="highlightsHeader">
        <img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/ibex/images/highlightHeader.jpg" alt="a crowd of people">
        <p class="title">Lilly Scientific Presentations</p>
        <div>
          <p>Lilly invites you to virtually view our presentations at the Lilly Scientific Program <a href="https://lillyscience.lilly.com/congress/AmOncMtgJun2021" target="_blank"  class="external" >LillyScience.Lilly.com</a></p>
          <p>You can also learn about our most recent scientific developments on this site <a href="<?php echo get_bloginfo('url'); ?>/medical-homepage/scientific-program-for-the-2021-asco-annual-meeting/">Lilly Scientific Presentations</a></p>
        </div>
      </div>
      <?php
        foreach ($highlights AS $highlight) {
          // print_r($highlight);
          ?>
          <div class="highlight">
            <a href="<?= $highlight['link']['url'] ?>">
              <img src="<?= $highlight['image']['url'] ?>" />
              <p class="title"><?= $highlight['link']['title'] ?></p>
              <p><?= $highlight['subtitle'] ?></p>
            </a>
          </div>
          <?php
        }
      ?>
    </div>
  </div>
</div>

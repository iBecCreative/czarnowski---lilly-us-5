<?php
  /* Static, reusable block for the bottom of the molecule landing and detail pages (no ACF) */

  //active link class
  $uri = $_SERVER['REQUEST_URI'];
  echo '<style>.clippy.clippy--left.clippy--buttons .clippy-buttons a[href="'.$uri.'"]{background-color:#D52B1E;color:#ffffff;pointer-events:none;cursor:default;}</style>';
?>

<div class="clippy clippy--left clippy--buttons aos-init aos-animate" data-aos="fade-right" data-aos-anchor-placement="center-bottom" data-aos-mirror="true" data-aos-easing="ease-in-out" data-aos-once="false">
  <p class="sidebar-text"> Learn more about our molecules under investigation:</p>
  <div style="display:flex;">
    <img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/2021/05/Pin-Monitor.png">
      <div class="clippy-buttons">
        <a class="button" href="<?php echo get_bloginfo('url'); ?>/medical-homepage/featured-molecules/cdk4-6-inhibitor/">CDK4 &amp; 6</a>
        <a class="button" href="<?php echo get_bloginfo('url'); ?>/medical-homepage/featured-molecules/ret-inhibitor/">RET Inhibitor</a>
        <a class="button" href="<?php echo get_bloginfo('url'); ?>/medical-homepage/featured-molecules/selective-er-degrader/">Selective ER Degrader</a>
        <a class="button" href="<?php echo get_bloginfo('url'); ?>/medical-homepage/featured-molecules/btk-inhibitor/">BTK Inhibitor</a>
        <a class="button" href="<?php echo get_bloginfo('url'); ?>/medical-homepage/featured-molecules/vegf-receptor-2-antagonist/"><span class="font12">VEGF Receptor-2 Antagonist</span></a>
        <a class="button" href="<?php echo get_bloginfo('url'); ?>/medical-homepage/featured-molecules/"><span class="font14">All Featured Molecules</span></a>
      </div>
  </div>
</div>
<?php
  /* Static, reusable block for the bottom of the molecule landing and detail pages (no ACF) */
?>

<div class="discover">
  <div class="section_white">
    <div class="discover__disclaimer">
      <p>The safety and efficacy of the agents under investigation have not been established. There is no guarantee that the agents will receive regulatory approval and become commercially available for the uses being investigated.</p>
    </div>
    <h2>
      Discover more about Lilly at #ASCO21
    </h2>
    <div class="product_grid product_grid--discover">
      <div class="product_containter">
        <a href="<?php echo get_bloginfo('url'); ?>/medical-homepage/featured-molecules/cdk4-6-inhibitor/">
          <img src="/wp-content/uploads/2021/05/abemaciclib_rgb_1486x450_150dpi-2.png" alt="Abemaciclib Clinical Trials Learn about the trials for this CDK4 & 6 inhibitor">
          <h3>Abemaciclib Clinical Trials</h3>
          <p>Learn about the trials for this CDK4 & 6 inhibitor</p>
        </a>
      </div>
      <div class="product_containter">
        <a href="<?php echo get_bloginfo('url'); ?>/medical-homepage/featured-molecules/ret-inhibitor/">
          <img src="/wp-content/uploads/2021/05/Group-2875.png" alt="Selpercatinib is a RET inhibitor under investigation">
          <h3>Selpercatinib</h3>
          <p>Selpercatinib is a RET inhibitor under investigation  </p>
        </a>
      </div>
      <div class="product_containter">
        <a href="<?php echo get_bloginfo('url'); ?>/medical-homepage/investigator-initiated-research/">
          <img src="/wp-content/uploads/2021/05/Group-28806.png" alt="For Investigators External researchers may request support from Lilly">
          <h3>For Investigators</h3>
          <p>External researchers may request support from Lilly</p>
        </a>
      </div>
      <?php
        foreach ($products AS $product) {
          ?>
          <div class="product_containter">
              <?php $post_object = $product['product'];
                    $featured_img_url = get_the_post_thumbnail($post_object->ID); 
                    $product_name = $product['product']->post_title;
                    $product_link = get_permalink($post_object->ID);
              ?>
              <a href="<?php echo $product_link ?>">
                <?php echo $featured_img_url ?>
                <p class="title"><?php echo esc_html($product_name) ?><sup>&reg;</sup></p>
              </a>
          </div>
          <?php
        }
      ?>
    </div>
  </div>

</div>

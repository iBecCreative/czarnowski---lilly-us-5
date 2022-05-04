<?php
  $discover = get_field('discover');
  $products = $discover['product_links'];
?>

<div class="discover">
  <div class="section_white">
    <div class="discover__disclaimer">
      <p><?php echo $discover['disclaimer'] ?></p>
    </div>
    <h2>
      Discover more about Lilly at ASCO 2021
    </h2>
    <div class="product_grid product_grid--discover">
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

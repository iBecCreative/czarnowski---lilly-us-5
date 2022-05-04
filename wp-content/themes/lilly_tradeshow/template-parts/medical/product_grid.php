<?php
  $products = get_field('product_links');
?>
<div class="section_white">
  <div class="product_grid">
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
              <?php if ($product['sub_text']): ?>
                <p> <?php echo esc_html( $product['sub_text']); ?></p>
              <?php endif; ?>
              <?php if ($product['additional_text']): ?>
                <?php echo $product['additional_text']; ?>
              <?php endif; ?>
            </a>
        </div>
        <?php
      }
    ?>
  </div>
</div>

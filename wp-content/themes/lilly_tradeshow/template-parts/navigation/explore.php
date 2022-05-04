<?php
  $discover = get_field('discover');
  $products = $discover['product_links'];
?>
  <?php
      if ($products) { ?>

      <div class="product_wrapper">
        <div class="max-width">
          <h3 class="section-heading">Explore Medical</h2>
        </div>

      <div class="product_carousel"> 

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
                  <p class="title"><?php echo $product_name ?></p>
                  <a class="learn" href="<?php echo $product_link;?>">Learn More</a>
                  <?php if ($product['sub_text']): ?>
                    <p> <?php echo $product['sub_text']; ?></p>
                  <?php endif; ?>
                </a>
                <?php if ($product['additional_text']): ?>
                    <?php echo $product['additional_text']; ?>
                <?php endif; ?>
            </div>
            <?php
          }
        ?>

      </div>
    <?php 
      }
    ?>
  </div>

  <div class="discover">
    <div class="section_white">
      <div class="discover__disclaimer">
        <p><?php echo $discover['disclaimer'] ?></p>
      </div>
    </div>
  </div>
  
  </div>

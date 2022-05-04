<?php
  //General WYSIWYG content
  $title = get_sub_field('title');
  $instructions = get_sub_field('instructions');
  $resources = get_sub_field('resources');

?>

<div class="resources section_gray">
  <div class="resources_container">
    <div class="title">
      <h2 id="resources"><?= $title ?></h2>
      <p>
        <?= $instructions ?>
      </p>
    </div>

    <div class="contents">
    <?php
      foreach ($resources as $resource) {
          // print '<pre>';
          // print_r($resource);
          // print '</pre>';
    ?>
      <div class="resource">
        <img class="resource-icon" src="<?= $resource['icon']['url'] ?>" />
        <div class="resource-text">
          <p class="resource-title" ><?= $resource['title'] ?></p>
          <div class="links">
            <?php if (is_array($resource['file'])) { ?>
            <a class="view openModal" href="#0" data-resource="<?= $resource['title'] ?>"><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/ibex/svg/specs.svg" alt="spectacles"><img class="hover" src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/ibex/svg/specs--red.svg" alt="spectacles">VIEW&nbsp;DOCUMENT</a>
            <a class="addToCart" data-product="<?= get_the_title() ?>" data-type="product" data-title="<?= $resource['title'] ?>" data-href="<?= $resource['file']['url'] ?>" href="#0"><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/ibex/svg/bcase-small.svg" alt="briefcase"><img class="hover" src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/ibex/svg/bcase-small--red.svg" alt="briefcase">ADD&nbsp;TO&nbsp;BRIEFCASE</a>
            <?php } ?>
          </div>
        </div>
      </div>

    <?php
      }//end foreach resource
    ?>
    </div>
  </div>
</div>

<!-- resource sliders -->
<?php 
foreach ($resources as $resource) {
?>

  <div class="pdfModal" style="" data-resource="<?= $resource['title'] ?>">
    <div class="pdfModal__inner">
      <div class="pdfModal__close">╳</div>
      <p class="pdfModal__title"><?= $resource['title'] ?></p>
      <a class="addToCart" data-product="<?= get_the_title() ?>" data-type="product" data-title="<?= $resource['title'] ?>" data-href="<?= $resource['file']['url'] ?>" href="#0"><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/ibex/svg/bcase-small.svg" alt="briefcase"><img class="hover" src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/ibex/svg/bcase-small--red.svg" alt="briefcase">ADD TO BRIEFCASE</a>
      <div class="resourceSlider">

        <?php 
          $images = $resource['images'];
          if (is_array($images)) {
            foreach ($images as $image) {
        ?>

        <div class="resourceSlide">
          <img src="<?= $image['url'] ?>">
        </div>

        <?php
            }//end foreach image
          }//endif
        ?>

      </div>
    </div>
  </div>

<?php
}
?>

<script>
  $(document).ready(function(){
    $('.resourceSlider').slick({
      lazyLoad: false,
      draggable: false,
      infinite: true
    });
  });
</script>

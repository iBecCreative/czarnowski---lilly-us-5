<?php
  //General WYSIWYG content
  $title = get_sub_field('title');
  $instructions = get_sub_field('instructions');
  $resources = get_sub_field('resources');

  
?>
<?php if ($bigRow == 'false'):?>
<div id="resources" class="cardBlock">


 <?php endif; ?>
      <h2><?= $title ?></h2>
      <p>
        <?= $instructions ?>
      </p>


      <?php 
      foreach ($resources as $resource) {
          // print '<pre>';
          // print_r($resource);
          // print '</pre>';
        ?>

    <div class="cardBlock__card <?php if ($bigRow == 'true'): ?> cardBlock__card--large<?php endif; ?>">
      <div class="cardBlock__intro">
        <img src="<?= $resource['icon']['url'] ?>" />

 


      <p class="card__title"><?= $resource['title'] ?></p>
      <?php if ( $resource['subtitle'] ): ?><p class="card__subTitle"><?= $resource['subtitle'] ?></p><?php endif; ?>
        </div>
      <?php if (is_array($resource['file'])) { ?>
      <div class="card__links">
        <a class="card__view openModal" href="#0" data-resource="<?= $resource['title'] ?>">View Document</a>
        <a class="card__add addToCart" data-product="<?= get_the_title() ?>" data-type="medical" data-title="<?= $resource['title'] ?>" data-href="<?= $resource['file']['url'] ?>" href="#0">Add to Briefcase</a>
      </div>
      <?php } ?>
    </div>


    <?php
      }//end foreach resource
    ?>

<?php if ($bigRow == 'false'):?>
</div> <?php endif; ?>
<!-- resource sliders -->
<?php 
foreach ($resources as $resource) {
?>

  <div class="pdfModal" style="" data-resource="<?= $resource['title'] ?>">
    <div class="pdfModal__inner">
      <div class="pdfModal__close">╳</div>
      <p class="pdfModal__title"><?= $resource['title'] ?></p>
      <a class="addToCart" data-product="<?= get_the_title() ?>" data-type="medical" data-title="<?= $resource['title'] ?>" data-href="<?= $resource['file']['url'] ?>" href="#0"><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/ibex/svg/bcase-small.svg" alt="briefcase"><img class="hover" src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/ibex/svg/bcase-small--red.svg" alt="briefcase">ADD TO BRIEFCASE</a>
      
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


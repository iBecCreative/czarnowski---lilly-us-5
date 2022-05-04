<?php
/**                                               Template Name: Medical Disclosures Page
*                                                 Template Post Type: page, post
*                       *                         @package WordPress
*        *                  .'.  _       *        @subpackage lilly_tradeshow
*                         ."   '' '.              @since 1.0.0
*               *       .*     .. '*.`*._
*                     _/    _.*'._..*''`._'*      *        .'.        *
*   *               ,'8                 _.*'.`_          ."   '' '.
*                _.*8                         `'\ .'.._         .. '*.`*._
*     *       /8'\         .*8  .. '*.         .*8  .. '*.         .*''`._'*
*          .'/8   \_   _.*'._                     .. '*.`*._         `'\ .'..__
*      _.*' .        '*.             .*8  ..                 \_   -------------
*    .*8  .. '*.                         .*8  .. '*.           `*._------------
*_.*'._                            .*8  ..                          `*._-------
*______________________________________________________________________________
*                       Lilly_tradeshow theme by iBec Creative */

get_header();

$resources = get_field('resources');
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<style>
  .cardBlock img {
    border: 2px solid #eeeeee;
  }

  .cardBlock__card {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
  .page-template-downloadable_resources,
  .page-template-medical_resources {
    background: url(/wp-content/themes/lilly_tradeshow/ibex/svg/x-bg.svg) no-repeat top center;
    background-size: 100%;
  }

  .pdfModal__inner {
    text-align: center;
  }

  .addToCart {
    display: inline-block !important;
    text-indent: 26px;
    background: url(/wp-content/themes/lilly_tradeshow/ibex/images/download-gray.svg) no-repeat left center;
  }


  .addToCart.added {
    background: url(/wp-content/themes/lilly_tradeshow/ibex/svg/added.svg) no-repeat left center;
    text-indent: 28px;
    color: #ee3a2a;
  }

  .addToCart.added img,
  .addToCart img {
      display: none !important;
      
    }
    .page-template-medical_resources h1,
    .cardBlock__card--large .card__title {
      font-family: "FFDINWebProLight", sans-serif;
    }

.clippy {
  float: right;
    margin-top: -140px;
    width: 268px;
    text-decoration: none;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
}

.clippy p {
  font-family: "FFDINWebProCondensedBold", sans-serif;
  text-decoration: none;

}

</style>


<main id="site-content" class="x-background x-background--left" role="main" style="background-position: 0% -3%;">

  <div class="content">

    <div class="flex">

        <div class="flex__left">
            <h1>Medical Disclosures</h1>
            <h6 style="font-style: italic;">Presentation Compendium</h6>
            <p>October 3-5, 2021</p>
        </div>

        <div class="flex__right">
            <p style="max-width: 450px;"><img style="cursor:pointer;" onclick="window.open('https://lillyscience.lilly.com/congress/uegw2021','_blank');" class="alignleft size-full wp-image-1875" src="../../wp-content/uploads/2021/09/qr.png" alt="QR Code" width="80" height="80" />For a complete list of Eli Lilly’s e-posters and presentations, please click this QR code or visit <a style="display: inline; text-transform: none; font-size: 12px; margin-left: 0;" href="https://lillyscience.lilly.com/congress/uegw2021" target="_blank">https://lillyscience.lilly.com/congress/uegw2021</a>. This selection will remain active for 180 days after the congress presentation date.</p>
            
            <?php 
        foreach ($resources as $resource) {
            // print '<pre>';
            // print_r($resource);
            // print '</pre>';
          ?>

    <?php if (is_array($resource['file'])) { ?>
      <div class="flex">
          <a class="card__view openModal" href="#0" data-resource="<?= $resource['title'] ?>"><img src="<?php echo bloginfo('stylesheet_directory');?>/ibex/images/glasses.png">View Document</a>
          <a class="download_doc" href="<?= $resource['file']['url'] ?>" target="_blank" download><img src="<?php echo bloginfo('stylesheet_directory');?>/ibex/images/download-gray.svg">Download Document</a>
        </div>
     <?php } ?>

      <?php
        }//end foreach resource
      ?>
      
        </div>

    </div>

    <div class="content__right" style="max-width: 710px !important;">
      <?php the_content(); ?>
    </div>

  </div>

  <?php
    // additional links to other pages (will be the same on all pages)
    get_template_part( 'template-parts/navigation/explore' );
    ?> 


</main><!-- #site-content -->


<?php 
foreach ($resources as $resource) {
?>

  <div class="pdfModal" style="" data-resource="<?= $resource['title'] ?>">
    <div class="pdfModal__inner">
      <div class="pdfModal__close">╳</div>
      <p class="pdfModal__title"><?= $resource['title'] ?></p>
      <a class="addToCart" href="<?= $resource['file']['url'] ?>" target="_blank" download><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/ibex/images/download-gray.svg" alt="download icon">DOWNLOAD DOCUMENT</a>
      
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
<?php get_footer(); ?>

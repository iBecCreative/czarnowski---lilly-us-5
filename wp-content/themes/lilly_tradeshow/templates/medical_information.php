<?php
/**                                               Template Name: Medical Information
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
?>

<main id="site-content" class="x-background x-background--left" role="main">

  <div class="content">
            <h1>Medical Information</h1>

    <div class="content__wrapper">
        <img src="<?php echo bloginfo('stylesheet_directory');?>/ibex/images/medical_information-banner.jpg">
        <a href="https://www.lillymedical.com" class="medical-info" target="_blank">Visit lillymedical.com</a>
    </div>

  </div>

  <?php
    // additional links to other pages (will be the same on all pages)
    get_template_part( 'template-parts/navigation/explore' );
    ?> 


</main><!-- #site-content -->

<?php get_footer(); ?>
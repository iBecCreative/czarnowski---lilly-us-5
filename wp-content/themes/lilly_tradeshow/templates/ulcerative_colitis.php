<?php
/**                                               Template Name: Ulcerative Colitis
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

<main id="site-content" role="main">
  <div class="ulc_background">
    <div class="ulc_content">
        <div class="ulc_content--wrap">
            <p class="ulc_date">EVENT — 23 MAY 2022</p>
             <h1 class="ulc_title">Elevating Ulcerative Colitis Treatment Expectations<br><em>Time to Expect More</em></h1>
            <p class="ulc_loc">Grand Ballroom, Omni San Diego Hotel,<br>San Diego, CA</p>
        </div>
      </div>
    </div>
     
    <div class="ulc content__wrapper">
        <?php echo the_content(); ?>
    </div>
  <?php
    // additional links to other pages (will be the same on all pages)
    get_template_part( 'template-parts/navigation/explore' );
    ?> 


</main><!-- #site-content -->

<?php get_footer(); ?>
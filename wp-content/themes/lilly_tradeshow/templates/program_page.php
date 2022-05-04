<?php
/**                                               Template Name: Program Page
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

    <h1>Scientific Program<br>for the 2021 ASCO Annual Meeting</h1>

    <div class="content__left">
      <h6>Lilly SCIENTIFIC Presentations and Posters</h6>
      <p>June 4-8, 2021  /  Virtual Event</p>
    </div>

    <div class="content__right">
      <?php the_content(); ?>
    </div>

  </div>

  <?php
    // additional links to other pages (static, will be the same on all pages)
	  get_template_part( 'template-parts/medical/discover-static' );
  ?>


</main><!-- #site-content -->

<?php get_footer(); ?>
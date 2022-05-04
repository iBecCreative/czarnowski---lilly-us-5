<?php
/**                                               Template Name: Medical Information Page
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

<main id="site-content" class="x-background x-background--right" role="main">

  <div class="content">

    <h1><?php the_title(); ?></h1>

    <?php the_content(); ?>

    <div class="clippy clippy--right aos-init aos-animate" data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-mirror="false" data-aos-easing="ease-in-out" data-aos-once="false">
      <p class="sidebar-text">Are you finding our site valuable? Rate us here:</p>
      <div class="ratingWrapper">
        <form class="rating">
          <span class="rating__stars">
            <input name="rating" type="radio" id="rating-5" class="rating__star"/><label for="rating-5"></label>
            <input name="rating" type="radio" id="rating-4" class="rating__star"/><label for="rating-4"></label>
            <input name="rating" type="radio" id="rating-3" class="rating__star"/><label for="rating-3"></label>
            <input name="rating" type="radio" id="rating-2" class="rating__star"/><label for="rating-2"></label>
            <input name="rating" type="radio" id="rating-1" class="rating__star"/><label for="rating-1"></label>
          </span>
        </form>
        <img src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/2021/05/Pin-click.png">
      </div>
    </div>

  </div>

  <?php
  // additional links to other pages (static, will be the same on all pages)
  get_template_part( 'template-parts/medical/discover-static' );
  ?>

</main><!-- #site-content -->

<?php get_footer(); ?>
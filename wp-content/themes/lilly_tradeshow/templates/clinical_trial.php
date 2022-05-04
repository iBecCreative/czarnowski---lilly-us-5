<?php
/**                                               Template Name: Clinical Trial
*                                                 Template Post Type: page
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
*                    								   Lilly_tradeshow theme by iBec Creative */

get_header();

if($post->post_parent) {
  $title = get_the_title($post->post_parent);
}
else {
  $title = get_the_title($post->ID);
}

?>

<main id="site-content" role="main">
  
  <div class="x-background x-background--top">

    <div class="content">
      
      <div class="content__left">
        <h1><?php echo $title; ?></h1>
        <h5>Clinical Trial</h5>
        <h3><?php the_title(); ?></h3>
        <?php 
          the_field('column_left');
          get_template_part( 'template-parts/medical/molecule-dynamic' );
        ?>
      </div>
    
      <div class="content__right">
        <?php 
          the_field('column_right');
        ?>
      </div>

    </div>

    <?php
      // additional links to other pages (static, will be the same on all pages)
	    get_template_part( 'template-parts/medical/discover-static' );
    ?>

  </div>

</main><!-- #site-content -->

<?php get_footer(); ?>
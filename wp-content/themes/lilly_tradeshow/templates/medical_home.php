<?php
/**                                               Template Name: Medical Homepage
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
?>

<main id="site-content" role="main">
	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			// header carousel
			get_template_part( 'template-parts/medical/carousel' );

			?> <div class="x-background"> <?php
			// Link to Each Interior Page for the Medical Side
			get_template_part( 'template-parts/medical/highlights' );

			// tradeshow Links
			get_template_part( 'template-parts/medical/tradeshow' );

			// Curated Twitter Feed
			get_template_part( 'template-parts/medical/twitter_feed' );

			// additional links to other pages (will be the same on all pages)
			get_template_part( 'template-parts/navigation/discover' );
			?> </div> <?php
		}
	}
	?>

</main><!-- #site-content -->

<?php get_footer(); ?>

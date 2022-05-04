<?php
/**                                               Template Name: Medical Highlight
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
*                       Lilly_tradeshow theme by iBec Creative */

get_header();
?>
<main id="site-content" role="main">
	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			echo '<div class="">';
				// sidebar will stay static to the left of scrollable content
				get_template_part( 'template-parts/medical/sidebar' );
			echo '</div>
			<div>';
				// flexible content for general interior
				get_template_part( 'template-parts/flexible' );
			echo '</div>';
			// additional links to other pages (will be the same on all pages)
			get_template_part( 'template-parts/navigation/discover' );
		}
	}
	?>
</main><!-- #site-content -->
<?php get_footer(); ?>

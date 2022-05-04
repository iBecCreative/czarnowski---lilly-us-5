<?php
/**                                               Template Name: Sitemap Page
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
  
  <div>

    <div class="content">
      
      <div class="sidebar sidebar--left">
        <h1><?php the_title(); ?></h1>
      </div>
    
      <div class="content__main">
        <?php //the_content();//WYSIWYG is killin me here ?>

		<h3><a href="<?php echo get_bloginfo('url'); ?>/">Home</a></h3>
		<hr>
		<h3><a href="<?php echo get_bloginfo('url'); ?>/medical-affairs/">Medical Affairs</a></h3>
		<div class="columns_sitemap">
			<ul class="sitemapLinks">
				<li><a href="<?php echo get_bloginfo('url'); ?>/medical-affairs/">Home</a></li>
				<li><a href="<?php echo get_bloginfo('url'); ?>/medical-affairs/pipeline/">Pipeline</a></li>
				<li><a href="<?php echo get_bloginfo('url'); ?>/medical-affairs/clinical-trials/">Clinical Trials</a></li>
				<li><a href="javascript:void(0)">Disease State</a>
				<p class="sublink"><a href="<?php echo get_bloginfo('url'); ?>/medical-affairs/conversations-about-bowel-urgency/">A Candid Conversation About Bowel Urgency</a></p>
					<p class="sublink"><a href="<?php echo get_bloginfo('url'); ?>/medical-affairs/bowel-urgency-quiz/">Bowel Urgency Quiz</a></p>
					<p class="sublink"><a href="<?php echo get_bloginfo('url'); ?>/medical-affairs/il-23-and-pathophysiology-of-ibd/">IL-23 and Pathophysiology of IBD video</a></p>
				</li>
			</ul>

			<ul class="sitemapLinks">
				<li><a href="<?php echo get_bloginfo('url'); ?>/medical-affairs/medical-information/">Medical Information</a></li>
			</ul>
		</div>
		<hr>

		<h3><a href="<?php echo get_bloginfo('url'); ?>/ask-about-urgency">Bowel Urgency in UC</a></h3>
		<ul class="sitemapLinks">
		    <li><a href="<?php echo get_bloginfo('url'); ?>/ask-about-urgency">Ask About Urgency</a></li>
			<li><a href="<?php echo get_bloginfo('url'); ?>/urgency-anonymous">Urgency Anonymous</a></li>
		</ul>

      </div>

    </div>

  </div>

</main><!-- #site-content -->

<?php get_footer(); ?>

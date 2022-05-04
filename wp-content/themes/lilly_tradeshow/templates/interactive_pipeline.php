<?php
/**                                               Template Name: Interactive Pipeline
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

<!-- <link rel="stylesheet" href="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/pipeline/pipeline.css"> -->

<main id="site-content" role="main">

	<div class="content">
		<h1><?php the_title(); ?></h1>
	</div>

	<div class="pipelineMasthead">

		<img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/pipeline/images/pipeline-bg2@2x.jpg" alt="molecules" class="pipelineMasthead__image">
		<div class="inactiveHover">Please visit <em>lilly.com</em><br>for future<br>announcements.</div>
		<div class="pipelineMolecules">
			<div class="phase1">
				<a href="#0" data-slide=""><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/pipeline/images/purple1.png" alt=""></a>
				<a href="#0" data-slide=""><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/pipeline/images/purple2.png" alt=""></a>
				<a href="#0" style="visibility:hidden;" data-slide=""><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/pipeline/images/purple3.png" alt=""></a>
				<a href="#0" data-slide=""><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/pipeline/images/purple4.png" alt=""></a>
				<a href="#0" data-slide=""><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/pipeline/images/purple6.png" alt=""></a>
			</div>
			<div class="phase2">
				<a href="#0" class="ph2_pd1" data-slide="Lilly-Pipeline-MSL-2019-029"><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/pipeline/images/green1.png" alt=""></a>
				<!-- <a href="#0" data-slide=""><img src="<?php //echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/pipeline/images/green2.png" alt=""></a> -->
				<a href="#0" class="ph2_il2" data-slide="Lilly-Pipeline-MSL-2019-020"><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/pipeline/images/green3.png" alt=""></a>
				<a href="#0" class="ph2_cxcr" data-slide="Lilly-Pipeline-MSL-2019-017"><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/pipeline/images/green5.png" alt=""></a>
			</div>
			<div class="phase3">
				<!-- <a href="#0" class="ph3_jak" data-slide="Lilly-Pipeline-MSL-2019-005"><img src="<?php //echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/pipeline/images/blue1.png" alt=""></a> -->
				<a href="#0" class="ph3_il13" data-slide="Lilly-Pipeline-MSL-2019-002"><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/pipeline/images/blue2.png" alt=""></a>
				<a href="#0" class="ph3_il23" data-slide="Lilly-Pipeline-MSL-2019-011"><img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/pipeline/images/blue3.png" alt=""></a>
			</div>
		</div>

		<div class="pipelineSidebar">
			<ul class="pipelineSidebar__links">
				<li><a href="#0" class="pipelineSidebar__link pipelineSidebar__link--blue" data-phase="3"><span class="hoverView">View </span>Phase <span class="numberBall">3</span></a><span class="close">╳</span></li>
				<li><a href="#0" class="pipelineSidebar__link pipelineSidebar__link--green" data-phase="2"><span class="hoverView">View </span>Phase <span class="numberBall">2</span></a><span class="close">╳</span></li>
				<li><a href="#0" class="pipelineSidebar__link pipelineSidebar__link--purple" data-phase="1"><span class="hoverView">View </span>Phase <span class="numberBall">1</span></a><span class="close">╳</span></li>
			</ul>
			<div class="pipelineSidebar__text">
				<p>Since the creation of this tactic, the Lilly development pipeline has been updated. For full details on the current version of the pipeline, please see:<br><a href="https://www.lilly.com/discovery/pipeline" style="color:#7D706D;" target="_blank">https://www.lilly.com/discovery/pipeline</a></p><br>

				<p><sup>*</sup>Lilly has exclusive rights for development and commercialization of lebrikizumab in the United States and rest of world outside Europe. Almirall has licensed the rights to develop and commercialize lebrikizumab for the treatment of dermatology indications, including atopic dermatitis, in Europe.</p>
				
				<p><a href="https://www.lilly.com/discovery/clinical-development-pipeline" target="_blank" style="color:#7D706D;">https://www.lilly.com/discovery/clinical-development-pipeline</a> (Accessed April 2022).</p>

				<p>The information included here reflects Eli Lilly and Company’s clinical development pipeline and is updated on a quarterly basis. For the most up-to-date information, please visit: <a href="https://www.lilly.com/discovery/clinical-development-pipeline" target="_blank" style="color:#7D706D;">www.lilly.com/discovery/clinical-development-pipeline</a>. It is not intended for promotional purposes and includes both new molecular entities as well as select new indications or line extensions of currently approved products that are in clinical development. There are significant risks and uncertainties in pharmaceutical research and development. Scientific and regulatory hurdles may cause pipeline molecules to be discontinued or delayed, or fail to reach the market. There can be no guarantee that pipeline molecules will receive regulatory approval or that they will prove to be commercially successful, and they should not be considered safe and effective for their studied uses prior to regulatory approvals. Information is current as of January 31, 2022.</p>
				<p>VV-Centralized Congress-US-DEL-0605 April 2022. © 2022 Eli Lilly and Company. All rights reserved.</p>
			</div>
		</div>
	</div>

	<div class="explore">
		<?php
			// All Featured Content
			get_template_part( 'template-parts/navigation/explore' );
		?>
	</div>

</main><!-- #site-content -->

<div class="pipelineModal">
	<div class="pipelineModal__content">

	</div>
</div>

<!-- <script src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/pipeline/pipeline.js"></script>
<script src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/pipeline/app.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script> -->

<?php get_footer(); ?>

<?php
/**                                               Template Name: Urgency Homepage
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
			get_template_part( 'template-parts/urgency/carousel' );

			?> <div class="u-background"> <?php
			// All Urgency Story Videos
			get_template_part( 'template-parts/urgency/stories' );

			// Bowel Urgency CTA
			get_template_part( 'template-parts/urgency/cta' );
			?> </div> <?php
		}
	}
	?>

</main><!-- #site-content -->
<script>

/*OWL*/
//check for owl carousel script (or include script globally)
if (typeof $('.owl-carousel').owlCarousel === "function") { 

$('.owl-carousel').owlCarousel({
	stagePadding: 200,
	loop:true,
	margin:10,
	items:1,
	nav:true,
  responsive:{
		0:{
			items:1,
			stagePadding: 60
		},
		600:{
			items:1,
			stagePadding: 100
		},
		1000:{
			items:1,
			stagePadding: 200
		},
		1200:{
			items:1,
			stagePadding: 250
		},
		1400:{
			items:1,
			stagePadding: 300
		},
		1600:{
			items:1,
			stagePadding: 350
		},
		1800:{
			items:1,
			stagePadding: 400
		}
	}
});

}

var playerSettings = {
  controls : ['play-large'],
  fullscreen : { enabled: false},
  resetOnEnd : true,
  hideControls  :true,
clickToPlay:true,
  keyboard : false,
}

//check for plyr
if (typeof Plyr !== "undefined") {

const players = Plyr.setup('.js-player', playerSettings);

 players.forEach(function(instance,index) {
			instance.on('play',function(){
				players.forEach(function(instance1,index1){
				  if(instance != instance1){
						instance1.pause();
					}
				});
			});
		});

$('.video-section').on('translated.owl.carousel', function (event) {
  players.forEach(function(instance,index1){
				  instance.pause();
				});
});

}
	</script>
<?php get_footer(); ?>

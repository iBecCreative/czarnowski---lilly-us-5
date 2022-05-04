<?php
/**                                               Template Name: IL-23 Page
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

			?> 
    <section class="overlay-banner il">
      <div class="overlay-banner__overlay">
        <h1>IL-23 and Pathophysiology of IBD</h1>
        <div class="play__container">
         <div class="videoThumb vidLink" data-vidLink="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/ibex/video/il-video.mp4"><img src="<?php echo bloginfo('stylesheet_directory');?>/ibex/images/play.png"></div>
        </div>
      </div>
        <!-- <video class="overlay-banner__banner"  width="1280" height="720" autoplay="autoplay" loop="loop" muted="" playsinline="">
          <source src="< ?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/ibex/video/video.mp4" type="video/mp4">
        Your browser does not support the video tag.
        </video> -->
    </section>
            
            <?php


			// additional links to other pages (will be the same on all pages)
			get_template_part( 'template-parts/navigation/explore' );
			?> <?php
		}
	}
	?>

</main><!-- #site-content -->

<?php get_footer(); ?>

<div id="watchVid" class="videoModal hidden">
  <div class="videoWrapper">
	  <h3 class="videoTitle"></h3>
    <a id="closeVid" href="#close"><div class="pdfModal__close">╳</div></a>
    <div id="video" style="width:900px;height: 506px;">
      <iframe id="kaltura_player_1555157968" src="https://www.kaltura.com/p/1759891/sp/175989100/embedIframeJs/uiconf_id/34164591/partner_id/1759891?iframeembed=true&playerId=kaltura_player_1555157968&entry_id=1_ln4tu6tz&wid=_1759891&flashvars[leadWithHTML5]=true&flashvars[sideBarContainer.plugin]=true&flashvars[sideBarContainer.position]=left&flashvars[sideBarContainer.clickToClose]=true&flashvars[chapters.plugin]=true&flashvars[chapters.layout]=vertical&flashvars[chapters.thumbnailRotator]=false&flashvars[streamSelector.plugin]=true&flashvars[EmbedPlayer.SpinnerTarget]=videoHolder&flashvars[dualScreen.plugin]=true" width="560" height="395" allowfullscreen webkitallowfullscreen mozAllowFullScreen allow="autoplay *; fullscreen *; encrypted-media *" frameborder="0"></iframe>
    </div>
  </div>
</div>

  <script type="text/javascript" src="https://cdnapisec.kaltura.com/p/1759891/sp/175989100/embedIframeJs/uiconf_id/34164591/partner_id/1759891"></script>

  
  <script>
    const vidLink = document.getElementsByClassName('vidLink');
    const closeVid = document.getElementById('closeVid');
    const video = document.getElementById('video');
    const vidModal = '#watchVid';


var il;
$(document).ready(function(){
    kWidget.embed({
        'targetId': 'kaltura_player_1555157968',
        'wid': '_1759891',
        'uiconf_id' : '34164591',
        'entry_id' : '1_1441qz6t',
        'flashvars': {
            'autoPlay': false
        },
        readyCallback: function( pID ){
            il = document.getElementById(pID);
            }
      });
    });

    $(vidLink).click(function(e){
      
	  e.preventDefault();
      var vidUrl = $(this).attr('data-vidlink');
      var dataID = $(this).attr('data-id');
	    var vidTitle = $(this).attr('data-title');
	  
    $('.videoTitle').html(vidTitle);
      $(vidModal).removeClass('hidden');
      $(video).children('iframe').attr('src', vidUrl);
      $(video).children('iframe').attr('id', dataID);
      // video.load();
      // video.play();
      il.sendNotification("doPlay");
    })

    $(closeVid).click(function(e){
	  e.preventDefault();
      // video.pause();
      $(vidModal).addClass('hidden');
        il.sendNotification("doStop");
    });
    

  </script>
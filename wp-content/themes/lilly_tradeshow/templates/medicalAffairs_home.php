<?php
/**                                               Template Name: Medical Affairs Homepage
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

			?> <div class="medicalAffairs__wrapper"> <?php
			// All Featured Content
			get_template_part( 'template-parts/medicalAffairs/blocks' );

			// additional links to other pages (will be the same on all pages)
			get_template_part( 'template-parts/navigation/explore' );
			?> </div> <?php
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
      <iframe id="kaltura_player_264149018" src="" width="560" height="395" allowfullscreen webkitallowfullscreen mozAllowFullScreen allow="autoplay *; fullscreen *; encrypted-media *" frameborder="0"></iframe>
    </div>
  </div>
</div>

  <script type="text/javascript" src="https://cdnapisec.kaltura.com/p/1759891/sp/175989100/embedIframeJs/uiconf_id/34164591/partner_id/1759891"></script>

  
  <script>
    const vidLink = document.getElementsByClassName('vidLink');
    const closeVid = document.getElementById('closeVid');
    const video = document.getElementById('video');
    const vidModal = '#watchVid';


var lotus;
$(document).ready(function(){
    kWidget.embed({
        'targetId': 'kaltura_player_264149018',
        'wid': '_1759891',
        'uiconf_id' : '34164591',
        'entry_id' : '1_2p1wlz4z',
        'flashvars': {
            'autoPlay': false
        },
        readyCallback: function( pID ){
            lotus = document.getElementById(pID);
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
      lotus.sendNotification("doPlay");
    })

    $(closeVid).click(function(e){
	  e.preventDefault();
      // video.pause();
      $(vidModal).addClass('hidden');
        lotus.sendNotification("doStop");
    });
    

  </script>
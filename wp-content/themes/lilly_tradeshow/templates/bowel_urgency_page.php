<?php
/**                                               Template Name: Bowel Urgency Quiz
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
			<div class="quiz">
				<div class="quiz__hero">
					<div class="quiz__hero--container">
						<h1>Test your knowledge on Bowel Urgency</h1>
						<div class="videoThumb vidLink btn-red" data-vidLink="https://lillyibdquiz8.remedica.com/">Check Knowledge</a>
					</div>
				</div>
			</div>
			<?php
			// All Featured Content
			//get_template_part( 'template-parts/medicalAffairs/feature' );

			// additional links to other pages (will be the same on all pages)
			get_template_part( 'template-parts/navigation/explore' );
			?> <?php
		}
	}
	?>

</main><!-- #site-content -->

<div id="watchVid" class="videoModal hidden">

    <div class="videoWrapper">
	  <h3 class="videoTitle"></h3>
      <a id="closeVid" href="#close"><div class="pdfModal__close">╳</div></a>

      <iframe id="video" width="1108" height="539" style="max-width:100%;" src="" frameborder="0"></iframe>

    </div>
  </div>

  <script>
    const vidLink = document.getElementsByClassName('vidLink');
    const closeVid = document.getElementById('closeVid');
    const video = document.getElementById('video');
    const vidModal = '#watchVid';

    $(vidLink).click(function(e){
      
	  e.preventDefault();
      var vidUrl = $(this).attr('data-vidlink');
	  var vidTitle = $(this).attr('data-title');
	  $('.videoTitle').html(vidTitle);
      $(vidModal).removeClass('hidden');
      $(video).attr('src', vidUrl);
      video.load();
      video.play();
  
    })


    $(closeVid).click(function(e){
	  e.preventDefault();
      //video.pause();
      $(vidModal).addClass('hidden');
    });

  </script>
<?php get_footer(); ?>

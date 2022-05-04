<?php
/**                                               Template Name: Molecule Landing
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
  
  <div class="x-background">

    <div class="content">
      
      <div class="sidebar sidebar--left">
        <h1><?php the_title(); ?></h1>
      </div>
    
      <div class="content__main">
        <?php the_content(); ?>
      </div>

    </div>

    <?php
      // additional links to other pages (static, will be the same on all pages)
			get_template_part( 'template-parts/medical/discover-static' );
    ?>

  </div>

<?php
/*if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		?> 
		<div class="x-background"> 
			<?php
			// additional links to other pages (will be the same on all pages)
			get_template_part( 'template-parts/navigation/discover' );
			?> 
		
		</div> 
		
		<?php
	}
}*/
?>

</main><!-- #site-content -->

<!-- <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script> -->

<?php get_footer(); ?>

  <div id="watchVid" class="videoModal hidden">
    <div class="videoWrapper">
	  <h3 class="videoTitle"></h3>
      <a id="closeVid" href="#close"><div class="pdfModal__close">╳</div></a>
      <video id="video" width="900" height="506" controls>
        <source src="" type="video/mp4">
      Your browser does not support the video tag.
      </video>
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
      $(video).children('source').attr('src', vidUrl);
      video.load();
      video.play();
  
    })



    $(closeVid).click(function(e){
	  e.preventDefault();
      video.pause();
      $(vidModal).addClass('hidden');
    });
    

  </script>
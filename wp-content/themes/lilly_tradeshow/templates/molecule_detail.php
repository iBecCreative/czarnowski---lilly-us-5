<?php
/**                                               Template Name: Molecule Detail
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

$subtitle = get_field('molecule_subtitle');

?>

<main id="site-content" role="main">
  
  <div class="x-background x-background--left">

    <a class="backLink" href="<?php echo get_bloginfo('url'); ?>/featured-molecules">Back to Featured Molecules</a>

    <div class="content">
      
      <div class="content__left">
        <h1><?php the_title(); ?></h1>
        <h3><?= $subtitle ?></h3>
        <?php 
          the_field('column_left');
          get_template_part( 'template-parts/medical/molecule-static' );
        ?>
      </div>
    
      <div class="content__right">
        <?php 
          the_field('column_right');
          the_field('trial_links');
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
      console.log('asdfasdfasdf');
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
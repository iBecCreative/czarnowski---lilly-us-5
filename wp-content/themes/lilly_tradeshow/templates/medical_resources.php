<?php
/**                                               Template Name: Medical Resources
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<style>
  .cardBlock img {
    border: 2px solid #eeeeee;
  }

  .cardBlock__card {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
  .page-template-downloadable_resources,
  .page-template-medical_resources {
    background: url(/wp-content/themes/lilly_tradeshow/ibex/svg/x-bg.svg) no-repeat top center;
    background-size: 100%;
  }

  .pdfModal__inner {
    text-align: center;
  }

  .addToCart {
    display: inline-block !important;
    text-indent: 26px;
    background: url(/wp-content/themes/lilly_tradeshow/ibex/svg/bcase-small.svg) no-repeat left center;
  }


    .addToCart:hover {
      background: url(/wp-content/themes/lilly_tradeshow/ibex/svg/bcase-small--red.svg) no-repeat left center;
    }



  .addToCart.added {
    background: url(/wp-content/themes/lilly_tradeshow/ibex/svg/added.svg) no-repeat left center;
    text-indent: 28px;
    color: #ee3a2a;
  }

  .addToCart.added img,
  .addToCart img {
      display: none !important;
      
    }
    .page-template-medical_resources h1,
    .cardBlock__card--large .card__title {
      font-family: "FFDINWebProLight", sans-serif;
    }

    .discover__disclaimer p {
      color: #000;
    }

.clippy {
  float: right;
    margin-top: -140px;
    width: 268px;
    text-decoration: none;
    display: flex;
    flex-direction: column;
    align-items: flex-end;
}

.clippy p {
  font-family: "FFDINWebProCondensedBold", sans-serif;
  text-decoration: none;

}

</style>
<main id="site-content" role="main">
<section class="downloadable-resources">
<?php if ( have_posts() ) {
		while ( have_posts() ) { 
    
      the_post();
      echo '<h1>' . get_the_title() . '</h1>';

     
      if( have_rows('resflex')) {
        while( have_rows('resflex') ) {
          the_row();
				// flexible content for general interior
        set_query_var( 'bigRow', 'false');
				get_template_part( 'template-parts/resflex' );
        }
      }
	
			// list of approved products in a specific order (posts)
				//get_template_part( 'template-parts/navigation/approved_list' );

				
				//echo 'title = ' . $title;
				$body_classes = get_body_class();
				//echo 'classes = '; 
				//print_r($body_classes);
    }		
	}
	?>

<a href="mailto:" class="clippy clippy--right aos-init aos-animate" data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-mirror="true" data-aos-easing="ease-in-out" data-aos-once="false">
          <p class="sidebar-text">Click here to send this resource page to a colleague.</p>
          <img src="/wp-content/themes/lilly_tradeshow/ibex/images/pin-envelope.png">
</a>

        
</section>
  
    <section class="downloadable-resources retBG">
      <h1>RET Testing</h1>

      <?php 	
      if( have_rows('resflexret')) {
        while( have_rows('resflexret') ) {

          the_row();

          set_query_var( 'bigRow', 'true');
          get_template_part( 'template-parts/resflex' );
          
        }
      }
      ?>

      


      </section>

      <section class="downloadable-resources" id="diagnostics">
        <h1>Diagnostics for RET</h1>

<?php 	
      if( have_rows('resflexdiag')) {
        while( have_rows('resflexdiag') ) {
          the_row();
          set_query_var( 'bigRow', 'false');
          get_template_part( 'template-parts/resflex' );
          
        }
      }
      ?>

       
        
    </section>


<?php
      // additional links to other pages (static, will be the same on all pages)
	  get_template_part( 'template-parts/medical/discover-static' );
    ?>
    

</main><!-- #site-content -->
<script>
  $(document).ready(function(){
    $('.resourceSlider').slick({
      lazyLoad: false,
      draggable: false,
      infinite: true
    });
  });
</script>

<?php get_footer(); ?>

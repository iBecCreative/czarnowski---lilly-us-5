<?php
// This pulls in non-specific flexible content for filling out product pages
  
 
      if( get_row_layout() == 'wysiwyg' ) {
        get_template_part('template-parts/resflex/wysiwyg');
      } else if (get_row_layout() == 'product_resources') {
        get_template_part( 'template-parts/resflex/product_resources' );
      } else if (get_row_layout() == 'product_links') {
        get_template_part( 'template-parts/resflex/product_links' );
      } else if (get_row_layout() == 'product_carousel') {
        get_template_part( 'template-parts/resflex/product_carousel' );
      } else if (get_row_layout() == 'product_banner') {
        get_template_part( 'template-parts/resflex/product_banner' );
      }

?>

<?php
// This pulls in non-specific flexible content for filling out product pages

  if( have_rows('flex')) {
    while( have_rows('flex') ) {
      the_row();
      if( get_row_layout() == 'wysiwyg' ) {
        get_template_part('template-parts/flexible/wysiwyg');
      } else if (get_row_layout() == 'product_links') {
        get_template_part( 'template-parts/flexible/product_links' );
      } else if (get_row_layout() == 'product_carousel') {
        get_template_part( 'template-parts/flexible/product_carousel' );
      } else if (get_row_layout() == 'product_resources') {
        get_template_part( 'template-parts/flexible/product_resources' );
      } else if (get_row_layout() == 'product_banner') {
        get_template_part( 'template-parts/flexible/product_banner' );
      }
    }
  }
?>

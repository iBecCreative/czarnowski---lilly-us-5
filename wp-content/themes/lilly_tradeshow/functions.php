<?php

/** Functions              *                                        *
*        *                  .'.  _       *               *
*                         ."   '' '.
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
*                       Lilly_tradeshow theme by iBec Creative */

function scripts_setup() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20160601', true);
    wp_enqueue_script('loading', get_template_directory_uri() . '/js/loading.js', array('jquery'), '20160601', true);
    wp_enqueue_script('gallery', get_template_directory_uri() . '/js/gallery.js', array('jquery'), '20160601', true);
    //wp_enqueue_script('cookie', "https://cdn.jsdelivr.net/npm/js-cookie@3.0.0-rc.1/dist/js.cookie.min.js", array(), '20160601', true);
    wp_enqueue_script('cookie', get_template_directory_uri() . "/js/js.cookie.min.js", array(), '20160601', true);
    wp_enqueue_script('analytics', get_template_directory_uri() . '/js/analytics.js', array('jquery'), '20160601', true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '20160601', true);
    wp_enqueue_style( 'typekit', 'https://use.typekit.net/ocb3mzp.css' );
}
add_action('wp_enqueue_scripts', 'scripts_setup');

function theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption'
    ));

    // Navigation Menus
    register_nav_menus(array(
        'primary-navigation'    => esc_html__('Primary Navigation', 'lilly'),
    ));
}
add_action('after_setup_theme', 'theme_setup');

//display description fields on menu items
function prefix_nav_description( $item_output, $item, $depth, $args ) {
    if ( !empty( $item->description ) ) {
        $item_output = str_replace( $args->link_after . '</a>', '<br><span class="menu-item-description">' . $item->description . '</span>' . $args->link_after . '</a>', $item_output );
    }
    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'prefix_nav_description', 10, 4 );


// from https://wordpress.stackexchange.com/questions/2802/display-a-portion-branch-of-the-menu-tree-using-wp-nav-menu
// add_filter( 'wp_nav_menu_objects', 'submenu_limit', 10, 2 );
//
// function submenu_limit( $items, $args ) {
//     if ( empty( $args->submenu ) ) {
//         return $items;
//     }
//     $ids       = wp_filter_object_list( $items, array( 'title' => $args->submenu ), 'and', 'ID' );
//     $parent_id = array_pop( $ids );
//     $children  = submenu_get_children_ids( $parent_id, $items );
//
//     foreach ( $items as $key => $item ) {
//         if ( ! in_array( $item->ID, $children ) ) {
//             unset( $items[$key] );
//         }
//     }
//     return $items;
// }
//
// function submenu_get_children_ids( $id, $items ) {
//     $ids = wp_filter_object_list( $items, array( 'menu_item_parent' => $id ), 'and', 'ID' );
//     foreach ( $ids as $id ) {
//         $ids = array_merge( $ids, submenu_get_children_ids( $id, $items ) );
//     }
//     return $ids;
// }


function js_plugins(){
  ?>
  <!-- JQuery -->
  <!--<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <?php
}
add_action('wp_head', 'js_plugins');

// Slick Slider
function slick_plugin() {
  ?>
  <script type="text/javascript" src="<?=get_template_directory_uri() ?>/slick/slick.min.js"></script>

  <!-- General Mastheads -->
  <script type="text/javascript">
    $(document).ready(function(){
      $('.productCarousel').slick({
        dots: true,
        lazyLoad: 'ondemand',
        draggable: false
      });
      // On before slide change
      $('.productCarousel').on('afterChange', function(event, slick, currentSlide, nextSlide){
        //show prev arrow
        if (currentSlide == 0) {
          $('.slick-prev').css({
            opacity: '0',
            pointerEvents: 'none'
          });
        }
        else {
          $('.slick-prev').css({
            opacity: '1',
            pointerEvents: 'all'
          });
        }

      });
    });

    //on init product page slider
    //detach slick dots and move them to the top section
    $('.productCarousel').on('init', function(slick) {
      let dots = $('.slick-dots').detach();
      $('.productTop__dots').append(dots);
    });

    $(document).ready(function(){
      $('.medical_carousel').slick({
        infinite: true,
        speed: 800,
        autoplay: true,
        autoplaySpeed: 8000
      });
    });

    $(document).ready(function(){
      $('.brand_carousel').slick();
    });

    $(document).ready(function(){
      $('.product_carousel').slick({
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
          {
            breakpoint: 1000,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true
            }
          }
        ]
      });
    });
  </script>
  <?php
}
add_action('wp_footer', 'slick_plugin');

// Backend Content

// Backend Content Additions
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}

// Add buttons to the wysiwyg
function wdm_add_mce_button() {
  if ( !current_user_can( 'edit_posts' ) &&  !current_user_can( 'edit_pages' ) ) {
    return;
  }
 // check if WYSIWYG is enabled
 if ( 'true' == get_user_option( 'rich_editing' ) ) {
   add_filter( 'mce_external_plugins', 'wdm_add_tinymce_plugin' );
   add_filter( 'mce_buttons', 'wdm_register_mce_button' );
   // add_filter( 'mce_buttons', 'wdm_register_mce_calendar_button' );
  }
}
add_action('admin_head', 'wdm_add_mce_button');

// register new button in the editor
function wdm_register_mce_button( $buttons ) {
  array_push( $buttons, 'wdm_mce_button' );
  return $buttons;
}

// declare a script for new buttons
// the script will insert the shortcode on the click event
function wdm_add_tinymce_plugin( $plugin_array ) {
  $plugin_array['wdm_mce_button'] = get_stylesheet_directory_uri() .'/js/wdm-mce-button.js';
  return $plugin_array;
}

add_shortcode('button', 'insert_button');
function insert_button( $atts = []) {
	$content = '<a href="' . $atts['address'] .'" class="button">' . $atts['text'] .'</a>';
  return $content;
}

// returns small buttons to the wysiwyg
function return_removed_buttons( $buttons ) {
	$buttons[] = 'superscript';
	$buttons[] = 'subscript';
	return $buttons;
}
add_filter( 'mce_buttons', 'return_removed_buttons' );

/**
 * Add the chat and briefcase icon links to top menu
 */
function add_icon_links( $items, $args )
{

  if($args->menu == 'top-menu') {

    // $items .= '<li class="icon icon--cart menu-item"><a href="#0"><img class="empty" height="28" width="30" alt="Briefcase icon" src="' . get_bloginfo('url') . '/wp-content/themes/lilly_tradeshow/ibex/images/cart.svg"><img class="full" height="28" width="30" alt="Briefcase icon" src="' . get_bloginfo('url') . '/wp-content/themes/lilly_tradeshow/ibex/images/cart--full.svg"><span class="qty"></span></a></li>';
    // $items .= '<li class="hoverBoxContainer"><div class="hoverBox"><p>View Briefcase</p></div></li>';

    $temp = get_page_template_slug($post);
    if (
      $temp == 'templates/urgency_home.php' ||
      $temp == 'templates/medicalAffairs_home.php' ||
      $temp == 'templates/bowel_urgency_page.php' ||
      $temp == 'templates/il_page.php' ||
      $temp == 'templates/ask_about_urgency.php' ||
      $temp == 'templates/medical_disclosures.php' ||
      $temp == 'templates/medical_information.php' ||
      $temp == 'templates/clinical_trials.php' ||
      $temp == 'templates/urgencyConversations.php' ||

      $temp == 'templates/schedule_meeting.php'
    ) {
      // $items .= '<li class="icon icon--calendar menu-item"><a href="' . get_bloginfo('url') . '/schedule-a-meeting/"><img height="28" width="30" alt="Calendar icon" src="' . get_bloginfo('url') . '/wp-content/themes/lilly_tradeshow/ibex/svg/calendarIcon.svg"></a></li>';
      // $items .= '<li class="hoverBoxContainer"><div class="hoverBox"><img height="28" width="30" alt="Calendar icon" src="' . get_bloginfo('url') . '/wp-content/themes/lilly_tradeshow/ibex/svg/calendarIcon--red.svg"><p>Click to schedule a meeting with a Medical Science Liason</p><div class="pdfModal__close">╳</div></div></li>';
    }
    //$items .= '<p>' . $temp . '</p>';
    //$items .= '<li class="icon icon--chat menu-item"><a title="Chat" href="#0">CHAT ICON HERE</a></li>';

  }
  return $items;

}
add_filter( 'wp_nav_menu_items', 'add_icon_links', 10, 2);
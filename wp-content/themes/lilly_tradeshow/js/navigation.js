
jQuery(document).ready(function($) {
  $( ".mobile-menu .menu-item-has-children" ).click(
    function(e) {
      if ( $(this).hasClass("show-sub-menu") ) {
        //submenu is already open, let this act as a link
      }
      else {
        //open submenu, prevent link
        e.preventDefault();
        $( ".show-sub-menu" ).toggleClass( "show-sub-menu" );
        $( this ).toggleClass( "show-sub-menu" );
      }
    }
  );
});

jQuery(document).ready(function($) {
  $( ".nav-menu .menu-item-has-children" ).mouseenter(
    function() {
      $( this ).addClass( "show-sub-menu" );
    }
  );
  $( ".nav-menu > .menu-item-has-children" ).mouseleave(
    function() {
      $( this ).removeClass( "show-sub-menu" );
    }
  );
});

jQuery(document).ready(function($) {
  $( ".trigram" ).click(
    function(e) {
      $( "#site-navigation-mobile" ).toggleClass( "mobile-visible" );
      $( ".header__container" ).toggleClass( "mobile-trigram" );
      $(this).toggleClass('active');
      if ( $(this).hasClass('active') ) {
        $(this).html('✕');
      }
      else {
        $(this).html('☰');
      }
    }
  );
});

jQuery(document).ready(function($) {
  $( ".collapsable" ).click(
    function() {
      $( this ).toggleClass( "collapsable-expanded" );
    }, function() {
      $( this ).toggleClass( "collapsable-expanded" );
    }
  );
});

/*
megaMenu
  megaMenu__content
  sub-menu
*/
//Add extra markup/content to primary menu
jQuery(document).ready(function($) {
  //wrap submenu 
  $('#primary-navigation .mega-menu .sub-menu').wrap('<div class="megaMenu"></div>');
  $('#primary-navigation .mega-menu .sub-menu .sub-menu').unwrap();
  //add megamenu content
  $('#primary-navigation .approvedProducts .sub-menu:first-child').before(
    `<div class="megaMenu__close">╳</div>
    <div class="megaMenu__content">
      <h2>Medical<br>Affairs</h2>
      <p>Welcome to the Lilly Gastroenterology Virtual Exhibit.</p>
      <p>Our goal is to provide an opportunity to stay informed on the latest available medical information from Lilly. Please use the Menu on the right to navigate within the virtual medical booth. Thank you for your time exploring this virtual exhibit.</p>
      <p>By clicking any of these links, you will be entering the Medical Affairs portion of this exhibit. </p>
      <p>We look forward to seeing you again soon.</p>
    </div>`
  );
  // $('#primary-navigation .medical .sub-menu').append(
  //   `<div class="references_container">
  //     <p class="references"><strong>References</strong></br>
  //     <strong>1.</strong> Hibi T, Ishibashi T, Ikenoue Y, Yoshihara R, Nihei A, Kobayashi T. Ulcerative colitis: disease burden, impact on daily life, and reluctance to consult medical professionals: results from a Japanese internet survey. <em>Inflamm Intest Dis.</em> 2020;5:27–35. doi:10.1159/000505092 <strong>2.</strong> Petryszyn PW, Paradowski L. Stool patterns and symptoms of disordered anorectal function in patients with inflammatory bowel diseases. <em>Adv Clin Exp Med.</em> 2018;27(6):813–818. doi:10.17219/acem/68986</p>
  //   </div>`
  // );
  $('#primary-navigation .medical .sub-menu:first-child').before(
    `<div class="megaMenu__close">╳</div>
    <div class="megaMenu__content">
      <h2 style="color:#fff;">Urgency Anonymous</h2>
      <p style="color:#fff;">There are patients with ulcerative colitis (UC) who suffer from bowel urgency in silence<sup>1,2</sup>. It’s time to hear their stories and break the silence. Ask about bowel urgency at every visit.</p>
      <p style="color: #fff;">By clicking into this link, you will be entering the Urgency Anonymous portion of this exhibit.</p>
    </div>`
  );
  $('#primary-navigation .medical .sub-menu').append(
    `<div class="references_container">
      <p class="references"><strong>References</strong></br>
      <strong>1.</strong> Hibi T, Ishibashi T, Ikenoue Y, Yoshihara R, Nihei A, Kobayashi T. Ulcerative colitis: disease burden, impact on daily life, and reluctance to consult medical professionals: results from a Japanese internet survey. <em>Inflamm Intest Dis.</em> 2020;5:27–35. doi:10.1159/000505092 <strong>2.</strong> Petryszyn PW, Paradowski L. Stool patterns and symptoms of disordered anorectal function in patients with inflammatory bowel diseases. <em>Adv Clin Exp Med.</em> 2018;27(6):813–818. doi:10.17219/acem/68986</p>
    </div>`
  );
 
  //close menu event listener
  $('.megaMenu__close').on('click', function(e){
    $('li').removeClass('show-sub-menu');
  });

  //contactUs menu
  $('.btn.contactUs').on('click', function(e){
    $('.contactUsMenu').toggleClass('active');
  });
  $('.contactUsMenu__close').on('click', function(e){
    e.preventDefault();
    $('.contactUsMenu').removeClass('active');
  });

  //cart icon event listener
  $('.icon--cart, .cart__close').on('click', function(e){
    e.preventDefault();
    $('.cart').toggleClass('active');
    //hide chat if cart is open
    if ($('.cart').hasClass('active')) {
      $('.crisp-client').css('display', 'none');
    }
    else {
      $('.crisp-client').css('display', 'block');
    }
  });

  //pure css hover instead
  // $('body').on('click', '.hoverBox .pdfModal__close', function(e){
  //   $(this).parents('.hoverBoxContainer').removeClass('active');
  // });

  $('body').on('click', '.hoverBoxContainer.firstVisit .pdfModal__close', function(e){
    $('.hoverBoxContainer').removeClass('active').removeClass('firstVisit');
    $('.alertBanner').removeClass('active');
  });

  //hide default link titles
  // $('.menu-item.icon a["title"]').on('mouseenter', function(e){
  //   e.preventDefault();
  // });

});

//changing this to a css hover, and removing the X... just a bad UX decision
// var timer;
// $('.icon--calendar').on('mouseenter', function(e){
//   window.clearTimeout(timer);
//   $(this).next('.hoverBoxContainer').addClass('active'); 
// }).on('mouseleave', function(e){ 
//   timer = setTimeout(function(e){
//     $('.icon--calendar').next('.hoverBoxContainer').removeClass('active'); 
//   }, 1500);
// });

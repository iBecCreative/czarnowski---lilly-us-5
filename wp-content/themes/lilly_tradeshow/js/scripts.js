// MODALS
// set HCP on healthcare provider modal "yes"
// Cookies usage: https://github.com/js-cookie/js-cookie
// Cookies.get('name'); // => 'value'
// Cookies.set('name', 'value');
// Cookies.remove('name');


// Cookies.remove('HCP');
$('.dismissModal--hcp').on('click', function (e) {
    e.preventDefault();
    Cookies.set('HCP', true);
    $('.modal--hcp').remove();
    $('body').removeClass('modalActive');
//Custom event for Yess Button
    //window.dataLayer = window.dataLayer || [];
    //function gtag(){dataLayer.push(arguments);}
    //gtag('js', new Date());

    // gtag('config', 'UA-192772895-11');
    // gtag('event', 'HCP Yes', {
    //   'event_label': 'Gateway_HCP_Link_Yes',
    //   'event_category': 'Gated Entry',
    //   'non_interaction': false
    // });
    gtag('event', 'Healthcare Professional?', {
        'event_label': 'Yes',
        'event_category': 'HCP Gate',
        'non_interaction': false
    });
});


$('.hackyBox').on('click', function(e){

    //get video name that was clicked
    let video = $(this).parents('.item').attr('data-video');
    //console.log(video);

    //if they have not clicked the heart this session i.e. no cookie
    if ( !Cookies.get(video) ) {
        //console.log('first time clicking, send GA event here');

    }

    if ( $(this).hasClass('active') ) {
        //console.log('is checked. unchecking, and setting cookie to false');
        $(this).removeClass('active');
        Cookies.set(video, false);
    }
    else {
        //console.log('is not checked. checking, and setting cookie to true');
        $(this).addClass('active');
        Cookies.set(video, true);
    }
});

$(document).ready(function(){

    if ( Cookies.get('HCP') ) {
        console.log('hcp = true');
        $('.modal--hcp').remove();
        $('body').removeClass('modalActive');
    }

    $('#myCarousel .item').each(function(index){
        let video = $(this).attr('data-video');
        //console.log(video);
        if ( Cookies.get(video) == 'true' ) {
            $(this).find('.hackyBox').addClass('active');
        }
    });
});

//super sticky ISI headers
// var fixmeTop = '0';//$('.isi h3:first-child').offset().top;       // get initial position of the element
// if ( $('.page-template-approved_product').length ) {
//     fixmeTop = '0';//'158'
// }
// console.log('fixmetop: '+fixmeTop);

// $(window).scroll(function() {                  // assign scroll event listener

//     var currentScroll = $(window).scrollTop(); // get current position
//     //console.log('cs: ' + currentScroll);
//     if (currentScroll > fixmeTop && currentScroll > 0) {
//         //console.log('fixed');
//         var elementHeight = $('.isi h3:first-child').outerHeight();
//         //console.log('elementheight: '+elementHeight);
//         var right = '16px';
//         if ($('.isi .verzenio').length || $('.isi .alimta').length) {
//             right = '9px';
//         }
//         // apply position: fixed if you
//         $('.isi h3:first-child').css({                      // scroll to that element or below it
//             position: 'fixed',
//             top: '158px',//'0',
//             right: right,
//             width: '320px'
//         });
//         $('.isi').css('padding-top', elementHeight);
//     } else {
//         //console.log('sticky');                // apply position: sticky
//         $('.isi h3:first-child').css({                      // if you scroll above it
//             position: 'sticky',
//             top: '0px'
//         });
//         $('.isi').css('padding-top', '0px');
//     }

// });

// //product slider zoom in
// $('.productTop__zoom .zoom--in').on('click', function (e) {
//     if (parseFloat($('.slick-slide.slick-current img').attr('data-zoom')) < 2.6) {
//         let zoom = parseFloat($('.slick-slide.slick-current img').attr('data-zoom')) + 0.5;
//         $('.slick-slide.slick-current img').css('transform', 'scale(' + zoom + ')');
//         $('.slick-slide.slick-current img').attr('data-zoom', zoom);

//         //if slide is zoomed in, add class and make it draggable
//         if ($('.slick-slide.slick-current img').attr('data-zoom') != '1') {
//             $('.slick-slide.slick-current').addClass('zoomed').draggable().draggable('enable');
//         } else {
//             $('.slick-slide.slick-current').removeClass('zoomed');
//         }
//     }
// });
// //product slider zoom out
// $('.productTop__zoom .zoom--out').on('click', function (e) {
//     if (parseFloat($('.slick-slide.slick-current img').attr('data-zoom')) > 1.1) {
//         let zoom = parseFloat($('.slick-slide.slick-current img').attr('data-zoom')) - 0.5;
//         $('.slick-slide.slick-current img').css('transform', 'scale(' + zoom + ')');
//         $('.slick-slide.slick-current img').attr('data-zoom', zoom);

//         //if slide is not zoomed in, remove class, draggable, reset position
//         if ($('.slick-slide.slick-current img').attr('data-zoom') != '1') {
//             $('.slick-slide.slick-current').addClass('zoomed');
//         } else {
//             $('.slick-slide.slick-current').removeClass('zoomed').css({'top':'0px', 'left':'0px'}).draggable('disable');
//         }
//     }
// });
// //product slider slide event
// $('.productCarousel').on('afterChange', function(event, slick, currentSlide, nextSlide){
//     //reset any zoomed in or draggable slides
//     $('.slick-slide').removeClass('zoomed').css({'top':'0px', 'left':'0px'}).draggable().draggable('disable');
//     $('.slick-slide img').css('transform', 'scale(1)');
//     $('.slick-slide img').attr('data-zoom', '1');

//     //if verzenio slide 4
//     console.log(currentSlide);
//     if ( $('.page-id-349').length && currentSlide == 4 ) {
//         //add imagemap for managing diarrhea button
//         console.log('slide');
//         //$('.page-id-349 #slick-slide44 img').attr('usemap', '#image_map');
//         //$('.page-id-349 #slick-slide44 img').after('<map name="image_map"><area alt="verzenioMap" title="verzenioMap" href="https://www.verzenio.com/hcp/safety-managing-diarrhea" coords="634,1210,1363,1313" shape="rect"></map>');
//         $('.page-id-349 #slick-slide44 img').after('<a class="verzenioButton" target="_blank" href="https://www.verzenio.com/hcp/safety-managing-diarrhea"><img src="https://lilly-virtual.com/immunology/us-5/wp-content/themes/lilly_tradeshow/ibex/images/verzenioButton.jpg"></a>');
//     }
// });

// //unbind the slickslider draggable event so we can use jQuery UI draggable
// $(function() {
//     $('*[draggable!=true]','.productCarousel .slick-track').unbind('dragstart');
// });
// $('.slick-slide.slick-current img').on('draggable mouseenter mousedown',function(e){
//     e.stopPropagation();
// });

// function resizeIframe(obj) {
//     console.log(obj.contentWindow.document.documentElement.scrollHeight);
//     console.log(obj.contentWindow.document.documentElement);
//     obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + 'px';
// }

//video modal
$('.openInModal').on('click', function(e){
    e.preventDefault();
    //e.stopPropagation();

    if ( $(this).find('.videoModal').css('display') == 'none' ) {
        const height = $(this).outerHeight();
        const width = $(this).outerWidth();
        $(this).addClass('active');
        $(this).find('.videoModal').css({
            display: 'block',
            height: height / 1.78,
            width: width
        });
        $('.productContent__main').prepend('<div class="videoBackdrop"></div>');
        //$('#video').get(0).play();
        $(this).find('.videoModal').find('video').get(0).play();
    }

});

$(document).on('ready', function(){
    $('.openInModal a').attr('href', '#0');
    $('.openInModal a').on('click', function(event){
        event.preventDefault();
    });
});

// $('.openInModal a').on('click', function(e){
//     e.preventDefault();
// });

$('.productContent__main').on('click', '.videoBackdrop, .videoModal .pdfModal__close', function(e){
    console.log('close video');
    $('.videoModal').css('display', 'none');
    //$('#video').get(0).pause();
    //$('#video').get(1).pause();
    //$('.videoModal').find('video').get(0).pause();

    $('.videoModal').each(function(index){
        $(this).find('video').get(0).pause();
    });

    $('.videoBackdrop').remove();
});

//ask a question form modal
$('.formModal--open').on('click', function(e){
    e.preventDefault();
    $('body').addClass('modalActive');
    $('.formModal').addClass('active');
});

$('.formModal__close').on('click', function(e){
    $('body').removeClass('modalActive');
    $('.formModal').removeClass('active');
});

//adverse modal
$('.adverseModal--open').on('click', function(e){
    e.preventDefault();
    $('body').addClass('modalActive');
    $('.adverseModal').addClass('active');
});

$('.adverseModal__close').on('click', function(e){
    $('body').removeClass('modalActive');
    $('.adverseModal').removeClass('active');
});

//product resources modal
$('.openModal').on('click', function(e){
    e.preventDefault();
    let resource = $(this).attr('data-resource');
    console.log(resource);
    //$('.pdfModal[data-resource="' + resource + '"]').addClass('active');
    //$('body').addClass('modalActive');
    $('.pdfModal[data-resource="' + resource + '"]').dialog({
        width: $(window).width(),
        height: $(window).height(),
        draggable: false,
        // create: function( event, ui ){
        //     $(this).find('.resourceSlider').slick();
        // },
        open: function( event, ui ) {
            $('body').addClass('modalActive');
            //$('.ui-dialog').css('display', 'flex');
            //$(this).find('.resourceSlider').slick();
            // setTimeout(function(){
            //     $('.ui-dialog .resourceSlider').slick();
            // },3000);
            console.log('open modal');
        },
        close: function( event, ui ) {
            $('body').removeClass('modalActive');
        },
    });
});

//close button
$('.pdfModal__close').on('click', function(e){
    $(this).parents('.pdfModal').dialog('close');
});

//resources modal prev/next arrows
$('.pdfModal__arrows .next').on('click', function(e){
    //get the data-resource of the pdfModal parent
    //parse the DOM to find the next PDF link
    let currentPDF = $(this).parents('.pdfModal').attr('data-resource');
    $('.pdfModal[data-resource="' + currentPDF + '"]').dialog('destroy');
    let nextPDF = $('.resource .pdfModal[data-resource="' + currentPDF + '"]').parent('.resource').next('.resource').find('.pdfModal').attr('data-resource');
    if (nextPDF.length) {
        $('.pdfModal[data-resource="' + nextPDF + '"]').prev('.resource-text').find('.openModal').click();
    }
});
//prev
$('.pdfModal__arrows .prev').on('click', function(e){
    //get the data-resource of the pdfModal parent
    //parse the DOM to find the prev PDF link
    let currentPDF = $(this).parents('.pdfModal').attr('data-resource');
    $('.pdfModal[data-resource="' + currentPDF + '"]').dialog('destroy');
    let nextPDF = $('.resource .pdfModal[data-resource="' + currentPDF + '"]').parent('.resource').prev('.resource').find('.pdfModal').attr('data-resource');
    if (nextPDF.length) {
        $('.pdfModal[data-resource="' + nextPDF + '"]').prev('.resource-text').find('.openModal').click();
    }
});

// PDF CART
// $('body').on('click', '.addToCart', function (e) {
//     e.preventDefault();
//     $(this).addClass('added');

//     //don't do this on the pipeline
//     if ( $('.page-template-interactive_pipeline').length == 0 ) {
//         $(this).html('<img src="https://lilly-virtual.com/immunology/us-5/wp-content/themes/lilly_tradeshow/ibex/svg/added.svg"><img class="hover" src="https://lilly-virtual.com/immunology/us-5/wp-content/themes/lilly_tradeshow/ibex/svg/added.svg">ADDED TO BRIEFCASE');
//     }
//     //$(this).find('img').attr('src', 'https://com.lilly/wp-content/themes/lilly_tradeshow/ibex/svg/added.svg');

//     //get current contents of the cart
//     let cart = JSON.parse(localStorage.getItem('cart'));

//     if (cart == null) {
//         cart = [];
//     }

//     let type = $(this).attr('data-type'); // e.g. product or medical
//     let product = $(this).attr('data-product'); // e.g. Verzenio, Cyramza (page title)
//     let href = $(this).attr('data-href'); // location of file
//     let title = $(this).attr('data-title'); // PDF title (resources title field, unique)

//     let pdf = {
//         type: type,
//         product: product,
//         href: href,
//         title: title
//     };

//     //console.log(pdf);

//     //see if this is already in the cart
//     if (cart.length) {

//         let match = false;

//         cart.forEach(item => {
//             console.log(item);
//             if (href == item.href) {
//                 //already in cart
//                 console.log('This PDF is already in the briefcase');
//                 match = true;
//             }
//         });

//         if (match == false) {
//             cart.push(pdf);
//             console.log('Adding PDF to the briefcase');
//         }

//     }
//     else {
//         cart.push(pdf);
//     }

//     localStorage.setItem('cart', JSON.stringify(cart));

//     // console.log('new cart:');
//     // console.log(cart);
//     renderCart(cart);

// });

//remove PDF from cart
// $('.cart').on('click', '.cartRemove', function(e){
//     e.preventDefault();
//     // console.log('remove from cart: ');
//     // console.log($(this).attr('data-pdf'));

//     let pdfTitle = $(this).attr('data-pdf');
//     let cart = JSON.parse(localStorage.getItem('cart'));
//     // console.log(cart);

//     let index = 0;
//     cart.forEach(item => {
//         if (item.title == pdfTitle) {
//             cart.splice(index, 1);
//         }
//         index++;
//     });

//     // console.log('cart with pdf removed: ');
//     // console.log(cart);
//     localStorage.setItem('cart', JSON.stringify(cart));
//     renderCart(cart);

//     //remove "added to cart" state on link
//     //console.log( $('.addToCart.added[data-title="' + pdfTitle + '"]') );
//     $('.addToCart.added[data-title="' + pdfTitle + '"]').removeClass('added');
//     $('.addToCart[data-title="' + pdfTitle + '"]').html('<img src="https://com.lilly/wp-content/themes/lilly_tradeshow/ibex/svg/bcase-small.svg" alt="briefcase"><img class="hover" src="https://com.lilly/wp-content/themes/lilly_tradeshow/ibex/svg/bcase-small--red.svg" alt="briefcase">ADD&nbsp;TO&nbsp;BRIEFCASE');

// });

// $(document).ready(function(){
//     //localStorage.removeItem('cart'); //for testing only
//     //get current contents of the cart
//     let cart = JSON.parse(localStorage.getItem('cart'));
//     if (cart == null) {
//         cart = [];
//     }
//     renderCart(cart);
// });

// function renderCart(cart){
//     console.log('render cart');
//     console.log(cart);

//     if (cart.length) {
//         //load full cart icon and qty digit
//         $('.icon--cart').addClass('full');
//         //$('.cart').removeClass('cart--empty');
//         $('.qty').html(cart.length);

//         //sort cart pdfs by type and product
//         let products = [];
//         let medical = [];

//         cart.forEach(item => {
//             if (item.type == 'product') {
//                 products.push(item);
//             }
//             if (item.type == 'medical') {
//                 medical.push(item);
//             }
//             //set link state
//             if ( $('.page-template-interactive_pipeline').length == 0 ) {
//                 $('.addToCart[data-title="' + item['title'] + '"]').addClass('added');
//                 $('.addToCart.added[data-title="' + item['title'] + '"]').html('<img src="https://lilly-virtual.com/immunology/us-5/wp-content/themes/lilly_tradeshow/ibex/svg/added.svg"><img class="hover" src="https://lilly-virtual.com/immunology/us-5/wp-content/themes/lilly_tradeshow/ibex/svg/added.svg">ADDED TO BRIEFCASE');
//             }
//         });

//         if (products.length) {
//             $('.cart .cartTab--products').removeClass('cartTab--empty');
//         }
//         else {
//             $('.cart .cartTab--products').addClass('cartTab--empty');
//         }
//         if (medical.length) {
//             $('.cart .cartTab--medical').removeClass('cartTab--empty');
//         }
//         else {
//             $('.cart .cartTab--medical').addClass('cartTab--empty');
//         }

//         console.log('products: ');
//         console.log(products);

//         console.log('medical: ');
//         console.log(medical);

//         //sort products by product
//         let productsByProduct = {};

//         products.forEach(item => {
//             if (typeof productsByProduct[item.product] === 'undefined'){
//                 productsByProduct[item.product] = [];
//                 productsByProduct[item.product].push(item);
//             }
//             else {
//                 productsByProduct[item.product].push(item);
//             }
//         });

//         // console.log('products sorted by product: ');
//         // console.log(productsByProduct);

//         //render products pdf list
//         let html = '';

//         Object.keys(productsByProduct).forEach(key => {
//             // console.log('key: ');
//             // console.log(key);

//             let color = '#00ABC7';
//             switch (key.toLowerCase()) {
//                 case 'verzenio':
//                 color = '#00ABC7';
//                 break;
//                 case 'cyramza':
//                 color = '#D34419';
//                 break;
//                 case 'alimta':
//                 color = '#131183;';
//                 break;
//                 case 'retevmo':
//                 color = '#662D91';
//                 break;
//                 case 'erbitux':
//                 color = '#131183';
//                 break;
//             }
//             html += `<p style="color:${color};">${key}<sup>®</sup></p><ul>`; //TEMPORARY
//             //html += `<p style="color:${color};">Product<sup>®</sup></p><ul>`;
//             productsByProduct[key].forEach(item => {
//                 html += `<li>${item.title}<a href="#0" class="cartRemove" data-pdf="${item.title}">REMOVE</a></li>`; //TEMPORARY
//                 //html += `<li>[NAME OF PDF]<a href="#0" class="cartRemove" data-pdf="${item.title}">REMOVE</a></li>`;
//             });
//             html += `</ul>`;
//         });

//         let medhtml = '<ul>';
//         medical.forEach(item => {
//             console.log(item);
//             medhtml += `<li>${item.title}<a href="#0" class="cartRemove" data-pdf="${item.title}">REMOVE</a></li>`;//temporary
//             //medhtml += `<li>[NAME OF PDF]<a href="#0" class="cartRemove" data-pdf="${item.title}">REMOVE</a></li>`;
//         });
//         medhtml += '</ul>';

//         // console.log('html: ');
//         // console.log(html);

//         $('.cartTab--products .documentList').html(html);
//         $('.cartTab--medical .documentList').html(medhtml);

//     }
//     else {
//         $('.icon--cart').removeClass('full');
//         $('.cart').addClass('cart--empty');
//         $('.cartTab').addClass('cartTab--empty');
//         $('.cart .documentList, .icon--cart .qty').html('');
//     }
// }

//cart tabs
// $('.cartTab__tab').on('click', function(e){
//     $('.cartTab').removeClass('active');
//     $(this).parent().addClass('active');
// });

//download PDFs
// $('.cartDownload--medical').on('click', function(e){
//     //get current contents of the cart
//     let cart = JSON.parse(localStorage.getItem('cart'));
//     console.log(cart);

//     //get just the medical documents
//     let medical = [];

//     cart.forEach(item => {
//         if (item.type == 'medical') {
//             medical.push(item);
//         }
//     });

//     $.ajax({
//         url: "https://lilly-virtual.com/immunology/us-5/wp-content/pdf-bundle/bundle.php",
//         data: {'medical-pdfs' : medical},
//         method: 'POST',
//         success: function( data, status, xhr ){
//             console.log('status: ' + status);
//             console.log('data: ');
//             console.log(data);
//             if (status) {
//                 window.open(data, '_blank');
//             }
//         }
//     });

// });

// $('.cartDownload--products').on('click', function(e){
//     //get current contents of the cart
//     let cart = JSON.parse(localStorage.getItem('cart'));

//     //get just the medical documents
//     let products = [];

//     cart.forEach(item => {
//         if (item.type == 'product') {
//             products.push(item);
//         }
//     });

//     $.ajax({
//         url: "https://lilly-virtual.com/immunology/us-5/wp-content/pdf-bundle/bundle.php",
//         data: {'product-pdfs' : products},
//         method: 'POST',
//         success: function( data, status, xhr ){
//             console.log('status: ' + status);
//             console.log('data: ');
//             console.log(data);
//             if (status) {
//                 window.open(data, '_blank');
//             }
//         }
//     });

// });





//shim in the extra erbitux link
//Full Prescribing Information, including Boxed Warning
// $(document).ready(function(e){
//     $('li.erbitux a').after('<span class="menu-item-description"><a href="http://uspl.lilly.com/erbitux/erbitux.html" target="_blank">Full Prescribing Information</a>, including Boxed Warning</span>');

//     //color titles
//     var title = $('.productTop__title').html();
//     let color = '#00ABC7';
//     // switch (title) {
//     //     case 'Verzenio<sup>®</sup>':
//     //     color = '#00ABC7';
//     //     break;
//     //     case 'CYRAMZA<sup>®</sup>':
//     //     color = '#D34419';
//     //     break;
//     //     case 'ALIMTA<sup>®</sup>':
//     //     color = '#131183';
//     //     break;
//     //     case 'Retevmo<sup>®</sup>':
//     //     color = '#662D91';
//     //     break;
//     //     case 'ERBITUX<sup>®</sup>':
//     //     color = '#131183';
//     //     break;
//     // }
//     // console.log('ramza: '+title.indexOf('RAMZA'));

//     //console.log('title: '+title)

//     if (title) {

//         if ( title.indexOf('rzenio') > 0 ) {
//             color = '#00ABC7';
//         }

//         if ( title.indexOf('RAMZA') > 0 || title.indexOf('ramza') > 0 ) {
//             color = '#D34419';
//         }

//         if ( title.indexOf('LIMTA') > 0 ) {
//             color = '#131183';
//         }

//         if ( title.indexOf('tevmo') > 0 ) {
//             color = '#662D91';
//         }

//         if ( title.indexOf('ITUX') > 0 ) {
//             color = '#131183';
//         }

//     }

//     $('.productTop__title').css('color', color);

// });


// alert banner
// $('.alertBanner .alertBanner__close').on('click', function(e){
//     $(this).parent().removeClass('active');
//     $('.hoverBoxContainer').removeClass('firstVisit');
//     Cookies.set('alertbannerdismissed', true);
// });

// $(document).on('ready', function(e){

//     //fire this on medical homepage
//     if ( $('.page-template-medical_home').length ) {
//         //Cookies.remove('alertbannerdismissed');//for testing only
//         let alertBannerDismissed = Cookies.get('alertbannerdismissed');
//         if (!alertBannerDismissed) {
//             $('.icon--calendar + .hoverBoxContainer').addClass('firstVisit');
//             $('.alertBanner').addClass('active');
//             setTimeout(function(){
//                 $('.alertBanner').removeClass('active');
//                 $('.hoverBoxContainer').removeClass('firstVisit');
//                 Cookies.set('alertbannerdismissed', true);
//             }, 8000);
//         }

//         Cookies.remove('mobilebannerdismissed');//for testing only
//         let mobileBannerDismissed = Cookies.get('mobilebannerdismissed');
//         if (!mobileBannerDismissed) {
//             $('.mobileModal').addClass('active');
//         }
//     }


// }); 

$(document).ready( function(e){
    let mobileBannerDismissed = Cookies.get('mobilebannerdismissed');
    if (!mobileBannerDismissed) {
        $('.mobileModal').addClass('active');
    }
});

$('.mobileModal .formModal__close').on('click', function(e){
    $('.mobileModal').removeClass('active');
    Cookies.set('mobilebannerdismissed', true);
});
$('.mobileModal .dismiss').on('click', function(e){
    $('.mobileModal').removeClass('active');
    Cookies.set('mobilebannerdismissed', true);
});

// $(document).on('ready', function(e){
//     $('.doctor-btn').on('mouseenter', function(e){
//         $(this).parent().prev('.doctor-image-container').find('img').addClass('active');
//     });
//     $('.doctor-btn').on('mouseleave', function(e){
//         $(this).parent().prev('.doctor-image-container').find('img').removeClass('active');
//     });


//     $('.readMoreToggle').on('click', function(e){
//         var container = $(this).parent();
//         var link = $(this);

//         container.toggleClass('show');

//         if (container.hasClass('show')) {
//             link.html('READ LESS');
//         }
//         else {
//             link.html('READ LESS');
//         }
//     });

//     //greek a
//     if ($('.page-template-medical_resources').length) {
//         $('.card__title').each(function(index){
//             if ( $(this).html() == "PDGFRα Antibody" ) {
//                 $(this).html('PDGFR<svg xmlns="http://www.w3.org/2000/svg" width="11.543" height="11.094" viewBox="0 0 11.543 11.094"><path id="α_copy" data-name="α copy" d="M9.658,12.008a24.637,24.637,0,0,0,1.035-3.613h1.8a23.683,23.683,0,0,1-2.1,5.293l.2.469q.127.283.605,1.3.293.625.684,1.484.586,1.338.957,2.061H10.781q-.117-.244-.137-.293l-.439-1.016-.4-.937L9.482,16l-.156-.361a8.252,8.252,0,0,1-1.821,2.8,3.371,3.371,0,0,1-2.3.806,3.411,3.411,0,0,1-2.847-1.392,5.925,5.925,0,0,1-1.069-3.706A7.108,7.108,0,0,1,2.515,9.8,3.854,3.854,0,0,1,5.762,8.15a2.924,2.924,0,0,1,2.148.791A9.948,9.948,0,0,1,9.658,12.008Zm-.986,2.07-.479-1.084a13.987,13.987,0,0,0-1.421-2.7,1.552,1.552,0,0,0-1.226-.688A1.824,1.824,0,0,0,3.96,10.8a6.554,6.554,0,0,0-.62,3.037,6.114,6.114,0,0,0,.581,2.876A1.734,1.734,0,0,0,5.459,17.8,2,2,0,0,0,6.982,17,13.818,13.818,0,0,0,8.672,14.078Z" transform="translate(-1.289 -8.15)"/></svg> Antibody');
//             }
//         });
//     }

//     //active state clippy buttons molecule detail
//     if ( $('.page-template-molecule_detail').length ) {
//         //console.log(window.location.pathname);
//         var path = window.location.pathname;

//         $('.clippy-buttons .button[href*="' + path + '"]').addClass('active');
//     }

// });




//PIPELINE
$('.pipelineSidebar__link').on('mouseenter', function(e){
    let phase = $(this).attr('data-phase');
    $('.pipelineMasthead').addClass('pipelineMasthead--hoverPhase' + phase);
    $('.pipelineMasthead').addClass('pipelineMasthead--hover');
});
$('.pipelineSidebar__link').on('mouseleave', function(e){
    $('.pipelineMasthead').removeClass('pipelineMasthead--hover')
        .removeClass('pipelineMasthead--hoverPhase1')
        .removeClass('pipelineMasthead--hoverPhase2')
        .removeClass('pipelineMasthead--hoverPhase3');
});

$('.pipelineSidebar__link').on('click', function(e){

    let phase = $(this).attr('data-phase');

    $('.pipelineSidebar__link').removeClass('active');

    $('.pipelineMasthead').removeClass('pipelineMasthead--phase1')
        .removeClass('pipelineMasthead--phase2')
        .removeClass('pipelineMasthead--phase3');

    $(this).toggleClass('active');

    if ( $(this).hasClass('active') ) {
        $('.pipelineMasthead').addClass('active').addClass('pipelineMasthead--phase' + phase);
    }
    else {
        $('.pipelineMasthead').removeClass('active')
            .removeClass('pipelineMasthead--phase1')
            .removeClass('pipelineMasthead--phase2')
            .removeClass('pipelineMasthead--phase3');
    }
});

$('.pipelineSidebar__links .close').on('click', function(e){
    $(this).prev('.pipelineSidebar__link').removeClass('active');
    $('.pipelineMasthead').removeClass('active')
        .removeClass('pipelineMasthead--phase1')
        .removeClass('pipelineMasthead--phase2')
        .removeClass('pipelineMasthead--phase3');
});

$('.pipelineMolecules a').on('click', function(e){
    e.preventDefault();
    let src = $(this).attr('data-slide');
    if (src) {
        $('.pipelineModal__content').html('<iframe width="100%" height="100%" src="https://lilly-virtual.com/immunology/us-5/wp-content/themes/lilly_tradeshow/pipeline/' + src + '/index.html"></iframe>');
        //$('.pipelineModal__content').load('/wp-content/themes/lilly_tradeshow/pipeline/' + src + '/index.html');
        $('.pipelineModal').addClass('active');
        $('body').addClass('modalActive');

        $('.pipelineModal__content iframe').mediaWrapper({
            intrinsic:	false,
            baseWidth	:1120,
            baseHeight	:841
        });

        $(document).on('keyup.pipelineModal', function(e) {
            if (e.key === "Escape") {
               $('.pipelineModal').removeClass('active');
               $('body').removeClass('modalActive');
               $(document).unbind('keyup.pipelineModal');
            }
        });
    }
});

$('.pipelineModal').on('click', function(e){
    $(this).removeClass('active');
    $('body').removeClass('modalActive');
    $(document).unbind('keyup.pipelineModal');
});

$('.pipelineMolecules a[data-slide=""]').hover(function(e){ $('.inactiveHover').addClass('active'); }, function(e){ $('.inactiveHover').removeClass('active'); });

(function( $ ){

    $.fn.mediaWrapper = function(options) {

      var settings = $.extend( {
        intrinsic   : true,
        baseWidth   : 16,
        baseHeight  : 9
      }, options);

      return this.each(function() {
        var hRatio = '';

        if (settings.intrinsic == true && $(this).attr("width") !== '' && $(this).attr("height") !== ''){
          hRatio = ($(this).attr("height") / $(this).attr("width")) * 100;
        } else {
          hRatio = (settings.baseHeight / settings.baseWidth) * 100;
        }

        $(this).wrap('<div class="mediaWrapper" style="position: relative; width: 100%; height: 0; padding: '+ hRatio +'% 0 0 0; " />').css({"position":"absolute","width":"100%","height":"100%","top":"0","left":"0"});
      });
    };
  })( jQuery );

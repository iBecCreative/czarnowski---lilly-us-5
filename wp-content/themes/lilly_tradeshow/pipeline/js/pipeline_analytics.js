 /* Global Analytic Elements */
 $(document).ready(function(){

    $('body').on('click', '.g-heading__menu', function(e){
            gtag('event', 'Molecule State Modal', {
                'event_label': 'Menu',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.g-button__references', function(e){
            gtag('event', 'Molecule State Modal', {
                'event_label': 'Terms',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
        $('body').on('click', '.swiper-button-next', function(e){
            gtag('event', 'Molecule State Modal', {
                'event_label': 'Right - >',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
        $('body').on('click', '.swiper-button-prev', function(e){
            gtag('event', 'Molecule State Modal', {
                'event_label': 'Left - <',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.g-menu__item-0', function(e){
            gtag('event', 'Molecule State Modal', {
                'event_label': 'Menu - IL-13 (Phase-3)',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
        
        $('body').on('click', '.g-menu__item-1', function(e){
            gtag('event', 'Molecule State Modal', {
                'event_label': 'Menu - IL-23 (Phase-3)',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.g-menu__item-2', function(e){
            gtag('event', 'Molecule State Modal', {
                'event_label': 'Menu - JAK1/JAK2 (Phase-3)',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.g-menu__item-3', function(e){
            gtag('event', 'Molecule State Modal', {
                'event_label': 'Menu - CXCR1/2 (Phase-2)',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.g-menu__item-4', function(e){
            gtag('event', 'Molecule State Modal', {
                'event_label': 'Menu - IL-2 (Phase-2)',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.g-menu__item-5', function(e){
            gtag('event', 'Molecule State Modal', {
                'event_label': 'Menu - PD-1 (Phase-2)',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
      });
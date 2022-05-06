//analytics events
//$(window).load(function(){
    $(document).ready(function(){
        //console.log('analytics.js loading');
    
        //HCP Gate
        $('body').on('click', '.modal--hcp .corona', function(){
            gtag('event', 'Link', {
                'event_label': 'COVID-19 Response',
                'event_category': 'HCP Gate',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.modal--hcp .button--white', function(){
            gtag('event', 'Healthcare Professional?', {
                'event_label': 'No',
                'event_category': 'HCP Gate',
                'non_interaction': false
            });
        });

        $('body').on('click', '.event-button', function(){
            gtag('event', 'Coming Soon', {
                'event_label': 'Register for the Symposium',
                'event_category': 'Home',
                'non_interaction': false
            });
        });
        $('body').on('click', '.event-button', function(){
            gtag('event', 'Lilly Logo', {
                'event_label': 'lilly-virtual.com',
                'event_category': 'Header',
                'non_interaction': false
            });
        });

        // MOVED TO SCRIPTS.JS EVENT LISTENER
        // $('body').on('click', '.modal--hcp .dismissModal--hcp', function(){
        //     gtag('event', 'Healthcare Professional?', {
        //         'event_label': 'Yes',
        //         'event_category': 'HCP Gate',
        //         'non_interaction': false
        //     });
        // });
    
        //Gated Landing
        $('body').on('click', '.gate--red .gate__link', function(){
            gtag('event', 'Go', {
                'event_label': 'Medical Affairs Section',
                'event_category': 'Gated Landing',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.gate--white .gate__link', function(){
            gtag('event', 'Go', {
                'event_label': 'Ask About Urgency Section',
                'event_category': 'Gated Landing',
                'non_interaction': false
            });
        });
    
        //header
        $('body').on('click', '.header__container .logo', function(){
            gtag('event', 'Lilly Logo', {
                'event_label': 'Gated Landing',
                'event_category': 'Header',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '#menu-item-2027 > a', function(){
            gtag('event', 'Section', {
                'event_label': 'Medical Affairs',
                'event_category': 'Header',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '#menu-item-2513 > a', function(){
            gtag('event', 'Section', {
                'event_label': 'Ask About Urgency',
                'event_category': 'Header',
                'non_interaction': false
            });
        });
        
        $('body').on('click', '#menu-item-2060 > a', function(){
            gtag('event', 'Navigation', {
                'event_label': 'Ask About Urgency',
                'event_category': 'Header',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '#menu-item-2514 > a', function(){
            gtag('event', 'Navigation', {
                'event_label': 'Ask About Urgency',
                'event_category': 'Ask About Urgency',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.contactUs', function(){
            gtag('event', 'Feature', {
                'event_label': 'Contact Us',
                'event_category': 'Header',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.contactUsMenu__link--call .mob.first', function(){
            gtag('event', 'Contact Us', {
                'event_label': '1-800-LILLYRX',
                'event_category': 'Header',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.contactUsMenu__link--call .mob:last-of-type', function(){
            gtag('event', 'Contact Us', {
                'event_label': '1-800-545-5979',
                'event_category': 'Header',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.contactUsMenu__link--submit a:first-of-type', function(){
            gtag('event', 'Contact Us', {
                'event_label': 'Information Request',
                'event_category': 'Header',
                'non_interaction': false
            });
        });
    
        // $('body').on('click', '.contactUsMenu__link--submit a:last-of-type', function(){
        //     gtag('event', 'Contact Us', {
        //         'event_label': 'Sample/Sales Request',
        //         'event_category': 'Header',
        //         'non_interaction': false
        //     });
        // });
    
        $('body').on('click', '.contactUsMenu__link--visit a:first-of-type', function(){
            gtag('event', 'Contact Us', {
                'event_label': 'Facebook',
                'event_category': 'Header',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.contactUsMenu__link--visit a:last-of-type', function(){
            gtag('event', 'Contact Us', {
                'event_label': 'Twitter',
                'event_category': 'Header',
                'non_interaction': false
            });
        });  
        
        $('body').on('click', '.contactUsMenu__close', function(){
            gtag('event', 'Contact Us', {
                'event_label': 'Close - X',
                'event_category': 'Header',
                'non_interaction': false
            });
        });    
    
        $('body').on('click', '#menu-item-398 a', function(){
            gtag('event', 'Feature', {
                'event_label': 'Report Adverse Event',
                'event_category': 'Header',
                'non_interaction': false
            });
        });
        
    
        //medical affairs
        $('body').on('click', '.overlay-banner__overlay .awYeah a', function(){
            gtag('event', 'Home', {
                'event_label': 'See Our Pipeline',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.feature__grid .feature__grid--item.one', function(){
            gtag('event', 'Home', {
                'event_label': 'Featured Content - Clinical Trials',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.feature__grid .feature__grid--item.three', function(){
            gtag('event', 'Home', {
                'event_label': 'Featured Content - IL-23 and Pathophysiology of IBD',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.feature__grid .feature__grid--item.four', function(){
            gtag('event', 'Home', {
                'event_label': 'Featured Content - Scientific Disclosures',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.feature__grid .feature__grid--item.two', function(){
            gtag('event', 'Home', {
                'event_label': 'Featured Content - Bowel Urgency Quiz',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        //medical disclosures
        $('body').on('click', '.flex__right a:first-of-type', function(){
            gtag('event', 'Scientific Disclosures', {
                'event_label': 'ECCO 2022 Link',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.flex .card__view', function(){
            gtag('event', 'View Document', {
                'event_label': 'Disclosures',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.flex .download_doc', function(){
            gtag('event', 'Download Document', {
                'event_label': 'Disclosures',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        //Footer links
        $('body').on('click', '#site-footer a', function(e){
    
            var label = e.target.innerHTML;
            var action = 'Section';//.html();
            
            if (label.includes('<title>Lilly</title> ')) {
                action = 'Lilly Logo';
                label = 'lilly.com';
            }
            if (label.includes('Terms of Use')) {
                label = 'Terms of Use - Lilly';
            }
            if (label.includes('terms')) {
                label = 'Terms of Use - Czar';
            }
    
            gtag('event', action, {
                'event_label': label,
                'event_category': 'Footer',
                'non_interaction': false
            });
        });
    
        //Medical affairs links
        $('body').on('click', '.medical_carousel .slick-next', function(e){
            gtag('event', 'Landing Carousel', {
                'event_label': 'Right - >',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.medical_carousel .slick-prev', function(e){
            gtag('event', 'Landing Carousel', {
                'event_label': 'Left - <',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.medical_carousel .check_knowledge', function(){
            gtag('event', 'Landing Carousel', {
                'event_label': 'Bowel Urgency Quiz',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.medical_carousel .watch_now', function(){
            gtag('event', 'Landing Carousel', {
                'event_label': 'Welcome Video',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.medical_carousel .masthead--2 .awYeah', function(){
            gtag('event', 'Landing Carousel', {
                'event_label': 'Candid Conversations About Bowel Urgency Video',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.medical_carousel .masthead--3 .awYeah', function(){
            gtag('event', 'Landing Carousel', {
                'event_label': 'See Our Pipeline',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.formModal__close', function(){
            gtag('event', 'Submit a Question', {
                'event_label': 'Close - X',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.lilly_rx', function(){
            gtag('event', 'Report Adverse Event', {
                'event_label': '1-800-LILLYRX',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.toll_free', function(){
            gtag('event', 'Report Adverse Event', {
                'event_label': '1-800-545-5979',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '#menu-item-2027 #menu-item-2141', function(e){
            gtag('event', 'Navigation', {
                'event_label': 'Home - Text Link',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '#menu-item-2027 #menu-item-2136', function(e){
            //console.log('clicked!');
            gtag('event', 'Navigation', {
                'event_label': 'Pipeline',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '#menu-item-2027 #menu-item-2139', function(e){
            gtag('event', 'Navigation', {
                'event_label': 'Clinical Trials',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '#menu-item-2027 #menu-item-2135', function(e){
            gtag('event', 'Navigation', {
                'event_label': 'Disease State - Bowel Urgency Quiz',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '#menu-item-2027 #menu-item-2138', function(e){
            gtag('event', 'Navigation', {
                'event_label': 'Disease State - IL-23',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '#menu-item-2027 #menu-item-2532', function(e){
            gtag('event', 'Navigation', {
                'event_label': 'Disease State - Candid Conversation',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '#menu-item-2027 #menu-item-2544', function(e){
            gtag('event', 'Navigation', {
                'event_label': 'Scientific Disclosures',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '#menu-item-2027 #menu-item-2140', function(e){
            gtag('event', 'Navigation', {
                'event_label': 'Medical Information',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '#menu-item-2027 .megaMenu__close', function(e){
            gtag('event', 'Navigation', {
                'event_label': 'Close - X',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '#menu-item-2513 .megaMenu__close', function(e){
            gtag('event', 'Navigation', {
                'event_label': 'Close - X',
                'event_category': 'Ask About Urgency',
                'non_interaction': false
            });
        });
    
    
        //medical affairs pipeline
        $('body').on('click', '.pipelineSidebar__link--purple', function(){
            gtag('event', 'Pipeline', {
                'event_label': 'Phase 1',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.pipelineSidebar__link--purple + .close', function(){
            gtag('event', 'Pipeline', {
                'event_label': 'Phase 1 Close -X',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.pipelineSidebar__link--green', function(){
            gtag('event', 'Pipeline', {
                'event_label': 'Phase 2',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.pipelineSidebar__link--green + .close', function(){
            gtag('event', 'Pipeline', {
                'event_label': 'Phase 2 Close -X',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.pipelineSidebar__link--blue', function(){
            gtag('event', 'Pipeline', {
                'event_label': 'Phase 3',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.pipelineSidebar__link--blue + .close', function(){
            gtag('event', 'Pipeline', {
                'event_label': 'Phase 3 Close -X',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.ph2_pd1', function(){
            gtag('event', 'Pipeline', {
                'event_label': 'PD-1 (Phase-2)',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.ph2_il2', function(){
            gtag('event', 'Pipeline', {
                'event_label': 'IL-2 (Phase-2)',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.ph2_cxcr', function(){
            gtag('event', 'Pipeline', {
                'event_label': 'CXCR1/2 (Phase-2)',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.ph3_jak', function(){
            gtag('event', 'Pipeline', {
                'event_label': 'JAK1/JAK2 (Phase-3)',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.ph3_il13', function(){
            gtag('event', 'Pipeline', {
                'event_label': 'IL-13 (Phase-3)',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.ph3_il23', function(){
            gtag('event', 'Pipeline', {
                'event_label': 'IL-23 (Phase-3)',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
    
        //dynamically set action on these tiles
        var action = 'Pipeline';
        if ( $('.page-template-clinical__trials').length ) {
            action = 'Clinical Trials';
        }
        if ( $('.page-template-bowel_urgency_page').length ) {
            action = 'Disease State Quiz';
        }
        if ( $('.page-id-2110').length ) {
            action = 'Disease State IL-23';
        }
        if ( $('.page-template-medical_information').length ) {
            action = 'Medical Information';
        }
        if ( $('.page-template-medical_disclosures').length ) {
            action = 'Scientific Disclosures';
        }
        if ( $('.page-template-urgencyConversations').length ) {
            action = 'Candid Conversations';
        }
        
    
        $('body').on('click', '.product_carousel a[href="https://lilly-virtual.com/immunology/us/medical-affairs/clinical-trials/"]', function(){
            gtag('event', action, {
                'event_label': 'Explore Medical - Clinical Trials',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.product_carousel a[href="https://lilly-virtual.com/immunology/us/medical-affairs/bowel-urgency-quiz/"]', function(){
            gtag('event', action, {
                'event_label': 'Explore Medical - Bowel Urgency Quiz',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.product_carousel a[href="https://lilly-virtual.com/immunology/us/medical-affairs/il-23-and-pathophysiology-of-ibd/"]', function(){
            gtag('event', action, {
                'event_label': 'Explore Medical - IL-23 and Pathophysiology of IBD',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.product_carousel a[href="https://lilly-virtual.com/immunology/us/medical-affairs/pipeline/"]', function(){
            gtag('event', action, {
                'event_label': 'Explore Medical - Experience Lilly Pipeline',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.product_carousel a[href="https://lilly-virtual.com/immunology/us/medical-affairs/medical-information/"]', function(){
            gtag('event', action, {
                'event_label': 'Explore Medical - Medical Information',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
        $('body').on('click', '.product_carousel a[href="https://lilly-virtual.com/immunology/us/medical-affairs/conversations-about-bowel-urgency//"]', function(){
            gtag('event', action, {
                'event_label': 'Explore Medical - Candid Conversations',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
        $('body').on('click', '.product_carousel a[href="https://lilly-virtual.com/immunology/us/medical-affairs/medical-disclosures/"]', function(){
            gtag('event', action, {
                'event_label': 'Explore Medical - Scientific Disclosures',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
    
    
    
        //clinical trials
        $('body').on('click', '.gov1', function(){
            gtag('event', 'Clinical Trials', {
                'event_label': "Crohn's Disease Link",
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.gov2', function(){
            gtag('event', 'Clinical Trials', {
                'event_label': 'UC Link',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.gov0', function(){
            gtag('event', 'Clinical Trials', {
                'event_label': 'Clinical Trials Link #1',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.gov3', function(){
            gtag('event', 'Clinical Trials', {
                'event_label': 'Clinical Trials Link #2',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.ct_phone-1', function(){
            gtag('event', 'Clinical Trials', {
                'event_label': '1-877-CTLILLY',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.ct_phone-2', function(){
            gtag('event', 'Clinical Trials', {
                'event_label': '1-317-615-4559',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.ct-email', function(){
            gtag('event', 'Clinical Trials', {
                'event_label': 'IBD Investigator Email',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.ct-site', function(){
            gtag('event', 'Clinical Trials', {
                'event_label': 'Lilly Trial Guide Link',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.resource__container--right .download_resource', function(){
            gtag('event', 'Clinical Trials', {
                'event_label': 'Download Clinical Trials Handout',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        //quiz
        $('body').on('click', '.quiz__hero--container .videoThumb', function(){
            gtag('event', 'Disease State Quiz', {
                'event_label': 'Start Quiz',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.overlay-banner__overlay .videoThumb', function(){
            gtag('event', 'Disease State IL-23', {
                'event_label': 'IL-23 and Pathophysiology of IBD Video',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.medical-info', function(){
            gtag('event', 'Medical Information', {
                'event_label': 'Visit lillymedical.com',
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
    
        // ASK ABOUT URGENCY
    
        $('body').on('click', '.cta__container--right h3 a.ask', function(){
            gtag('event', 'Landing', {
                'event_label': 'Explore Urgency Anonymous',
                'event_category': 'Ask About Urgency',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.color_block.orange a', function(){
            gtag('event', 'Landing', {
                'event_label': 'askabouturgency.com #2',
                'event_category': 'Ask About Urgency',
                'non_interaction': false
            });
        });

        $('body').on('click', '.color_block.green a', function(){
            gtag('event', 'Landing', {
                'event_label': 'askabouturgency.com #1',
                'event_category': 'Ask About Urgency',
                'non_interaction': false
            });
        });

        //UA
        $('body').on('click', '.u-carousel .owl-next', function(){
            gtag('event', 'Landing Carousel', {
                'event_label': 'Right - >',
                'event_category': 'Urgency Anonymous',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.u-carousel .owl-prev', function(){
            gtag('event', 'Landing Carousel', {
                'event_label': 'Left - <',
                'event_category': 'Urgency Anonymous',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.u-carousel .item__play.videoThumb.one', function(){
            gtag('event', 'Landing Carousel', {
                'event_label': "Charlotte's Story - Remo Panaccione, MD Video",
                'event_category': 'Urgency Anonymous',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.u-carousel .item__play.videoThumb.two', function(){
            gtag('event', 'Landing Carousel', {
                'event_label': "Oscar's Story - David T. Rubin, MD Video",
                'event_category': 'Urgency Anonymous',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.u-carousel .item__play.videoThumb.three', function(){
            gtag('event', 'Landing Carousel', {
                'event_label': "Bruna's Story - Stefan Schreiber, MD Video",
                'event_category': 'Urgency Anonymous',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.u-carousel .item__play.videoThumb.four', function(){
            gtag('event', 'Landing Carousel', {
                'event_label': "Matthew's Story - Marla Dubinsky, MD Video",
                'event_category': 'Urgency Anonymous',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.blocks__grid--one a', function(){
            gtag('event', 'Home', {
                'event_label': "Clinical Trials - Learn More",
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
        $('body').on('click', '.blocks__grid--three a', function(){
            gtag('event', 'Home', {
                'event_label': "Immunology Pipeline - Explore Now",
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
        $('body').on('click', '.blocks__grid--four a', function(){
            gtag('event', 'Home', {
                'event_label': "Medical Information - Learn More",
                'event_category': 'Medical Affairs',
                'non_interaction': false
            });
        });
        
    
    
        //explore things
    
        $('body').on('click', '.item__play.second.videoThumb.one', function(){
            gtag('event', 'Explore All-Thumbnail', {
                'event_label': "Charlotte's Story - Remo Panaccione, MD Video",
                'event_category': 'Urgency Anonymous',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.videoThumb.vidLink.viewStory.one', function(){
            gtag('event', 'Explore All-View Story', {
                'event_label': "Charlotte's Story - Remo Panaccione, MD Video",
                'event_category': 'Urgency Anonymous',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.item__play.second.videoThumb.two', function(){
            gtag('event', 'Explore All-Thumbnail', {
                'event_label': "Oscar's Story - David T. Rubin, MD Video",
                'event_category': 'Urgency Anonymous',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.videoThumb.vidLink.viewStory.two', function(){
            gtag('event', 'Explore All-View Story', {
                'event_label': "Oscar's Story - David T. Rubin, MD Video",
                'event_category': 'Urgency Anonymous',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.item__play.second.videoThumb.three', function(){
            gtag('event', 'Explore All-Thumbnail', {
                'event_label': "Bruna's Story - Stefan Schreiber, MD Video",
                'event_category': 'Urgency Anonymous',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.videoThumb.vidLink.viewStory.three', function(){
            gtag('event', 'Explore All-View Story', {
                'event_label': "Bruna's Story - Stefan Schreiber, MD Video",
                'event_category': 'Urgency Anonymous',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.item__play.second.videoThumb.four', function(){
            gtag('event', 'Explore All-Thumbnail', {
                'event_label': "Matthew's Story - Marla Dubinsky, MD Video",
                'event_category': 'Urgency Anonymous',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.videoThumb.vidLink.viewStory.four', function(){
            gtag('event', 'Explore All-View Story', {
                'event_label': "Matthew's Story - Marla Dubinsky, MD Video",
                'event_category': 'Urgency Anonymous',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.cta__container--right h3 a.test_it', function(){
            gtag('event', 'Explore Bowel Urgency', {
                'event_label': 'Test Knowledge',
                'event_category': 'Urgency Anonymous',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '#myCarousel .owl-next', function(){
            gtag('event', 'Video Player', {
                'event_label': 'Right - >',
                'event_category': 'Urgency Anonymous',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '#myCarousel .owl-prev', function(){
            gtag('event', 'Video Player', {
                'event_label': 'Left - <',
                'event_category': 'Urgency Anonymous',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '.heartSymbol', function(){
            gtag('event', 'Video Player', {
                'event_label': 'Heart Like',
                'event_category': 'Urgency Anonymous',
                'non_interaction': false
            });
        });
    
        $('body').on('click', '#watchVid .pdfModal__close', function(){
            gtag('event', 'Video Player', {
                'event_label': 'Close - X',
                'event_category': 'Urgency Anonymous',
                'non_interaction': false
            });
        });
    
    });
    
        //BASIC TEMPLATE
        // $('body').on('click', 'SELECTOR', function(){
        //     gtag('event', 'ACTION', {
        //         'event_label': 'LABEL',
        //         'event_category': 'CATEGORY',
        //         'non_interaction': false
        //     });
        // });
    
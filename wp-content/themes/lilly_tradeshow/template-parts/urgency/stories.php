<div class="stories">
    <h2>Explore all Urgency<br><em>Anonymous</em><sup>TM</sup> Stories</h2>

                <?php
            // This pulls in Video or description content

            if( have_rows('stories')) {
                while( have_rows('stories') ) {
                the_row();?>
                <div class="stories__container">
               
                <?php if( get_row_layout() == 'story_block' ) {

                    if( have_rows('flexible_content')) {
                        while( have_rows('flexible_content') ) {
                        the_row();?>

                            <?php if( get_row_layout() == 'video' ) {
                                $caption = get_sub_field('caption');
                                $dataLink = get_sub_field('link');
                                $image = get_sub_field('image');
                                $customClass = get_sub_field('custom_class');

                                ?>
                                <div class="stories__container--item">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                    <div title="play video" class="item__play second videoThumb vidLink <?php echo $customClass; ?>"><img src="<?php echo get_template_directory_uri()?>/ibex/images/play.png"></div>
                                   <!-- <p class="caption"><?php echo $caption; ?></p> -->
                                </div>
                            <?php
                            } else if (get_row_layout() == 'content') { 
                                    $heading = get_sub_field('heading');
                                    $description = get_sub_field('description');
                                    $URL = get_sub_field('url');
                                    $customClass = get_sub_field('custom_class');

                                ?>
                                
                                <div class="stories__container--item">
                                    <div class="content_wrapper">
                                        <h3><?php echo $heading; ?></h3>
                                        <p><?php echo $description; ?></p>
                                        <div class="videoThumb viewStory vidLink <?php echo $customClass; ?>">View Story</div>
                                    </div>
                                </div>

                            <?php
                                    }
                                }?>
                                </div> <!-- end container -->
                <?php        } 
                        }
                    }
                }
        ?>

        <div class="stories__ref">
            <p><strong>References</strong><br>
<strong>1.</strong> Hibi T, Ishibashi T, Ikenoue Y, Yoshihara R, Nihei A, Kobayashi T. Ulcerative colitis: disease burden, impact on daily life, and reluctance to consult medical professionals: results from a Japanese internet survey. <em>Inflamm Intest Dis.</em> 2020;5:27–35. doi:10.1159/000505092 <strong>2.</strong> Petryszyn PW, Paradowski L. Stool patterns and symptoms of disordered anorectal function in patients with inflammatory bowel diseases. <em>Adv Clin Exp Med.</em> 2018;27(6):813–818. doi:10.17219/acem/68986 <strong>3.</strong> Carpio D, López-Sanromán A, Calvet X, et al. Perception of disease burden and treatment satisfaction in patients with ulcerative colitis from outpatient clinics in Spain: UC-LIFE survey. <em>Eur J Gastroenterol & Hepatol.</em> 2016;28(9):1056–1064. doi:10.1097/MEG.0000000000000658. </p>
        </div>
        
        <div class="stories__disclaimer">
                <h2>COMMIT TO ASKING ABOUT BOWEL URGENCY AT EVERY VISIT.</h2>
                <p>Some patients may be too embarrassed to bring it up.<sup>1,2</sup></p>
        </div>
</div>

<!-- Modal One -->
<div id="watchVid" class="videoModal hidden">

    <div class="videoWrapper stories_page">
	  <h3 class="videoTitle"></h3>
      <a id="closeVid" href="#close"><div class="pdfModal__close">╳</div></a>

      <div id="myCarousel" class="owl-carousel video-section sec-carousel">
            <div class="item">
                <h3>Charlotte's Story</h3>
                <div>
                    <!-- <div style="padding:56.25% 0 0 0;position:relative;"><iframe id="video1" src="https://player.vimeo.com/video/563255658" id="vimeo-player" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen allow="autoplay"></iframe></div><script defer src="https://player.vimeo.com/api/player.js"></script> -->
                    <div style="padding:56.25% 0 0 0;position:relative;"><iframe style="position:absolute;top:0;left:0;width:100%;height:100%;" id="kaltura_player_1296053933" src="https://www.kaltura.com/p/1759891/sp/175989100/embedIframeJs/uiconf_id/34164591/partner_id/1759891?iframeembed=true&playerId=kaltura_player_1296053933&entry_id=1_n8eimxsk&flashvars[leadWithHTML5]=true&flashvars[sideBarContainer.plugin]=true&flashvars[sideBarContainer.position]=left&flashvars[sideBarContainer.clickToClose]=true&flashvars[chapters.plugin]=true&flashvars[chapters.layout]=vertical&flashvars[chapters.thumbnailRotator]=false&flashvars[streamSelector.plugin]=true&flashvars[EmbedPlayer.SpinnerTarget]=videoHolder&flashvars[dualScreen.plugin]=true" width="100%" height="100%" allowfullscreen webkitallowfullscreen mozAllowFullScreen frameborder="0"></iframe></div>
                    <p class="caption">Remo Panaccione, MD</p>
                    <p class="caption">GM-21388</p>
                    <svg style="display:none;" version="1.1" id="heartSymbol" xmlns="http://www.w3.org/2000/svg">
                    <symbol id="heart" viewBox="0 0 50 50">
                        <path  stroke-width="1" style="fill:currentColor;" d="M12 4.248c-3.148-5.402-12-3.825-12 2.944 0 4.661 5.571 9.427 12 15.808 6.43-6.381 12-11.147 12-15.808 0-6.792-8.875-8.306-12-2.944z"/>
                    </symbol>
                    </svg>
                    <div class="likeContainer">
                        <div class="heartSymbol">
                            <input type="checkbox" id="checkbox" class="hackyBox"/>
                            <span class="heart">
                            <svg>
                                <use xlink:href="#heart"></use>
                            </svg>
                            </span>
                            <span class="layer">
                            <svg>
                                <use xlink:href="#heart"></use>
                            </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <h3>Oscar's Story</h3>
                <div>
                    <!-- <div style="padding:56.25% 0 0 0;position:relative;"><iframe id="video2" src="https://player.vimeo.com/video/563256041" id="vimeo-player" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen allow="autoplay"></iframe></div> -->
                    <div style="padding:56.25% 0 0 0;position:relative;"><iframe style="position:absolute;top:0;left:0;width:100%;height:100%;" id="kaltura_player_583624028" src="https://www.kaltura.com/p/1759891/sp/175989100/embedIframeJs/uiconf_id/34164591/partner_id/1759891?iframeembed=true&playerId=kaltura_player_583624028&entry_id=1_ob50nxlm&flashvars[leadWithHTML5]=true&flashvars[sideBarContainer.plugin]=true&flashvars[sideBarContainer.position]=left&flashvars[sideBarContainer.clickToClose]=true&flashvars[chapters.plugin]=true&flashvars[chapters.layout]=vertical&flashvars[chapters.thumbnailRotator]=false&flashvars[streamSelector.plugin]=true&flashvars[EmbedPlayer.SpinnerTarget]=videoHolder&flashvars[dualScreen.plugin]=true" width="100%" height="100%" allowfullscreen webkitallowfullscreen mozAllowFullScreen frameborder="0"></iframe></div>
                    <p class="caption">Dr. David T. Rubin</p>
                    <p class="caption">GM-21454</p>
                    <div class="likeContainer">
                        <div class="heartSymbol">
                            <input type="checkbox" id="checkbox" class="hackyBox" />
                            <span class="heart">
                            <svg>
                                <use xlink:href="#heart"></use>
                            </svg>
                            </span>
                            <span class="layer">
                            <svg>
                                <use xlink:href="#heart"></use>
                            </svg>
                            </span>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <h3>Bruna's Story</h3>
                <div>
                <!-- <div style="padding:56.25% 0 0 0;position:relative;"><iframe id="video3" src="https://player.vimeo.com/video/563258108" id="vimeo-player" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen allow="autoplay"></iframe></div> -->
                    <div style="padding:56.25% 0 0 0;position:relative;"><iframe style="position:absolute;top:0;left:0;width:100%;height:100%;" id="kaltura_player_813030511" src="https://www.kaltura.com/p/1759891/sp/175989100/embedIframeJs/uiconf_id/34164591/partner_id/1759891?iframeembed=true&playerId=kaltura_player_813030511&entry_id=1_m10f94sp&flashvars[leadWithHTML5]=true&flashvars[sideBarContainer.plugin]=true&flashvars[sideBarContainer.position]=left&flashvars[sideBarContainer.clickToClose]=true&flashvars[chapters.plugin]=true&flashvars[chapters.layout]=vertical&flashvars[chapters.thumbnailRotator]=false&flashvars[streamSelector.plugin]=true&flashvars[EmbedPlayer.SpinnerTarget]=videoHolder&flashvars[dualScreen.plugin]=true" width="100%" height="100%" allowfullscreen webkitallowfullscreen mozAllowFullScreen frameborder="0"></iframe></div>
                    <p class="caption">Prof. Stefan Schreiber</p>
                    <p class="caption">GM-21539</p>
                    <div class="likeContainer">
                        <div class="heartSymbol">
                            <input type="checkbox" id="checkbox" class="hackyBox" />
                            <span class="heart">
                            <svg>
                                <use xlink:href="#heart"></use>
                            </svg>
                            </span>
                            <span class="layer">
                            <svg>
                                <use xlink:href="#heart"></use>
                            </svg>
                            </span>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <h3>Matthew's Story</h3>
                <div>
                <!-- <div style="padding:56.25% 0 0 0;position:relative;"><iframe id="video4" src="https://player.vimeo.com/video/563255840" id="vimeo-player" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen allow="autoplay"></iframe></div> -->
                    <div style="padding:56.25% 0 0 0;position:relative;"><iframe style="position:absolute;top:0;left:0;width:100%;height:100%;" id="kaltura_player_977734558" src="https://www.kaltura.com/p/1759891/sp/175989100/embedIframeJs/uiconf_id/34164591/partner_id/1759891?iframeembed=true&playerId=kaltura_player_977734558&entry_id=1_1rzq1nop&flashvars[leadWithHTML5]=true&flashvars[sideBarContainer.plugin]=true&flashvars[sideBarContainer.position]=left&flashvars[sideBarContainer.clickToClose]=true&flashvars[chapters.plugin]=true&flashvars[chapters.layout]=vertical&flashvars[chapters.thumbnailRotator]=false&flashvars[streamSelector.plugin]=true&flashvars[EmbedPlayer.SpinnerTarget]=videoHolder&flashvars[dualScreen.plugin]=true" width="100%" height="100%" allowfullscreen webkitallowfullscreen mozAllowFullScreen frameborder="0"></iframe></div>
                    <p class="caption">Dr. Marla Dubinsky</p>
                    <p class="caption">GM-21542</p>
                    <div class="likeContainer">
                        <div class="heartSymbol">
                            <input type="checkbox" id="checkbox" class="hackyBox" />
                            <span class="heart">
                            <svg>
                                <use xlink:href="#heart"></use>
                            </svg>
                            </span>
                            <span class="layer">
                            <svg>
                                <use xlink:href="#heart"></use>
                            </svg>
                            </span>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

  </div>
  <script type="text/javascript" src="https://cdnapisec.kaltura.com/p/1759891/sp/175989100/embedIframeJs/uiconf_id/34164591/partner_id/1759891"></script>
  <!-- <script src="https://player.vimeo.com/api/player.js"></script> -->

  <script>

const vidLink = document.getElementsByClassName('vidLink');
const closeVid = document.getElementById('closeVid');
const nextVid = document.getElementsByTagName('button');
// const player1 = document.getElementById('kaltura_player_1296053933');
// const player2 = document.getElementById('kaltura_player_583624028');
// const player3 = document.getElementById('kaltura_player_813030511');
// const player4 = document.getElementById('kaltura_player_977734558');
// const vimeoPlayer1 = new Vimeo.Player(player1);
// const vimeoPlayer2 = new Vimeo.Player(player2);
// const vimeoPlayer3 = new Vimeo.Player(player3);
// const vimeoPlayer4 = new Vimeo.Player(player4);
// try {
//   let kalturaPlayer1 = KalturaPlayer.setup({
//     targetId: "kaltura_player_1296053933",
//     provider: {
//       partnerId: 1759891,
//       uiConfId: 34164591
//     },
//     playback: {
//       autoplay: false
//       }
//   });
//   kalturaPlayer.loadMedia({entryId: '1_n8eimxsk'});
// } catch (e) {
// console.error(e.message)
// }
var kdp1;
var kdp2;
var kdp3;
var kdp4;
$(document).ready(function(){
    kWidget.embed({
        'targetId': 'kaltura_player_1296053933',
        'wid': '_1759891',
        'uiconf_id' : '34164591',
        'entry_id' : '1_n8eimxsk',
        'flashvars': {
            'autoPlay': false
        },
        readyCallback: function( pID ){
              kdp1 = document.getElementById(pID);
            }
    });
    kWidget.embed({
        'targetId': 'kaltura_player_583624028',
        'wid': '_1759891',
        'uiconf_id' : '34164591',
        'entry_id' : '1_ob50nxlm',
        'flashvars': {
            'autoPlay': false
        },
        readyCallback: function( pID ){
              kdp2 = document.getElementById(pID);
            }
    });
    kWidget.embed({
        'targetId': 'kaltura_player_813030511',
        'wid': '_1759891',
        'uiconf_id' : '34164591',
        'entry_id' : '1_m10f94sp',
        'flashvars': {
            'autoPlay': false
        },
        readyCallback: function( pID ){
              kdp3 = document.getElementById(pID);
            }
    });
    kWidget.embed({
        'targetId': 'kaltura_player_977734558',
        'wid': '_1759891',
        'uiconf_id' : '34164591',
        'entry_id' : '1_1rzq1nop',
        'flashvars': {
            'autoPlay': false
        },
        readyCallback: function( pID ){
              kdp4 = document.getElementById(pID);
            }
    });


    const vidModal = '#watchVid'; 
    
    // function stopVideo() {
    //     // var iframe = $('.owl-item.active').find('iframe'); 
    //     // // saves the current iframe source
    //     // var vidsrc = iframe.attr('src');
    //     // // sets the source to nothing, stopping the video
    //     // iframe.attr('src', '');
    //     // // sets it back to the correct link so that it reloads immediately on the next window open
    //     // iframe.attr('src', vidsrc);
    //     }
    
    // $(vidLink).click(function(e){
    
    //   e.preventDefault();
    // //   var vidUrl = $(this).attr('data-vidlink');
    //   $(vidModal).removeClass('hidden');
    // });
    
    $(closeVid).click(function(e){
      e.preventDefault();
      $(vidModal).addClass('hidden');
        kdp1.sendNotification("doStop");
        kdp2.sendNotification("doStop");        
        kdp3.sendNotification("doStop");
        kdp4.sendNotification("doStop");
    });
    
    
    var owl = $('#myCarousel');
        // Listen to owl events:
    //     owl.on('changed.owl.carousel', function(event) {
    //         //  stopVideo();
    //     //console.log('slide changed');
    // });
    
    
    $('body').on('click', '.owl-prev, .owl-next, .owl-dot', function(e){
        kdp1.sendNotification("doPause");
        kdp2.sendNotification("doPause");        
        kdp3.sendNotification("doPause");
        kdp4.sendNotification("doPause");
    });
    
    
    // one
    //$('.one').click(function(e){
    $('body').on('click', '.one', function(e){
        console.log('one');
        e.preventDefault();
        $(vidModal).removeClass('hidden');
        $('#myCarousel').trigger('to.owl.carousel', 0)
        // vimeoPlayer1.play();
        kdp1.sendNotification("doPlay");
    
    });
    // two
    //$('.two').click(function(e){
    $('body').on('click', '.two', function(e){
        console.log('two');
        e.preventDefault();
        $(vidModal).removeClass('hidden');
        $('#myCarousel').trigger('to.owl.carousel', 1)
        // vimeoPlayer2.play();
        kdp2.sendNotification("doPlay");
    
    });
    // three
    //$('.three').click(function(e){
    $('body').on('click', '.three', function(e){
        console.log('three');
        e.preventDefault();
        $(vidModal).removeClass('hidden');
        $('#myCarousel').trigger('to.owl.carousel', 2)
        // vimeoPlayer3.play();
        kdp3.sendNotification("doPlay");
    
    });    
    //four
    //$('.four').click(function(e){
    $('body').on('click', '.four', function(e){
        console.log('four');
        e.preventDefault();
        $(vidModal).removeClass('hidden');
        $('#myCarousel').trigger('to.owl.carousel', 3)
        // vimeoPlayer4.play();
        kdp4.sendNotification("doPlay");
    
    }); 

});
  </script>

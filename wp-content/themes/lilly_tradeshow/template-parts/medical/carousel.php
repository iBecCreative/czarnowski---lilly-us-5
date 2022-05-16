<?php
  $slides = get_field('carousel');

  //check cookies to show alert banner
  $ab = false;
  $abclass = '';//do this with js for now' active';
  if (array_key_exists('alertbannerdismissed', $_COOKIE) && $_COOKIE['alertbannerdismissed'] == 'true') {
    $abclass = '';
  }

?>
<div class="medical_carousel">
  <?php
    /*foreach ($slides as $slide) {
      ?>
      <div class="masthead" style="background-image: url('<?= $slide['image']['url'] ?>')">
        <div class="masthead__container">
          <div class="inner-container">
            <h1 class="medium-text"><?php echo $slide['title'] ?></h1>
            <h1 class="large-text"><?php echo $slide['subtitle'] ?></h1>
            <p class="small-text"><?php echo $slide['text'] ?></p>
          </div>
        </div>
      </div>
      <?php
    }*/
  ?>
    <div class="masthead masthead--0">
    <div class="masthead__container">
      <img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/ibex/images/new_first_slide.jpg" alt="Welcome">
      <div class="inner-container left-side-text">
        <h1 class="large-blue-text">Welcome</h1>
        <h2 class="sub-text-blue" style="max-width:500px;">Thank you on behalf of the Lilly Medical Affairs Gastroenterology team for your commitment to quality patient care and excellence in clinical patient outcomes. The work you do is important in the field of inflammatory bowel disease — you improve the quality of life for all people worldwide. Please take a moment to watch this brief welcome video.</h2>
        <a href="#0" class="watch_now videoThumb vidLink" data-id="kaltura_player_1555157968" data-vidlink="https://www.kaltura.com/p/1759891/sp/175989100/embedIframeJs/uiconf_id/34164591/partner_id/1759891?iframeembed=true&playerId=kaltura_player_1555157968&entry_id=1_1441qz6t&wid=_1759891&flashvars[leadWithHTML5]=true&flashvars[sideBarContainer.plugin]=true&flashvars[sideBarContainer.position]=left&flashvars[sideBarContainer.clickToClose]=true&flashvars[chapters.plugin]=true&flashvars[chapters.layout]=vertical&flashvars[chapters.thumbnailRotator]=false&flashvars[streamSelector.plugin]=true&flashvars[EmbedPlayer.SpinnerTarget]=videoHolder&flashvars[dualScreen.plugin]=true" style="color: #1D3B6C;">Watch Now</a>
      </div>
    </div>
  </div>
  <!-- <div class="masthead masthead--3">
    <div class="masthead__container">
      <img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/ibex/images/slide-3.jpeg" alt="Bowel Urgency Conversation Gap">
      <div class="inner-container left-side-text">
        <h1 class="large-white-text">Bowel Urgency<br>Conversation Gap</h1>
        <a href="<?php echo get_page_link(2520);?>" class="watch_now">Watch Now</a>
      </div>
    </div>
  </div> -->
  <div class="masthead masthead--2">
    <div class="masthead__container">
        <img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/ibex/images/gap-slide.png" alt="Bowel Urgency Conversation Gap">
        <div class="inner-container left-side-text">
          <h1 class="large-white-text">Closing the Gap:<br>
          <strong>A Candid Conversation About Bowel Urgency</strong></h1>
          <h2 class="sub-text-white" style="max-width:500px;">Dr David T. Rubin shares his perspective on the importance of addressing bowel urgency with his patients with ulcerative colitis and how he approaches this sensitive topic </h2>
          <button class="awYeah">
            <a href="<?php echo get_page_link(2520);?>">Watch Now</a>
        </button>
          <div class="disclaimer">
          <p>Speakers were encouraged to include their own experience where appropriate. Some of the content in this video may reflect the speaker’s personal opinion, may be specific to their own practice and does not reflect an official view or position of Eli Lilly and Company.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="masthead masthead--1">
    <div class="masthead__container">
      <img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/ibex/images/second_slide.png" alt="Bowel Urgency Interactive Quiz">
      <div class="inner-container left-side-text">
        <h1 class="large-white-text">Bowel Urgency<br>Interactive Quiz</h1>
        <h2 class="sub-text-white">Want to test your knowledge about your patient’s struggle with bowel urgency?</h2>
        <a href="<?php echo get_bloginfo('url'); ?>/medical-affairs/bowel-urgency-quiz/" class="check_knowledge">Check Knowledge</a>
      </div>
    </div>
  </div>

  <div class="masthead masthead--2">
    <div class="masthead__container">
      <img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/ibex/images/third_slide.png" alt="microscopic view of a molecule">
      <div class="inner-container left-side-text">
        <h1 class="large-white-text">IL-23 and<br>Pathophysiology of IBD</h1>
        <h2 class="sub-text-white">Learn more about the role of IL-23 in the pathophysiology of inflammatory bowel disease.</h2>
        <a href="<?php echo get_bloginfo('url'); ?>/medical-affairs/il-23-and-pathophysiology-of-ibd/" class="il_path">Watch Now</a>
      </div>
    </div>
  </div>

  <div class="masthead masthead--3">
    <div class="masthead__container">
      <img src="<?php echo get_bloginfo('url'); ?>/wp-content/themes/lilly_tradeshow/ibex/images/ulc_slide.png" alt="Woman walking with a backpack on with a molecular background">
      <div class="inner-container left-side-text">
        <p class="ulc_date">EVENT — 23 MAY 2022</p>
        <h1 class="large-white-text">Elevating Ulcerative Colitis Treatment Expectations<br><em>Time to Expect More</em></h1>
        <h2 class="sub-text-white">Grand Ballroom, Omni San Diego Hotel,<br>San Diego, CA</h2>
        <a href="<?php echo get_page_link(2570);?>" class="reminders">Sign Up for Reminders</a>

      </div>
    </div>
  </div>

</div>

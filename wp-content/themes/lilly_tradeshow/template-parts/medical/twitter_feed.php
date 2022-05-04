<?php
// curated twitter feed is set on the homepage
  $tweets = get_field('twitter_feed');
  $twitter_sidebar =  get_field('twitter_sidebar');
?>
<div class="section_gray section_gray--transparent">
  <div class=" twitter-section">
    <div style="position:relative;">
      <h3>Connect with us</h3>
      <div  class="clippy clippy--left" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-mirror="true" data-aos-easing="ease-in-out"data-aos-once="false">
          <p class="sidebar-text"> <?= $twitter_sidebar['text'] ?></p>
          <img src="<?= $twitter_sidebar['image']['url'] ?>" />
      </div>  
    </div>
    <div class="twitter_feed twitter_feed--partial">
      <?php
        foreach ($tweets AS $tweet) {
          // print '<pre>';
          // print_r($tweet);
          // print '</pre>';

          if (!$tweet['hide']) {
          ?>
          <div class="tweet_containter <?php if($tweet['read_more']){ echo 'readMore'; } ?>">
              <?php if ($tweet['image']): ?>
                <div class="image-container">
                <a href="<?= $tweet['link']['url'] ?>"><img class="twitter--icon" src="<?= $tweet['icon']['url'] ?>" /></a>
                  <img class="twitter--post-image"  alt="view on twitter" src="<?= $tweet['image']['url'] ?>" />
                </div>
                <a class="twitter--account twitter--account--img" href="<?= $tweet['link']['url'] ?>"><?= $tweet['twitter_handle'] ?></a>
                <p class="twitter--post-info"><?= $tweet['post_info'] ?></p>

                <a class="twitter--logo" href="<?= $tweet['link']['url'] ?>"><img alt="social media platform logo" src="<?php echo $tweet['twitter_icon']['url']; ?>"></a>

                <div class="twitter--post-text" >
                  <?= $tweet['content'] ?>
                </div>

                <?php if($tweet['read_more']){ ?>
                    <div class="readMoreToggle">Read More</div>
                <?php } ?>

              <?php else: ?>
                <div class="no-image-container">
                  <a href="<?= $tweet['link']['url'] ?>"><img alt="view on twitter" class="twitter--icon" src="<?= $tweet['icon']['url'] ?>" /></a>
                  <a class="twitter--account" href="<?= $tweet['link']['url'] ?>"><?= $tweet['twitter_handle'] ?></a>
                  <p class="twitter--post-info"><?= $tweet['post_info'] ?></p>
                </div>
                <a class="twitter--logo" href="<?= $tweet['link']['url'] ?>"><img alt="social media platform logo" src="<?php echo $tweet['twitter_icon']['url']; ?>"></a>
                <div class="twitter--post-text" >
                  <?= $tweet['content'] ?>
                </div>
                
                <?php if($tweet['read_more']){ ?>
                    <div class="readMoreToggle">Read More</div>
                <?php } ?>

              <?php endif; ?>
          
            
          </div>
          <?php
          }//endif
        }//endforeach
      ?>
    </div>
    
  </div>
</div>

App.Slide = {

  swiper: null,
  videoElement: null,

  init: function() {

    this.initSwiper();
  
    setTimeout(this.launchVideo.bind(this), 800);
    
  },
  
  launchVideo: function() {
    
    this.videoElement = document.getElementById('myvideo');
    this.setVideo();
    
    this.videoElement.addEventListener('ended',function() {
      this.videoElement.load();
      this.videoElement.pause();
    }.bind(this), false);
    
  },
  
  setVideo: function() {
    if (!this.videoElement.paused) {
      this.videoElement.pause();
    }
    this.videoElement.src = 'video/ac_IL17_Render_B_White.mp4';
    this.videoElement.poster = 'img/videoposter.png';
    this.videoElement.pause();
  },

  initSwiper: function() {
    
    let _that = this;

    this.swiper = new Swiper('.swiper-container', {
      speed: 400,
      spaceBetween: 100,
      resistanceRatio: 0,
      preloadImages: true,
      noSwipingSelector: '#myvideo',

      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      on: {
        slideChange: function() {
          document.querySelector('.g-button__references').setAttribute('data-dialog', 'g-dialog__content-' + (this.realIndex + 1));
  
          if ((this.realIndex + 1) !== 4 && _that.videoElement && !_that.videoElement.paused) {
            _that.setVideo();
          }
        }
      }
    });

  }

};

(function() {

  App.init();

})();
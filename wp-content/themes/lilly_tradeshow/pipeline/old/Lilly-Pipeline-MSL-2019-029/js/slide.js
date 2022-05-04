App.Slide = {

  swiper: null,
  video: null,
  videoOverlay: null,
  
  init: function() {
    
    this.initSwiper();
    
    this.video = document.getElementById('f-video');
    this.videoOverlay = document.getElementById('f-video-overlay');
    setTimeout(this.launchVideo.bind(this), 500);
    
  },
  
  launchVideo: function() {
    this.videoOverlay.classList.add('s-fade-out');
    setTimeout(function() { this.videoOverlay.classList.add('s-hide') }.bind(this), 250);
  },

  initSwiper: function() {

    this.swiper = new Swiper('.swiper-container', {
      speed: 400,
      spaceBetween: 100,
      resistanceRatio: 0,
      preloadImages: true,

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
        }
      }
    });



  }

};

(function() {

  App.init();

})();
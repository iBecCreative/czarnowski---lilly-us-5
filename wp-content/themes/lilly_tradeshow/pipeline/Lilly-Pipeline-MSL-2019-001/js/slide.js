App.Slide = {

  swiper: null,
  video: null,
  videoOverlay: null,

  init: function() {
    this.video = document.getElementById('f-video');
    this.videoOverlay = document.getElementById('f-video-overlay');

    // setTimeout(this.launchVideo.bind(this), 500);
  },

  launchVideo: function() {
    this.videoOverlay.classList.add('s-fade-out');
    setTimeout(function() { this.videoOverlay.classList.add('s-hide') }.bind(this), 500);
  }

};



(function() {

  App.init();

})();
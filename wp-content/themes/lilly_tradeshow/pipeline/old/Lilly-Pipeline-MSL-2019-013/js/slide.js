App.Slide = {

  swiper: null,

  init: function() {

    this.initSwiper();

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
    });



  }

};

(function() {

  App.init();

})();
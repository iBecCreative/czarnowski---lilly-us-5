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
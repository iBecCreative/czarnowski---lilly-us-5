let App = {

  move: 'touchmove',
  press: 'touchstart',
  release: 'touchend',

  contentHammerInst: null,
  dialogHammerInst: null,

  contentElement: null,
  dialogElement: null,
  externalElement: null,
  externalFrame: null,

  Slide: {

    init: function() {
      return;
    }

  },
  Video: {

    init: function() {
      return;
    }

  },

  Presentation: {

    init: function() {

      this.insertMenu();
      this.initElements();
      this.initEventHandlers();

    },

    initElements: function() {

      this.contentElement = document.querySelector('.g-content');
      this.dialogElement = document.getElementById('g-dialog');
      this.externalElement = document.getElementById('g-external');
      this.menuElement = document.getElementById('g-menu');

    },

    initEventHandlers: function() {

      this.contentElement.addEventListener(this.release, this.onContentTap.bind(this), true);
      this.dialogElement.addEventListener(this.release, this.closeDialog.bind(this), true);

      this.contentHammerInst = new Hammer(this.contentElement, {
        domEvents: true
      });
      this.dialogHammerInst = new Hammer(this.dialogElement, {
        domEvents: true
      });
      this.menuHammerInst = new Hammer(this.menuElement, {
        domEvents: true
      });

      this.contentHammerInst.on('tap', this.onContentTap.bind(this));
      this.dialogHammerInst.on('tap', this.closeDialog.bind(this));
      this.menuHammerInst.on('tap', this.onMenuTap.bind(this));

    },

    onContentTap: function(event) {

      let trigger = event.target;
  
      if (App.Slide.onContentTap) {
        App.Slide.onContentTap(event);
      }

      if (trigger.hasAttribute('data-slide')) {
        this.doGotoSlide(trigger);
      } else if (trigger.hasAttribute('data-dialog')) {
        this.doDialog(trigger);
        gtag('event', 'Molecule State Modal', {
          'event_label': 'Terms',
          'event_category': 'Medical Affairs',
          'non_interaction': true
          });
      } else if (trigger.hasAttribute('data-external')) {
        this.doExternal(trigger);
      } else if (trigger.classList.contains('close') || trigger.id === 'g-external') {
        this.closeExternal();
      } else if (trigger.classList.contains('g-heading__menu')) {
        this.menuElement.classList.toggle('active');

        gtag('event', 'Molecule State Modal', {
          'event_label': 'Menu',
          'event_category': 'Medical Affairs',
          'non_interaction': true
          });

      }

    },
    onMenuTap: function(event) {

      let trigger = event.target;

      if (trigger.hasAttribute('data-slide')) {
        this.doGotoSlide(trigger);
      } else {
        this.menuElement.classList.remove('active');
      }

    },

    doGotoSlide: function(trigger) {

      let slide = trigger.hasAttribute('data-slide') ?
        trigger.getAttribute('data-slide') :
        null;

      if (slide) { // !== null
        window.location.href = '../' + slide + '/index.html';
      }

    },

    doDialog: function(trigger) {

      let dialog = trigger.hasAttribute('data-dialog') ?
        trigger.getAttribute('data-dialog') :
        null;

      this.dialogElement.classList.add('active', dialog);

    },

    closeDialog: function(event) {

      // event.stopPropagation();

      this.dialogElement.className = '';

    },

    doExternal: function(trigger) {

      if (!this.externalElement)
        return;

      if (!this.externalFrame)
        this.externalFrame = this.externalElement.querySelector('iframe');

      console.log(trigger.getAttribute('data-external'));

      this.externalFrame.src = trigger.getAttribute('data-external');
      this.externalElement.classList.add('active');

    },

    closeExternal: function(event) {

      this.externalFrame.src = '';
      this.externalElement.classList.remove('active');

    },


    /**
     * Begin Hamburger Menu
     */
    menuItems: [
      [ // p3
        {
          "image": "IL-13",
          "slide": "Lilly-Pipeline-MSL-2019-",
          "slide-indices": ["002", "003", "004", "0041"]
        },
        {
          "image": "IL-23",
          "slide": "Lilly-Pipeline-MSL-2019-",
          "slide-indices": ["011", "012", "013", "0131"]
        },
        {
          "image": "JAK12",
          "slide": "Lilly-Pipeline-MSL-2019-",
          "slide-indices": ["005", "006", "007", "0071"]
        },
      ],
      [ // p2
        {
          "image": "CXCR12",
          "slide": "Lilly-Pipeline-MSL-2019-",
          "slide-indices": ["017", "018", "019", "0191"]
        },
        {
          "image": "IL-2",
          "slide": "Lilly-Pipeline-MSL-2019-",
          "slide-indices": ["020", "021", "022", "0221"]
        },
        {
          "image": "PD-1",
          "slide": "Lilly-Pipeline-MSL-2019-",
          "slide-indices": ["029", "030", "031", "0311"]
        },
      ],
    ],
    menuIndex: 0,

    insertMenu: function() {

      let menuWrapper = document.createElement('div'),
        menuList;

      for (let i = 0; i < this.menuItems.length; i++) {
        menuList = this.createMenuList(this.menuItems[i]);
        menuWrapper.appendChild(menuList);
      }
      menuWrapper.id = 'g-menu';

      document.body.appendChild(menuWrapper);

    },

    createMenuList: function(menuListObject) {

      let menuList = document.createElement('ul'),
        menuListItem;

      for (let i = 0; i < menuListObject.length; i++) {
        menuListItem = this.createMenuListItem(menuListObject[i]);
        menuList.appendChild(menuListItem);
      }

      return menuList;

    },

    createMenuListItem: function(itemObject) {

      let listItem = document.createElement('li');

      listItem.setAttribute('data-slide', itemObject.slide + itemObject['slide-indices'][0]);
      listItem.classList.add('g-menu__item-' + (this.menuIndex++));
      listItem.classList.add('g-menu__' + itemObject.image);

      for (let i = 0; i < itemObject['slide-indices'].length; i++) {
        if (document.location.href.indexOf(itemObject.slide + itemObject['slide-indices'][i]) > -1) {
          listItem.classList.add('active');
        }
      }

      listItem.innerHTML = '<br />';

      return listItem;

    }

  },

  init: function() {

    this.Presentation.init();
    this.Slide.init();

  }

};

document.body.addEventListener('touchmove', function(event) {
  event.preventDefault();
}, false);
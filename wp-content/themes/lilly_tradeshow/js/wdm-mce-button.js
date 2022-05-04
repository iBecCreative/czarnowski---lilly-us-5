(function() {
       tinymce.PluginManager.add('wdm_mce_calendar', function( editor, url ) {
           editor.addButton('wdm_mce_calendar', {
                       text: 'Add Calendar',
                       icon: false,
                       onclick: function() {
                         // change the shortcode as per your requirement
                          editor.insertContent('[calendar id="22464"][calendar id="22466"]');
                      }
             });
       });
})();

(function() {
       tinymce.PluginManager.add('wdm_mce_button', function( editor, url ) {
           editor.addButton('wdm_mce_button', {
                       text: 'Add Button',
                       icon: false,
                       onclick: function() {
                         // change the shortcode as per your requirement
                          editor.insertContent('[button address="/" text="Example"]');
                      }
             });
       });
})();

//
// (function() {
//   tinymce.PluginManager.add('wdm_mce_button', function( editor, url ) {
//    editor.addButton( 'wdm_mce_button', {
//      text: 'Add A Button',
//      icon: false,
//      type: 'menubutton',
//      menu: [
//          {
//           text: 'Add ResponsiveCalendar',
//           onclick: function() {
//              editor.insertContent('[calendar id="22464"][calendar id="22466"]');
//                     }
//           }
//        ]
//       });
//   });
// })();

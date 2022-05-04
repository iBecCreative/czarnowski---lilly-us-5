

jQuery(document).ready(function($) {
  $( ".next__piece" ).click(
    function() {
      // $( this ).parent().toggleClass( "piece__fullscreen" );
      $( this ).parent().next().toggleClass( "piece__fullscreen" );
    }
  );
});

jQuery(document).ready(function($) {
  $( ".piece" ).click(
    function() {

      $( this ).toggleClass( "piece__fullscreen" );
      $( this ).parent().prev().prev().toggleClass( "hidden" );
    }
  );
});

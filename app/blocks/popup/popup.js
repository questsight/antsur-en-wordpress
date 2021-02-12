jQuery( document ).ready( function() {
  jQuery( '.popup__exit' ).click( function() {
    jQuery('.popup').addClass('hidden');
  });
  jQuery(this).keydown(function(eventObject){
    if (eventObject.which == 27){
      jQuery( '.popup' ).addClass('hidden'); 
    }
  });
  jQuery( '.popup' ).click( function (e) {
    var content = jQuery("> .popup__content",this);
    if (!content.is(e.target) && content.has(e.target).length === 0) {
			jQuery( '.popup' ).addClass('hidden');
		}
	});
  jQuery( '.event__call' ).click( function() {
    jQuery('#callback').removeClass('hidden');
  });
});
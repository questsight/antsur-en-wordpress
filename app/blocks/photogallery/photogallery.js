jQuery( document ).ready( function() {
  var calc = jQuery(".photogallery__one").length;
  var item = 0;
  jQuery( '.photogallery__img' ).click( function() {
    jQuery('#photo-full').attr('src', jQuery(this).attr('src'));
    jQuery('#date-full').html(jQuery(this).attr('date'));
    jQuery('#description-full').html(jQuery(this).attr('description'));
    item = +jQuery(this).attr('item');
    jQuery( '.photogallery__full' ).removeClass('hidden');
  });
  jQuery( '#arrow-left' ).click( function () {
    if(item == 1){
      item = calc;
    } else {
      item--;
    }
    
    jQuery('#date-full').addClass('animation-opacity-0').html(jQuery('[item="'+item+'"]').attr('date'));
    jQuery('#description-full').addClass('animation-opacity-0').html(jQuery('[item="'+item+'"]').attr('description'));
    jQuery('#arrow-left').addClass('animation-opacity-0');
    jQuery('#arrow-right').addClass('animation-opacity-0');
    jQuery('#photo-full').addClass('animation-opacity-0').attr('src', jQuery('[item="'+item+'"]').attr('src')).on("load", function() {
      jQuery('#photo-full').removeClass('animation-opacity-0').addClass('animation-opacity');
      jQuery('#date-full').removeClass('animation-opacity-0').addClass('animation-opacity');
      jQuery('#description-full').removeClass('animation-opacity-0').addClass('animation-opacity');
      jQuery('#arrow-left').removeClass('animation-opacity-0').addClass('animation-opacity');
      jQuery('#arrow-right').removeClass('animation-opacity-0').addClass('animation-opacity');
      setTimeout(function() {
        jQuery('#photo-full').removeClass('animation-opacity');
        jQuery('#date-full').removeClass('animation-opacity');
        jQuery('#description-full').removeClass('animation-opacity');
        jQuery('#arrow-left').removeClass('animation-opacity');
        jQuery('#arrow-right').removeClass('animation-opacity');
      }, 1000);
    })
    return false;
	});
  jQuery( '#arrow-right' ).click( function () {
    if(item == calc) {
      item = 1;
    } else {
      item++;
    }
    jQuery('#date-full').addClass('animation-opacity-0').html(jQuery('[item="'+item+'"]').attr('date'));
    jQuery('#description-full').addClass('animation-opacity-0').html(jQuery('[item="'+item+'"]').attr('description'));
    jQuery('#arrow-left').addClass('animation-opacity-0');
    jQuery('#arrow-right').addClass('animation-opacity-0');
    jQuery('#photo-full').addClass('animation-opacity-0').attr('src', jQuery('[item="'+item+'"]').attr('src')).on("load", function() {
      jQuery('#photo-full').removeClass('animation-opacity-0').addClass('animation-opacity');
      jQuery('#date-full').removeClass('animation-opacity-0').addClass('animation-opacity');
      jQuery('#description-full').removeClass('animation-opacity-0').addClass('animation-opacity');
      jQuery('#arrow-left').removeClass('animation-opacity-0').addClass('animation-opacity');
      jQuery('#arrow-right').removeClass('animation-opacity-0').addClass('animation-opacity');
      setTimeout(function() {
        jQuery('#photo-full').removeClass('animation-opacity');
        jQuery('#date-full').removeClass('animation-opacity');
        jQuery('#description-full').removeClass('animation-opacity');
        jQuery('#arrow-left').removeClass('animation-opacity');
        jQuery('#arrow-right').removeClass('animation-opacity');
    }, 1000);
      
    });
    return false;
	});
  jQuery( '.photogallery__box' ).click( function () {
    return false;
	});
  jQuery( '.photogallery__full' ).click( function () {
    jQuery( '.photogallery__full' ).addClass('hidden');
	});
  jQuery( '.photogallery__close' ).click( function() {
    jQuery( '.photogallery__full' ).addClass('hidden');
  });
  jQuery(this).keydown(function(eventObject){
    if (eventObject.which == 27){
      jQuery( '.photogallery__full' ).addClass('hidden'); 
    }
  });
  jQuery(this).keydown(function(eventObject){
    if (eventObject.which == 37){
      jQuery('#arrow-left').click();
    }
  });
  jQuery(this).keydown(function(eventObject){
    if (eventObject.which == 39){
      jQuery('#arrow-right').click();
    }
  });
});
var lastX;
jQuery(document).bind('touchmove', function (e){
  var currentX = e.originalEvent.touches[0].clientX;
  if(currentX > lastX){
    jQuery('#arrow-left').click();
  }else if(currentX < lastX){
    jQuery('#arrow-right').click();
  }
  lastX = currentX;
});
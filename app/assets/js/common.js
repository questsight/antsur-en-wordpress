jQuery( document ).ready( function() {
  jQuery('.e-books__detailed').on('click', function(){
    var top = jQuery(this).parent(".e-books__one").offset().top - 20;
    jQuery('.e-books__one_type_open').css("top","auto");
    jQuery('.e-books__one_type_open').removeClass("e-books__one_type_open");
    jQuery('.e-books__one').css("opacity","0.5");
    jQuery(this).parent(".e-books__one").addClass("e-books__one_type_open");
    jQuery('.e-books__one_type_open').css("opacity","1");
    jQuery('.e-books__one_type_open').css("top",top);
    jQuery("html:not(:animated),body:not(:animated)").animate({
      scrollTop: top - 50
    }, 300);
  });
  jQuery('.e-books__close').on('click', function(){
    jQuery('.e-books__one_type_open').css("top","auto");
    jQuery('.e-books__one_type_open').removeClass("e-books__one_type_open");
    jQuery('.e-books__one').css("opacity","1");
  }); 
});
jQuery( document ).ready( function() {
	jQuery( '#hamburger' ).click( function () {
		jQuery( '.hamburger__item' ).toggleClass( 'hamburger__item_open' );
	});
});
jQuery( document ).ready( function() {
  if ( window.matchMedia( '(min-width: 768px)' ).matches ) {
    jQuery( '#navigation__list' ).removeClass( 'navigation__hidden' );
  }
  jQuery( '.navigation__hidden .menu-item-has-children a').attr("onclick", "return false");
  jQuery( '.navigation__hidden .menu-item-has-children ul li a').removeAttr("onclick");
  jQuery( '#hamburger' ).click( function() {
      jQuery( '#navigation' ).fadeToggle(600);
  });
  jQuery( '.navigation__hidden .menu-item-has-children' ).click( function() {
    if ( jQuery(this).hasClass(".menu-item-has-children-active") ) {
      jQuery('.navigation__hidden .menu-item-has-children').removeClass('.menu-item-has-children-active');
      jQuery(".navigation__hidden .menu-item-has-children ul").hide(600);
    } else {
      jQuery('.navigation__hidden .menu-item-has-children').removeClass('.menu-item-has-children-active');
      jQuery(this).addClass('.menu-item-has-children-active');
      jQuery(".navigation__hidden .menu-item-has-children ul").hide(600);
      jQuery("> ul", this).show(600); 
    }
  });
  jQuery('#navigation__list .menu-item-type-custom > a', this).on('click', function(){
    if ( window.matchMedia( '(min-width: 768px)' ).matches ) {
      return false;
    }
  }); 
});
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
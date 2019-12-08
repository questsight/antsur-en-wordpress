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
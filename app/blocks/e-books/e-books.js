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
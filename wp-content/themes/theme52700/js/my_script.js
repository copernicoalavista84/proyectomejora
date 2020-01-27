jQuery(window).load(function(){
    
    jQuery(".btn-search").toggle(function(){
        jQuery("#search-header").fadeIn();
        jQuery(".btn-search").addClass("active");
        document.getElementById("search-form_it").focus();
    },function(){
        jQuery("#search-header").fadeOut();
        jQuery(".btn-search").removeClass("active");
    });
    
});

jQuery(document).ready(function(){

var 
  fullList1 = jQuery('.list_1')
, fullFooterMap = jQuery('.footer_map')
, direction = jQuery('body').css("direction")
, _window = jQuery(window)
;


jQuery('.list_1 li').css('display', 'inline-block');
jQuery('.footer_map').css('display', 'block');

jQuery(window).resize(
   function(){
      mainResizer();
   }
).trigger('resize');


function mainResizer(){
  if(direction == "ltr"){
    fullList1.css({width: _window.width(), "margin-left": (_window.width()/-2), "left":"50%" });
    fullFooterMap.css({width: _window.width(), "margin-left": (_window.width()/-2),"left":"50%"});
  }else{
    fullList1.css({width: _window.width(), "margin-right": (_window.width()/-2), "right":"50%" });
    fullFooterMap.css({width: _window.width(), "margin-right": (_window.width()/-2),"right":"50%"});
  }
}

});
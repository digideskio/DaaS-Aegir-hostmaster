var sidebarHeight;
var contentHeight;
var sidebarsecondHeight;

jQuery(document).ready(function() {
  var navHeight = jQuery("#admin-menu").height();
  jQuery("#page").css("margin-top",navHeight);
  if(jQuery("#content").find(".views-table").length > 0 ){
    var topPos =  jQuery('#content .views-table').offset().top;
    jQuery("#page #sidebar-second").css("top",topPos+'px');
  }else if(jQuery("#content").find(".hosting-table").length > 0 ){
    var topPos =  jQuery('#content .hosting-table').offset().top;
    jQuery("#page #sidebar-second").css("top",topPos+'px');
  }
   sidebarHeight =  parseFloat(jQuery("#sidebar-first").css("height"));
   contentHeight =  parseFloat(jQuery("#content").css("height"));
   sidebarsecondHeight =  parseFloat(jQuery("#sidebar-second").css("height"));
   var heightArray = [sidebarHeight,contentHeight,sidebarsecondHeight];
   var max = Math.max.apply(Math, heightArray);
   jQuery("#sidebar-first").css("height",max);

   if( !jQuery.trim( jQuery('#content-right-area').html() ).length ) {
    jQuery(".page-hosting-sites .responsive-table").css("width","100%");
    jQuery("#content-left").css("width","100%");
    jQuery("#edit-select").css("width","50%");
   }
});

jQuery( window ).resize(function() {
  var navHeight = jQuery("#admin-menu").height();
  jQuery("#page").css("margin-top",navHeight);
  if(jQuery("#content").find(".views-table").length > 0 ){
    var topPos =  jQuery('#content .views-table').offset().top;
    topPos = topPos-navHeight;
    jQuery("#page #sidebar-second").css("top",topPos+'px');
  }else if(jQuery("#content").find(".hosting-table").length > 0 ){
    var topPos =  jQuery('#content .hosting-table').offset().top;
    topPos = topPos-navHeight;
    jQuery("#page #sidebar-second").css("top",topPos+'px');
  }

});
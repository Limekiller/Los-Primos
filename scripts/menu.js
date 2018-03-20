$(function() {                       //run when the DOM is ready
      $(".m_buttons_uns").click(function() {  //use a class, since your ID gets mangled
	if(!$(this).hasClass("m_buttons_select")){
              var plate_num = $(this).attr("id").slice(-1);
              $(".fmenu").fadeOut().delay(400);
              $("#rm"+plate_num).fadeIn(function(){});
              $(".m_buttons_uns").removeClass("m_buttons_select");
              $(this).addClass("m_buttons_select");      //add the class to the clicked element
                }
});
});

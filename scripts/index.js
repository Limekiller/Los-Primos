$(function() {                       //run when the DOM is ready
      $(".img_select").click(function() {  //use a class, since your ID gets mangled
              var plate_num = $(this).attr("id").slice(-1);
              $(".plate").removeClass("plate_selected");
              $("#p"+plate_num).addClass("plate_selected");
              $(".featured_item").removeClass("featured_item_selected");
              $("#fi"+plate_num).addClass("featured_item_selected");
              $(".img_select").removeClass("img_select_on");
              $(this).addClass("img_select_on");      //add the class to the clicked element
                });
});

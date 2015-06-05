$(document).ready(function () {
    
    $(".expanded_info").hide();

    $(".add_entity, .expanded_info").mouseenter(function () {
        $(".expanded_info").slideDown();
        $("header").hide();
      })
    .mouseleave(function () {
        $(".expanded_info").stop(true, true).delay(800).slideUp("slow");
        $("header").show();
      });

    $(".add_entity").click(function () {
        $(".radial_attractGrid").append("<div class='point'></div>");
    });
    
});
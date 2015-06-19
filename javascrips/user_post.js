$(document).ready(function () {
    $(".poster").hide();

    $("#poster").click(function () {
        $(".poster").slideToggle("slow");
    });
    
    //makes the post user page tabs above the featured post switch which is selected and what content to show
    $("#user-tabs li div").click(function () {
        $("#user-tabs li div").removeClass("selected");
        $("#user-tabs li div").addClass("hidden");
        $(this).removeClass("hidden");
        $(this).addClass("selected");
    });
    
});
$(document).ready(function () {
    $(".poster").hide();

    $("#poster").click(function () {
        $(".poster").slideToggle("slow");
    });
    
    //makes the post user page tabs above the featured post switch which is selected and what content to show
    $("#user-tabs li div").click(function () {
        $("#user-tabs li div").removeClass("selected");
        $("#user-featured .f").addClass("hidden");
        $(this).removeClass("hidden");
        $(this).addClass("selected");
    });
    
    
    //makes some elements sticky on scrool down
    $(".user-picture").sticky();
    
    $(".user-picture").on("sticky-start", function () {
        $(".user-picture").addClass(".user-picture-sticky");
    });

    $(".user-picture").on("sticky-end", function () {
        $(".user-picture").removeClass(".user-picture-sticky");
    });
    
});
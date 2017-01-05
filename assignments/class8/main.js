$(function(){

    var $myNavItem = $("li");

    $myNavItem.on("mouseover", function(){
        $(this).find(".scrollNav").animate(
            {height: "120px", padding: "10px"},
            {queue: false,
             duration: 500,
             easing: "linear",
             start: function(){
                 $(this).css("border-width", "3px");
             }
            }
        );

    }).on("mouseleave", function(){
        $(this).find(".scrollNav").animate(
            {height: "0px", padding: "0px"},
            {queue: false,
             duration: 500,
             easing: "linear",
             complete: function(){
                 $(this).css("border-width","0");
             }
            }

        );
    });
});

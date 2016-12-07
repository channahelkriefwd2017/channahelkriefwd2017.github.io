$(function(){

var myHamburger = $("#hamburger");
var myNav = $("nav");

myHamburger.on("click", function(){
        myNav.animate(
            {left: "999px"},
            {queue: false,
             duration: 800,
             easing: "linear",
            }
        );
    }).on("click", function(){
        myNav.animate(
            {right: "999px"},
            {queue: false,
             duration: 800,
             easing: "linear",
            }

        );
    });
});




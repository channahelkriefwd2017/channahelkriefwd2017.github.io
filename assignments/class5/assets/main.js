$(function(){

var myHamburger = $("#hamburger");
var myNav = $("#menu");
var myRight = "0px";
var invisible = true;

myHamburger.on("click", function(){
        myNav.animate(
            {right: myRight},
            {queue: false, duration: 800, easing: "linear",}
        );

        if (invisible){
            myRight = "-300px";
            invisible = false;
        }else{
            myRight = "0px";
            invisible = true;
        }

     });
});




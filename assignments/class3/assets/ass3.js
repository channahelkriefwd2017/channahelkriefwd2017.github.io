var myFooter = $("footer");
var myDiv = $(".div");



myFooter.on("mouseenter", function(){
    myDiv.fadeIn();
}).on("mouseleave", function(){
    myDiv.fadeOut();
});

$(function(){
    var captionHidden = true;

//    $("img").on("click", function(){
//        if (captionHidden){
//        $(this).next().show();
//        captionHidden = false;
//        }
//        else {
//            $(this).next().hide();
//            captionHidden = true;
//        }
//
//
//    });
//

});

var myImg = $("img");
<<<<<<< HEAD
var myCaption = $myImg.next();
=======
<<<<<<< HEAD
var myCaption = $myImg.next();
=======
var myCaption = myImg.next();
>>>>>>> origin/master
>>>>>>> origin/master


myImg.on("mouseenter", function(){
    myCaption.slideDown();
}).on("mouseleave", function(){
    myCaption.slideUp();
});

;

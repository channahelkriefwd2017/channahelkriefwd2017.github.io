$(function(){
    var circle = $("#myCircle");
    var saturationSlider = $("#saturation");
    var lightnessSlider = $("#lightness");

    $("#saturation, #lightness").on("change mousemove", function(){

    circle.css("background","hsl(0,"+saturationSlider.val()+"%, "+lightnessSlider.val()+"%)");
    circle.attr("data-color","hsl(0, "+saturationSlider.val()+"%, "+lightnessSlider.val()+"%)");

    });

});

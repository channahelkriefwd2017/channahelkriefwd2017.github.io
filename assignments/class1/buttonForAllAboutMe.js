document.getElementById("myButton").onclick = changeColor;
var currentColor = "darkmagenta";

function changeColor(){

    if (currentColor == "darkmagenta"){
        document.body.style.color = "chartreuse";
        currentColor = "chartreuse";
    } else {
        document.body.style.color = "darkmagenta";
        currentColor = "darkmagenta";


    }
     return currentColor;
}

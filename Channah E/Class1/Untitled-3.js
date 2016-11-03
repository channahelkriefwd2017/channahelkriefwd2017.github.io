document.getElementById("myButton").onclick = changeColor;
var currentColor = "aqua";

function changeColor(){
    
    if (currentColor == "aqua"){
        document.body.style.color = "yellow";
        currentColor = "yellow";
    } else {
        document.body.style.color = "aqua";
        currentColor = "aqua";
       
      
    }
     return currentColor;
}
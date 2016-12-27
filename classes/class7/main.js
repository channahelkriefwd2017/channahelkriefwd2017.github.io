$(function(){

    var invisible = true;
    var myRight = "20px";

    $("#ClickMe").on("click", function(){
        $("#menu").animate(
            {right: myRight},
            {queue: false, duration: 500, easing: "linear"}
        );

        if (invisible){
            myRight = "-100px";
            invisible = false;
        } else {
            myRight = "20px";
            invisible = true;
        }
    });

   $("#myform").submit(function(e){
        e.preventDefault();
    });

    $("#colour_red").prop("checked", true);

    $("input[name='myAge']").val("30");

    $("input[type='checkbox']").change(function(){
        //alert("the value is: " + $(this).val());
        $(this).next().css("color",$(this).val());
    });

 });

$(function(){
    var $theForm = $("#contact_form");
    $theForm.submit(function(e){
        e.preventDefault();
        var form_data = $theForm.serialize();

        $.ajax(
            {type: 'POST', url: $theForm.attr("action"), data: form_data}
        ).done(function(response){
            $theForm.html("<h2>"+response+"</h2>");
        }).fail(function(response){
            $theForm.append("<h2>"+response+"</h2>");
        });
    });


});

/**
 * @author Brett
 */
$(document).ready(function(){ 
    /*$('#response').load('rate.php').show();*/
    var form = $('#rate_form');
    $('#subm').click( function(event) {
    request = $.ajax( {          
        type: 'POST',
        url: 'rate.php',
        dataType: 'text',
        data: form.serialize(),
        
        });
    
    request.done(function (response, textStatus, jqXHR){
        $('#response').html(response).show();
        alert("done");
        })
    });
});
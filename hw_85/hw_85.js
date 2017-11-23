(function () {
    "use strict";


$('#button').click(function(){
    
    var text=$('#text');
          
          $.get('+text.val()+',function(loadeddata){
              console.log(loadeddata);
                $('div').append('<p>'+ loadeddata +' </p>'); 
            }).fail(function(xhr, statusCode, statusText) {
                $('div').append('<p> '+statusText+'</p>' );
       });
             
        });
 
}());
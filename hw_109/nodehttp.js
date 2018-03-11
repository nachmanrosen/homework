const http=require('http');
const url=process.argv[2];
http.get(url,function(response){
     var list='';  
     response.setEncoding('utf8');
     response.on("data", function (data){
         console.log(data);
      list+=data;
     } )
     response.on('end', function() {
        
         
     })

});
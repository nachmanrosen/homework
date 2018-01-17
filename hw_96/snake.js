(function () {
    "use strict";

    var canvas = document.getElementById("theCanvas"),
        context = canvas.getContext('2d');
        var y=0;
        var x=0;
        var direction=39;

    function resizeCanvas() {
        canvas.width = window.innerWidth - 10;
        canvas.height = window.innerHeight - 10;
    }

    window.addEventListener('resize', resizeCanvas);

    resizeCanvas();

    var img = document.createElement('img');
    img.src = "snake.png";

    /*setTimeout(() => {
        context.drawImage(img, 0, 0, 64, 64);
    }, 1000);*/
    //doesn't start until img loaded
    img.onload = function () {
        var x=-64;
        setInterval(() => {
            context.clearRect(x,y,64,64);
       
            //up 
   if(direction===38){
        y-=64;
   }
   //down
   if(direction===40){
        y+=64;
   }
   //right
   if(direction===39){
        x+=64;
   }
   //left
   if(direction===37){
        x-=64;
   }
        
          x+=64;   
        context.drawImage(img, x, y, 64, 64);
       
     },1000);
        
     
    }

document.addEventListener('keydown', function(event) {
   direction=event.keyCode;
});

}());

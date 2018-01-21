(function () {
    "use strict";

    var canvas = document.getElementById("Canvas"),
        context = canvas.getContext('2d'),
        ballX=40,
        changeX=50,
        changeY=50,
        ballY=40;

        context.beginPath();
        context.arc(ballX, ballY, 20, 0, Math.PI * 2);
        context.fill();

         function resizeCanvas() {

        canvas.width =window.innerWidth;
        canvas.height = window.innerHeight
    }

    window.addEventListener('resize', resizeCanvas);

    resizeCanvas();
    
    setInterval(() => {
        context.clearRect(ballX-100, ballY-100, 200,200);
        //context.globalCompositeOperation = 'destination-out';
        change();
        ballX+=changeX;
        ballY+=changeY;
        context.arc(ballX,ballY,20, 0, Math.PI * 2);
        
        context.fill();
    },500);
   function change(){
           context.clearRect(ballX-200, ballY-200, 200,200);
        if (  ballX  >= canvas.width  ) {
                changeX-=100;
            }
            else if(ballX < 0 ){
                    changeX+=100;
            }
        else if (ballY >= canvas.height){
             changeY-=100;
                }
        else if( ballY < 0 ){
        changeY+=100;
}
        //ballX+=changeX;
        //ballY+=changeY;
        context.beginPath();
        //context.arc(ballX, ballY, 20, 0, Math.PI * 2);
        //context.fill();
   }
   



        }());
(function () {
    "use strict";

    var canvas = document.getElementById("theCanvas"),
        context = canvas.getContext('2d'),
        timeDirection=0,
        ants = [];

    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

class Ant{
        constructor() {
        this.x = canvas.width / 2;
        this.y = canvas.height / 2; 
    }
    getRandomNumberBetween(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    }
    times(){
         timeDirection=Math.floor(Math.random()*10);
    }
    
     

    move () {
        ant.times();
        for(var i=0;i<=timeDirection;i++){
            
            this.x-=1;
            this.y+=1;
            context.color = 'black';
            context.fillRect(this.x, this.y, 2, 2);
            
        }
                ant.times();
               for(var i=0;i<=timeDirection;i++){
               this.x-=1;
               this.y-=1;
                context.color = 'black';
                context.fillRect(this.x, this.y, 2, 2);
                
            }
            ant.times();
               for(var i=0;i<=timeDirection;i++){
               this.x+=1;
               this.y+=1;
                context.color = 'black';
                context.fillRect(this.x, this.y, 2, 2);
                
            }
            //if(this.x==canvas.width ||this.y==canvas.height){
                //ant.add();
            //}
    

    }
    add(){
        for (var i = 0; i < 3000; i++) {
            var ant=new Ant()
            ants.push(ant);
    }
    }
        //this.x += ant.getRandomNumberBetween(-2, 2);
        //this.y += ant.getRandomNumberBetween(-2, 2);

        
        //context.fillRect(this.x, this.y, 2, 2);
     
   
}
//end of class. then call constructor


    for (var i =0; i < 100000; i++) {
        var ant=new Ant()
        ants.push(ant);
    }

   
    setInterval(() => {
        context.clearRect(0, 0, canvas.width, canvas.height);
        ants.forEach(ant => ant.move());
    }, 1000);
   

    
    
    $('#add').click(function(){
        for (var i = 0; i < 3000; i++) {
            var ant=new Ant()
            ants.push(ant);
    }
    });

    $('#color').on('change',function(){
        var color=this.value;
        context.fillStyle=color;

    });


}());
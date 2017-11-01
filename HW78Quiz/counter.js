var app= app||{} ;     //if already have app it should stay where it is, if not make new app
 app.counter=(function(){
     var counter=0;
 return{
     increment:function(num){
       return  counter+=num;
     },
     getCount:function(){
         return counter;
     }
 };
}(app || {}));     //looks like don't need (app || {}) at the end

//module counter immedietly invokes function that returns . thats the () at the end
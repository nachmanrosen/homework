var app= app||{} ;
 app.counter=(function(){
     var counter;
 return{
     increment:function(num){
       return  counter+=num;
     },
     getCount:function(){
         return counter;
     }
 };
}());
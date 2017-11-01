var app= app||{} ;
'use strict';
var counter;
var numCounter=0;
app.createCounter=(function(){
       numCounter+=1;
      return{
       counter:0,
     increment:function(num){
      return  this.counter+=num;
     },
     getCount:function(){
         return this.counter;
     }
     
    };
   
}());


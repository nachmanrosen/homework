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

//teacher did:
// app.createCounter=function(){
 //   var counter=0;
 //   return{  
 //    increment:function{
  //   counter++;}
//     getCount:function{
//    return counter} 
// this code makes seperate objects    var c=app.createCounter();
// closure is  a function that has accses to variables in parent enviornment

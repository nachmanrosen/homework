var app= app||{} ;

app.createCounter=(function(Count){
     var counter;
     var numCounters;
 
     Count.increment=function(num){
       return  counter+=num;
     },
     Count.getCount=function(){
         return counter;
     };
     numCounters+=1;
    
 return Count;

}(App.Count||{}) ;
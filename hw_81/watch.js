
var StartButton=document.getElementById("start");
var time=document.getElementById("time");

var elapsedTime=0;
var start;
var interval;
var saved=0;
StartButton.addEventListener('click',function(){
     start=new Date();
    interval=setInterval(Timer,1000);

});
function Timer(){
     
     elapsedTime =Math.floor( (new Date() -start)/1000)+saved ;
     time.innerHTML=elapsedTime+" seconds";
     if (elapsedTime>=60){
         var min=Math.floor(elapsedTime/60);
         time.innerHTML=min+"minutes"+elapsedTime+"seconds";

     }
     
}

var StopButton=document.getElementById("stop");
StopButton.addEventListener('click',function(){
    saved=elapsedTime;
    clearInterval(interval);
});

var ResetButton=document.getElementById("reset");
ResetButton.addEventListener('click', function(){
    saved=0;
     start = new Date(); 
    console.log(start);
});

    "use strict";
var colors=['blue','red','pink','purple','yellow','orange','black','green'];
var interval;
var button=document.getElementById("select");
button.innerHTML="Start Changing Colors";

button.addEventListener('click',function(){
    if(button.innerHTML==="Start Changing Colors"){
        interval=setInterval(colorIt,1000);
        button.innerHTML="Stop Changing Colors";
    } else{
        clearInterval(interval);
        button.innerHTML="Start Changing Colors";
    }
});
var x=0;
var i=0;
function colorIt(){
        //if(i>colors.length){
            //i=0;
        //}
        i=Math.floor(Math.random()*colors.length);
        x=Math.floor(Math.random()*colors.length);
     document.body.style.color= colors[x];
     document.body.style.backgroundColor= colors[i];
    // i++;

     
}



(function () {
    "use strict";
    


var change=document.getElementById("change");
change.addEventListener('click',function(event){
    var color=document.getElementById("color");
    
    //get selected color option
    var select=color.options[color.selectedIndex].text;
    
    var img=document.getElementById("img");

    //change the image to the selected color
    img.src='L6/L6 '+select+'.jpg';
    console.log(img.src);
    //prevent from reloading the page
    event.preventDefault();
});
}());
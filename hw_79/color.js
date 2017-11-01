(function () {
    "use strict";
    var body=document.body;
var button=document.getElementById("select");
//ids are strings
button.addEventListener('click',function(){

var bacolor=document.getElementById("bacolor").value;
body.style.backgroundColor=bacolor;
var tcolor=document.getElementById("tcolor").value;
body.style.color=tcolor;


});

}());
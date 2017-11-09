var watch = watch || {};

watch.messagebox = (function () {
    "use strict";

    function createElement(type) {
        return document.createElement(type);
    }

    function stopwatch(){
        var div=createElement("div");
         var display=createElement("p");
        var startbutton=createElement("button");
        var stopbutton=createElement("button");
        var resetbutton=createElement("button");
        document.body.appendChild(display);
        document.body.appendChild(startbutton);
        document.body.appendChild(stopbutton);
        document.body.appendChild(resetbutton);

        startbutton.id="start";
        stopbutton.id="stop";
        resetbutton.id="reset";
        display.id="time";
        startbutton.innerHTML="Start Clock";
        stopbutton.innerHTML="Stop Clock";
        resetbutton.innerHTML="Reset Clock";

        

    }

return {
       stopwatch : stopwatch
    };



}());
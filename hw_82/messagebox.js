var pcs = pcs || {};

pcs.messagebox = (function () {
    "use strict";

    function createElement(type) {
        return document.createElement(type);
    }
    var top=50;
    var left=50;
    var index=6;
    
    function div(){
        var divscreen=createElement("div");
        document.body.appendChild(divscreen);
        divscreen.style.backgroundColor='blue';
        divscreen.style.position='absolute';
        //divscreen.style.display='none';
         divscreen.style.top='0px';
         divscreen.style.width='100%'
         divscreen.style.height='100%';
         divscreen.style.left='0px';
         divscreen.style.zIndex='5';
         divscreen.style.opacity='.5';
         divscreen.id="screen";
         
    }

    var textButton=document.getElementById('enter');
    textButton.addEventListener('click',function(event){
        top++;
        left++;
        var text=document.getElementById('text').value;
        console.log(text);
        show(text);
        var check=document.getElementById('modal').checked;
        console.log(check);
        if(check){
            div();
        }
        event.preventDefault();
    });

    function show(msg) {
        var div = createElement("div");
        var span = createElement("span");
        var buttonDiv = createElement("div");
        var okButton = createElement("button");

        span.innerHTML = msg;
        div.appendChild(span);
        okButton.innerHTML = "OK";
        buttonDiv.appendChild(okButton);
        div.appendChild(buttonDiv);
        document.body.appendChild(div);

        div.style.backgroundColor = 'lightblue';
        div.style.padding = '20px';
        div.style.width = '400px';
        div.style.height = '100px';
        div.style.border = '1px solid blue';
        div.style.position = 'absolute';
        div.style.left = left+'%';
        div.style.top = top+'%';
        div.style.marginLeft = '-200px';
        div.style.marginTop = '-50px';
        div.style.boxSizing = 'border-box';
        div.style.display = 'inline-block';
        div.style.zIndex=index;
        buttonDiv.style.position = 'absolute';
        buttonDiv.style.bottom = '6px';
        buttonDiv.style.textAlign = 'center';
        buttonDiv.style.width = '100%';
        buttonDiv.style.marginLeft = '-20px';

        okButton.addEventListener("click", function () {
            document.body.removeChild(div);
             var screen=document.getElementById('screen')
            document.body.removeChild(screen);
            
        });
        div.addEventListener('click',function(){
            index++;
            div.style.zIndex=index;
        });
    }

    
}());
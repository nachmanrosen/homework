var pcs = pcs || {};

pcs.tools = (function () {
    "use strict";

    function get(id) {
        return document.getElementById(id);
    }

    function setCss(elem, property, value) {
        elem.style[property] = value;
    }

    return {
        wrap: function (id) {
            var elem = get(id);
            var displayType;
            var array=[];
            return {
                click:function(callback){
                elem.addEventListener('click', function(){
                callback();
                return this;
            });
            },
                hide:function(){
                displayType=getComputedStyle(elem).getPropertyValue('display');
                elem.style.display="none";
                return this;
            },
                show:function(){
                   elem.style.display=displayType;
                   return this; 
                },
            
                setCss: function (property, value) {
                    setCss(elem, property, value);
                    return this;
                },
                setData:function(key,value){
                    array[key]=value;
                   // key.push(value);
                },
                getData(key){
                    return array[key];   
                },
                Css:function(property,value){
                    if(value===null){
                        return getComputedStyle(elem).getPropertyValue('property');
                    }
                    else{
                    setCss(elem, property, value);
                    }
                },
                Data:function(key,value){
                    if (value===null){
                        return key['value'];
                    }
                    else{
                        this.key=key;
                        key.push(value);
                    }
                },
                pulsate: function () {
                    var fontSize =getComputedStyle(elem).getPropertyValue('font-size');
                         var i = 1,
                        //that = this,
                        interval = setInterval(function () {
                            if (i <= 5 || i > 15) {
                                fontSize += 5;
                            } else {
                                fontSize -= 5;
                            }

                            //that.setCss("fontSize", fontSize + 'px');
                            setCss(elem, "fontSize", fontSize + 'px');

                            if (i++ === 20) {
                                clearInterval(interval);
                            }
                        }, 100);

                    return this;
                }
            };
        }
    };

}());


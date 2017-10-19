var theMonthsUtils=(function(){
    'use strict';
var Months=['none','January','February','March','April','May','June','July','August','September','October','November','December'];
 return{
  getMonthName: function(num){
    return Months[num];
 },
  getMonthNumber: function(name){
     for(var i=0; i<Months.length; i++){
         if(Months[i]===name){
             return i;
         }
     }
     return "No Such Month";
 }

};
}());

console.log("theMonthsUtils.getMonthName(5)", theMonthsUtils.getMonthName(5));
console.log("theMonthsUtils.getMonthNumber(October)", theMonthsUtils.getMonthNumber('October'));


var Interest=(function(){
'use strict';
var years;
var rate;
return{
 setYears:function( year){
    years=year;
},
setRate:function( rat){
    rate=rat;
},
Calculate:function(money){
    return money*rate*years;
}


};


}());
Interest.setYears(5);
Interest.setRate(.2);
console.log("Interest.Calculate(200)", Interest.Calculate(200));


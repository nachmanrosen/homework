
var myApp= myApp||{} ;
    
myApp.Utils=(function(Utils){
    var Months=['none','January','February','March','April','May','June','July','August','September','October','November','December'];
    Utils.getMonthName=function(num){
    return Months[num];
 },
  Utils.getMonthNumber=function(name){
     for(var i=0; i<Months.length; i++){
         if(Months[i]===name){
             return i;
         }
     }
     return "No Such Month";
 },
 Utils.stringCaseInsensitiveEquals=function(string1,string2){
     if(string1.toUpperCase() === string2.toUpperCase()){
         return true;
     }
         else{
             return false;
         }
     };

return Utils;

}(myApp.Utils||{}) );

console.log(myApp.Utils.getMonthNumber('March'));
console.log(myApp.Utils.stringCaseInsensitiveEquals('Hi','hi'));
console.log(myApp.Utils.getMonthName(4));


var bankAccount1={
balance:100
}
var bankAccount2={
balance:200
}

function addInterest(amount){
    this.balance+=amount;
    console.log(this.balance);
}

addInterest.call(bankAccount1,12);
addInterest.call(bankAccount2,12);
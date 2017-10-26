var numbers=[2,4,6];
 function double(num) {
     return num*2;
 }

 function map(array,func) {
     var newnumbers=[];
     
         for(var i=0;i<array.length;i++){
          newnumbers.push(func(array[i]));
     }
 
     return newnumbers;
 };

console.log(numbers);
console.log(map(numbers,double)); 
var letters=['a','B','c','D','e','F'];

function isUppercase(letter){
    if (letter === letter.toUpperCase()){
        return true;
    }
           
}



function Some(callback,array) {
    for(var i=0; i<array.length;i++ ){
    if( callback(array[i])){
         return true;
     }
    } 
    return false;
}

console.log(Some(isUppercase,letters));

function isLowercase(letter){
    if(letter === letter.toLowerCase()){
        return true;
}
}

console.log(Some(isLowercase,letters));

console.log(['a','B','c','D','e','F'].some(isUppercase));
console.log(['a','B','c','D','e','F'].some(isLowercase));

function onlyIf(array,callback,action){
    for(var i=0; i<array.length;i++ ){
    if( callback(array[i])){
         action(array[i]);
     }
}
}

function print(letter) {
    console.log(letter);
}

onlyIf(letters,isUppercase,print);

const fs = require('fs');
const path=require('path');
const ext=process.argv[3];


const fileList =fs.readdir(process.argv[2], (err,list)=>{
    if (err) {
        console.error('OOPS. Couldnt read file', err);
    } else {

  //const file= list.filter(string=>path.extname(string)==ext);
 const file= list.filter(function (string) {
    return( path.extname(string)==ext)
});
console.log(file);
   }

}

);
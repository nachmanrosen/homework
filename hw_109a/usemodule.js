const fs = require('fs');
 var Module = require('./Module.js');

 const path=require('path');

const dir=fs.readdir(process.argv[2]);
const ext=process.argv[3];

Module(dir, ext,filter((string)=>{
console.log(path.extname(string)==ext);
}));
const fs = require('fs');
const path=require('path');

const dir=fs.readdir(process.argv[2]);
const ext=process.argv[3];
module.exports = function (dir, ext, callback(err,data) {
    if (err) {
        return callback (err);
    } else {
      return  callback(null, data);
        
        }

    
}

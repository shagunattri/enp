'use strict';

const fs = require('fs')
const path = require('path')


module.exports = function(directory,fileExtension,callback) {
    fs.readdir(directory, (err,fileList) => {
        if(err) return callback(err)
    

    const filteredFiles = fileList.filter((file)=> {
        return path.extname(file) === '.' + fileExtension;
    });

    callback(null,filteredFiles);
    });
};

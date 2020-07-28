'use strict'

const filtered = require('./mymodules');


if(process.argv.length < 4){
    console.log('Please provide valid parameters!')
}




filtered(process.argv[2],process.argv[3],(error,files) => {
    if(error) {
        console.error(error);
        return
    }

    files.forEach((file) => {
        console.log(file);
    });
});
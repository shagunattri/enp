var fs = require('fs');


fs.appendFile('mynewfile.txt','Hello content',function (err) {
    if(err) throw err;
    console.log('Saved!');
});


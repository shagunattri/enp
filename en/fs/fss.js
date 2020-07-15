var fs = require('fs')
var http = require('http')

http.createServer(function (req,res) {
    fs.readFile('mynewfile.txt',function(err,data) {
      res.writeHead(200,{'Content-Type':'text/plain'});
      res.write(data);
        return res.end();
    });
}).listen(8091)

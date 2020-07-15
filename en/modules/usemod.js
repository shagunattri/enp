var http = require('http')
var dt = require('./mod')
var url = require('url')


http.createServer(function (req,res) {
    res.writeHead(200,{'Content-Type':'text/html'});
    res.write('DT currently is:' + dt.mydt() + '\n');
    var q = url.parse(req.url,true).query;
    var txt = q.year + " " + q.month;
//    res.write(req.url);
    res.end(txt);
//    res.end('\n K bye!');
}).listen(8081);



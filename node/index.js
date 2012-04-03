var sys = require('sys');
var http = require('http');

var server = http.createServer(
    function( request, response ){
        response.writeHead(200, {'Content-Type': 'text/plain'});
        response.write('Hello World!!');
        response.end();
    }
).listen(80);

sys.log('Server running at http://www2228ue.sakura.ne.jp:80/');

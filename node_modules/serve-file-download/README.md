### serve-file-download

basically a rip from @raynos' http download [example](https://github.com/Raynos/http-framework/tree/master/examples/downloads) - I like reuse, it's on npm :metal:

### installation 

    npm install serve-file-download

### example

```javascript
// based on https://github.com/visionmedia/express/tree/master/examples/downloads
var http = require("http");
var Router = require("routes-router");
var sendHtml = require("send-data/html");
var serveFileDownload = require("serve-file-download");

var app = Router();

app.addRoute("/", function (req, res) {
  sendHtml(req, res, "<ul>" +
    "<li>Download <a href='/files/amazing.txt'>amazing.txt</a></li>" +
    "<li>Download <a href='/files/missing.text'>missing.txt</a></li>" +
    "</ul>");
});

app.addRoute("/files/*", function (req, res, opts, cb) {
  var file = opts.splats[0];
  var uri = __dirname  + "/files/" + file;
  serveFileDownload(req, res, uri, cb);
});

var server = http.createServer(app);
server.listen(3000);
console.log("downloads server listening on port 3000");
```

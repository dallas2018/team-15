var fs = require('fs');
var filed = require('filed');
var basename = require('path').basename;

module.exports = function(req, res, uri, cb) {
  fs.stat(uri, function(err, stat) {
    if(err && err.code === "ENOENT") {
      res.statusCode = 404;
      return res.end('404 file not found');
    } else if(err) {
      return cb(err);
    }
    res.setHeader('Content-Disposition', 'attachment; filename=\"'+basename(uri)+'\"');
    filed(uri).pipe(res);
  });
}

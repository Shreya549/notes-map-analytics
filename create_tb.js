var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "1242",
  database: "login"
});

con.connect(function(err) {
    if (err) {
        return console.error('error: ' + err.message);
      }
  var sql = "CREATE TABLE loginid (id VARCHAR(255), pass VARCHAR(255))";
  con.query(sql, function (err, result) {
    if (err) {
        return console.error('error: ' + err.message);
      }
  });
});
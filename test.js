var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "1242"
});

con.connect(function(err) {
    if (err) {
      return console.error('error: ' + err.message);
    }
    console.log('Connected to the MySQL server.');
  });
var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "root",
  database: "mydb"
});

con.connect(function(err) {
  if (err) throw err;
  con.query("SELECT nomeObjeto FROM Objetos WHERE ClienteID = 3", function (err, result, fields) {
    if (err) throw err;
    console.log(result);
  });
});
var mysql = require('mysql');
var http = require("http");
var url= require("url");
var bodyParser = require('body-parser');
var express    = require("express");
var router = express.Router();

var connection = mysql.createConnection({
  host     : 'localhost',
  user     : 'root',
  password : '',
  database : 'psi'
});

var app = express();


app.get('/objeto', function (req, res) {
	var q=url.parse(req.url,true).query;
	var id=q.id;
	res.setHeader("Access-Control-Allow-Origin","*");
	connection.query('SELECT * from objeto where id='+id, function(err, results) {
        if (err) throw err

		return res.json({
			id:results[0].id,
			nome: results[0].nome,
			categoria:results[0].categoria,
			subcategoria:results[0].subcategoria,
			dimensoes:results[0].dimensoes,
			tipologia:results[0].tipologia
		});
				
      })	
});


app.use(bodyParser.json());
app.use(bodyParser.urlencoded({extended: true}));


app.post('/apagar',function(req,res){
	res.setHeader("Access-Control-Allow-Origin","*");
	var post_body= req.body;
		connection.query("DELETE FROM objeto WHERE id= '"+post_body.id+"';", 
		function(err, results) {
			if (err) throw err	
		});			
});


app.listen(3000, function () {
  console.log('PSI port 3000!');
});
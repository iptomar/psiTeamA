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

//router.get('/objeto',function(req, res){
//	res.json({'users':'oi'});
//});

app.get('/objeto', function (req, res) {
	var q=url.parse(req.url,true).query;
	var id=q.id;
	res.setHeader("Access-Control-Allow-Origin","*");
	//res.end(id);

	
	connection.query('SELECT * from objeto where id='+id, function(err, results) {
        if (err) throw err
        //console.log(results[0].id)

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

app.post('/enviar',function(req,res){
	res.setHeader("Access-Control-Allow-Origin","*");
	var post_body= req.body;
	console.log("cheguei aqui");
	//console.log(post_body.nome);
		connection.query("UPDATE objeto SET nome = '"+post_body.nome+"', categoria='"+post_body.categoria+"', subcategoria='"+post_body.subcategoria+"',dimensoes='"+post_body.categoria+"', tipologia='"+post_body.tipologia+"' WHERE id = '"+post_body.id+"';", 
		function(err, results) {
        if (err) throw err
					console.log("fez i think");	
					});
				
});


app.listen(3000, function () {
  console.log('Example app listening on port 3000!');
});




/*
http.createServer(function (req, res) {
  res.writeHead(200, {'Content-Type': 'text/plain'});
  var q = url.parse(req.url, true).query;
  var id = q.id;
	console.log(req.url);
	//connection.connect();
	connection.query('SELECT * from objeto where id='+id+"", function(err, rows, fields) {
		console.log("aqui");
  if (err)
     console.log('Error while performing Query.');
  else
		console.log('The solution is: ', rows);
   
});
	//connection.end();
  res.end();
}).listen(8080);
*/



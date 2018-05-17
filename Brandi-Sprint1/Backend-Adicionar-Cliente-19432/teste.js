var express = require('express');
var cors = require('cors')
var app = express();

var mysql = require('mysql')
const bodyParser = require('body-parser');
const router = express.Router();

router.get('/', (req, res) => res.json({ message: 'OK, algo funciona!' }));

app.use(cors())  // necessario usar
app.use('/', router);
app.use(express.static(__dirname + '/public'));
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());


var server = app.listen(8081, function () {
    var host = server.address().address
    var port = server.address().port

    console.log("PSI - app listening at http://%s:%s", host, port)
})


function execSQLQuery(sqlQry, res) {
    const connection = mysql.createConnection({
        host: 'localhost',
        user: 'root',
        password: '123qwe#',
        database: 'db6'
    });

    connection.query(sqlQry, function (error, results, fields) {
        if (error)
            res.json(error);
        else
            res.json(results);
        connection.end();
        console.log('executou!');
    });
}

// inserir na base dados, a chave primaria auto-incrementa
router.get('/addclient', (req, res) => {
    const nome = req.query.nome.substring(0, 254);
    const nif = req.query.nif.substring(0, 254);
    const morada = req.query.morada.substring(0, 254);
    const telemovel = req.query.telemovel.substring(0, 254);
    const email = req.query.email.substring(0, 254);

    execSQLQuery(`INSERT INTO people(nome, nif, morada, telemovel, email) VALUES('${nome}','${nif}','${morada}','${telemovel}','${email}')`, res);
});

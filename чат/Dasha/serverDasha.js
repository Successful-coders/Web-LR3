var express = require('express');
var app = express();
var server = require('http').createServer(app);
var io = require('socket.io')(server);

server.listen(3000);

const mysql = require('mysql');

const db = mysql.createConnection({
    host     : 'localhost',
    user     : 'root',
    password : 'root',
    database  : 'comments'
});
app.get('/', function(_request, respons) {
	respons.sendFile(__dirname + '/chat.html');
});

connections = [];

io.sockets.on('connection', function(socket) {
	// Добавление нового соединения в массив
	connections.push(socket);
	// вывод всех сообщений из базы данных
	let sql = 'SELECT * FROM posts';
	let query = db.query(sql, (err, results) => {
	if(err) throw err;
	var h = Object.keys( results ).length;
	for (let i = 0; i < h; i++){
		socket.emit('add mess', {mess: results[i].mess, name: results[i].name, className: results[i].className});
	}
	});
	
	// Функция, которая срабатывает при отключении от сервера
	socket.on('disconnect', function(_data) {
		// Удаление пользователя из массива
		connections.splice(connections.indexOf(socket), 1);
	});

	// Функция получающая сообщение от какого-либо пользователя
	socket.on('send mess', function(data) {
		// Внутри функции мы передаем событие 'add mess',
		// которое будет вызвано у всех пользователей и у них добавиться новое сообщение
		io.sockets.emit('add mess', {mess: data.mess, name: data.name, className: data.className});
		// добавление нового сообщения в базу данных
		let post = {name: data.name, mess: data.mess, className: data.className};
    	let sql = 'INSERT INTO posts SET ?';
    	let query = db.query(sql, post, (err, result) => {
        if(err) throw err;
    });
	});

});

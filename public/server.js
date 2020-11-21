
const express = require('express');
const mysql = require('mysql');
const app = express();
 
 
app.use(express.static(__dirname));
 
app.use("/", function(request, response){
     
    response.send("<h1>Главная страница</h1>");
});
app.listen(3000); 
// конфигурация пакета
const connection = mysql.createConnection(
    {
        host:"127.0.0.1",
        user:"root",
        database:"loginbase",
        password:"root",
        insecureAuth : true
    }
    );
    
    connection.connect(function (err) {
        if (err) {
            return console.error("Ошибка: " + err.message);
        }
        else {
            console.log("Подключение к серверу MySQL успешно установлено");
        }
    });
let query="SELECT * FROM users";

connection.query(query, (err, result, field) =>{
    console.log(err);
    console.log(result);
     // console.log(field);
});
connection.end( err => {
    if (err) {
        console.log(err);
        return err;
    }
    else {
        console.log('Database ----- Close');
    }
});


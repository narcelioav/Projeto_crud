<?php

//True - Apresentar a mensagem de alerta com o erro
//False - Nao apresentar a mensagem de alerta com o erro
ini_set('display_errors', true);

//Credenciais do banco de dados
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "celke";
$port = 3306;
//Conexao com a porta
//$conn = mysqli_connect($host . ":" . $port, $user, $pass, $dbname);

//Conexao sem a porta
$conn = mysqli_connect($host, $user, $pass, $dbname);

if ($conn) {
    //echo "Conexao com o banco de dados realizado com sucesso!<br>";
} else {
    //echo "Tente mais tarde ou entre em contato com ...<br>";
    //echo "Erro: Conexao com o banco de dados nao realizado com sucesso!<br>";
    echo "Erro: Conexao com o banco de dados nao realizado com sucesso. Erro gerado A: " . mysqli_connect_error();
}

<!--conectando mysql com php.-->

<?php

ini_set('display_errors', false);//inibe a informação default de erro.

//usando try catch
//mysqli_report(MYSQL_REPORT_ALL);
mysqli_report(MYSQLI_REPORT_ERROR);

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "celke";
$port = 3306;//verificar no banco de dados.

try{

//conexao com a porta
//$conn = mysqli_connect($host . ":" . $port, $user, $pass, $dbname);

//conexao sem a porta
$conn = mysqli_connect($host, $user, $pass, $dbname);

if($conn){
    echo "Conexão com o banco de dados realizada com sucesso!<br>";
    echo "<hr>";
}else{
    echo "Tente mais tarde ou entre em contato com o administrador.<br>";
    //Não apresente para o usuario o erro real.
    //echo "Erro: Conexão com o banco de dados não realizada com sucesso!<br>";
    echo "Erro: Conexão com o banco de dados não realizada com sucesso. Erro gerado: " . mysqli_connect_erro();
}
}catch (Exception $erro){
    echo "Erro: Conexão com o banco de dados não realizada com sucesso. Erro gerado: " . $erro->getMessage();
}
 
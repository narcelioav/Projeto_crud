<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="shortcut icon" href="imagens/favicon.ico"/>
    <title>Celke - DELETE</title>
</head>

<body>
<?php 

//Instrução DELETE

//A instrução DELETE é usado para excluir registros em uma tabela.

/*DELETE FROM table_name
WHERE some_column=some_value; */

include_once 'conexao_try_catch.php';

echo "<h1>Deletar os usuarios</h1>";

//id do usuario / estatico
$id = 24;

//deleta todo o BD
//$query_del_usuario = "DELETE FROM usuarios;

//a instrução WHERE especifica a exclusão de uma unica linha
$query_del_usuario = "DELETE FROM usuarios WHERE id=$id";

mysqli_query($conn, $query_del_usuario);

//se alguma linha for afetada
if(mysqli_affected_rows($conn)){
    echo "Usuario apagado com sucesso!<br>";
}else{
    echo "Erro: Usuario não apagado com sucesso!<br>";
}


?>

</body>
</html>
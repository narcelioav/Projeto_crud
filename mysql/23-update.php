<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="shortcut icon" href="imagens/favicon.ico"/>
    <title>Celke - Update</title>
</head>

<body>
<?php 

//A instrução UPDATE é usada para atualizar registros em uma tabela.

/*<!--UPDATE table_name
SET COLUMN1=VALUE1, COLUMN2=VALUE=2, ...     
WHERE some_column=some_value;
-->*/

//conexao com o banco de dados
include_once 'conexao.php';

echo "<h1>Editar usuarios</h1>";


$id = 1;
$nome = "Cesar 1a";
$email = "cesar1a@celke.com";

//$query_edit_usuario = "UPDATE usuarios SET nome = '$nome', email = '$email', modified = now() WHERE id = $id LIMIT 1";
$modified = date("Y-m-d H:i:s");
$query_edit_usuario = "UPDATE usuarios SET nome = '$nome', email = '$email', modified = '$modified' WHERE id = $id LIMIT 1";
mysqli_query($conn, $query_edit_usuario);

if(mysqli_affected_rows($conn)){
    echo "Usuario editado com sucesso!<br>";
}else{
    echo "Erro: Usuario não editado com sucesso!<br>";   
}

?>

</body>
</html>
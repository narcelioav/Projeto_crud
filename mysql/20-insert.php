<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="shortcut icon" href="imagens/favicon.ico"/>
    <title>Celke - Operadores AND - OR</title>
</head>

<body>
<?php 

//Instrução INSERT

//A instrução INSERT INTO é usada para inserir novos registros em uma tabela.

/*INSERT INTO table_name
VALUES (values1, values1, ...);*/

include_once 'conexao_try_catch.php';

echo "<h1>Listar os usuarios - INSERT INTO</h1>";

$nome = "Cesar 3";
$email = "cesar3@celke.com";
$senha = "1233";
$sits_usuario_id = 3;
$niveis_acesso_id = 2;

$query_cad_usuario = "INSERT INTO usuarios (nome, email, senha, sits_usuario_id, niveis_acesso_id, created) VALUES('$nome', '$email', '$senha', $sits_usuario_id, $niveis_acesso_id, now())";

mysqli_query($conn, $query_cad_usuario);

if(mysqli_insert_id($conn)){
    echo "Usuario cadastrado com sucesso!<br>";
    $ultimo_registro_cad = mysqli_insert_id($conn);
    echo "ID do registro cadastrado: $ultimo_registro_cad <br>";
}else{
    echo "Erro: Usuario não cadastrado com sucesso!<br>";
}

?>

</body>
</html>
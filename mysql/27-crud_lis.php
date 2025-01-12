<?php
    session_start();
    //ob_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="shortcut icon" href="imagens/favicon.ico"/>
    <title>Celke - Listar usuarios</title>
</head>

<body>
<?php 

//CRUD

/*CREATE - cadastrar
READ - listar e visualizar
UPDATE - Editar
DELETE - deletar*/

include_once 'conexao_try_catch.php';

//menu simples
echo "<a href='27-crud_lis.php'>Listar</a><br>";
echo "<a href='27-crud_cad.php'>Cadastar</a><br>";

echo "<h1>Listar os usuarios</h1>";

//Imprimir a mensagem de sucesso ou erro
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}

$query_usuarios = "SELECT id, nome, email FROM usuarios ORDER BY id DESC LIMIT 40";
$result_usuarios = mysqli_query($conn, $query_usuarios);
while ($row_usuario = mysqli_fetch_assoc($result_usuarios)) {
    //var_dump($row_usuario);
    extract($row_usuario);
    echo "ID: $id <br>";
    echo "Nome: $nome <br>";
    echo "E-mail: $email <br>";
    echo "<a href='27-crud_vis.php?id_usuario=$id'>Visualizar</a><br>";
    echo "<a href='27-crud_edi.php?id_usuario=$id'>Editar</a><br>";
    echo "<a href='27-crud_del.php?id_usuario=$id'>Apagar</a><br>";
    echo "<hr>";
}


?>

</body>
</html>
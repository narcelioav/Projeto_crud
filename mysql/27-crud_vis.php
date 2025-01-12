<?php
    session_start();
    //ob_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="shortcut icon" href="imagens/favicon.ico"/>
    <title>Celke - Visualizar usuario</title>
</head>

<body>
<?php 

//CRUD

/*CREATE - cadastrar
READ - listar e visualizar
UPDATE - Editar
DELETE - deletar*/

//conexao com o BD
include_once 'conexao_try_catch.php';

//Receber o id que vem pela url
$id = filter_input(INPUT_GET, 'id_usuario', FILTER_SANITIZE_NUMBER_INT);
//input pois é apenas uma variavel

//menu simples
echo "<a href='27-crud_lis.php'>Listar</a><br>";
echo "<a href='27-crud_cad.php'>Cadastar</a><br>";
echo "<a href='27-crud_edi.php?id_usuario=$id'>Editar</a><br>";
echo "<a href='27-crud_del.php?id_usuario=$id'>Apagar</a><br>";


echo "<h1>Detalhes do usuario</h1>";

//Imprimir a mensagem de sucesso ou erro
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}

$query_usuario = "SELECT id, nome, email, sits_usuario_id, niveis_acesso_id, created, modified FROM usuarios WHERE id=$id ORDER BY id DESC LIMIT 1";
$result_usuario = mysqli_query($conn, $query_usuario);
$row_usuario = mysqli_fetch_assoc($result_usuario);
    //var_dump($row_usuario);
    extract($row_usuario);
    echo "ID: $id <br>";
    echo "Nome: $nome <br>";
    echo "E-mail: $email <br>";
    echo "Situação: $sits_usuario_id <br>";
    echo "Nivel de acesso: $niveis_acesso_id <br>";
    //tratando a apresentação de data e hora
    echo "Cadastrado: " . date('d/m/Y H:i:s', strtotime($created)) . "<br>";

    echo "Editado: ";
    if(!empty($modified)){
        echo date('d/m/Y H:i:s', strtotime($modified));
    }
    echo "<br>";

    //echo "Editado: " . date('d/m/Y H:i:s', strtotime($modified)) . "<br>";

?>

</body>
</html>
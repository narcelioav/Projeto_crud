<?php 
//conexao com o BD
include_once 'conexao_try_catch.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="shortcut icon" href="imagens/favicon.ico"/>
    <title>Celke - IN</title>
</head>

<body>

    <h1>Como usar o IN no MYSQLi</h1>

    <?php 
    /*
    O operador IN permite especificar varios valores em uma clausula WHERE.
    O operador IN é uma abreviatura para multiplas condições OR.

    SELECT column_name
    FROM table_name
    WHERE column_name IN (value 1, value 2, ...);
    */
    $query_usuarios = "SELECT id, nome, email, niveis_acesso_id FROM usuarios
    WHERE niveis_acesso_id IN (2, 1)
     ";
    //WHERE niveis_acesso_id = 1 OR niveis_acesso_id = 2 OR ...";
    $result_usuarios = mysqli_query($conn, $query_usuarios);

    while ($row_usuario = mysqli_fetch_assoc($result_usuarios)){
        /*echo "<pre>";
        var_dump($row_usuario);
        echo "</pre>";*/
        extract($row_usuario);
        echo "Id do usuario: $id <br>";
        echo "Nome do usuario: $nome <br>";
        echo "E-mail do usuario: $email <br>";
        echo "Nivel de acesso do usuario: $niveis_acesso_id <br>";
        echo "<hr>";
    }
    ?>

</body>
</html>
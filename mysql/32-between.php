<?php 
//conexao com o BD
include_once 'conexao_try_catch.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="shortcut icon" href="imagens/favicon.ico"/>
    <title>Celke - BETWEEN</title>
</head>

<body>

    <h1>Como usar o BETWEEN no MySQLi</h1>

    <?php 
    /*
    O operador BETWEEN é usado para selecionar valores dentro de um intervalo.
    
    SELECT column_name
    FROM table_name
    WHERE column_name BETWEEN value 1 AND value 2;
    */
    $query_usuarios = "SELECT id, nome, email, niveis_acesso_id FROM usuarios
    WHERE id BETWEEN 1 AND 5
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
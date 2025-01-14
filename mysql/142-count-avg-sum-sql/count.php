<?php
//Conexao BD
include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" href="imagens/favicon.ico" />
    <title>Celke - COUNT, SUM e AVG</title>
</head>

<body>
    <h1>Contar a quantidade de usuários ativos</h1>

    <?php
    $query_qnt_usuarios = "SELECT COUNT(id) AS qnt_usuarios 
                        FROM usuarios
                        WHERE sists_usuario_id = 3";
    $result_qnt_usuarios= mysqli_query($conn, $query_qnt_usuarios);

    $row_qnt_usuarios = mysqli_fetch_assoc($result_qnt_usuarios);
    //var_dump($row_qnt_usuarios);
    extract($row_qnt_usuarios);
    echo "Quantidade de usuários: $qnt_usuarios <br>";

    ?>

</body>

</html>
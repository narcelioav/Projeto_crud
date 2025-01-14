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
    <h1>Preço médio pago nos cursos</h1>

    <?php

    //Com casa decimal
    $query_media_preco = "SELECT AVG(preco) AS media_preco 
                            FROM inscricoes_cursos
                            WHERE curso_id = 1";
    $result_media_preco = mysqli_query($conn, $query_media_preco);

    $row_media_preco = mysqli_fetch_assoc($result_media_preco);
    //var_dump($row_media_preco);
    extract($row_media_preco);
    echo "Média paga no curso: R$ " .number_format($media_preco, 2, ",", "."). " <br><br>";

    //Sem casa decimal
    $query_media_preco = "SELECT format(AVG(preco), '#') AS media_preco 
                            FROM inscricoes_cursos
                            WHERE curso_id = 1";
    $result_media_preco = mysqli_query($conn, $query_media_preco);

    $row_media_preco = mysqli_fetch_assoc($result_media_preco);
    //var_dump($row_media_preco);
    extract($row_media_preco);
    echo "Média paga no curso: R$ " .number_format($media_preco, 2, ",", "."). " <br>";

    ?>

</body>

</html>
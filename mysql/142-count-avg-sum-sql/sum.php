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
    <h1>Valor total de venda</h1>

    <?php
    $query_total_venda = "SELECT SUM(preco) AS total_venda FROM inscricoes_cursos";
    $result_total_venda= mysqli_query($conn, $query_total_venda);

    $row_total_venda = mysqli_fetch_assoc($result_total_venda);
    //var_dump($row_total_venda);
    extract($row_total_venda);
    echo "Valor total de venda: R$ " .number_format($total_venda, 2, ",", "."). " <br>";
    ?>

</body>

</html>
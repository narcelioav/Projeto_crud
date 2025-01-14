<?php 
//conexao com o BD
include_once 'conexao_try_catch.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="shortcut icon" href="imagens/favicon.ico"/>
    <title>Celke - LEFT JOIN</title>
</head>

<body>

    <h1>RIGHT JOIN - Recupera registro de duas tabelas</h1>

    <?php 
        /*
        A clausula RIGHT JOIN retorna todos os dados encontrados na tabela a direita de JOIN. Caso não existam dados associados entre as tabelas a esquerda e a direita de JOIN, serão retornados valores nulos
    
        SELECT column_name
        FROM table_name1
        RIGHT JOIN table_name2 ON
        table_name1.column_name =
        table_name2.column_name;
        */
        $query_usuarios = "SELECT ende.id, ende.logradouro AS log_ende, ende.numero AS num_ende,
        usr.nome
            FROM enderecos AS ende 
            RIGHT JOIN usuarios AS usr ON usr.id = ende.usuario_id ";
        $result_usuarios = mysqli_query($conn, $query_usuarios);


        while ($row_usuario = mysqli_fetch_assoc($result_usuarios)){
            /*echo "<pre>";
            var_dump($row_usuario);
            echo "</pre>";*/
            extract($row_usuario);
            echo "Id do endereço: $id <br>";
            echo "Nome do usuario: $nome <br>";
            echo "Endereço: $log_ende $num_ende <br>";
            echo "Celular: $cel_cont <br>";
            echo "<hr>";
        }
    ?>

</body>
</html>
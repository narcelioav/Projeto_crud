<?php 
//conexao com o BD
include_once 'conexao_try_catch.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="shortcut icon" href="imagens/favicon.ico"/>
    <title>Celke - ALIAS</title>
</head>

<body>

    <h1>Como usar apelidos para tabelas e colunas</h1>

    <?php 
    /*
    Alias SQL são usados para fornecer para a tabela ou para a coluna, um nome temporario.
    Os alias são frequentemente usados para tornar os nomes das colunas mais legiveis.
    Um alias só existe durante a duração da consulta.
    
    SELECT column_name
    AS alias_name
    FROM table_name;
    */
    $query_usuarios = "SELECT id AS id_usr, nome AS nome_usr, email AS email_usr, niveis_acesso_id FROM usuarios AS usr
     ";
    //WHERE niveis_acesso_id = 1 OR niveis_acesso_id = 2 OR ...";
    $result_usuarios = mysqli_query($conn, $query_usuarios);

    while ($row_usuario = mysqli_fetch_assoc($result_usuarios)){
        /*echo "<pre>";
        var_dump($row_usuario);
        echo "</pre>";*/
        extract($row_usuario);
        echo "Id do usuario: $id_usr <br>";
        echo "Nome do usuario: $nome_usr <br>";
        echo "E-mail do usuario: $email_usr <br>";
        echo "Nivel de acesso do usuario: $niveis_acesso_id <br>";
        echo "<hr>";
    }
    ?>

</body>
</html>
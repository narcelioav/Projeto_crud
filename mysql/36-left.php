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

    <h1>LEFT JOIN - Recupera registro de duas tabelas</h1>

    <?php 
    /*
    A clausula LEFT JOIN permite obter não apenas os dados relacionamento de duas tebelas, mas tambem os dados não relacionados.
    
    SELECT column_name
    FROM table_name1
    LEFT JOIN table_name2 ON
    table_name1.column_name =
    table_name2.column_name;
    */
    $query_usuarios = "SELECT usr.id,     usr.nome AS nome_usr, usr.email,     usr.niveis_acesso_id, niv.id AS id_niv, niv.nome AS nome_niv, sit.nome AS nome_sit 
    FROM usuarios AS usr 
    INNER JOIN niveis_acessos AS niv ON niv.id =     usr.niveis_acesso_id
    	INNER JOIN sits_usuarios AS sit ON sit.id =     usr.sits_usuario_id
     	ORDER BY usr.id DESC";
    $result_usuarios = mysqli_query($conn, $query_usuarios);


         while ($row_usuario = mysqli_fetch_assoc($result_usuarios)){
        /*echo "<pre>";
        var_dump($row_usuario);
        echo "</pre>";*/
        extract($row_usuario);
        echo "Id do usuario: $id <br>";
        echo "Nome do usuario: $nome_usr <br>";
        echo "E-mail do usuario: $email <br>";
        echo "Nivel de acesso do usuario: $nome_niv <br>";
        echo "Situação do usuario: $nome_sit <br>";
        echo "<hr>";
    }
    ?>

</body>
</html>
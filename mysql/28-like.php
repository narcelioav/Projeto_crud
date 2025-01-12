<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="shortcut icon" href="imagens/favicon.ico"/>
    <title>Celke - Like</title>
</head>

<body>
    <?php 

    /*
    O operador LIKE é usado em uma clausula WHERE para pesquisar um padrão especifico em uma coluna.

    SELECT column_name
    FROM table_name
    WHERE column_name LIKE pattern;
    */

    //conexao com o BD
    include_once 'conexao_try_catch.php';

    echo "<h1>Como usar o LIKE no MYSQLi</h1>";

    $query_usuarios = "SELECT id, nome, email FROM usuarios WHERE nome LIKE '%cesar%' ";
    $result_usuarios = mysqli_query($conn, $query_usuarios);

    while ($row_usuario = mysqli_fetch_assoc($result_usuarios)){
        //var_dump($row_usuario);
        extract($row_usuario);
        echo "Id do usuario: $id <br>";
        echo "Nome do usuario: $nome <br>";
        echo "E-mail do usuario: $email <br>";
        echo "<hr>";
    }

    ?>
</body>
</html>
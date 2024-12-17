<?php 

//Operadores AND & OR

//O AND "e" & OR "ou" operadores são usados para filtrar registros com base em mais de uma condição.

/*
SELECT column-1, column-2, ...
FROM table_name
WHERE condition-1 AND
condition-2 OR 
condition-3 ...;
*/

include_once 'conexao_try_catch.php';

    $query_usuarios = "SELECT id, nome, email, sits_usuario_id, niveis_acesso_id, created, modified FROM usuarios WHERE niveis_acesso_id = 3 AND sits_usuario_id = 1 LIMIT 10";

    $result_usuarios = mysqli_query($conn, $query_usuarios);

    while($row_usuario = mysqli_fetch_assoc($result_usuarios)){
        echo "<pre>";
        var_dump($row_usuario);
        echo "</pre>";
    }
?>

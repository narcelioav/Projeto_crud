<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="shortcut icon" href="imagens/favicon.ico"/>
    <title>Celke - Operadores AND - OR</title>
</head>

<body>
<?php 

//Operadores AND & OR

//O ORDER BY é usado para classificar o resultado por uma ou mais colunas.

/*
SELECT column-1, column-2, ...
FROM table_name
ORDER BY column-1 ASC | DESC;

//ASC - crescendente
//DESC - decrescente
*/

include_once 'conexao_try_catch.php';

echo "<h1>Listar os usuarios - ORDER BY</h1>";

    $query_usuarios = "SELECT id, nome, email, sits_usuario_id, niveis_acesso_id, created, modified FROM usuarios ORDER BY id DESC LIMIT 10";

    $result_usuarios = mysqli_query($conn, $query_usuarios);

    while($row_usuario = mysqli_fetch_assoc($result_usuarios)){
        /*echo "<pre>";
        var_dump($row_usuario);
        echo "</pre>";*/

        extract($row_usuario);
        echo "ID: $id <br>";
        echo "Nome: $nome <br>";
        echo "E-mail: $email <br>";
        echo "Situação: $sits_usuario_id <br>";
        echo "Nivel de Acesso: $niveis_acesso_id <br>";
        echo "Cadastrado: " . date('d/m/Y H:i:s', strtotime($created)) . "<br>";

        echo "Editado: ";
        if(!empty($modified)){
            echo date('d/m/Y H:i:s', strtotime($modified));
        } 
        echo "<br>";

        echo "<hr>";
    }
        
    
?>

</body>
</html>
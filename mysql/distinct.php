<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="shortcut icon" href="imagens/favicon.ico"/>
    <title>Celke - Operadores DISTINCT</title>
</head>

<body>
<?php 

//O DISTINCT é usado para retornar valores destintos.

include_once 'conexao_try_catch.php';

echo "<h1>Listar os usuarios - DISTINCT</h1>";

    $query_usuarios = "SELECT DISTINCT id, nome, created, modified FROM niveis_acessos WHERE id = 1 LIMIT 10";

    $result_usuarios = mysqli_query($conn, $query_usuarios);

    while($row_usuario = mysqli_fetch_assoc($result_usuarios)){
        /*echo "<pre>";
        var_dump($row_usuario);
        echo "</pre>";*/

        extract($row_usuario);
        echo "ID: $id <br>";
        echo "Nome: $nome <br>";
        //echo "E-mail: $email <br>";
        //echo "Situação: $sits_usuario_id <br>";
        //echo "Nivel de Acesso: $niveis_acesso_id <br>";
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
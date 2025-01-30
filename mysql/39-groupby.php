<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="shortcut icon" href="imagens/favicon.ico"/>
    <title>Celke - GROUP BY</title>
</head>

<body>
<?php 

//A clausula GROUP BY agrupa linhas baseado em semelhanças entre elas.

/*
SELECT COUNT(column_reference)
FROM table
GROUP BY column_reference;
*/

include_once 'conexao_try_catch.php';

echo "<h1>Aulas acessadas</h1>";
    
    $usuario_id = 1;

    $query_aulas = "SELECT aul.id, aul.nome, 
    ace.usuario_id,
    COUNT(ace.aula_id) AS qnt_acessos
    FROM aulas AS aul
    INNER JOIN acessos_aulas AS ace ON ace.aula_id=aul.id
    WHERE ace.usuario_id = $usuario_id
    GROUP BY ace.aula_id ";
    //GROUP vai agrupar por aulas, caso retire retornara um unico registro do COUNT(com a quantidade de aulas)

    $result_aulas = mysqli_query($conn, $query_aulas);

    while($row_aula = mysqli_fetch_assoc($result_aulas)){
        echo "<pre>";
        var_dump($row_aula);
        echo "</pre>";

        extract($row_aula);
        echo "ID da aula: $id <br>";
        echo "Nome da aula: $nome <br>";
        echo "ID do usuario: $usuario_id <br>";
        echo "Quantidade de acesso: $qnt_acessos <br>";
        
        echo "<hr>";
    }
        
    
?>

</body>
</html>
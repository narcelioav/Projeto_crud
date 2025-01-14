<?php 
//conexao com o BD
include_once 'conexao_try_catch.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="shortcut icon" href="imagens/favicon.ico"/>
    <title>Celke - COUNT(), SUM(), AVG()</title>
</head>

<body>

    <h1>Contar a quantidade de usuarios</h1>

    <?php 
        /*
        A função COUNT() retorna o numero de linhas da pesquisa.
    
        SELECT COUNT(column_name)
        FROM table_name
        WHERE condition;
        */
        $query_usuarios = "SELECT COUNT(id) AS qnt_usuarios
            FROM usuarios 
            WHERE sits_usuario_id = 3 ";
        $result_usuarios = mysqli_query($conn, $query_usuarios);


        $row_usuario = mysqli_fetch_assoc($result_usuarios);
            /*echo "<pre>";
            var_dump($row_usuario);
            echo "</pre>";*/
            extract($row_usuario);
            echo "Quantidade de usuarios: $qnt_usuarios <br>";
            echo "<hr>";
    ?>  
    
        <h1>Valor total de venda</h1>
        
    <?php 
        /*
        A função SUM() retorna a soma total de uma coluna numerica.
    
        SELECT SUM(column_name)
        FROM table_name
        WHERE condition;
        */
        
        $query_usuarios = "SELECT SUM(preco) AS tot_venda
            FROM inscricoes_cursos
            WHERE curso_id = 3 OR curso_id = 1 ";
        $result_usuarios = mysqli_query($conn, $query_usuarios);


        $row_usuario = mysqli_fetch_assoc($result_usuarios);
            /*echo "<pre>";
            var_dump($row_usuario);
            echo "</pre>";*/
            extract($row_usuario);
            echo "Valor total de venda: R$ " . number_format($tot_venda, 2, ",", "."). " <br>";
            echo "<hr>";
    ?>
        
        <h1>Preço medio pago nos cursos</h1>
        
        <?php 
            /*
            A função AVG() retorna o valor medio de uma coluna numerica.
        
            SELECT AVG(column_name)
            FROM table_name
            WHERE condition;
            */
            //Com casa decimal
            $query_usuarios = "SELECT AVG(preco) AS med_preco
                FROM inscricoes_cursos
                WHERE curso_id = 3 OR curso_id = 2 ";
            $result_usuarios = mysqli_query($conn, $query_usuarios);
    
    
            $row_usuario = mysqli_fetch_assoc($result_usuarios);
                /*echo "<pre>";
                var_dump($row_usuario);
                echo "</pre>";*/
                extract($row_usuario);
                echo "Media paga no curso: R$ " . number_format($med_preco, 2, ",", "."). " <br>";
                echo "<hr>";

                //Sem casa decimal
            $query_usuarios = "SELECT format(AVG(preco), '#') AS med_preco
            FROM inscricoes_cursos
            WHERE curso_id = 3 OR curso_id = 2 ";
        $result_usuarios = mysqli_query($conn, $query_usuarios);


        $row_usuario = mysqli_fetch_assoc($result_usuarios);
            /*echo "<pre>";
            var_dump($row_usuario);
            echo "</pre>";*/
            extract($row_usuario);
            echo "Media paga no curso: R$ " . number_format($med_preco, 2, ",", "."). " <br>";
            echo "<hr>";
        ?>
    
</body>
</html>
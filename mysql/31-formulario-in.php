<?php 
//conexao com o BD
include_once 'conexao_try_catch.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="shortcut icon" href="imagens/favicon.ico"/>
    <title>Celke - IN</title>
</head>

<body>

    <h1>Como pesquisar com checkbox e IN no MYSQLi</h1>

    <?php
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    ?>

    <form method="POST" action="">
        <label for="">Pesquisar</label><br><br>
        <input type="checkbox" name="nivel_acesso[]" value="1"> Super Administrador<br>        
        <input type="checkbox" name="nivel_acesso[]" value="2"> Administrador<br>
        <input type="checkbox" name="nivel_acesso[]" value="3"> Aluno<br>
        <input type="checkbox" name="nivel_acesso[]" value="4"> Financeiro<br>
        <input type="checkbox" name="nivel_acesso[]" value="5"> Portaria<br><br>

        <input type="submit" value="Pesquisar" name="PesqUsuario" /><br><br>
    </form>

    <?php 
        if (!empty($dados['PesqUsuario'])){
            echo "<pre>";
            var_dump($dados);
            echo "</pre><hr>";
            /*$valor_pesq = "";
            
            if(isset($dados['nivel_acesso'][0])){
                $valor_pesq .= $dados['nivel_acesso'][0];
            }
                
            if(isset($dados['nivel_acesso'][1])){
                $valor_pesq .= ", " . $dados['nivel_acesso'][1];
            }
                
            if(isset($dados['nivel_acesso'][2])){
                $valor_pesq .= ", " . $dados['nivel_acesso'][2];
            }
                
            if(isset($dados['nivel_acesso'][3])){
                $valor_pesq .= ", " . $dados['nivel_acesso'][3];
            }
            
            if(isset($dados['nivel_acesso'][4])){
                $valor_pesq .= ", " . $dados['nivel_acesso'][4];
            }*/

            $valor_pesq = "";
            if(!empty($dados['nivel_acesso'])){
                $valor_pesq = implode(", ", $dados['nivel_acesso']);
            }

            echo "<pre>";
            var_dump($valor_pesq);
            echo "</pre><hr>";

            $query_usuarios = "SELECT id, nome, email, niveis_acesso_id FROM usuarios WHERE niveis_acesso_id IN ($valor_pesq)";
            $result_usuarios = mysqli_query($conn, $query_usuarios);

            while($row_usuario = mysqli_fetch_assoc($result_usuarios)){
                echo "<pre>";
                var_dump($row_usuario);
                echo "</pre><hr>";
            }
        }
    ?>

</body>
</html>
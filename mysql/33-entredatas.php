<?php 
//conexao com o BD
include_once 'conexao_try_catch.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="shortcut icon" href="imagens/favicon.ico"/>
    <title>Celke - BETWEEN Pesquisar entre Datas</title>
</head>

<body>

    <h1>Pesquisar entre datas</h1>
        
    <?php
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    ?>

    <form method="POST" action="">
        <?php
        $data_inicio = "";
        if(isset($dados['data_inicio'])){
            $data_inicio = $dados['data_inicio'];
        }
        ?>
        <label for="">Data de inicio: </label>
        <input type="date" name="data_inicio" value="<?php echo $data_inicio; ?>" /><br><br>
        
        
        <?php
        $data_final = "";
        if(isset($dados['data_final'])){
            $data_final = $dados['data_final'];
        }
        ?>
        <label for="">Data final: </label>
        <input type="date" name="data_final" value="<?php echo $data_final; ?>" /><br><br>

        <input type="submit" value="Pesquisar" name="PesqUsuarios" /><br><br>
    </form>

    <?php
        //verificar se clicou no botão 
        if(!empty($dados['PesqUsuarios'])){
            /*echo "<pre>";
            var_dump($dados);
            echo "</pre>";*/
            
            $query_usuarios = "SELECT id, nome, email, created FROM usuarios WHERE created BETWEEN '".$dados['data_inicio']."' AND '".$dados['data_final']."' ";
            
            /*$result_usuarios = mysqli_query($conn, $query_usuarios);

            while ($row_usuario = mysqli_fetch_assoc($result_usuarios)){*/
            /* echo "<pre>";
            var_dump($row_usuario);
            echo "</pre>";*/
            /* extract($row_usuario);
            echo "Id do usuario: $id <br>";
            echo "Nome do usuario: $nome <br>";
            echo "E-mail do usuario: $email <br>";
            echo "Data de Cadastro: " . date('d/m/
            Y H:i:s', strtotime($created)) . "<br>";
            echo "<hr>";
            }*/
        } else{            
            $query_usuarios = "SELECT id, nome, email, created FROM usuarios";
        }   
        
        $result_usuarios = mysqli_query($conn, $query_usuarios);

            while ($row_usuario = mysqli_fetch_assoc($result_usuarios)){
            /*echo "<pre>";
            var_dump($row_usuario);
            echo "</pre>";*/
            extract($row_usuario);
            echo "Id do usuario: $id <br>";
            echo "Nome do usuario: $nome <br>";
            echo "E-mail do usuario: $email <br>";
            echo "Data de Cadastro: " . date('d/m/
            Y H:i:s', strtotime($created)) . "<br>";
            echo "<hr>";
            }
     
    
    ?>

</body>
</html>
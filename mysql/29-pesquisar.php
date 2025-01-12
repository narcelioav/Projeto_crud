<?php 
//conexao com o BD
include_once 'conexao_try_catch.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="shortcut icon" href="imagens/favicon.ico"/>
    <title>Celke - Like</title>
</head>

<body>

    <h1>Como pesquisar com o LIKE no MYSQLi</h1>

    <?php 
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    //var_dump($dados);
    ?>
    
    <form method="POST" action="">
<!--manter o campo da pesquisa preenchido-->
        <?php
            $nome = "";
            if(!empty($dados['nome'])){
                $nome = $dados['nome'];
            }
        ?>
        <label for="">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Digite o nome do usuario" value="<?php echo $nome; ?>" /><br><br>

        <?php
            $email = "";
            if(!empty($dados['email'])){
                $email = $dados['email'];
            }
        ?>
        <label for="">E-mail</label>
        <input type="text" name="email" id="email" placeholder="Digite o email do usuario" value="<?php echo $email; ?> /><br><br>

        <input type="submit" value="Pesquisar" name="PesqUsuario" /><br><br>
    </form>

    <?php
    //verifica se clicar no botão
    if (!empty($dados['PesqUsuario'])) {
        //var_dump($dados);
        $nome = mysqli_real_escape_string($conn, $dados['nome']);
        //pesquisa apenas pelo nome
        //$query_usuarios = "SELECT id, nome, email FROM usuarios WHERE nome LIKE '%$nome%' ";
        $email = mysqli_real_escape_string($conn, $dados['email']);

        if(!empty($dados['nome']) and (!empty($dados['email']))){
            $query_usuarios = "SELECT id, nome, email FROM usuarios WHERE nome LIKE '%$nome%' OR email LIKE '%$email%'  ORDER BY nome ASC";
        }elseif(!empty($dados['nome'])){
            $query_usuarios = "SELECT id, nome, email FROM usuarios WHERE nome LIKE '%$nome%'  ORDER BY nome ASC";
        }elseif(!empty($dados['email'])){
            $query_usuarios = "SELECT id, nome, email FROM usuarios WHERE email LIKE '%$email%'  ORDER BY nome ASC";
        }else{
            $query_usuarios = "SELECT id, nome, email FROM usuarios ORDER BY nome ASC"; 
        }

        //mudar local, para mostrar todos os campos
        /*$result_usuarios = mysqli_query($conn, $query_usuarios);
    
        while ($row_usuario = mysqli_fetch_assoc($result_usuarios)){
            //var_dump($row_usuario);
            extract($row_usuario);
            echo "Id do usuario: $id <br>";
            echo "Nome do usuario: $nome <br>";
            echo "E-mail do usuario: $email <br>";
            echo "<hr>";
        }*/
        //mostrar todas os registros se clicar com campos vazios
    }else{
        $query_usuarios = "SELECT id, nome, email FROM usuarios ORDER BY nome ASC"; 
    }

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
<?php
    session_start();
    ob_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="shortcut icon" href="imagens/favicon.ico"/>
    <title>Celke - Cadastrar usuario</title>
</head>

<body>
<?php 

//Instrução INSERT

//A instrução INSERT INTO é usada para inserir novos registros em uma tabela.

/*INSERT INTO table_name
VALUES (values1, values1, ...);*/

include_once 'conexao_try_catch.php';

//menu simples
echo "<a href='27-crud_lis.php'>Listar</a><br>";

echo "<h1>Cadastrar usuarios</h1>";

/*Receber os dados do formularioindividualmente.
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
echo "Nome do usuario: $nome <br>";

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
ECHO "E-mail do usuario: $email <br>";*/

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
//var_dump($dados);

if(!empty($dados['SendCadUsuario'])){
    /*echo "<pre>";
    var_dump($dados);
    echo "</pre>";*/
    $empty_input = false;

    //validar o campo individual
    /*
    if(empty($dados['nome'])){
        $empty_input = true;
        echo "<p style='color: #f00'>Erro: Necessario preencher o campo nome!</p>";
    }elseif(empty($dados['email'])){
        $empty_input = true;
        echo "<p style='color: #f00'>Erro: Necessario preencher o campo e-mail!</p>";
    }elseif(empty($dados['senha'])){
        $empty_input = true;
        echo "<p style='color: #f00'>Erro: Necessario preencher o campo senha!</p>";
    }elseif(empty($dados['sits_usuario_id'])){
        $empty_input = true;
        echo "<p style='color: #f00'>Erro: Necessario preencher o campo situação!</p>";
    }elseif(empty($dados['niveis_acesso_id'])){
        $empty_input = true;
        echo "<p style='color: #f00'>Erro: Necessario preencher o campo nivel de acesso!</p>";
    }
        */

    //validar todos os campo
    $dados = array_map('trim', $dados);
    if(in_array('', $dados)){
        $empty_input = true;
    echo "<p style='color: #f00'>Erro: Necessario preencher todos os campos!</p>";
    }else{
    //Verificar se o email não esta sendo utilizado
    $email = mysqli_real_escape_string($conn, $dados['email']);
    $query_view_usuario = "SELECT id FROM usuarios WHERE email = '$email' LIMIT 1";
    $result_view_usuario = mysqli_query($conn, $query_view_usuario);
    if(($result_view_usuario) and ($result_view_usuario->num_rows != 0)){
        $empty_input = true;
        echo "<p style='color: #f00'>Erro: Este e-mail já esta cadastrado!</p>";
    }
}
    //transferir para um else - pois exculta as duas verificações
    //Verificar se o email não esta sendo utilizado
    //$email = mysqli_real_escape_string($conn, $dados['email']);
    //$query_view_usuario = "SELECT id FROM usuarios WHERE email = '$email' LIMIT 1";
    //$result_view_usuario = mysqli_query($conn, $query_view_usuario);
    //if(($result_view_usuario) and ($result_view_usuario->num_rows != 0)){
        //$empty_input = true;
        //echo "<p style='color: #f00'>Erro: Este e-mail já esta cadastrado!</p>";
    //}

    if(!$empty_input){
        
    //Aceitar caractere tipo ' (apostrofo)
    //$nome = $dados['nome'];
    //$nome = mysqli_real_escape_string($conn, $dados['nome']);
    //verificar apostrofo em todos os campos
    foreach($dados as $chave => $valor){
        echo "Chave: $chave - Valor: $valor <br>";
        $$chave = mysqli_real_escape_string($conn, $valor);
        //$$ cria uma variavel que recebe o valor de outra variavel do mesmo nome
    }

    //Emcriptografar Senha
    //devido ao foreach atualiza as variaveis
    //$senha_cript = password_hash($dados['senha'], PASSWORD_DEFAULT);
    $senha_cript = password_hash($senha, PASSWORD_DEFAULT);

    //atualizar variavel create - now() informa a data do servidor
    $created = date("Y-m-d H:i:s");

    //devido ao foreach atualiza as variaveis
    //$query_cad_usuario = "INSERT INTO usuarios (nome, email, senha, sits_usuario_id, niveis_acesso_id, created) VALUES ('$nome', '".$dados['email']."', '$senha_cript', ".$dados['sits_usuario_id'].", ".$dados['niveis_acesso_id'].", now())";
    $query_cad_usuario = "INSERT INTO usuarios (nome, email, senha, sits_usuario_id, niveis_acesso_id, created) VALUES ('$nome', '$email', '$senha_cript', $sits_usuario_id, $niveis_acesso_id, '$created')";

    mysqli_query($conn, $query_cad_usuario);

    if(mysqli_insert_id($conn)){
    //echo "<p style='color: green'>Usuario cadastrado com sucesso!</p>";
    $_SESSION['msg'] = "<p style='color: green'>Usuario cadastrado com sucesso!</p>";
    //$ultimo_registro_cad = mysqli_insert_id($conn);
    //echo "ID do registro cadastrado: $ultimo_registro_cad <br>";
    unset($dados);
    header("location: 27-crud_lis.php");

    }else{
    echo "<p style='color: #f00'>Erro: Usuario não cadastrado com sucesso!</p>";
    }
}
}

/*$nome = "Cesar 3";
$email = "cesar3@celke.com";
$senha = "1233";
$sits_usuario_id = 3;
$niveis_acesso_id = 2;*/

/*$query_cad_usuario = "INSERT INTO usuarios (nome, email, senha, sits_usuario_id, niveis_acesso_id, created) VALUES('$nome', '$email', '$senha', $sits_usuario_id, $niveis_acesso_id, now())";

mysqli_query($conn, $query_cad_usuario);

if(mysqli_insert_id($conn)){
    echo "Usuario cadastrado com sucesso!<br>";
    $ultimo_registro_cad = mysqli_insert_id($conn);
    echo "ID do registro cadastrado: $ultimo_registro_cad <br>";
}else{
    echo "Erro: Usuario não cadastrado com sucesso!<br>";
}*/

?>

<!--form method="POST" action=""-->
<form method="POST" action="">
    
    <?php 
    $valor_nome = "";
    if(isset($dados['nome'])) {
        $valor_nome = $dados['nome']; 
    }
    ?>
    <label for="">Nome: </label>
    <input type="text" name="nome" placeholder="Nome completo" value="<?php echo $valor_nome; ?>" /><br><br>

    <?php 
    $valor_email = "";
    if(isset($dados['email'])) {
        $valor_email = $dados['email']; 
    }
    ?>
    <label for="">E-mail: </label>
    <input type="email" name="email" placeholder="O melhor e-mail" value="<?php echo $valor_email; ?>" /><br><br>

    <?php 
    $valor_senha = "";
    if(isset($dados['senha'])) {
        $valor_senha = $dados['senha']; 
    }
    ?>
    <label for="">Senha: </label>
    <input type="password" name="senha" placeholder="Senha do usuario" autocomplete="new-password" value="<?php echo $valor_senha; ?>" /><br><br><!--autocomplete="new-password"-->

    <?php
        $query_sits_usuarios = "SELECT id AS id_sit, nome AS nome_sit FROM sits_usuarios ORDER BY nome ASC";
        $result_sits_usuarios = mysqli_query($conn, $query_sits_usuarios);
        /*echo "<select>";
        echo "<option value=''>Selecione</option>";
        
        while($row_sit_usuario = mysqli_fetch_assoc($result_sits_usuarios)){
            var_dump($row_sit_usuario);
            extract($row_sit_usuario);
            echo "<option value='$id_sit' selected>$nome_sit</option>";
        }
        echo "</select>";*/
    ?>

    <label for="">Situação: </label>
    <select name="sits_usuario_id" id="sits_usuario_id">
        <?php
        echo "<option value=''>Selecione</option>";
        
        while($row_sit_usuario = mysqli_fetch_assoc($result_sits_usuarios)){
            //var_dump($row_sit_usuario);
            extract($row_sit_usuario);
            $select_sit_usuario = "";
            if(isset($dados['sits_usuario_id']) AND ($dados['sits_usuario_id'] == $id_sit)){
                $select_sit_usuario = "selected";
            }
            //echo "<option value='$id_sit' selected>$nome_sit</option>";
            echo "<option value='$id_sit' $select_sit_usuario>$nome_sit</option>";
        }
        ?>
    </select><br><br>

    <!--
    <label for="">Situação: </label>
    <select name="sits_usuario_id" id="sits_usuario_id">
        <option value="">Selecione</option>
        <option value="1">Ativo</option>
        <option value="2">inativo</option>
        <option value="3">Aguardando confirmação</option>
    </select>
    -->
    <!--
    /*<?php /*
    $valor_sits_usuario_id = "";
    if(isset($dados['sits_usuario_id'])) {
        $valor_sits_usuario_id = $dados['sits_usuario_id']; 
    }
    ?>
    <label for="">Situação: </label>
    <input type="number" name="sits_usuario_id" placeholder="Situação" value="<?php echo $valor_sits_usuario_id; */ ?>" /><br><br>
    -->

    <?php
        $query_niveis_acessos = "SELECT id AS id_niv, nome AS nome_niv FROM niveis_acessos ORDER BY nome ASC";
        $result_niveis_acessos = mysqli_query($conn, $query_niveis_acessos);
    ?>
    <label for="">Nivel de Acesso: </label>
    <select name="niveis_acesso_id" id="niveis_acesso_id">
        <?php
        echo "<option value=''>Selecione</option>";
        
        while($row_nivel_acesso = mysqli_fetch_assoc($result_niveis_acessos)){
            //var_dump($row_sit_usuario);
            extract($row_nivel_acesso);
            $select_nivel_acesso = "";
            if(isset($dados['niveis_acesso_id']) AND ($dados['niveis_acesso_id'] == $id_niv)){
                $select_nivel_acesso = "selected";
            }
            //echo "<option value='$id_sit' selected>$nome_sit</option>";
            echo "<option value='$id_niv' $select_nivel_acesso>$nome_niv</option>";
        }
        ?>
    </select><br><br>


    <!--
    /*<?php /*
    $valor_niveis_acesso_id = "";
    if(isset($dados['niveis_acesso_id'])) {
        $valor_niveis_acesso_id = $dados['niveis_acesso_id']; 
    }
    ?>
    <label for="">Nivel de Acesso: </label>
    <input type="number" name="niveis_acesso_id" placeholder="Nivel de Acesso" value="<?php echo $valor_niveis_acesso_id; */ ?>" /><br><br>
    -->

    <?php

    ?>

    <input type="submit" value="cadastrar" name="SendCadUsuario" />

</form>

</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="shortcut icon" href="imagens/favicon.ico"/>
    <title>Celke - Formulario</title>
</head>

<body>
<?php 

//Instrução INSERT Instrução

//A instrução INSERT INTO é usada para inserir novos registros em uma tabela.

/*INSERT INTO table_name
VALUES (values1, values1, ...);*/

include_once 'conexao_try_catch.php';

echo "<h1>Cadastrar usuarios</h1>";

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
//var_dump($dados);

if(!empty($dados['SendCadUsuario'])){
    /*echo "<pre>";
    var_dump($dados);
    echo "</pre>";*/

    //Aceitar caractere tipo '
    //$nome = $dados['nome'];
    //$nome = mysqli_real_escape_string($conn, $dados['nome']);

    //Emcriptografar Senha
    $senha_cript = password_hash($dados['senha'], PASSWORD_DEFAULT);

    $query_cad_usuario = "INSERT INTO usuarios (nome, email, senha, sits_usuario_id, niveis_acesso_id, created) VALUES ('".$dados['nome']."', '".$dados['email']."', '$senha_cript', ".$dados['sits_usuario_id'].", ".$dados['niveis_acesso_id'].", now())";

    mysqli_query($conn, $query_cad_usuario);

    if(mysqli_insert_id($conn)){
    echo "Usuario cadastrado com sucesso!<br>";
    //$ultimo_registro_cad = mysqli_insert_id($conn);
    //echo "ID do registro cadastrado: $ultimo_registro_cad <br>";
    }else{
    echo "Erro: Usuario não cadastrado com sucesso!<br>";
    }
}

?>

<!--form method="POST" action=""-->
<form method="POST" action="">
    
    <label for="">Nome: </label>
    <input type="text" name="nome" placeholder="Nome completo" /><br><br>

    <label for="">E-mail: </label>
    <input type="email" name="email" placeholder="O melhor e-mail" /><br><br>

    <label for="">Senha: </label>
    <input type="password" name="senha" placeholder="Senha do usuario" /><br><br>

    <label for="">Situação: </label>
    <input type="number" name="sits_usuario_id" placeholder="Situação" /><br><br>

    <label for="">Nivel de Acesso: </label>
    <input type="number" name="niveis_acesso_id" placeholder="Nivel de Acesso" /><br><br>

    <input type="submit" value="cadastrar" name="SendCadUsuario" />

</form>

</body>
</html>
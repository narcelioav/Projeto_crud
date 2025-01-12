<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="shortcut icon" href="imagens/favicon.ico"/>
    <title>Celke - Update - Formulario Editar</title>
</head>

<body>
<?php 

//A instrução UPDATE é usada para atualizar registros em uma tabela.

/*<!--UPDATE table_name
SET COLUMN1=VALUE1, COLUMN2=VALUE=2, ...     
WHERE some_column=some_value;
-->*/

//dados do usuario que serão editados
$id = 6;// ID fixo para teste
//$nome = "Cesar 1a";
//$email = "cesar1a@celke.com";

//conexao com o banco de dados
include_once 'conexao.php';

echo "<h1>Editar usuarios</h1>";

//recebendo todos os campos do formulario, utilizando o metodo post, como string
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
/*echo "<pre>";
var_dump($row_usuario);
echo "</pre>";*/

//verificar se foi clicado no botão
if(!empty($dados['SendEditUsuario'])){
    /*echo "<pre>";
    var_dump($dados);
    echo "</pre>";*/

    $empty_input = false;
    //verificar se o email não esta sendo utilizado
    $email = mysqli_real_escape_string($conn, $dados['email']);
    //$id_usuario = mysqli_real_escape_string($conn, $dados['id']);
    //verificar se ha outro usuario utilizando o email AND id <> $id, o mesmo usuario não tem problema
    $query_view_usuario = "SELECT id FROM usuarios WHERE email = '$email' AND id <> $id LIMIT 1";
    $result_view_usuario = mysqli_query($conn, $query_view_usuario);
    if(($result_view_usuario) and ($result_view_usuario->num_rows != 0)){
        $empty_input = true;
        echo "<p style='color: #f00'>Erro: Este e-mail ja esta cadastrado!</p>"; 
    }

    if(!$empty_input){
        //Foreach percorre todo o array, apos ler os dados, a chave é a posição no array, capturo os valores
        foreach($dados as $chave => $valor){
            //emplementar para aceitar o apostrofo
            $$chave = mysqli_real_escape_string($conn, $valor);
        }

        $senha_cript = password_hash($senha, PASSWORD_DEFAULT);
        //$query_edit_usuario = "UPDATE usuarios SET nome = '$nome', email = '$email', modified = now() WHERE id = $id LIMIT 1";
        $modified = date("Y-m-d H:i:s");
        $query_edit_usuario = "UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$senha_cript', sits_usuario_id = '$sits_usuario_id', niveis_acesso_id = '$niveis_acesso_id', modified = '$modified' WHERE id = $id LIMIT 1";
        mysqli_query($conn, $query_edit_usuario);

        //se afetou aguma limha
        if(mysqli_affected_rows($conn)){
            echo "<p style='color: green'>Usuario editado com sucesso!</p>";
        }else{
            echo "<p style='color: #f00'>Erro: Usuario não editado com sucesso!</p>";   
        }
    }
}

//dados do usuario que serão editados
//$id = 7;// ID fixo para teste
//$nome = "Cesar 1a";
//$email = "cesar1a@celke.com";

$query_usuario = "SELECT id, nome, email, sits_usuario_id, niveis_acesso_id FROM usuarios WHERE id = $id LIMIT 1";
//para execultar a query da variavel - query_usuario
$result_usuario = mysqli_query($conn, $query_usuario);
//para ler o resultado de um unico registro, ler o qe tem na variavel result_usuario
$row_usuario = mysqli_fetch_assoc($result_usuario);
echo "<pre>";
var_dump($row_usuario);
echo "</pre>";


?>

<form method="POST" action="">
    <?php   
    $id_usuario = "";
    if(isset($row_usuario['id'])){
        $id_usuario = $row_usuario['id'];
    }
    ?>
    <input type="hidden" name="id" id="id" value="<?php echo $id_usuario; ?>" />

    <?php   
    $valor_nome = "";
    //verifica se existe a variavel
    if(isset($dados['nome'])){
        $valor_nome = $dados['nome'];
    }
    //verificando se existir a variavel row_usuario de posição nome, vindo do banco de dados
    elseif(isset($row_usuario['nome'])){
        $valor_nome = $row_usuario['nome'];
    }
    ?>
    <label for="">Nome:</label>
    <input type="text" name="nome" id="nome" placeholder="Nome completo" value="<?php echo $valor_nome; ?>" /><br><br>

    <?php
    $valor_email = "";
    if(isset($dados['email'])){
        $valor_email = $dados['email'];
    }elseif(isset($row_usuario['email'])){
        $valor_email = $row_usuario['email'];
    }
    ?>
    <label for="">E-mail:</label>
    <input type="email" name="email" id="email" placeholder="Melhor email" value="<?php echo $valor_email; ?>" /><br><br>

    <?php
    $valor_senha = "";
    if(isset($dados['senha'])){
        $valor_senha = $dados['senha'];
    }
    ?>
    <label for="">Senha:</label>
    <input type="password" name="senha" id="senha" placeholder="Senha do usuario" value="<?php echo $valor_senha; ?>" /><br><br>

    <?php
    $query_sits_usuarios = "SELECT id, nome FROM sits_usuarios ORDER BY nome ASC";
    $result_sits_usuarios = mysqli_query($conn, $query_sits_usuarios);
    /*transferir para dentro do select
    while($row_sit_usuario = mysqli_fetch_assoc($result_sits_usuarios)){
        echo "<pre>";
        var_dump($row_sit_usuario);
        echo "</pre>";
    }*/
    /*$valor_sits_usuario_id = "";
    if(isset($dados['sits_usuario_id'])){
        $valor_sits_usuario_id = $dados['sits_usuario_id'];
    }elseif(isset($row_usuario['sits_usuario_id'])){
        $valor_sits_usuario_id = $row_usuario['sits_usuario_id'];
    }*/
    ?>
    <label for="">Situação:</label>
    <!--<input type="number" name="sits_usuario_id" id="sits_usuario_id" placeholder="Situação" value="<?php /*echo $valor_sits_usuario_id;*/ ?>" /><br><br>-->
    <select name="sits_usuario_id" id="sits_usuario_id">
        <option value="">Selecione</option>
        <?php
            while($row_sit_usuario = mysqli_fetch_assoc($result_sits_usuarios)){
                $select_sit_usuario = "";
                //se o valor do formulario é igual ao BD
                if(isset($dados['sits_usuario_id']) and ($dados['sits_usuario_id'] == $row_sit_usuario['id'])){
                    $select_sit_usuario = "selected";
                }elseif(isset($row_usuario['sits_usuario_id']) and ($row_usuario['sits_usuario_id'] == $row_sit_usuario['id'])){
                    //mostra o valor contido no BD
                    $select_sit_usuario = "selected";
                }

                echo "<option value='" . $row_sit_usuario['id'] . "' $select_sit_usuario>" . $row_sit_usuario['nome'] . "</option>";
            }
        ?>
    </select><br><br>

    <?php
    $valor_niveis_acesso_id = "";
    if(isset($dados['niveis_acesso_id'])){
        $valor_niveis_acesso_id = $dados['niveis_acesso_id'];
    }elseif(isset($row_usuario['niveis_acesso_id'])){
        $valor_niveis_acesso_id = $row_usuario['niveis_acesso_id'];
    }
    ?>
    <label for="">Nivel de acesso:</label>
    <input type="number" name="niveis_acesso_id" id="niveis_acesso_id" placeholder="Nivel de acesso" value="<?php echo $valor_niveis_acesso_id; ?>" /><br><br>

    <input type="submit" value="salvar" name="SendEditUsuario" />
</form>

</body>
</html>
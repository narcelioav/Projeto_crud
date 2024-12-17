<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke - Formulario - Get e Post</title>
</head>
<body>
<h2>Cadastrar usuario</h2>

<!-- Não é recomendado o uso do metodo GET em formularios 
 Pois os dados são mostrados na URL-->
<form method="GET" action="formulario_proc_get.php">
    <label for="">Nome: </label>
    <input type="text" name="nome_cliente" placeholder="Digite o nome" required /><br><br>

    <label for="">E-mail: </label>
    <input type="email" name="email_cliente" placeholder="Digite o e-mail" required /><br><br>

    <label for="">Senha: </label>
    <input type="password" name="senha_cliente" placeholder="Digite a senha" required /><br><br>


    <input type="submit" value="Cadastrar" />
</form>
    <?php

       
    ?>
    </body>
</html>
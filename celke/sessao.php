<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke - Sessão</title>
</head>
<body>
    <?php

        //É um recurso do PHP que permite que você salve valores (Variaveis) para serem usados ao longo da visita do usuario.

        //Sessão é salva no servidor.
        //Se feichar o navegador, perde a sessão.

        //A Sessão inicia sempre no inicio da pagina.

        //criar a sessão
        $_SESSION['id'] = 2;
        $_SESSION['nome'] = "Cesar";

        //Verificar se existe a sessão.
        if(isset($_SESSION['id'])){
            echo "Id do usuario " . $_SESSION['id'] . " e o nome é " . $_SESSION['nome'] . "<br>";
        }else{
            echo "Sessão não encontrada! <br>";
        }

        echo "<hr>";

        //Excluir a sessão
        unset($_SESSION['id'], $_SESSION['nome']);

        //Verificar se existe a sessão
        if(isset($_SESSION['id'])){
            echo "Id do usuario " . $_SESSION['id'] . " e o nome é " . $_SESSION['nome'] . "<br>";
        }else{
            echo "Sessão não encontrada! <br>";
        }



    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke - Coocies</title>
</head>
<body>
    <?php

        //Cookies sao arquivos-texto que são criados no navegador do usuario para salvar e recuperar dados de qualquer pagina do site.

        //São utilizados em:
        //Verificação se um usuario ja logou no site(isto é, validar se o cookie existe no computador)
        //Verificar se um ussuario ja votou na enquete do site.
        //Carrinho de compras para armazenar os produtos colocados no carrinho de compra.

        //O Cookie é criado no navegador, mesmo desligando pode ser recuperado no mesmo site.

        //setcookie("nome_do_cookie","valor_do_cookie");

        echo "<h4>Utilizando Cookies</h4> <br>";  

        // Criar um cookie.
        setcookie("afiliado","5323", (time() + (7 * 24 * 3600))); // 7 dias.

        //Acessar o cookie.
if (isset($_COOKIE['afiliado'])) {
        //$afiliado = $_COOKIE['afiliado'];
        echo "Numero do afiliado: " . $_COOKIE['afiliado'] . "<br>";
    }    
    
    setcookie("logado","Cesar", (time() + (7 * 3600))); //7 horas
if (isset($_COOKIE['logado'])) {
        echo "Usuario: " . $_COOKIE['logado'] . " logado. <br>";
    }   else{
        echo "Cookie invalido! <br>";
    }    


    ?>
</body>
</html>
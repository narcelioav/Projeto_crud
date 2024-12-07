<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke - Repetição - Foreach</title>
</head>
<body>
    <?php

        //Funções são uteis para deixar o codigo mais modular e organizado. E evita repetir o codigo toda vez que necessitar.
        $codigo = "Cursophp";
        promocao($codigo);

        function promocao($valor = null){
            //A variavel valor é a mesma codigo, não precisa ter o mesmo nome.
            echo "Acessou a função <br><br>"; 
            echo "Parametro: $valor <br><br>";
            if($valor == "cursophp"){
                //echo "Codigo valido<br><br>";
                $msg = "codigo valido.";
            }   else{
                //echo "Codigo invalido<br><br>";
                $msg = "codigo invalido.";
            }  
            return $msg;      
        }

        echo "<hr>";

        $codigo_curso = "cursophp";
        $retorno_dados_funcao = promocao($codigo_curso);
        echo $retorno_dados_funcao . "<br>"; 

        echo "<hr>";

        $codigo_curso = "cursophp";
        $retorno_dados_funcao = promocao();
        echo $retorno_dados_funcao . "<br>"; 

    ?>
</body>
</html>
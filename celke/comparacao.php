<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke - Operadores de Comparação</title>
</head>
<body>
    <?php
        echo "== igual a;<br>
        != diferente de;<br>
        < menor que;<br>
        > moior que;<br>
        <= menor ou igual a;<br>
        >= maior ou igual a;<br>";
        echo "<br><br>";

        $a = 10;
        $b = 8;

        if($a == 10){
            echo "Verdadeiro: o numero $a é igual ao valor $b <br><br>";
        }else{
            echo "Falso: o numero $a não é igual ao valor $b <br><br>";
        }

        if($a == $b){
            echo "Verdadeiro: o numero $a é igual ao valor $b <br><br>";
        }else{
            echo "Falso: o numero $a não é igual ao valor $b <br><br>";
        }


    ?>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke - Passagem de parametros por valor e referencia</title>
</head>
<body>
    <?php

        //A passagem de parametros por valor, caso o conteudo da variavel seja modificado, essa modificação não afeta a variavel original, A passagem por referencia o valor é alterado.

        echo "<h4>Passagem por valor</h4> <br><br>";  

        function salario($num){
            $num += 50;
            echo "Dentro da função - salario com aumento: $num <br><br>";
        }
            
        $salario = 8200;
        salario($salario);
        echo "Fora da função - salario sem aumento: $salario <br><br>";

        echo "<hr>";        
        echo "<h4>Exemplo com variaveis iguais</h4> <br><br>";  


        function salario2($salario){
            $salario += 50;
            echo "Dentro da função - salario com aumento: $salario <br><br>";
        }
            
        $salario = 8200;
        salario2($salario);
        echo "Fora da função - salario sem aumento: $salario <br><br>";

    ?>
</body>
</html>
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

        echo "<h4>Exemplo com variaveis iguais</h4> <br>";  


        function salario_a($sal){
            $sal += 100;
            echo "Dentro da função - salario com aumento: $sal <br><br>";
            return $sal;
        }
            
        $salario_a = 8500.47;
        $salario_com_aumento = salario_a($salario_a);
        echo "Fora da função, imprimir o retorno - salario sem aumento: $salario_com_aumento <br><br>";
        
        echo "<hr>"; 

        echo "<h4>Exemplo por referencia</h4> <br>";  

        // o I comercial (&) passa o valor por referencia.
        function salario_b(&$num){
            $num += 200;
            echo "Dentro da função - salario com aumento: $num <br><br>";
        }

        $salario_b = 9300;
        echo "Salario sem aumento: $salario_b <br><br>";
        salario_b($salario_b);
        echo "Salario com aumento: $salario_b <br><br>";

    ?>
</body>
</html>
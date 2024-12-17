<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke - Funções Recursivas</title>
</head>
<body>
    <?php

        //Funções Recursivas são aquelas que chamam a si mesma.

        echo "<h4>Função usando if</h4> <br>";  

        function exibe($num){
            if($num >= 1){
            echo "Valor passado para a função: $num <br>";
            $qnt = $num - 1;
            exibe($qnt);
            }
        }            
        
        exibe(10);

    ?>
</body>
</html>
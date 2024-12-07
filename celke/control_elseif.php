<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke - Estrutura de controle - elseif</title>
</head>
<body>
    <?php
        $a = 2;

        if($a == 1){
            echo "Sacar o dinheiro. <br><br>";
        } elseif($a == 2) {
            echo "Depositar o dinheiro. <br><br>";
        } elseif($a == 3) {
            echo "Extrato da conta. <br><br>";
        } else {
            echo "opção não encontrada. <br><br>";
        }

    ?>
    </body>
</html>
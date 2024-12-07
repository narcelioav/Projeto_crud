<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke - Estrutura de controle - if</title>
</head>
<body>
    <?php
        $a = 4;

        switch($a){
            case 1:
                echo "Sacar dinheiro. <br><br>";
                break;
            
            case 2:
                echo "Depositar dinheiro. <br><br>";
                break; 
                
            case 3:
                echo "Imprimir cheque. <br><br>";
                break; 
                
            default:
                    echo "Opção não encontrada";
                break;
        }

    ?>
    </body>
</html>
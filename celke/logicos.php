<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke - Operadores Logicos</title>
</head>
<body>
    <?php
        echo "and ---- e > Retorna TRUE se os operadores forem verdadeiros;<br>
        or ---- ou > Retorna TRUE se um ou outro forem verdadeiros;<br>
        xor --- ou > Retorna TRUE se um for falso e outro verdadeiros;<br>
        ! ---- nâo > Retorna TRUE se o operadores não for verdadeiros;<br>
        && --- e > Retorna TRUE se os operadores forem verdadeiros;<br>
        || ---- ou > Retorna TRUE se um ou outro forem verdadeiros;<br>";
        echo "<br><br>";

        $a = 10;
        $b = 8;
        $c = 7;

        echo "Se a=$a e b=$b são verdadeiro ";
        if(($a == 10) AND ($b == 8)){
            echo "Utilizando AND: Verdadeiro <br><br>";
        } else{
            echo "Utilizando AND: Falso <br><br>";
        }

         echo "Se a=$a ou b=$b for verdadeiro ";
        if(($a == 10) or ($b == 8)){
            echo "Utilizando OR: Verdadeiro <br><br>";
        } else{
            echo "Utilizando OR: Falso <br><br>";
        }

        echo "Se a=$a ou b=$b apenas um for verdadeiro ";
        if(($a == 10) xor ($b == 8)){
            echo "Utilizando XOR: Verdadeiro <br><br>";
        } else{
            echo "Utilizando XOR: Falso <br><br>";
        }
        
        echo "Se a não for vazio ";
        if(!empty($a)){
            echo "Utilizando !: Verdadeiro <br><br>";
        } else{
            echo "Utilizando !: Falso <br><br>";
        }

     echo "Se a=$a e b=$b são verdadeiro ";
        if(($a == 10) && ($b == 8)){
            echo "Utilizando &&: Verdadeiro <br><br>";
        } else{
            echo "Utilizando &&: Falso <br><br>";
        }

        echo "Se a=$a e b=$b são verdadeiro ";
        if(($a == 10) || ($b == 8)){
            echo "Utilizando ||: Verdadeiro <br><br>";
        } else{
            echo "Utilizando ||: Falso <br><br>";
        }


    ?>
    </body>
</html>
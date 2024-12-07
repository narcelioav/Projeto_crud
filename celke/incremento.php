<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke - Incremento e Decremento</title>
</head>
<body>
    <?php
        echo "<h3>Pós-incremento</h3>";
        $a = 5;
        echo "Deve ser 5: " . $a++ . "<br>";
        echo "Deve ser 6: " . $a . "<br><br>";

        echo "<h3>Pre-incremento</h3>";
        $a = 5;
        echo "Deve ser 6: " . ++$a . "<br>";
        echo "Deve ser 6: " . $a . "<br><br>";

        echo "<h3>Pós-decremento</h3>";
        $a = 10;
        echo "Deve ser 10: " . $a-- . "<br>";
        echo "Deve ser 9: " . $a . "<br><br>";

        echo "<h3>Pre-decremento</h3>";
        $a = 10;
        echo "Deve ser 9: " . --$a . "<br>";
        echo "Deve ser 9: " . $a . "<br><br>";
    ?>
</body>
</html>


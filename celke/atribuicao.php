<?php
echo "Operadores de Atribuiçã <br><br>";

echo "a += b -> a = a + b;<br>
a -= b -> a = a - b;<br>
a *= b -> a = a * b;<br>
a /= b -> a = a / b;<br>
a %= b -> a = a % b;<br>
a .= b -> a = a . b;<br>";
echo "<br><br>";

$a = 1;
$b = 2;
$c = 3;
$result = 6;


echo "Somar o valor $result pelo valor $a <br>";
$result += $a;
echo "Resultado da adição é: " . $result . "<br>";
echo "<br><br>";

echo "Subtrair o valor $result pelo valor $b <br>";
$result -= $b;
echo "Resultado da subtração é: " . $result . "<br>";
echo "<br><br>";

echo "Multiplicar o valor $result pelo valor $b <br>";
$result *= $b;
echo "Resultado da multiplicação é: " . $result . "<br>";
echo "<br><br>";

echo "Dividir o valor $result pelo valor $b <br>";
$result /= $b;
echo "Resultado da divisão é: " . $result . "<br>";
echo "<br><br>";

echo "Resto do valor $result pelo valor $b <br>";
$result %= $b;
echo "Resultado do modulo é: " . $result . "<br>";
echo "<br><br>";

echo "atribuição + concatenação <br>";

$d = "Bom ";
$d .= "dia, ";
$d .= "Cesar.";

echo $d;

?>
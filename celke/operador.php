<?php

//como criar variaveis
$a = 2;
$b = 4;
$c = 7;

echo "Operadores logicos <br>";
echo "a = 2, b = 4, c = 7 <br><br>";

$result_s = $a + $b;
echo "Soma de a + b é: " . $result_s . "<br><br>";

$result_sub = $a - $b;
echo "Soma de a - b é: " . $result_sub . "<br><br>";

$result = $b - $a;
echo "Soma de b - a é: " .$result . "<br><br>";

$result = $b * $a;
echo "Soma de a * b é: " . $result . "<br><br>";

$result = $a / $c;
echo "Soma de a / c é: " . $result . "<br><br>";

$result = $c / $a;
echo "Soma de c / a é: " .$result . "<br><br>";

$result = $c % $a;
echo "Resto da divisao: " .$result . "<br><br>";

echo "<hr>";

/*A função number_format é utilizada para converter o valor em Real */
echo "Função number_format <br><br>";

$cc = 30565.33;
echo "valor da conta corrente: R$ " . number_format($cc, 2, ",", ".") . "<br><br>";

$debito = 200.16;
echo "valor do debito: R$ " . number_format($debito, 2, ",", ".") . "<br><br>";

$result = $cc - $debito;
echo "saldo: R$ " . number_format($result, 2, ",", ".") . "<br><br>";

?>
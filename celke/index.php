<?php
echo "Ola Mundo! <br>";
echo "<br>";

$result = "2";
echo "Resultado exemplo um: " . $result . "<br>";
var_dump($result);

$result_dois = $result + 1;
echo "<br><br> Resultado exemplo dois: " . $result_dois . "<br>";
var_dump($result_dois);

$result_tres = $result_dois + 1.5;
echo "<br><br> Resultado exemplo tres: " . $result_tres . "<br>";
var_dump($result_tres);

$result_quatro = 11;
echo "<br><br>Resultado exemplo quatro: " . $result_quatro . "<br>";
var_dump($result_quatro);

$result_cinco = (double) $result_quatro;
echo "<br><br>Resultado exemplo cinco: " . $result_cinco . "<br>";
var_dump($result_cinco);

$result_seis = 7.9;
echo "<br><br>Resultado exemplo seis: " . $result_seis . "<br>";
var_dump($result_seis);

$result_sete = (int) $result_seis;
echo "<br><br>Resultado exemplo sete: " . $result_sete . "<br>";
var_dump($result_sete);

?>
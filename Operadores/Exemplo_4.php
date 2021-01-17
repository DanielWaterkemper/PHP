<?php
// operadores de comparação

$a = 30;
$b = 55;

var_dump($a > $b);

echo "<br>";

var_dump($a < $b);

echo "<br>";

var_dump($a == $b); // dois iguais é para comparar os valores 

echo "<br>";

var_dump($a = $b); // um sinal de igual atribui valor!

echo "<br>";

var_dump($a == $b); // agora que o valor do a é igual ao do b, vai dar true

echo "<br>";

$c = 10.0;
$d = 10;

var_dump($c === $d); // tres iguais compara se são variaveis do mesmo tipo

echo "<br>";

var_dump($c != $d); // vai validar se o valor deles é diferente um do outro

echo "<br>";

var_dump($c !== $d); // vai validar se as variaveis são de tipos diferentes


?>
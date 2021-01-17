<?php
// 
$frase = "A repetição é mãe da retenção";
echo "$frase<br>";
var_dump(strlen($frase));
echo "<br>";

$palavra = "mãe";

$q = strpos($frase, $palavra); // strpos da a posição onde começa a frase procurada

echo "posição da palavra mãe".var_dump($q);
echo "<br>" . $texto = substr($frase, 0, $q); // substr vai printar a frase até o ponto que voce colocar nos parametros
echo "<br>" . $texto2 = substr($frase, $q + strlen($palavra), strlen($frase)); // nesse caso os parametros estão setados para printar após a palavra buscada // strlen serve para contar o numero de casas usadas na tring


?>
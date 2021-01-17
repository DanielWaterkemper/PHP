<?php 

$nome = "Daniel"; // nesse caso o "=" é um operador que atribui o valor a variavel

echo "Seu nome é "."<strong>".$nome."</strong><br/>"; // o "." é um operador de string, que junta as strings

$nome .= " Teste";

echo $nome;

?>
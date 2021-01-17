<?php

$sua_idade = 22;

$idade_criança = 12;
$idade_maior = 18;
$idade_adulto = 50;
$idade_melhor = 65;

if($sua_idade <= $idade_criança){
	echo "Voce é <strong>criança</strong>";
}
else if($sua_idade <= $idade_maior){
	echo "Voce é <strong>adolescente</strong>";
}
else if($sua_idade <= $idade_adulto){
	echo "Voce é <strong>adulto</strong>";
}
else if($sua_idade <= $idade_melhor || $sua_idade > $idade_melhor){
	echo "<strong>Voce está na melhor idade</strong>";
}

echo "<br>";

echo ($sua_idade < $idade_maior)?"Voce é menor de idade":"Voce é maior de idade"; // para validar uma condição no proprio echo

?>
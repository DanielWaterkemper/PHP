<?php

// Escopo de variavel

function teste(){  // escopo são essas chaves, assim como tem o escopo principal do código
	global $nome; // global é o que está chamando o nome para dentro da função
	$nome = "Daniel";
}

function teste2(){
	$nome = "Diego";
	echo "Agora no teste 2 = "."<strong>".$nome."</strong>";
}

teste();
echo "<strong>".$nome."</strong>"."<br/>";
teste2();

?>
<?php
//variaveis comuns
	$nome = "Daniel";
	$sobrenome = "Waterkemper";

	$nome_completo = $nome ." ". $sobrenome; // para concatenar(como somar as informaçoes das variaveis) as informações e formar o nome completo
	echo $nome_completo;
	
	exit; // o exit para o codigo na linha em que está

	echo $nome; // apenas da o print na tela
	
	echo "<br/>"; // quebra linha
	
	var_dump($nome); // mostra o tipo de variavel e o espaço que ocupa
	
	unset($nome); // apaga o valor da variavel
	
	if(isset($nome)){ // isset seria para validar com um if de tem algum valor na variavel, se tiver irá printar
		echo "<br/>";
		echo $nome;
	}


?>
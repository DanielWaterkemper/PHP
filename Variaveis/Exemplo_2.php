<?php

//tipos basicos de variaveis
	$nome = "Daniel"; // string com aspas duplas
	$site = 'www.Daniel.com.br'; // string com aspas simples

	$ano = 1998; // int(numero inteiro, ou numero sem casas após a virgula)
	$salario = 5500.99; // float(ponto flutuante, ou numero com casas após a virgula)
	$bloqueado = false; // booleano(só possui valor verdadeiro ou falso)
/////////////////////////////////////////////////////////////////////////////////////

//tipos compostos de variaveis
	$frutas = array("Laranja", "Manga", "Abacaxi"); // vetor(array), guarda mais de uma informação
	if(isset($frutas)){
		echo $frutas[0];
		echo "<br/>";
		echo $frutas[1];
		echo "<br/>";
		echo $frutas[2];
		echo "<br/><br/>";
	}

	$nascimento = new DateTime(); // objeto
	var_dump($nascimento);
	echo "<br/><br/>";
//////////////////////////////////////////////////////////////////////////////////////

//tipos especiais de variaveis 
	$arquivo = fopen("Exemplo_2.php", "r"); // fopen para abertura de arquivo
	var_dump($arquivo);

	$nulo = NULL; // deixa a variavel com valor nulo, sem valor, é diferente de uma variavel vazia(que é uma variavel já iniciada, em branco)

?>
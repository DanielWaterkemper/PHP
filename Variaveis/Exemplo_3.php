<?php

//variaveis globais
	$nome = (int)$_GET["a"]; // o get pega os numeros na URL após o "?" como string, colocando o (int) na frente ele vai pegar como numero inteiro
	var_dump($nome);

	echo "<br/>";

	$ip = $_SERVER["REMOTE_ADDR"]; // mostra o ip do usuario
	echo $ip;

	unset($ip);
	echo "<br/>";

	$ip = $_SERVER["SCRIPT_NAME"]; // mostra o local acessado 
	echo $ip;

?>
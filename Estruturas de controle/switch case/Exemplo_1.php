<?php

	$dia_da_semana = date("w");

	echo "$dia_da_semana = ";

	switch($dia_da_semana){
		case 0:
			echo "<strong>Domingo";
			break;
		case 1:
			echo "<strong>Segunda-Feira";
			break;
		case 2: 
			echo "<strong>Terça-Feira";
			break;
		case 3:
			echo "<strong>Quarta-Feira";
			break;
		case 4:
			echo "<strong>Quinta-Feira";
			break;
		case 5:
			echo "<strong>Sexta-Feira";
			break;
		case 6:
			echo "<strong>Sabado";
			break;
		default:
			echo "<strong>DATA INVALIDA";
			break;
	}

?>
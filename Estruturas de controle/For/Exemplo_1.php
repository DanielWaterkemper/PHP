<?php

for($i = 0; $i < 8; $i++){
	if($i >= 1 && $i <= 3) continue; // função que corta os numeros que estiverem nesse if, e continua com o resto
	switch($i){
		case 0:
			echo "$i = <strong>Domingo</strong><br>";
			break;
		case 1:
			echo "$i = <strong>Segunda-Feira</strong><br>";
			break;
		case 2: 
			echo "$i = <strong>Terça-Feira</strong><br>";
			break;
		case 3:
			echo "$i = <strong>Quarta-Feira</strong><br>";
			break;
		case 4:
			echo "$i = <strong>Quinta-Feira</strong><br>";
			break;
		case 5:
			echo "$i = <strong>Sexta-Feira</strong><br>";
			break;
		case 6:
			echo "$i = <strong>Sabado</strong><br>";
			break;
		default:
			echo "<br>$i = <strong>DATA INVALIDA</strong><br>";
			break;
	}
}

?>
<?php 

$condição = true;

while($condição){
	
	$numero = rand(1, 10); // rand gera numeros aleatórios

	if($numero === 3){
		echo "TRES!!!";
		$condição = false;
		exit;
	}

	echo $numero." ";
}

 ?>
<?php 

echo "<select>";

for($i = date("Y"); $i > date("Y") - 100; $i--){
	if($i >= 1998 && $i <= 2000) continue; // função que corta os numeros que estiverem nesse if, e continua com o resto
	echo '<option value ="'.$i.'">'.$i.'</option>';
}

echo "</select>";

 ?>
<?php
// Replace na string
$nome = "Daniel";
echo "$nome<br>";

echo $nome = str_replace("a", "@", $nome) . "<br>";
$nome = str_replace("e", "3", $nome);
echo $nome;

?>
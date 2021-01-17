<?php
// diferença das aspas
$nome = "Daniel";

$nome2 = 'Waterkemper';

var_dump($nome, $nome2);
echo "<br>";

echo "Meu nome é $nome<br>"; // aspas duplas ele entende que tem variavel junto com o texto, não sento preciso concatenar o texto
echo 'Meu sobrenome é $nome2'; // aspas simples o programa entende tudo como texto

?>
<?php

//include "../Include e Require/include/Exemplo_1.php"; // (mostra o caminho para achar o codigo que está sendo incluido) o "../" retorna uma pasta
require_once "include/Exemplo_1.php"; // o require gera um erro fatal se o código que está sendo incluido não existir ou não estiver funcionando corretamente // o include tenta fazer funcionar ainda que o arquivo não exista ou não esteja funcionando corretamente // include também procura em um repositorio caso não ache o que voce procurou o "include path"
require_once "include/Exemplo_1.php"; // o _once (que funciona tanto no include quanto no require) ignora se tiver uma segunda chamada para a mesma função

$resultado = somar(10, 25);

echo $resultado;

?>
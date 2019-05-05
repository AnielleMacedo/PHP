<?php


$a = null;
$b = NULL;
$c = 50;

//null coalesce serve pra comparar valores nulos (mais de um)
//mostre o valor de $a se eles existir, senao existir mostra o valor de $b, e se $b tb for nulo mostra o valor de $c

echo $a ?? $b ?? $c;

?>
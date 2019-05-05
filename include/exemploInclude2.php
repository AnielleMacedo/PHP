<?php

//include serve para inidicar o nome do arquivo onde esta localizado sua funcao somar
//obs se os arquivos n estiverem na mesma pasta era so add ao path o nome da pasta ex: "pasta/exemploInclude.php" E se quisesse subir uma pasta usaria ../ antes de tudo.
include "exemploInclude.php";

//require "exemploInclude.php"; Faz o memso que o include a diferenca è qu este: obriga que o arquivo  que vc esta incluindo EXISTA e esteja funcionando corretamente

$result = somar(10,20);

echo $result;
?>
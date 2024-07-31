<?php

require __DIR__ . "/src/domain/entities/Genero.php";
require __DIR__ . "/src/domain/entities/Filme.php";

echo "Bem-vindo(a) ao Screen Match!\n";

$filme = new Filme(
    'Top Gun - Maverick',
    2022,
    Genero::ACAO
);

$filme->avalia(10);
$filme->avalia(10);
 $filme->avalia(5);
$filme->avalia(5);

var_dump($filme);

echo $filme->media() . PHP_EOL;

echo $filme->anoLancamento;

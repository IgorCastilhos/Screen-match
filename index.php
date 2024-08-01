<?php

require 'autoload.php';

use ScreenMatch\calculos\{
    CalculadoraDeMaratona, ConversorNotaParaEstrela
};
use ScreenMatch\domain\entities\{
    Episodio, Filme, Genero, Serie
};

echo "Bem-vindo(a) ao Screen Match!\n";

$filme = new Filme(
    'Thor - Ragnarok',
    2021,
    Genero::SUPERHEROI,
    130
);

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);

var_dump($filme);

echo $filme->media() . PHP_EOL;

echo $filme->anoLancamento . PHP_EOL;

$serie = new Serie(
    'WandaVision',
    2007,
    Genero::DRAMA,
    10,
    20,
    30
);
$episodio = new Episodio($serie, 'Piloto', 1);

echo $serie->anoLancamento . PHP_EOL;

$serie->avalia(8);

echo $serie->media() . PHP_EOL;

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

echo "A duração total da maratona é de $duracao minutos." . PHP_EOL;

$conversor = new ConversorNotaParaEstrela();
echo $conversor->converte($serie) . PHP_EOL;

echo $conversor->converte($filme) . PHP_EOL;

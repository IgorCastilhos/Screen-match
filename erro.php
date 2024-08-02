<?php

use ScreenMatch\calculos\ConversorNotaParaEstrela;
use ScreenMatch\domain\entities\Episodio;
use ScreenMatch\domain\entities\Genero;
use ScreenMatch\domain\entities\Serie;
use ScreenMatch\exception\NotaInvalidaException;

require 'autoload.php';

$serie = new Serie('Nome da série',
    2024,
    Genero::AVENTURA,
    10,
    6,
    23);

$episodio = new Episodio($serie,
    'Piloto',
    1);

try {
    $episodio->avalia(45);
    $episodio->avalia(-35);

    $conversor = new ConversorNotaParaEstrela();
    echo $conversor->converte($serie);
} catch (NotaInvalidaException $e) {
    echo "Um problema aconteceu: " . $e->getMessage();
}

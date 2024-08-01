<?php

namespace ScreenMatch\calculos;

use ScreenMatch\domain\entities\Avaliavel;

class ConversorNotaParaEstrela
{
    public function converte(Avaliavel $avaliavel): float
    {
        $nota = $avaliavel->media();

        return round($nota) / 2;
    }
}

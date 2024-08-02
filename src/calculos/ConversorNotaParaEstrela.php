<?php

namespace ScreenMatch\calculos;

use ScreenMatch\domain\entities\Avaliavel;

class ConversorNotaParaEstrela
{
    public function converte(Avaliavel $avaliavel): float
    {
        try {
            $nota = $avaliavel->media();
            return round($nota) / 2;
        } catch (\Throwable) {
            return 0;
        }
    }
}

<?php

namespace ScreenMatch\domain\entities;

class Episodio implements Avaliavel
{
    use ComAvaliacao;

    /**
     * @param Serie $serie
     * @param string $nome
     * @param int $numero
     */
    public function __construct(
        public readonly Serie  $serie,
        public readonly string $nome,
        public readonly int    $numero,
    )
    {
    }
}

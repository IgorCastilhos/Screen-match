<?php

namespace ScreenMatch\domain\entities;

abstract class Titulo implements Avaliavel
{
    use ComAvaliacao;

    /**
     * @param string $nome
     * @param int $anoLancamento
     * @param Genero $genero
     */
    public function __construct(
        public readonly string $nome,
        public readonly int    $anoLancamento,
        public readonly Genero $genero,
    )
    {
    }

    abstract public function duracaoEmMinutos(): int;
}

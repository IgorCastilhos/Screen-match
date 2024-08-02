<?php

namespace ScreenMatch\domain\entities;

class Filme extends Titulo
{
    /**
     * @param string $nome
     * @param int $anoLancamento
     * @param Genero $genero
     * @param int $duracaoEmMinutos
     */
    public function __construct(
        string              $nome,
        int                 $anoLancamento,
        Genero              $genero,
        public readonly int $duracaoEmMinutos,
    )
    {
        parent::__construct($nome, $anoLancamento, $genero);
    }

    #[\Override]
    public function duracaoEmMinutos(): int
    {
        return $this->duracaoEmMinutos;
    }
}

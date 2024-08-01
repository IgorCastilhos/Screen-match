<?php

namespace ScreenMatch\domain\entities;

class Serie extends Titulo
{
    /**
     * @param string $nome
     * @param int $anoLancamento
     * @param Genero $genero
     * @param int $temporadas
     * @param int $episodiosPorTemporada
     * @param int $minutosPorEpisodido
     */
    public function __construct(
        string              $nome,
        int                 $anoLancamento,
        Genero              $genero,
        public readonly int $temporadas,
        public readonly int $episodiosPorTemporada,
        public readonly int $minutosPorEpisodido
    )
    {
        parent::__construct($nome, $anoLancamento, $genero);
    }

    /**
     * @return int
     */
    #[Override]
    public function duracaoEmMinutos(): int
    {
        return $this->temporadas * $this->episodiosPorTemporada * $this->minutosPorEpisodido;
    }
}

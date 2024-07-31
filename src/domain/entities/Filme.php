<?php

class Filme
{
    private array $notas;

    /**
     * @param string $nome
     * @param int $anoLancamento
     * @param string $genero
     */
    public function __construct(
        public readonly string $nome,
        public readonly int    $anoLancamento,
        public readonly Genero $genero
    )
    {
        $this->notas = [];
    }

    public function avalia(float $nota): void
    {
        $this->notas[] = $nota;
    }

    public function media(): float
    {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }
}

<?php

enum TipoConta
{
    case Corrente;
    case Poupanca;
    case Universitaria;
    case Investimento;

    public function possuiTaxa(): bool
    {
        return match ($this) {
            self::Corrente, self::Investimento => true,
            self::Poupanca, self::Universitaria => false,
        };
    }
}

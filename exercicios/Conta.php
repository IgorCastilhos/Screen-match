<?php

require __DIR__ . "/EnumTipoConta.php";

class Conta
{
    private int $saldoEmCentavos;

    public function __construct(
        public readonly string    $nomeDoTitular,
        public readonly TipoConta $tipoConta,
    )
    {
        $this->saldoEmCentavos = 0;
    }

    public function depositar(int $valorADepositar): void
    {
        $this->saldoEmCentavos += $valorADepositar;
    }

    public function sacar(int $valorASacar): void
    {
        if ($valorASacar > 0 && $valorASacar < $this->saldoEmCentavos) {
            $this->saldoEmCentavos -= $valorASacar;
        }
    }
}

<?php

namespace ScreenMatch\domain;

function exibeMensagemLancamento(int $ano): void
{
    if ($ano === 2024) {
        echo "Esse filme é lançamento!\n";
    } elseif ($ano > 2022 && $ano <= 2024) {
        echo "Esse filme ainda é novo!\n";
    } else {
        echo "Esse filme já é antigo!\n";
    }
}

function incluidoNoPlano(bool $planoPrime, int $anoLancamento): bool
{
    return $planoPrime || $anoLancamento < 2021;
}

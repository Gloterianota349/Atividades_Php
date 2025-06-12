<?php
    $pontuacao = 100;
    $vitorias = 3;
    $derrotas = 1;

    function pontuador(int $pontuacao, int $vitorias, int $derrotas): int {
        $pontuacao = $pontuacao + ($vitorias * 20) - ($derrotas * 15);
        return $pontuacao;
    }

    echo "Pontuação Inicial = " . $pontuacao . "<br>";
    echo "Pontuação Final = " . pontuador($pontuacao, $vitorias, $derrotas) . "<br>";
?>
<?php
    $nome = "Guilherme";

    function boasVindas(string $nome): string {
        return "Bem vindo(a), " . $nome . "!";
    }

    echo boasVindas($nome);
?>
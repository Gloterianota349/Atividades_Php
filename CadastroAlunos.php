<?php

class Aluno {
    public $nome;
    public $idade;
    public $matricula;
    public $nota1;
    public $nota2;
    public $peso1;
    public $peso2;
    public $media;

    public function calcularMedia($media, $nota1, $nota2, $peso1, $peso2) {
        $media = ($nota1 * $peso1) + ($nota2 * $peso2)/($peso1 + $peso2);
    }

    public function exibirDados($nome, $idade, $matricula, $media) {
        echo "Nome: " . $nome . "<hr>Idade: " . $idade . "<hr>Matrícula: " . $matricula . "<hr>Média: " . $media;
    }

    public function verificarAprovacao($media) {
        if ($media >= 7) {
            echo "Aluno aprovado!";
        }
        else {
            echo "Aluno reprovado!";
        }
    }
}

?>
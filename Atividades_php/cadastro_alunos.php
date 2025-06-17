<?php
$alunos = [
    "João" => [
        "Nota" => 6,
    ],
    "Maria" => [
        "Nota" => 8,
    ],
    "Pedro" => [
        "Nota" => 7,
    ]
];
$soma = 0;

foreach ($alunos as $alunoNome => $alunoNota) {
    echo "Nome: ". $alunoNome .", Nota: ". $alunoNota['Nota'] ."<br>";
    $soma += $alunoNota['Nota'];
}

echo "Média da turma: ". number_format($soma/3, 2, ",",".") . "<br>";

?>

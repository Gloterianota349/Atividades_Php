<?php

//IRMÃO DO CONSOLE.LOG()
echo "<h1>Hello World</h1>";
echo "<hr>";


//CRIAÇÃO DE VARIÁVEIS
$nome = "Ana";
$idade = 23;

echo $nome;
echo "<br>";
if ($nome === "Ana" and $idade === 23) {
    echo "Seja Bem Vindo(a) " . $nome . "<br>";
}

//FUNÇÃO
function saudacao(string $nome): string {
    return "Olá " . $nome;
}

echo saudacao($nome) . "<br>";

//DEBUGANDO VARIÁVEIS
var_dump($nome, $idade);
echo "<br>";

// 1ª FORMA DE CRIAR ARRAY
$arr = array(1, 2, 3, 4, 5);
$arr2 =  [1,2,3,4,5];

echo $arr[1] . " " . $arr2[1] ."<br>";

foreach ($arr2 as $number) {
    echo "Número: " . $number ."<br>";
}

//2ª FORMA DE CRIAR ARRAY
$usuario = [
    "Nome" => "Beatriz",
    "Idade" => "18",
    "Email" => "beatriz@example.com"
];

foreach ($usuario as $key => $value) {
    echo $key .": ". $value ."<br>";
}

$alunos = [
    "João" => [
        "Nota" => 6,
    ],
    "Maria" => [
        "Nota" => 8,
    ],
    "Pedro" => [
        "Nota" => 7,
    ],
];

?>
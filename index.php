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

?>
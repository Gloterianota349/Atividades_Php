<?php
$produtos = [
    "Escova" => "R$12,00",
    "Pasta" => "R$4,00",
    "Desodorante" => "R$17,00"
];

foreach ($produtos as $key => $value) {
    echo "Produto: ". $key .", Preço: " . $value . "<br>";
}

?>
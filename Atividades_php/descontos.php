<?php
    $preco = 15;
    $desconto = 0.3;

    function preco_desconto(float $preco, float $desconto): float {
        return $preco - ($preco * $desconto);
    }

    echo "Valor original = " . $preco . "<br>";
    echo "Desconto = " . $desconto . "<br>";
    echo "Valor Final = " . preco_desconto($preco, $desconto) . "<br>";
?>
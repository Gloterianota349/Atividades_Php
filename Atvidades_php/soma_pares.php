<?php
    $soma = 0;

    for ($i = 1; $i <= 100; $i++) {
        if ($i%2 == 0) {
            $soma = $soma + $i;
        }
    }
    echo "A soma de todos os números pares de 1 a 100 é = " . $soma;
?>
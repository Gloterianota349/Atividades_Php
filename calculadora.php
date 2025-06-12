<?php
    $num1 = 5;
    $num2 = 8;

    function soma(int $num1, int $num2): int {
        return $num1 + $num2;
    }

    function subtracao(int $num1, int $num2): int {
        return $num1 - $num2;
    }

    function multiplicacao(int $num1, int $num2): int {
        return $num1 * $num2;
    }

    function divisao(int $num1, int $num2): float {
        return $num1 / $num2;
    }

    echo soma($num1, $num2) . "<br>";
    echo subtracao($num1, $num2) . "<br>";
    echo multiplicacao($num1, $num2) . "<br>";
    echo divisao($num1, $num2) . "<br>";
?>
<?php
    $nota1 = 6;
    $nota2 = 7;
    $nota3 = 7;

    function aprovacao(float $nota1, float $nota2, float $nota3): float {
        $media = ($nota1 + $nota2 + $nota3)/3;

        if ($media >= 7) {
            echo "Aprovado";
        }
        else {
            echo "Reprovado";
        }
        return 0;
    }

    aprovacao($nota1, $nota2, $nota3);
?>
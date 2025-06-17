<?php

/**
 * Função de validação de e-mail
 * @param string $email Endereço de e-mail a ser validado
 * @return bool resultado booleano de validação
 */
function validarEnderecoEmail(string $email): bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

$diaDaSemana = 1;
switch($diaDaSemana) {
    case 1:
        echo "Domingo";
        break;
    case 2:
        echo "Segunda-feira";
        break;
    case 3:
        echo "Terça-feira";
        break;
    case 4:
        echo "Quarta-feira";
        break;
    case 5:
        echo "Quinta-feira";
        break;
    case 6:
        echo "Sexta-feira";
        break;
    case 7:
        echo "Sábado";
        break;
    default:
        echo "O número informado não equivale a um dia de semana válido!";
}

$resultado = match ($diaDaSemana) {
    1 => "Domingo",
    2 => "Segunda-feira",
    3 => "Terça-feira",
    4 => "Quarta-feira",
    5 => "Quinta-feira",
    6 => "Sexta-feira",
    7 => "Sábado",
    default => "O número informado não equivale a um dia de semana válido!"
};
echo "<br>";
var_dump($resultado);

?>
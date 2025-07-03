<?php

require "CadastroAlunos.php";

$aluno = new Aluno();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['userName'])) {
        $aluno->nome = $_POST['userName'];
    }
    if(isset($_POST['userAge'])) {
        $aluno->idade = $_POST['userAge'];
    }
    if(isset($_POST['userRegistration'])) {
        $aluno->matricula = $_POST['userRegistration'];
    }
    if(isset($_POST['userNote1'])) {
        $aluno->nota1 = $_POST['userNote1'];
    }
    if(isset($_POST['userNote2'])) {
        $aluno->nota2 = $_POST['userNote2'];
    }
    if(isset($_POST['userWeight1'])) {
        $aluno->peso1 = $_POST['userWeight1'];
    }
    if(isset($_POST['userWeight2'])) {
        $aluno->peso2 = $_POST['userWeight2'];

        echo $aluno->nome;
    }
}

$aluno->calcularMedia($media, $nota1, $nota2, $peso1, $peso2);
$aluno->exibirDados($nome, $idade, $matricula, $media);
$aluno->verificarAprovacao($media);

?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
</head>
<body>
    <form method="POST">
        <label for="userName">
            <p>Nome Completo</p>
        </label>
        <input type="text" name="userName" id="userName">

        <label for="userAge">
            <p>Idade</p>
        </label>
        <input type="number" name="userAge" id="userAge">

        <label for="userRegistration">
            <p>Matrícula</p>
        </label>
        <input type="number" name="userRegistration" id="userRegistration">

        <label for="userNote1">
            <p>Nota 1</p>
        </label>
        <input type="float" name="userNote1" id="userNote1">

        <label for="userWeight1">
            <p>Peso Nota 1</p>
        </label>
        <input type="float" name="userWeight1" id="userWeight1">

        <label for="userNote2">
            <p>Nota 2</p>
        </label>
        <input type="float" name="userNote2" id="userNote2">

        <label for="userWeight2">
            <p>Peso Nota 2</p>
        </label>
        <input type="float" name="userWeight2" id="userWeight2">

        <br>
        <br>
        <button type="submit">Cadastrar Aluno</button>
    </form>
</body>
</html>
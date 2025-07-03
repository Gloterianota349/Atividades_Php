<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['userEmail'])) {
        $userEmail = $_POST['userEmail'];

        echo $userEmail;
    }
}

?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta</title>
</head>
<body>
    <form method="POST">
        <label for="userEmail">
            <p>Endereço de E-mail</p>
        </label>
        <input type="email" name="userEmail" id="userEmail">

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
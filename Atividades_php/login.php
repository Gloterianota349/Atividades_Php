<?php
    $nome_usuario_correto = "Guilherme_M";
    $senha_correta = "sesi12345";

    $nome_usuario_inserido = "Guilherme_M";
    $senha_inserida = "sesi12345";

    if($nome_usuario_inserido === $nome_usuario_correto && $senha_inserida === $senha_correta) {
        echo "Login efetivado com sucesso";
    }
    else {
        echo "Nome de usuário ou senha incorreto";
    }
?>
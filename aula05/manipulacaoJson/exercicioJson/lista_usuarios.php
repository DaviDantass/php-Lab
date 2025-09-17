<?php
$usuarios = json_decode(file_get_contents("usuarios.json"), true);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuários</title>
</head>
<body>
    <h1>Usuários Cadastrados</h1>
    <ul>
        <?php foreach ($usuarios as $usuario): ?>
            <li><b>Nome:</b> <?= $usuario['nome'] ?> | <b>Email:</b> <?= $usuario['email'] ?></li>
        <?php endforeach; ?>
    </ul>
    <br>
    <a href="index.html">Cadastrar Novo Usuário</a>
</body>
</html>

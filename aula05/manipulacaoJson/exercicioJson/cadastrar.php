<?php
$arquivo = "usuarios.json";

if (isset($_POST['nome']) && isset($_POST['email'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    if (file_exists($arquivo)) {
        $usuarios = json_decode(file_get_contents($arquivo), true);
        if (!$usuarios) $usuarios = [];
    } else {
        $usuarios = [];
    }

    $usuarios[] = [
        "nome" => $nome,
        "email" => $email
    ];

    file_put_contents($arquivo, json_encode($usuarios, JSON_PRETTY_PRINT));

    header("Location: lista_usuarios.php");
    exit;
}
?>

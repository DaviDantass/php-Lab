<?php
$nomeArquivo = "teste.txt";

if (isset($_POST['acao'])) {
    $acao = $_POST['acao'];

    if ($acao === "gravar") {
        $frases = [
            "Eu gosto de valorant.",
            "Java > php.",
            "monto cubo magico em 25s"
        ];

        file_put_contents($nomeArquivo, implode(PHP_EOL, $frases));

        echo "Frases gravadas com sucesso!<br>";
        echo "<a href='index.html'>Voltar</a>";

    } elseif ($acao === "ler") {
        if (file_exists($nomeArquivo)) {
            $conteudo = file_get_contents($nomeArquivo);
            echo nl2br($conteudo); 
        } else {
            echo "O arquivo não existe ainda.<br>";
        }
        echo "<br><a href='index.html'>Voltar</a>";
    }
}
?>

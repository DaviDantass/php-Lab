<?php
function calcularTabuada($numero) {
    $arquivo = "tabuada.txt";
    $conteudo = "";

    for ($i = 1; $i <= 10; $i++) {
        $conteudo .= "$i x $numero = " . ($i * $numero) . PHP_EOL;
    }

    file_put_contents($arquivo, $conteudo);

    return $arquivo;
}

if (isset($_POST['numero'])) {
    $numero = intval($_POST['numero']);
    $arquivo = calcularTabuada($numero);

    echo "<h2>Tabuada do $numero</h2>";
    echo "<pre>";
    echo file_get_contents($arquivo);
    echo "</pre>";
}
?>

<?php
$name = $_REQUEST['name'];
$valor = $_REQUEST['valor'];

if ($name == "Poupança") {
    $preco_finalA = $valor + ($valor * 0.03);
    echo "O preço final é: $preco_finalA";
}
elseif ($name == "Fundos de renda fixa") {
    $preco_finalB = $valor + ($valor * 0.04);
    echo "O preço final é: $preco_finalB";
}
else {
    echo "Opção inválida!";
}
?>
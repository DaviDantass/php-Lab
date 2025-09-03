<?php
$custo = $_REQUEST['custo'];

if ($custo <= 40000) {
    $preco_final = $custo + ($custo * 0.05);
    echo "O preço final é: $preco_final";
}
elseif ($custo <= 70000) {
    $preco_final = $custo + ($custo * 0.10) + ($custo * 0.15);
    echo "O preço final é: $preco_final";
}
else {
    $preco_final = $custo + ($custo * 0.15) + ($custo * 0.20);
    echo "O preço final é: $preco_final";
}
?>
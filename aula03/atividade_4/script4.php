<?php
$maior = $_REQUEST['maior'];
$menor = $_REQUEST['menor'];
$altura = $_REQUEST['altura'];

$area = ($maior + $menor) / 2 * $altura;
echo "O valor da base maior é $maior, a base menor é $menor, com a altura de $altura, e a area vai ser de $area"
?>
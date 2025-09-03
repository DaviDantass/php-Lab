<?php
$numero = $_REQUEST['numero'];
if ($numero > 0) {
    echo "O número $numero é positivo.";
} elseif ($numero < 0) {
    echo "O número $numero é negativo.";
} else {
    echo "O número é zero.";
}
?>
<?php
$fixo = $_REQUEST['fixo'];
$vendas = $_REQUEST['vendas'];

$comissao = $vendas * 0.04;
$salario = $comissao + $fixo;
echo "A comissão será $comissao e o salário final do funcionário é $salario"
?>
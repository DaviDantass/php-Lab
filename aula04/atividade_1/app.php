<?php
    $name = $_REQUEST['nome'];
    $diciplina = $_REQUEST['disciplina'];
    $nota1 = $_REQUEST['nota1'];
    $nota2 = $_REQUEST['nota2'];
    $nota3 = $_REQUEST['nota3'];

    function calculoMedia($nota1, $nota2, $nota3){
        return ($nota1 + $nota2 + $nota3) / 3;
    }
    echo calculoMedia($nota1, $nota2, $nota3);
?>

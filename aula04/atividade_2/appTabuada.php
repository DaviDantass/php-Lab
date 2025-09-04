<?php
    $numero = $_REQUEST['numero'];

    function calculaTabuada($numero){
        if($numero >= 1 && $numero <= 10){
            for($i = 0; $i <= 10; $i++){
                echo $numero * $i;
;            }
        }
    }
    echo calculaTabuada(2);
?>

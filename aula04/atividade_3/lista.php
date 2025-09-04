<?php 
    $nome = $_REQUEST['nome'];

    function procurarNome($nomeProcurado){
        $nomes = ["Davi", "Maria", "João", "Ana"];
        $encontrado = false;

        for ($i = 0; $i < count($nomes); $i++) {
            if ($nomes[$i] == $nomeProcurado) {
            $encontrado = true;
            break; 
            }
        }
        if ($encontrado) {
            return "O nome $nomeProcurado foi encontrado na lista.";
        } else {
            return "O nome $nomeProcurado não consta na lista.";
        }
    }
    echo procurarNome($nome);
?>
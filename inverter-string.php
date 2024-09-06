<?php

$x = "Teste";

function inverterString($str) {
    $resultado = ""; 
    $comprimento = strlen($str);
    
    for ($i = $comprimento - 1; $i >= 0; $i--) {
        $resultado .= $str[$i];
    }
    
    return $resultado;
}

$invertida = inverterString($x);
echo "String original: $x\n";
echo "String invertida: $invertida\n";
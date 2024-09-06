<?php

function fibonacci($num_usu){

    $x = 0;
    $y = 1;

    if($num_usu == 0 || $num_usu == 1){
        return true;
    }
        

    while($y < $num_usu){
        $temp = $y; 
        $y = $y + $x;
        $x = $temp;
    }
    return $y == $num_usu;
}

//Informar o valor para teste
$num_usu = 2;

if (fibonacci($num_usu)) {
    echo "$num_usu pertence à sequência.";
} else {
    echo "$num_usu não pertence à sequência.";
} 

?>

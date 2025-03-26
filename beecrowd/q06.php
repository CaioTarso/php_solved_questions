<?php

$x = readline();
$y = readline();
$contador = 0;

if($y > $x){
    $aux = $x;
    $x = $y;
    $y = $aux;
}

$y++;

while($y < $x){
    
    if($y % 2 != 0){
        $resultado = $resultado + $y;
    }
    
    $y++;
}

echo $resultado."\n";
?>

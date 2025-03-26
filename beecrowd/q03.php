<?php 
$x = readline();
$y = readline();

if($x > $y){
    $aux = $x;
    $x = $y;
    $y = $aux;
}

for ($i = $x + 1; $i < $y; $i++) {
    if ($i % 5 == 2 || $i % 5 == 3) {
        echo $i . "\n";
    }
}
?>
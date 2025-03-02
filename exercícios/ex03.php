<?php 
// Questão 3
$n = 12;
$h = 174;

$alturas_minimas = [100, 120, 130, 140, 150, 160, 170, 180, 190, 200, 110, 115];

$brinquedos_disponiveis = 0;
foreach ($alturas_minimas as $altura_minima) {
    if ($h >= $altura_minima) {
        $brinquedos_disponiveis++;
    }
}

echo $brinquedos_disponiveis;
?>




<?php 
$N = readline();

if ($N < 0 || $N > 1000000) {
    echo "Valor inválido";
}

$notas = [100, 50, 20, 10, 5, 2, 1];

echo $N . "\n";

foreach ($notas as $nota) {
    $quantidade = intdiv($N, $nota);
    echo "$quantidade nota(s) de R$ $nota,00\n";
    $N %= $nota;
}
?>
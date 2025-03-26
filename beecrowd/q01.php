<?php
/*
------------------------------------------------------1013------------------------------------------------

Faça um programa que leia três valores e apresente o maior dos três valores lidos seguido da mensagem “eh o maior”. Utilize a fórmula:

Obs.: a fórmula apenas calcula o maior entre os dois primeiros (a e b). Um segundo passo, portanto é necessário para chegar no resultado esperado.

Entrada
O arquivo de entrada contém três valores inteiros.

Saída
Imprima o maior dos três valores seguido por um espaço e a mensagem "eh o maior".*/

/*Questão aceita pelo beecrowd: 
<?php
    fscanf(STDIN, "%d %d %d", $a, $b, $c);

    function maior($x, $y) {
        return ($x + $y + abs($x - $y)) / 2;
    }

    $maiorAB = maior($a, $b);
    $maiorFinal = maior($maiorAB, $c);

    echo $maiorFinal . " " . "eh o maior\n";
?>*/ 

// Minha resolução:
$a = 7;
$b = 14;
$c = 106;

$maiorAB = ($a + $b + abs($a-$b)) / 2;
$maior = ($maiorAB + $c + abs($maiorAB-$c))/2;

echo $maior ." ". "eh o maior"
?>


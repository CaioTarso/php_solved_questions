<?php 

while(true) {
    $valores = explode(" ", readline());
    $h1 = $valores[0];
    $m1 = $valores[1];
    $h2 = $valores[2];
    $m2 = $valores[3];


if ($h1 == 0 && $m1 == 0 && $h2 == 0 && $m2 == 0) {
    break;
}

$minutos_atual = $h1 * 60 + $m1;
$minutos_alarme = $h2 * 60 + $m2;


if ($minutos_alarme >= $minutos_atual) {
    $tempo_sono = $minutos_alarme - $minutos_atual;
} else {
    $tempo_sono = (24 * 60) - $minutos_atual + $minutos_alarme;
}

echo $tempo_sono . "\n";
}

/*Código aceito pelo GPT:
<?php

while (true) {
    // Lê a entrada e remove espaços extras
    $linha = trim(fgets(STDIN));
    
    // Se a linha for "0 0 0 0", finaliza o programa
    if ($linha == "0 0 0 0") {
        break;
    }

    // Divide os valores da linha em um array
    list($h1, $m1, $h2, $m2) = array_map('intval', explode(" ", $linha));

    // Converte as horas e minutos para minutos totais do dia
    $min_atual = $h1 * 60 + $m1;
    $min_alarme = $h2 * 60 + $m2;

    // Calcula a diferença de tempo entre os dois horários
    if ($min_alarme >= $min_atual) {
        $tempo_sono = $min_alarme - $min_atual;
    } else {
        $tempo_sono = (24 * 60 - $min_atual) + $min_alarme;
    }

    // Exibe o resultado corretamente
    echo "$tempo_sono\n";
}

?>


*/
?>
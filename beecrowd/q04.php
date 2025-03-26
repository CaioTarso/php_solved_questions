<?php 
// meu código
/*while(true) {
    $M = readline();
    $N = readline();


if($M <= 0 || $N <= 0){
    break;
}

if($M > $N){
    $aux = $M;
    $M = $N;
    $N = $aux;
}

$sum = 0;

for($i = $M; $i <= $N; $i++){
    echo $i . " ";
    $sum = $sum + $i;
}

echo "Sum=" . $sum . "\n";

}
*/


// código aceito pelo beecrowd
/*while (true) {
    // Lendo os valores M e N
    $entrada = trim(fgets(STDIN));
    $valores = explode(" ", $entrada);

    // Convertendo para inteiros
    $M = intval($valores[0]);
    $N = intval($valores[1]);

    // Se algum dos valores for menor ou igual a zero, encerramos o loop
    if ($M <= 0 || $N <= 0) {
        break;
    }

    // Definindo o menor e o maior valor
    $menor = min($M, $N);
    $maior = max($M, $N);

    $soma = 0;
    $sequencia = "";

    // Iterando de menor até maior
    for ($i = $menor; $i <= $maior; $i++) {
        $sequencia .= $i . " ";
        $soma += $i;
    }

    // Imprimindo a sequência e a soma no formato correto
    echo trim($sequencia) . " Sum=$soma\n";
}
*/

// qual foi o erro? O input! eu estava os fazendo separadamente, mas o correto era fazer em uma linha só, separando por espaço

// Melhoria no meu código:
while(true) {
    $valores = explode(" ", readline());
    $M = intval($valores[0]);
    $N = intval($valores[1]);


if($M <= 0 || $N <= 0){
    break;
}

if($M > $N){
    $aux = $M;
    $M = $N;
    $N = $aux;
}

$sum = 0;

for($i = $M; $i <= $N; $i++){
    echo $i . " ";
    $sum = $sum + $i;
}

echo "Sum=" . $sum . "\n";

}

?>
<?php 
// Questão 2
$n = 3;
$m = [
    [1, 15, 37],
    [42, 8, 25],
    [77, 2, 1]
];

// Função para gerar todas as permutações de um array
function permute($items, $perms = [], &$result = []) {
    if (empty($items)) {
        $result[] = $perms;
    } else {
        for ($i = 0; $i < count($items); $i++) {
            $newitems = $items;
            $newperms = $perms;
            list($foo) = array_splice($newitems, $i, 1);
            array_unshift($newperms, $foo);
            permute($newitems, $newperms, $result);
        }
    }
    return $result;
}

// Gerar todas as permutações das posições
$positions = range(0, $n - 1);
$permutations = permute($positions);

// Encontrar a permutação que maximiza a confiança total
$max_confidence = 0;
$best_permutation = [];

foreach ($permutations as $permutation) {
    $confidence = 0;
    for ($i = 0; $i < $n; $i++) {
        $confidence += $m[$i][$permutation[$i]];
    }
    if ($confidence > $max_confidence) {
        $max_confidence = $confidence;
        $best_permutation = $permutation;
    }
}

// Imprimir a melhor permutação (convertendo para 1-based index)
foreach ($best_permutation as $position) {
    echo ($position + 1) . " ";
}
?>
<?php 
// Questão 4
function teleferico($c, $a){
    $viagens = ceil($a / ($c - 1));
    return $viagens;
}
 echo teleferico(12, 55);
?>
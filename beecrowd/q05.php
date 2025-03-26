<?php 

while($Linha = readline()) {
    $L = intval($Linha);
    $V = explode(" ", readline());

    $maior = max($V);

    if($maior < 10){
        echo "1\n";
    }elseif($maior >= 10 && $maior < 20){
        echo "2\n";
    }else{
        echo "3\n";
    }  
}

?>
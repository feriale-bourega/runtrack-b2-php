<?php

// Dans le dossier job-07, faites un fichier index.php. À l’intérieur de ce fichier index.php,
// faites une fonction my_clossest_to_zero(). Cette fonction doit permettre de récupérer le
// nombre le plus proche de 0 parmi une liste de nombre. Ces nombres sont des entiers
// positifs ou négatifs.

function my_clossest_to_zero(array $array) :int {
    $closestValue = $array[0];
    foreach ($array as $key => $value) {
        if($value < 0){
            if(-$closestValue < -$value){
                $closestValue = -$value;
                var_dump($closestValue,'hh');
            }
        }
        elseif($value > 0 ){
            if($closestValue > $value){
                $closestValue = $value;
                var_dump($closestValue,'cc');
            }
        }
        
    }
    var_dump($closestValue);
    return $closestValue;
}

// Pièges: 

my_clossest_to_zero([11,4,6,-4,-3,2,-1]);



?>
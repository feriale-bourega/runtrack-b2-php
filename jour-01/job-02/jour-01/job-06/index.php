<?php

// Dans le dossier job-06, faites un fichier index.php. À l’intérieur de ce fichier index.php,
// faites une fonction my_array_sort(). Cette fonction permettra de trier un tableau. Ce tri
// doit être possible dans l’ordre croissant ou décroissant. Le deuxième paramètre de
// cette fonction ne peut prendre que deux valeurs : “ASC” ou “DESC”.
// Voici la signature de la fonction, veillez à la respecter :

function my_array_sort(array $arrayToSort, string $order)  {
    $sortedArray = [];
    $currentValue = 0;
    $currentKey = 0;
    $arrayCopy = $arrayToSort;

    foreach ($arrayToSort as $key => $value) {
        
        if ($order === 'ASC') {
            $currentValue = PHP_INT_MAX; // cheatcode
            $currentKey = null;
            foreach ($arrayCopy as $i => $arrayValue) {
                if ($arrayValue < $currentValue) {
                    $currentValue = $arrayValue;
                    $currentKey = $i;
                }
            }
                unset($arrayCopy[$currentKey]);
                $sortedArray[] = $currentValue;
            }
        elseif ($order === 'DESC') {
            $currentValue = 0;
            $currentKey = null;
            foreach ($arrayCopy as $i => $arrayValue) {
                if ($currentValue < $arrayValue) {
                    $currentValue = $arrayValue;
                    $currentKey = $i;
                }
            }
                unset($arrayCopy[$currentKey]);
                $sortedArray[] = $currentValue;
            }
        }
        var_dump($sortedArray);
}
my_array_sort([4,6,2,8,7],'ASC');
my_array_sort([4,11,19,6,2,8,7],'DESC');

// Pièges: 



?>
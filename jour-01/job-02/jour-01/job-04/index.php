<?php

// Dans le dossier job-04, faites un fichier index.php. À l’intérieur de ce fichier index.php,
// faites une fonction my_fizz_buzz(). Cette fonction retournera un tableau de la longueur
// entrée en paramètre, avec une structure donnée. Le tableau retourné devra suivre les
// règles suivantes :

// - Des entiers dans l’ordre croissant, allant de 1 à la longueur du tableau
// - Si la valeur est un multiple de 3, elle est remplacée par Fizz
// - Si la valeur est un multiple de 5, elle est remplacée par Buzz
// - Si c’est un multiple de 3 et 5, elle est remplacée par FizzBuzz
// Voici la signature de la fonction, veillez à la respecter :

function my_fizz_buzz(int $length) :array {
    $array = [];
    for ($i=1; $i < $length; $i++) { 

        if($i % 3 === 0 && $i % 5 === 0)
            $array[] = 'FizzBuzz';
        elseif($i % 3 === 0)
            $array[] = 'Fizz';
        elseif($i % 5 === 0)
            $array[] = 'Buzz';
        else 
            $array[] = $i;
        
            
        }
        var_dump($array,'ccccc');
    return $array;
}
my_fizz_buzz(25);

// Pièges: 
// Créer un tableau et stocker tous les nombres,  
// Le if qui est expliqué en dernier mais qui est ulilisé en


?>
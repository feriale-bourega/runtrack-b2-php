<?php 
// Dans le dossier job-05, faites un fichier index.php. À l’intérieur de ce fichier index.php,
// faites une fonction my_is_prime(). Cette fonction permettra de déterminer si un nombre
// est premier. Pour rappel, un nombre premier est un nombre divisible uniquement par
// lui-même. On dit qu'un entier a est divisible par un entier b s'il existe un entier k tel que a
// = bk.
// Voici la signature de la fonction, veillez à la respecter :
//erreur sujet c pas boolean mais bool
function my_is_prime(int $number) :bool {
    $bool = true;
    for ($i=3; $i < $number ; $i++) {
        if($number != $i) {
            if($number % $i === 0 )
                $bool = false;
            
        }
    }
    var_dump($bool);
    return $bool;
    
}

my_is_prime(89)

?>
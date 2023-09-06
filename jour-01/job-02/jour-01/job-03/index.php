<?php

// Dans le dossier job-03, faites un fichier index.php. À l’intérieur de ce fichier index.php,
// ajouter une fonction my_is_multiple(). Cette fonction permettra de déterminer si un
// nombre est un multiple d’un autre.
// Voici la signature de la fonction, veillez à la respecter :

function my_is_multiple(int $divider, int $multiple) :bool {
    if($multiple % $divider === 0)
        return true;
    else 
        return false;
}

// Pièges: 
// Modulo 

my_is_multiple(2, 6);

my_is_multiple(3, 7);




?>
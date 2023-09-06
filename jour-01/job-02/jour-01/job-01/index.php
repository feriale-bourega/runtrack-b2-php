<!-- 
Dans le dossier job-01, faites un fichier index.php. À l’intérieur 
de ce fichier index.php, ajouter une fonction my_str_search().
Cette fonction permettra de compter le nombre d’occurrences d’une
lettre dans une chaîne de caractères.
Voici la signature de la fonction, veillez à la respecter : 
Elle prendra en premier paramètre la lettre à chercher dans la chaine
de caractère, et en deuxième paramètre la chaine de caractères dans
laquelle chercher. Cette fonction retourne un entier, le nombre
d’occurrences de la lettre. -->
<?php

function my_str_search(string $needle, string $haystack){
    $occurence = 0;
    for ($i=0; $i < strlen($haystack) ; $i++) { 
        if($haystack[$i] === $needle)
            $occurence += 1;
    }
    echo $occurence. 'CC';
    return $occurence;
}


my_str_search('c','coucou');

?>
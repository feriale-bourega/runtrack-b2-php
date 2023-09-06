<?php
// Dans le dossier job-02, faites un fichier index.php. 
// À l’intérieur de ce fichier index.php, ajouter une fonction my_str_reverse().
// Cette fonction permettra d’inverser l’ordre des 
// lettres d’une chaîne de caractères.
// Voici la signature de la fonction, veillez à la respecter : 
// Elle prendra en premier paramètre la chaine de caractères
// à inverser. Cette fonction retourne la chaînechaine de 
// caractère inversée inversé.

function my_str_reverse(string $string) :string {
    $reversedString = "";
    $length = 0;
    for ($i=0;isset($string[$i]); $i++) { 
        $length++;
    }

    for ($i = $length - 1; $i >= 0; $i--) {
        $reversedString = $reversedString . $string[$i];
    }
    // echo $reversedString;
    return $reversedString;
}
my_str_reverse('anticonstitutionnellement')
?>
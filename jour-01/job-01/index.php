<?php

function my_str_search(string $haystack, string $needle) : int{  
    $occurence = 0;
    for ($i=0; $i < strlen($haystack); $i++){
        if($haystack[$i] === $needle)
        $occurence += 1;
    }
        echo $occurence;
        return $occurence;
    

}
my_str_search( 'La Plateforme', 'a');

?>
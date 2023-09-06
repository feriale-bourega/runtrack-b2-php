<?php

function my_str_reverse(string $string) : string {
    $reversedString = "";
    $lenght = 0;
    for($i=0; isset($string[$i]); $i++){
        $lenght++;
    }

    for($i = $lenght - 1; $i >= 0; $i--){
        $reversedString = $reversedString . $string[$i];
    }
       return $reversedString;

}

my_str_reverse('Hello');
?>
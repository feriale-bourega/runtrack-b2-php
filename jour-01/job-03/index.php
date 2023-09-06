<?php

function my_is_multiple(int $divider, int $multiple) : bool {

    if($multiple % $divider === 0)

    return true;
    else
    return false;

}

my_is_multiple(2, 4);
my_is_multiple(2, 5);
?>
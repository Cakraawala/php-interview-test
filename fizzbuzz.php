<?php
function modul($arr)
{
    if ($arr % 3 == 0 && $arr % 5 == 0) { // jika input habis dibagi 3 dan 5 
        return "fizzbuzz";
    } else if ($arr % 3 == 0) { // jika input habis dibagi 3  
        return "fizz";
    } else if ($arr % 5 == 0) { // jika input habis dibagi 5 
        return "buzz";
    } else {
        return $arr; // jika input tidak habis di bagi 3 dan 5
    }
}

echo modul(15);

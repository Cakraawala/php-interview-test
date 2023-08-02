<?php
function palindrome($arr) // 
{
    $array = str_split($arr);
    $count = count($array);
    for ($i = $count - 1; $i >= 0; $i--) {
        $hasil[] = $array[$i];
    }
    $reverse = implode('', $hasil);
    if ($reverse === $arr) {
        return "true";
    } else {
        return "false";
    }
}
echo palindrome("kasur rusak"); // contoh lain (civic,noon,level, kasur ini rusak)
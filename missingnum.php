<?php
function missingnum($arr)
{
    $max = max($arr);
    $min = min($arr);
    $sum = ($max * ($max + 1) / 2);
    if ($min < 0) { // cek apakah nilai ada yang dibawah 0
        $mins = [];
        for ($i = $min; $i <= 0; $i++) {
            $mins[] = $i;
        }
        $hasilmin = array_sum($mins);
        $hasil1 = $hasilmin + $sum;
        $arraysum = array_sum($arr);
        $hasil =  $hasil1 - $arraysum;
        return $hasil;
    } else { // jika nilai tidak ada yang dibawah 0
        $arraysum = array_sum($arr);
        $hasil =  $sum - $arraysum;
        return $hasil;
    }
}
$array1 = [0, 1, 2, 3, 4, 5, 6, 7, 9, 10]; // hasil = 8
$array2 = [-4, -2, -1, -3, -7, -5, 0, 1, 3, 2, 5, 4, 6]; // hasil = -6 karna -6 tidak ada
$array3 = [-3, -1, 0]; // hasil = -2
echo missingnum($array1);
echo missingnum($array2);
echo missingnum($array3);

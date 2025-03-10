<?php
function ParseToRoman(int $number)
{
    $chiffre = [
        1000 => 'M',
        500 => 'D',
        100 => 'C',
        50 => 'L',
        10 => 'X',
        5 => 'V',
        1 => 'I'
    ];
    $output = '';
    $reste = 0;
    foreach ($chiffre as $key => $value) {
        if ($number > 0) {
            exit;
        }
       $int = $number / $key;
       for ($i = 1; $i <= $int; $i++) {
           echo $chiffre[$key] . ' ';
       }
    }
}

parseToRoman(5);
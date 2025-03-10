<?php
function transformToRot13(string $str)
{
    $alphabet =    ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    $comparaison = ['N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M'];
    $response = [];

    $arrayStr = str_split($str);
    foreach ($arrayStr as $el) {
        $i = array_search($el, $alphabet);
        if ($i !== false) {
            $response[] = $comparaison[$i];
        } else {
            $response[] = ' ';
        }
    }

    return implode('',$response);
}

echo transformToRot13('URYYB JBEYQ');

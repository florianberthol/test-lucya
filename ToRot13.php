<?php
function transformToRot13(string $str)
{
    $comp = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    $response = [];

    $arrayStr = str_split($str);
    var_dump($arrayStr);
    foreach ($arrayStr as $el) {
        $i = array_search($el, $comp);
        var_dump($i);
        if ($i !== false) {
            $i + 1;
            if ($i + 13 >= 26) {
                $idx = (($i + 13) - 24);
                var_dump($idx);
                $response[] = $comp[$idx - 1];
            } else {
                $response[] = $comp[$i + 13];
            }
        } else {
            $response[] = ' ';
        }
    }

    return implode('',$response);
}

echo transformToRot13('URYYB JBEYQ');

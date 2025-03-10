<?php
function ParseToRoman(int $number , string $romanString = ''): string
{
    $chiffresRomain = [
        1000 => 'M',
        900 => 'CM',
        500 => 'D',
        400 => 'CD',
        100 => 'C',
        90 => 'XC',
        50 => 'L',
        40 => 'XL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV',
        1 => 'I'
    ];


    foreach ($chiffresRomain as $key => $value) {
        if ($number >= $key) {
            $int = $number / $key;
            for ($i = 1; $i <= $int; $i++) {
                    $romanString .= $value;
                }

            $reste = $number % $key;
            if ($reste >= 0) {
                return ParseToRoman($reste, $romanString);
            }
        }
    }
    return $romanString;
}

echo parseToRoman(1)    . '             ';
echo parseToRoman(4)    . '             ';
echo parseToRoman(8)    . '             ';
echo parseToRoman(28)   . '             ';
echo parseToRoman(1904) . '             ';
echo parseToRoman(494)  . '             ';
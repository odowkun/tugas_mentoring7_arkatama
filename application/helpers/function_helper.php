<?php

function isPrimeNumber($number){
    $hasil = true;
    for($i=2;$i<$number; $i++){
        if ($number % $i == 0){
			$hasil = false;
		}
    }
	return $hasil;
}

function intToRomawi($number) {
    $val = array(
        1000, 900, 500, 400,
        100, 90, 50, 40,
        10, 9, 5, 4, 1
    );
    $syb = array(
        "M", "CM", "D", "CD",
        "C", "XC", "L", "XL",
        "X", "IX", "V", "IV",
        "I"
    );
    $hasil = '';
    $i = 0;
    while ($number > 0) {
        $div = (int)($number / $val[$i]);
        for ($j = 0; $j < $div; $j++) {
            $hasil .= $syb[$i];
            $number -= $val[$i];
        }
        $i++;
    }
    return $hasil;
}

function romawiToInt($romawi) {
    $romanNumerals = array(
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000
    );

    $number = 0;
    $prevValue = 0;

    for ($i = strlen($romawi) - 1; $i >= 0; $i--) {
        $currentValue = $romanNumerals[$romawi[$i]];
        if ($currentValue < $prevValue) {
            $number -= $currentValue;
        } else {
            $number += $currentValue;
        }
        $prevValue = $currentValue;
    }

    return $number;
}

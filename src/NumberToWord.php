<?php

class NumberToWord
{
    function wordCalculator($input_number)
    {
        $single_digits = array(0 =>"",
        1 => "one",
        2 => "two",
        3 => "three",
        4 => "four",
        5 => "five",
        6 => "six",
        7 => "seven",
        8 => "eight",
        9 => "nine",
        10 => "ten",
        11 => "eleven",
        12 => "twelve",
        13 => "thirteen",
        14 => "fourteen",
        15 => "fifteen",
        16 => "sixteen",
        17 => "seventeen",
        18 => "eighteen",
        19 => "nineteen",
        20 => "twenty",
        30 => "thirty",
        40 => "forty",
        50 => "fifty",
        60 => "sixty",
        70 => "seventy",
        80 => "eighty",
        90 => "ninety",
         );

        $result = '';
        $tens = floor($input_number / 10) * 10;
        $units = $input_number % 10;
        $hundredUnits = $input_number % 100;
        $thousandUnits = floor($input_number / 1000);
        $hundreds = floor($input_number / 100) * 100;

        if ($input_number < 21) {
            $result = $single_digits[$input_number];
        } elseif ($input_number < 100 && $units) {
            $result = $single_digits[$tens] . '-' . $single_digits[$units];

        } elseif ($input_number < 100) {
            $result = $single_digits[$tens];

        } elseif ($input_number > 100 && $input_number < 1000 && $hundredUnits) {
            $result = $single_digits[$hundredUnits] . ' hundred' . ' ' .  $single_digits[$tens] . $single_digits[$units];
            echo $result;

        } elseif ($input_number > 100 && $input_number < 1000) {
            $result = $single_digits[$hundredUnits] . ' hundred';

        } elseif ($input_number > 999 && $input_number < 10000){
            $result = $single_digits[$thousandUnits] . ' thousand';

        } elseif ($input_number > 999 && $input_number < 10000 && $thousandUnits || $tens){
            $result = $single_digits[$thousandUnits] . ' thousand' . $single_digits[$units] . ' hundred' . $single_digits[$units];

        }
        return $result;
    }
}
// foreach ($single_digits as $key => $value) {
//     if($input_number == $single_digits[$key]) {
//         array_push($result, $single_digits[$input_number])
//     }
// }
?>

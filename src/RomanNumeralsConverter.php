<?php

class RomanNumeralsConverter
{
    public function convert($number)
    {
        $solution = '';

        if ($number >= 50) {
            $solution .= 'L';
            $number -= 50;
        }

        while ($number >= 10) {
            $solution .= 'X';
            $number -= 10;
        }

        if ($number >= 9) {
            $solution .= 'IX';
            $number -= 9;
        }

        if ($number >= 5) {
            $solution .= 'V';
            $number -= 5;
        }

        if ($number >= 4) {
            $solution .= 'IV';
            $number -= 4;
        }

        $solution .= str_repeat('I', $number);

        return $solution;
    }
}

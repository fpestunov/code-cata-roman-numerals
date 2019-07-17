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

        if ($number >= 5) {
            $solution .= 'V';
            $number -= 5;
        }

        $solution .= str_repeat('I', $number);

        return $solution;
    }
}

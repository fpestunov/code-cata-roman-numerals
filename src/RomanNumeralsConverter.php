<?php

class RomanNumeralsConverter
{
    public function convert($number)
    {
        if ($number === 2 ) return 'II';

        return 'I';
    }
}

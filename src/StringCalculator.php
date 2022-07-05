<?php

namespace JosergDev;

class StringCalculator
{
    public function add(string $intNumbersList): int
    {
        $strNumbersList = explode(',', $intNumbersList);

        $intNumbersList = array_map(
            fn(string $number) => intval($number),
            $strNumbersList
        );

        return array_sum($intNumbersList);
    }
}

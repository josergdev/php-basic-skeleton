<?php

namespace JosergDev;

class StringCalculator
{
    public function add(string $numbers): int
    {
        $separatedStringValues = $this->split($numbers);

        $separatedIntvalues = $this->parseToIntList($separatedStringValues);

        return $this->sum($separatedIntvalues);
    }

    private function split(string $numbers): array
    {
        $separatedByComma = explode(",", $numbers);

        $separatedByNewLine = [];
        foreach ($separatedByComma as $value) {
            $byNewLine = explode("\n", $value);
            $separatedByNewLine = array_merge($separatedByNewLine, $byNewLine);
        }

        return $separatedByNewLine;
    }

    private function parseToIntList(array $numbers): array
    {
        return array_map(
            fn(string $number) => intval($number),
            $numbers
        );
    }

    private function sum(array $numbers): int
    {
        return array_sum($numbers);
    }
}

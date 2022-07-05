<?php

namespace JosergDev;

class StringCalculator
{
    public function add(string $numbers): int
    {
        $separatedStringValues = $this->split($numbers);

        $separatedIntValues = $this->parseToIntList($separatedStringValues);

        return $this->sum($separatedIntValues);
    }

    private function split(string $numbers): array
    {
        $justNumbers = [$numbers];

        $byComma = $this->splitWith(',', $justNumbers);
        $byNewLine = $this->splitWith("\n", $byComma);

        return $byNewLine;
    }

    private function splitWith(string $delimiter, array $values): array
    {
        return array_reduce(
            $values,
            fn(array $carry, string $value) =>
                array_merge(
                    $carry,
                    explode($delimiter, $value)
                ),
            []
        );
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

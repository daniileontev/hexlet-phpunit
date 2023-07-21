<?php

namespace Hexlet\Phpunit\Utils;

// Эта функция переворачивает переданную строку
function reverseString(string $string): string
{
    return implode(array_reverse(str_split($string)));
}

//принимает два массива, исключает из первого те значения, которые содержатся во втором и возвращает новый массив
function without(array $collection, array $values = []): array
{
    return array_values(array_diff($collection, $values));
}

//возвращает true в том случае, если $value > $other, и false в иных случаях.
function gt(int $num1, int $num2): bool
{
    return $num1 > $num2;
}



<?php

namespace Hexlet\Phpunit\Tests;

use PHPUnit\Framework\TestCase;

use function Hexlet\Phpunit\Utils\reverseString;
use function Hexlet\Phpunit\Utils\without;
use function Hexlet\Phpunit\Utils\gt;

// класс UtilsTest наследует класс TestCase
// имя класса совпадает с именем файла
class UtilsTest extends TestCase
{
    // Метод, функция определенная внутри класса
    // Должна начинаться со слова test
    // public – чтобы PHPUnit мог вызвать этот тест снаружи
    public function testReverse(): void
    {
        // Сначала идет ожидаемое значение (expected)
        // И только потом актуальное (actual)
        $this->assertEquals('', reverseString(''));
        $this->assertEquals('olleh', reverseString('hello'));
    }

    public function testWithout(): void
    {

        $this -> assertEquals([3], without([2, 1, 2, 3], [1, 2]));
        $this -> assertEquals([], without([]));
    }

    public function testGt(): void
    {
        $this -> assertEquals(true, gt(3, 1));
        $this -> assertEquals(false, gt(3, 3));
        $this -> assertEquals(false, gt(1, 3));
    }
}

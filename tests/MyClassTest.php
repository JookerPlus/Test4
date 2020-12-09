<?php

use PHPUnit\Framework\TestCase;

class MyClassTest extends TestCase
{
    public function testReverseCharacters()
    {
        $this->assertEquals('iH, moM! erA uoy lla thgir?', MyClass::reverseCharacters('Hi, Mom! Are you all right?'));
    }
}
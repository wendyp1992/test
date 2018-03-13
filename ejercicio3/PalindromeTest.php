<?php

use PHPUnit\Framework\TestCase;
use Palindrome;

final class PalindromeTest extends TestCase{
    
    public function testpalindromo(){
        $prueba = new Palindrome();
        $this->assertEquals(0, $prueba->isPalindrome("Deleveled"));
    }
}
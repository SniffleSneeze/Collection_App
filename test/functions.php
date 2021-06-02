<?php
require "../functions.php";

use PHPUnit\Framework\TestCase;

class functions extends TestCase
{
    public function testextractData()
    {

        $result = extractData();

        $this->assertIsString($result);
    }
}
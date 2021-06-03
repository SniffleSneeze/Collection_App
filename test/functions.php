<?php
require "../functions.php";

use PHPUnit\Framework\TestCase;

class functions extends TestCase
{
    public function testextractDataAndDisplaySuccess()
    {
        $input_success = [
            [
                'painting_title' => 'string',
                'name' => 'string',
                'type' => 'string',
                'description' => 'string',
                'image' => 'string'
            ]
        ];
        $expected_success = '<section class="container-box"><div class="sub-box"><img src="img/string" alt="string">'
                            . '<h2 class="title">string</h2>'
                            . '<h4 class="artist">Artist: string</h4><h5 class="type">Type: string</h5>'
                            . '<p class="descripton">Description: </p><p>string</p></div></section>';

        $result_success = extractDataAndDisplay($input_success);
        $this->assertEquals($expected_success, $result_success);
    }

    public function testextractDataAndDisplayFail()
    {
        $input_fail = [];
        $expected_fail = '<section class="container-box"></section>';
        $result_fail = extractDataAndDisplay($input_fail);
        $this->assertEquals($expected_fail, $result_fail);
    }

    public function testextractDataAndDisplayMalformed()
    {
        $input_malform = "";
        $this->expectException(TypeError::class);
        extractDataAndDisplay($input_malform);
    }

    public function testisFormCorrectSuccess()
    {
        $input1 = 'string';
        $input2 = '1';
        $input3 = 'string';
        $input4 = 'string';
        $expected_success = '';
        $result_success = isFormCorrect($input1, $input2, $input3, $input4);
        $this->assertEquals($expected_success, $result_success);
    }

    public function testisFormCorrectFail()
    {
        $input1 = '';
        $input2 = '0';
        $input3 = '';
        $input4 = '';
        $expected_fail = '<div class="message">' . 'Please make sure to fill all the field in the form. Thanks you' . '</div>';
        $result_fail = isFormCorrect($input1, $input2, $input3, $input4);
        $this->assertEquals($expected_fail, $result_fail);
    }

    public function testisFormCorrectMalformed()
    {
        $input_malformed = 1;
        $this->expectException(TypeError::class);
        extractDataAndDisplay($input_malformed);
    }
}
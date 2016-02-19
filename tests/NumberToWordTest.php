<?php

    require_once "src/NumberToWord.php";

    class NumberToWordTest extends PHPUnit_Framework_TestCase
    {
        function test_singleDigit()
        {
            //Arrange
            $test_NumberToWord = new NumberToWord;
            $input_number = 3;

            //Act
            $result = $test_NumberToWord->wordCalculator($input_number);

            //Assert
            $this->assertEquals("three", $result);
        }

        function test_lowDoubleDigit()
        {
            //Arrange
            $test_NumberToWord = new NumberToWord;
            $input_number = 36;

            //Act
            $result = $test_NumberToWord->wordCalculator($input_number);

            //Assert
            $this->assertEquals("thirty-six", $result);
        }

        function test_highDoubleDigit()
        {
            //Arrange
            $test_NumberToWord = new NumberToWord;
            $input_number = 90;

            //Act
            $result = $test_NumberToWord->wordCalculator($input_number);

            //Assert
            $this->assertEquals("ninety", $result);
        }

        function test_TripleDigit()
        {
            //Arrange
            $test_NumberToWord = new NumberToWord;
            $input_number = 935;

            //Act
            $result = $test_NumberToWord->wordCalculator($input_number);

            //Assert
            $this->assertEquals("nine hundred thirty-five", $result);
        }

        function test_teen_TripleDigit()
        {
            //Arrange
            $test_NumberToWord = new NumberToWord;
            $input_number = 915;

            //Act
            $result = $test_NumberToWord->wordCalculator($input_number);

            //Assert
            $this->assertEquals("nine hundred fifteen", $result);
        }

        function test_lowFourDigit()
        {
            //Arrange
            $test_NumberToWord = new NumberToWord;
            $input_number = 3532;

            //Act
            $result = $test_NumberToWord->wordCalculator($input_number);

            //Assert
            $this->assertEquals("three thousand five hundred thirty-two", $result);
        }


    }

?>

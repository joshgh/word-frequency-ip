<?php
    require_once "src/RepeatCounter.php";
    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_countRepeats_noMatch()
        {
            //Arrange
            $newRepeatCounter = new RepeatCounter;
            $inputPhrase = "howdy";
            $inputSearchWord = "hi";
            //Act
            $result = $newRepeatCounter->countRepeats($inputPhrase, $inputSearchWord);
            //Assert
            $this->assertEquals(0, $result);
        }
    }
?>

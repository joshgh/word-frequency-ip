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

        function test_countRepeats_singleWordMatch()
        {
            //Arrange
            $newRepeatCounter = new RepeatCounter;
            $inputPhrase = "hi";
            $inputSearchWord = "hi";
            //Act
            $result = $newRepeatCounter->countRepeats($inputPhrase, $inputSearchWord);
            //Assert
            $this->assertEquals(1, $result);
        }

        function test_countRepeats_multiWordPhrase()
        {
            //Arrange
            $newRepeatCounter = new RepeatCounter;
            $inputPhrase = "hi howdy";
            $inputSearchWord = "hi";
            //Act
            $result = $newRepeatCounter->countRepeats($inputPhrase, $inputSearchWord);
            //Assert
            $this->assertEquals(1, $result);
        }

        function test_countRepeats_multiMatch()
        {
            //Arrange
            $newRepeatCounter = new RepeatCounter;
            $inputPhrase = "hi howdy hi";
            $inputSearchWord = "hi";
            //Act
            $result = $newRepeatCounter->countRepeats($inputPhrase, $inputSearchWord);
            //Assert
            $this->assertEquals(2, $result);
        }
    }
?>

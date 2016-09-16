<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

    //   CASE 1
    //   function test_letter()
    //   {
    //       //Arrange
    //       $test_RepeatCounter = new RepeatCounter;
    //       $input1 = "I";
    //       $input2 = "I";
      //
    //       //Act
    //       $result =  $test_RepeatCounter->countRepeats($input1, $input2);
      //
    //       //Assert
    //       $this->assertEquals(1, $result);
    //   }
    //   function test_multi_words()
    //   {
    //       //Arrange
    //       $test_RepeatCounter = new RepeatCounter;
    //       $input1 = "I";
    //       $input2 = "I am Evan";
      //
    //       //Act
    //       $result =  $test_RepeatCounter->countRepeats($input1, $input2);
    //       //
    //       //Assert
    //       $this->assertEquals(1, $result);
    //   }
    //   function test_word_against_words()
    //   {
    //       //Arrange
    //       $test_RepeatCounter = new RepeatCounter;
    //       $input1 = "Evan";
    //       $input2 = "I am Evan";
      //
    //       //Act
    //       $result =  $test_RepeatCounter->countRepeats($input1, $input2);
    //       //
    //       //Assert
    //       $this->assertEquals(1, $result);
    //   }
    //   function test_word_for_multi_hits()
    //   {
    //       //Arrange
    //       $test_RepeatCounter = new RepeatCounter;
    //       $input1 = "Evan";
    //       $input2 = "Nobody is as Evan as Evan";
      //
    //       //Act
    //       $result =  $test_RepeatCounter->countRepeats($input1, $input2);
    //       //
    //       //Assert
    //       $this->assertEquals(2, $result);
    //   }
      function test_null_input()
      {
          //Arrange
          $test_RepeatCounter = new RepeatCounter;
          $input1 = "";
          $input2 = "String";

          //Act
          $result =  $test_RepeatCounter->countRepeats($input1, $input2);
          //
          //Assert
          $this->assertEquals("Please enter a word to search.", $result);
      }
  }
?>

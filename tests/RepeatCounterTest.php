<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

    //   CASE 1
      function test_letter()
      {
          //Arrange
          $test_RepeatCounter = new RepeatCounter;
          $input1 = "I";
          $input2 = "I";

          //Act
          $result =  $test_RepeatCounter->countRepeats($input1, $input2);

          //Assert
          $this->assertEquals(1, $result);
      }
  }
?>

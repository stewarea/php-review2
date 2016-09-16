<?php

    class RepeatCounter
    {
        function countRepeats($input1, $input2)
        {
            $lowerInput1 = strtolower($input1);
            $lowerInput2 = strtolower($input2);
            $miss = substr_count($lowerInput2, $lowerInput1);
            if ($input1 = "") {
                return "Please enter a word to search.";
            }
            if ($input1 = strstr($input1, " ")) {
                return "Please enter only one word.";
            }
            elseif ($input2 = "") {
                return "Please enter a sentence.";
            }
            elseif ($lowerInput1 == $lowerInput2) {
                return "1";
            }
            elseif ($lowerInput1 != $lowerInput2) {
                return $miss;
            }
            else {
                return "Please Enter a word";
            }



        }


    }

 ?>

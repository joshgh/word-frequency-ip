<?php
    class RepeatCounter{
        function countRepeats($phrase, $searchWord)
        {
            if ($phrase == $searchWord) {
                return 1;
            } else {
                return 0;
            }    
        }
    }
?>

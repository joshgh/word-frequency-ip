<?php
    class RepeatCounter{
        function countRepeats($phrase, $searchWord)
        {
            $phraseArray = explode(" ", $phrase);
            foreach ($phraseArray as $word) {
                if ($word == $searchWord) {
                    return 1;
                }
            }
            return 0;
        }
    }
?>

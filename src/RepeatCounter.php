<?php
    class RepeatCounter
    {
        function countRepeats($phrase, $searchWord)
        {
            $count = 0;
            $phraseArray = explode(" ", $phrase);
            foreach ($phraseArray as $word) {
                if (strtolower($word) == strtolower($searchWord)) {
                    $count++;
                }
            }
            return $count;
        }
    }
?>

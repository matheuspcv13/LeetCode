<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $index = 0;

        for ($i = 0; $i < count($nums); $i++)
        {
            if ($nums[$i] != $nums[$i - 1])
            {
                $nums[$index] = $nums[$i];
                $index++;
            }
        }
        
        return $index;
    }
}

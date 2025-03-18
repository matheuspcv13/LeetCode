<?php
class Solution {

    /**
     * @param Integer[][] $accounts
     * @return Integer
     */
    function maximumWealth($accounts) {
        $wealth = 0;

        foreach($accounts as $account) {
            $wealthTemp = 0;
            foreach($account as $money) {
                $wealthTemp += $money;
            }

            if($wealthTemp > $wealth) {
                $wealth = $wealthTemp;
            }
        }

        return $wealth;
    }
}

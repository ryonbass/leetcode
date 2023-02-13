class Solution {

    /**
     * @param Integer $low
     * @param Integer $high
     * @return Integer
     */
    function countOdds($low, $high) {
        if($low===$high && $low%2===0){
            return 0;
        }
        if($low===$high && $low%2===1){
            return 1;
        }
        if($low%2===0 && $high%2===0){
            $ans = ($high - $low) / 2;
            return $ans;
        }
        if($low%2===1 && $high%2===1){
            $ans = ($high - $low) / 2 + 1;
            return $ans;
        }
        $ans = ($high - $low + 1) / 2;
        return $ans;
    }
}
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum($nums) {
        $cnt = count($nums);
        for($i=0;$i<$cnt;$i++){
            $add += $nums[$i];
            $sumValue[] = $add;
        }
        return $sumValue;
    }
}
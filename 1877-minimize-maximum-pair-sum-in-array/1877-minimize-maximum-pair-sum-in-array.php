class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minPairSum($nums) {
        $cnt = count($nums) / 2;
        sort($nums);
        $rev = array_reverse($nums);
        for($i=0;$i<$cnt;$i++){
            $sum[] = $nums[$i] + $rev[$i];
        }
        sort($sum);
        return end($sum);
    }
}
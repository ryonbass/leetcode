class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function countKDifference($nums, $k) {
        $cnt = count($nums);
        $pairs = 0;
        for($i=0;$i<$cnt;$i++){
            for($j=$i+1;$j<$cnt;$j++){
                if(abs($nums[$i] - $nums[$j])===$k){
                    $pairs++;
                }
             }
        }
        return $pairs;
    }
}
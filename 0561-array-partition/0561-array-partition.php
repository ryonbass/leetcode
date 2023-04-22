class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function arrayPairSum($nums) {
        $sum = 0;
        sort($nums);
        $cnt = count($nums);
        for($i=0;$i<$cnt;$i++){
            if(($i==0)||($i%2==0)){
                $sum += $nums[$i];
            }
        }
        return $sum;
    }
}
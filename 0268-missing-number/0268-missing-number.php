class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function missingNumber($nums) {
        $count = count($nums);
        $sum = array_sum($nums);
        for($i=1;$i<=$count;$i++){
            $maxSum += $i; 
        }
        return $maxSum - $sum;
    }
}
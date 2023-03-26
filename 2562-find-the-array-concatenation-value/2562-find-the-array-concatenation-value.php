class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findTheArrayConcVal($nums) {
        while(count($nums)>0){
            $left = $right = "";
            $left = array_shift($nums);
            $right = array_pop($nums);
            $val = isset($right) ? $left . $right : $left;
            $sum += (int)$val;
        }
        return $sum;
    }
}
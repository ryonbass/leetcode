class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMin($nums) {
        // sort($nums);
        // return $nums[0];
        // or
        
        while($nums[0]<$nums[1]){
            $top = array_shift($nums);
            $nums[] = $top;
        }
        $top = array_shift($nums);
        $nums[] = $top;
        return $nums[0];
    }
}
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
       $ret = array_count_values($nums);
        return array_search(1,$ret);
        
    }
}
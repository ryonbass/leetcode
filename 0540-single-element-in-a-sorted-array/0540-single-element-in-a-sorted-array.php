class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNonDuplicate($nums) {
        $arr = array_count_values($nums);
        $ans = array_keys($arr,1);
        return $ans[0];
    }
}
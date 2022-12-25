class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNonDuplicate($nums) {
        $arr = array_count_values($nums);
        $ret = array_search(1,$arr);
        return $ret;
    }
}
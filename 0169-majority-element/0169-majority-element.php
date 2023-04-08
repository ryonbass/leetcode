class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $cnt = array_count_values($nums);
        arsort($cnt);
        return array_key_first($cnt);
    }
}
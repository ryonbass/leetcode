class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function thirdMax($nums) {
        $unique = array_unique($nums);
        if(count($unique)<3){
            return max($unique);
        }
        rsort($unique);
        return $unique[2];
    }
}
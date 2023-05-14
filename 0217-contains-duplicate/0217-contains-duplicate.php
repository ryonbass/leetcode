class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        $unique = array_unique($nums);
        if($nums == $unique){
            return false;
        }
        return true;
    }
}
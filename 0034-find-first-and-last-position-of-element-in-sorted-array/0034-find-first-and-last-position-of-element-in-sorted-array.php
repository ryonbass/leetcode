class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function searchRange($nums, $target) {
        $first = array_search($target,$nums);
        $end = array_search($target,array_reverse($nums,true));
        if($first=== false){
            return [-1, -1];
        }
        return [$first,$end];
    }
}
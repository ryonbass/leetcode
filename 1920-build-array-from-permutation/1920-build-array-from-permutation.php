class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function buildArray($nums) {
        $cnt = count($nums);
        for($i=0;$i<$cnt;$i++){
            $ans[] = $nums[$nums[$i]];
        }
        return $ans;
    }
}
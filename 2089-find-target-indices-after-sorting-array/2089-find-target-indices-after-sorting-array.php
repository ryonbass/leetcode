class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function targetIndices($nums, $target) {
        sort($nums);
        $cnt= count($nums);
        $ret = [];
        for($i=0;$i<$cnt;$i++){
            if($nums[$i] === $target){
                $ret[] = $i;
            }
        }
        return $ret;
    }
}
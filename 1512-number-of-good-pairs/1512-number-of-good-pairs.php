class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function numIdenticalPairs($nums) {
        $cnt = count($nums);
        $ret = 0;
        for($i=0;$i<$cnt;$i++){
            for($k=1+$i;$k<=$cnt;$k++){
                if($nums[$i] === $nums[$k]){
                    $ret++;
                }
            }            
        }
        return $ret;
    }
}
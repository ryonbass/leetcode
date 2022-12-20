class Solution {

    /**
     * @param String[] $nums
     * @param String $target
     * @return Integer
     */
    function numOfPairs($nums, $target) {
        $cnt = count($nums);
        $sameCnt = 0;
        for($i=0;$i<$cnt;$i++){
            for($k=0;$k<$cnt;$k++){
                if($k===$i){
                    continue;
                }
                if($nums[$i].$nums[$k]===$target){
                    $sameCnt++;
                }
            }
        }
        return $sameCnt;
    }
}
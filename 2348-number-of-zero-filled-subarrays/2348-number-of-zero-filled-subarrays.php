class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function zeroFilledSubarray($nums) {
        $cnt = count($nums);
        $subArrCnt = 0;
        $ans = 0;
        for($i=0;$i<$cnt;$i++){
            if($nums[$i]===0){
                $subArrCnt++;
                $ans += $subArrCnt;
                continue;
            }
            $subArrCnt = 0;    
        }
        return $ans;
    }
}
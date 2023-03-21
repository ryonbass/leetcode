class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function zeroFilledSubarray($nums) {
        $cnt = count($nums);
        $subArrlen = 0;
        $sum = 0;
        for($i=0;$i<$cnt;$i++){
            if($nums[$i]===0){
                $subArrlen++;
                continue;
            }
            if($subArrlen!==0){
                $subStack[$i] = $subArrlen;
                $subArrlen = 0;
            }       
        }
        if($subArrlen!==0){
            $subStack[$cnt-1] = $subArrlen;
        }  
        foreach($subStack as $v){
            while($v>0){
                $sum += $v;
                $v--;
            }
        }
        return $sum;
    }
}
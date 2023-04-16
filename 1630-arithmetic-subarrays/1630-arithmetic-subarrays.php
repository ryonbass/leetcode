class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer[] $l
     * @param Integer[] $r
     * @return Boolean[]
     */
    function checkArithmeticSubarrays($nums, $l, $r) {
        $cnt = count($l);
        for($i=0;$i<$cnt;$i++){
            $pickarr = array_slice($nums,$l[$i],$r[$i]-$l[$i]+1);
            rsort($pickarr);
            $diffcheck = true;
            
            for($j=0;$j<count($pickarr)-2;$j++){
                $firstdiff = abs($pickarr[0] - $pickarr[1]);
                $diff = abs($pickarr[$j+1] - $pickarr[$j+2]);
                if($firstdiff != $diff){
                    $diffcheck = false;
                    break;
                }  
            }
            if($diffcheck){
                $ret[] = true;
            }else{
                $ret[] = false;
            }
        }
        return $ret;
    }
}
class Solution {

    /**
     * @param Integer[] $forts
     * @return Integer
     */
    function captureForts($forts) {
        if(!in_array(1,$forts) || !in_array(-1,$forts) || !in_array(0,$forts)){
            return 0;
        }    
        $fortrev = array_reverse($forts);
        $startL = $this->capturedFort($forts);
        $startR = $this->capturedFort($fortrev);
        $maximum = $startL > $startR ? $startL : $startR;
        return $maximum;
    }
    
    function capturedFort($forts){
        $cnt = count($forts);
        $capturedFort = 0;
        for($i=0;$i<$cnt;$i++){
            if(!empty($armyPosition) && $forts[$i]===0){
                $invasion += 1;
            }
            if(!empty($armyPosition) && $forts[$i]===-1){
                if($invasion > $capturedFort){
                    $capturedFort = $invasion;
                }
                unset($armyPosition);
                $invasion = 0;
            }
            if($forts[$i]===1){
                $armyPosition = $i+1;
                $invasion = 0;
            }
        }
        return $capturedFort;
    }
}
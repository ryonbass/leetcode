class Solution {

    /**
     * @param Integer[] $capacity
     * @param Integer[] $rocks
     * @param Integer $additionalRocks
     * @return Integer
     */
    function maximumBags($capacity, $rocks, $additionalRocks) {
        $sumcapa = array_sum($capacity);
        $sumrock = array_sum($rocks);
        if($sumcapa <= ($sumrock + $additionalRocks)){
            return count($capacity);
        }
        $cnt = count($capacity);
        $diff = [];
        for($i=0;$i<$cnt;$i++){
            $diff[] = $capacity[$i] - $rocks[$i];
        }
        sort($diff);
        $diffcnt = count($diff);
        $fullbag = 0;
        while($additionalRocks > 0){
            $additionalRocks = $additionalRocks - $diff[$fullbag];
            if($additionalRocks >= 0){
                $fullbag++;
            }
            if($diffcnt===$fullbag){
                return $fullbag;
            }
        }
        return $fullbag;
    }
}
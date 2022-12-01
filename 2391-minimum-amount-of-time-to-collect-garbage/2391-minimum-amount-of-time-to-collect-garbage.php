class Solution {

    /**
     * @param String[] $garbage
     * @param Integer[] $travel
     * @return Integer
     */
    function garbageCollection($garbage, $travel) {
        $time = 0;
        $rev = array_reverse($garbage,true);
        foreach($rev as $k => $v){
            if(!isset($lastVisitHouse_G) && strpos($v,"G")!==false){
                $lastVisitHouse_G = $k;
            }
            if(!isset($lastVisitHouse_P) && strpos($v,"P")!==false){
                $lastVisitHouse_P = $k;
            }
            if(!isset($lastVisitHouse_M) && strpos($v,"M")!==false){
                $lastVisitHouse_M = $k;
            }
            if(isset($lastVisitHouse_G) && isset($lastVisitHouse_P) && isset($lastVisitHouse_M)){
                break;
            }
        }
        if(is_null($lastVisitHouse_G)){
            $lastVisitHouse_G = 0;
        }
        if(is_null($lastVisitHouse_P)){
            $lastVisitHouse_P = 0;
        }
        if(is_null($lastVisitHouse_M)){
            $lastVisitHouse_M = 0;
        }
        $tmp = $travel;
        $travelTime_G = array_sum(array_splice($tmp,0,$lastVisitHouse_G));
        $tmp = $travel;
        $travelTime_P = array_sum(array_splice($tmp,0,$lastVisitHouse_P));
        $tmp = $travel;
        $travelTime_M = array_sum(array_splice($tmp,0,$lastVisitHouse_M));
        
        $totalGarbage = strlen(implode($garbage));
        $totalTime = $totalGarbage + $travelTime_G + $travelTime_P + $travelTime_M;
        return $totalTime;
    }
}
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function firstUniqChar($s) {
        $arr = str_split($s);
        $sCnt = array_count_values($arr);
        $uniqueS = [];
        foreach($sCnt as $k => $v){
            if($v === 1){
                $uniqueS[] = $k;
            }
        }
        if(count($uniqueS) === 0 ){
            return -1;
        }
        $uniqueIdx = [];
        foreach($uniqueS as $key => $u){
            $uniqueIdx[] = array_search($u,$arr);
        }       
        return min($uniqueIdx);
    }
}
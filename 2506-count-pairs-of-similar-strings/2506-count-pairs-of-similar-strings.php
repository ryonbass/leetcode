class Solution {

    /**
     * @param String[] $words
     * @return Integer
     */
    function similarPairs($words) {
        $newWords = [];
        foreach($words as $w){
            $arr = str_split($w,1);
            $unique = array_unique($arr);
            sort($unique,SORT_STRING);
            $uniqueWords = implode($unique);
            $newWords[] = $uniqueWords;
        }
        $same = array_count_values($newWords);
        if(max($same)===1){
            return 0;
        }
        $cnt = count($newWords);
        $matchCnt = 0;
        
        for($i=0;$i<$cnt-1;$i++){
            for($j=$i+1;$j<$cnt;$j++){
                $matchCnt += $newWords[$i] === $newWords[$j] ? 1 : 0;
            }
        }
        return $matchCnt;
    }
}